<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use App\Models\MbtiResult;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;
use PDF;

class ReportController extends Controller
{
    public function index()
    {
        $tahunAjaran = TahunAjaran::all();
        return view('admin.report.index', compact('tahunAjaran'));
    }

    public function getKelasByTahunAjaran($tahunAjaranId)
    {
        $kelas = Kelas::where('tahun_ajaran_id', $tahunAjaranId)->get();
        return response()->json($kelas);
    }

    public function search(Request $request)
    {
        $start = $request->tanggalAwal;
        $end = $request->tanggalAkhir;
        $kelasId = $request->kelas_id;
        $tahunAjaranId = $request->tahun_ajaran_id;

        if ($start > $end) {
            return back()->with('danger', 'Maaf tanggal yang Anda masukan tidak sesuai!');
        } else {
            $query = MbtiResult::whereBetween('created_at', [$start, $end]);

            if ($kelasId) {
                $query->where('kelas_id', $kelasId);
            }

            if ($tahunAjaranId) {
                $query->whereHas('kelas', function ($q) use ($tahunAjaranId) {
                    $q->where('tahun_ajaran_id', $tahunAjaranId);
                });
            }

            $mbti = $query->get();
            $total = $query->count();

            return view('admin.report.mbti_report', compact('mbti', 'total', 'start', 'end'));
        }
    }

    public function printReport(Request $request)
    {
        $start = $request->tanggalAwal;
        $end = $request->tanggalAkhir;
        $kelasId = $request->kelas_id;
        $tahunAjaranId = $request->tahun_ajaran_id;

        if ($start > $end) {
            return back()->with('danger', 'Maaf tanggal yang Anda masukan tidak sesuai!');
        } else {
            $query = MbtiResult::whereBetween('created_at', [$start, $end]);

            if ($kelasId) {
                $query->where('kelas_id', $kelasId);
            }

            if ($tahunAjaranId) {
                $query->whereHas('kelas', function ($q) use ($tahunAjaranId) {
                    $q->where('tahun_ajaran_id', $tahunAjaranId);
                });
            }

            $mbti = $query->get();
            $total = $query->count();

            $pdf = PDF::loadView('admin.report.mbti_pdf', compact('mbti', 'total', 'start', 'end'));
            return $pdf->download('report_mbti.pdf');
        }
    }
}
