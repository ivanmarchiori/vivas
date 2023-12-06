<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $canal = 'notes';
        return view('notes', ['canal' => $canal]);
    }
    public function read()
    {
        $canal = 'read notes';
        return view('notes-read', ['canal' => $canal]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
