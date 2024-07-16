<?php

namespace App\Http\Controllers;

use App\Models\MbtiResult;
use App\Models\MbtiType;
use App\Models\Question;
use Auth;
use Illuminate\Http\Request;
use PDF;

class MbtiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $questions = Question::with('answers')->get();
        return view('mbti.form', compact('questions'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'answers' => 'required|array',
            'answers.*' => 'required|string|in:E,I,S,N,T,F,J,P',
        ]);

        // Menghitung hasil MBTI
        $counts = [
            'E' => 0, 'I' => 0,
            'S' => 0, 'N' => 0,
            'T' => 0, 'F' => 0,
            'J' => 0, 'P' => 0,
        ];

        foreach ($request->input('answers') as $answer) {
            $counts[$answer]++;
        }

        $result = '';
        $result .= $counts['E'] >= $counts['I'] ? 'E' : 'I';
        $result .= $counts['S'] >= $counts['N'] ? 'S' : 'N';
        $result .= $counts['T'] >= $counts['F'] ? 'T' : 'F';
        $result .= $counts['J'] >= $counts['P'] ? 'J' : 'P';

        // Cari MBTI Type berdasarkan hasil
        $mbtiType = MbtiType::where('type', $result)->first();

        // Simpan hasil ke database
        $mbtiResult = new MbtiResult;
        $mbtiResult->user_id = Auth::user()->id;
        $mbtiResult->mbti_type_id = $mbtiType->id;
        $mbtiResult->kelas_id = Auth::user()->kelas_id;
        $mbtiResult->E = $counts['E'];
        $mbtiResult->I = $counts['I'];
        $mbtiResult->S = $counts['S'];
        $mbtiResult->N = $counts['N'];
        $mbtiResult->T = $counts['T'];
        $mbtiResult->F = $counts['F'];
        $mbtiResult->J = $counts['J'];
        $mbtiResult->P = $counts['P'];
        $mbtiResult->save();

        // Redirect ke halaman hasil
        return redirect()->route('mbti.result', $mbtiResult->id);
    }

    public function show($id)
    {
        $mbtiResult = MbtiResult::with('mbtiType')->findOrFail($id);
        $mbtiType = $mbtiResult->mbtiType;

        // Mengambil counts dari hasil tes MBTI
        $counts = [
            'E' => $mbtiResult->E,
            'I' => $mbtiResult->I,
            'S' => $mbtiResult->S,
            'N' => $mbtiResult->N,
            'T' => $mbtiResult->T,
            'F' => $mbtiResult->F,
            'J' => $mbtiResult->J,
            'P' => $mbtiResult->P,
        ];

        $description = $mbtiType->description;
        $suitable_jobs = $mbtiType->suitable_jobs;
        $suitable_education = $mbtiType->suitable_education;

        return view('mbti.result', compact('mbtiResult', 'description', 'suitable_jobs', 'suitable_education', 'counts'));
    }

    public function downloadPdf($id)
    {
        $mbtiResult = MbtiResult::with('mbtiType')->findOrFail($id);
        $mbtiType = $mbtiResult->mbtiType;

        // Mengambil counts dari hasil tes MBTI
        $counts = [
            'E' => $mbtiResult->E,
            'I' => $mbtiResult->I,
            'S' => $mbtiResult->S,
            'N' => $mbtiResult->N,
            'T' => $mbtiResult->T,
            'F' => $mbtiResult->F,
            'J' => $mbtiResult->J,
            'P' => $mbtiResult->P,
        ];

        $description = $mbtiType->description;
        $suitable_jobs = $mbtiType->suitable_jobs;
        $suitable_education = $mbtiType->suitable_education;

        $pdf = PDF::loadView('mbti.result_pdf', compact('mbtiResult', 'description', 'suitable_jobs', 'suitable_education', 'counts'));
        return $pdf->download('mbti_result.pdf');
    }
}
