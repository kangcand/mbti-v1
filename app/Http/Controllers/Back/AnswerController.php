<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $answers = Answer::with('question')->get();
        return view('admin.answer.index', compact('answers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $questions = Question::all();
        return view('admin.answer.create', compact('questions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'text' => 'required',
            'value' => 'required|numeric',
        ]);

        Answer::create($request->all());

        return redirect()->route('answer.index')
            ->with('success', 'Answer created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $answer = Answer::findOrFail($id);
        $questions = Question::all();
        return view('admin.answer.edit', compact('answer', 'questions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'question_id' => 'required|exists:questions,id',
            'text' => 'required',
            'value' => 'required|numeric',
        ]);

        $answer = Answer::findOrFail($id);
        $answer->update($request->all());

        return redirect()->route('answer.index')
            ->with('success', 'Answer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $answer = Answer::findOrFail($id);
        $answer->delete();

        return redirect()->route('answer.index')
            ->with('success', 'Answer deleted successfully.');
    }
}
