<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\MbtiType;
use Illuminate\Http\Request;

class MbtiTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mbtiTypes = MbtiType::all();
        return view('admin.mbti_type.index', compact('mbtiTypes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.mbti_type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required|string|max:4|unique:mbti_type,type',
            'description' => 'required|string',
            'suitable_jobs' => 'required|string',
            'suitable_education' => 'required|string',
        ]);

        MbtiType::create($validated);

        return redirect()->route('mbti-types.index')->with('success', 'MBTI Type created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $mbtiType = MbtiType::findOrFail($id);
        return view('admin.mbti_type.show', compact('mbtiType'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mbtiType = MbtiType::findOrFail($id);
        return view('admin.mbti_type.edit', compact('mbtiType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $mbtiType = MbtiType::findOrFail($id);

        $validated = $request->validate([
            'type' => 'required|string|max:4|unique:mbti_type,type,' . $mbtiType->id,
            'description' => 'required|string',
            'suitable_jobs' => 'required|string',
            'suitable_education' => 'required|string',
        ]);

        $mbtiType->update($validated);

        return redirect()->route('mbti-types.index')->with('success', 'MBTI Type updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mbtiType = MbtiType::findOrFail($id);
        $mbtiType->delete();

        return redirect()->route('mbti-types.index')->with('success', 'MBTI Type deleted successfully.');
    }
}
