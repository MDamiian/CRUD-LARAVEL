<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computers = Computer::latest()->get();
        return view('index', ['computers' => $computers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'serial' => 'required'
        ]);

        Computer::create($request->all());
        return redirect()->route('computers.index')->with('success', 'Computadora agregada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Computer $computer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Computer $computer)
    {
        return view('edit', ['computer' => $computer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Computer $computer): RedirectResponse
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'serial' => 'required'
        ]);

        $computer->update($request->all());
        return redirect()->route('computers.index')->with('success', 'Computadora actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer): RedirectResponse
    {
        $computer->delete();
        return redirect()->route('computers.index')->with('success', 'Computadora eliminada exitosamente');
    }
}
