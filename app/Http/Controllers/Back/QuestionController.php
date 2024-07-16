<?php
namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionType;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Menampilkan daftar pertanyaan.
     */
    public function index()
    {
        $questions = Question::all();
        return view('admin.question.index', compact('questions'));
    }

    /**
     * Menampilkan form untuk membuat pertanyaan baru.
     */
    public function create()
    {
        $questionTypes = QuestionType::all();
        return view('admin.question.create', compact('questionTypes'));
    }

    /**
     * Menyimpan pertanyaan baru ke dalam database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|string',
            'question_type_id' => 'required|exists:question_types,id',
        ]);

        Question::create([
            'text' => $request->text,
            'question_type_id' => $request->question_type_id,
        ]);

        return redirect()->route('questions.index')->with('success', 'Pertanyaan berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail pertanyaan.
     */
    public function show($id)
    {
        $question = Question::findOrFail($id);
        return view('admin.question.show', compact('question'));
    }

    /**
     * Menampilkan form untuk mengedit pertanyaan.
     */
    public function edit($id)
    {
        $question = Question::findOrFail($id);
        $questionTypes = QuestionType::all();
        return view('admin.question.edit', compact('question', 'mbtiTypes'));
    }

    /**
     * Menyimpan perubahan pada pertanyaan yang telah diedit.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required|string',
            'question_type_id' => 'required|exists:question_types,id',
        ]);

        $question = Question::findOrFail($id);
        $question->update([
            'text' => $request->text,
            'question_type_id' => $request->question_type_id,
        ]);

        return redirect()->route('questions.index')->with('success', 'Pertanyaan berhasil diperbarui.');
    }

    /**
     * Menghapus pertanyaan dari database.
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('questions.index')->with('success', 'Pertanyaan berhasil dihapus.');
    }
}
