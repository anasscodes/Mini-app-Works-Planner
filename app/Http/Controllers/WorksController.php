<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Works;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $works = Works::all();
        return view('works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('works.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'date' => 'required|date',
            'domaine' => 'required|string|max:255',
            'status' => 'required|in:work,dispo',
            'note' => 'nullable|string',
        ]);

        Works::create($validated);

        return redirect()->route('works.index')->with('success', 'Work day added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
           $work = Works::findOrFail($id);
        return view('works.show', compact('work'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $work = Works::findOrFail($id);
        return view('works.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $validated = $request->validate([
        'date' => 'required|date',
        'domaine' => 'required|string|max:255',
        'status' => 'required|in:work,dispo',
        'note' => 'nullable|string',
    ]);

    $work = Works::findOrFail($id);
    $work->update($validated);

    return redirect()->route('works.index')->with('success', 'Work updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $work = Works::findOrFail($id);
            $work->delete();

            return redirect()->route('works.index')->with('success', 'Work deleted successfully!');
    }
}
