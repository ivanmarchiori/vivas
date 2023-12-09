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
        if (session()->missing('lang')) {
            session(['lang' => 'br']);
        }
        return view('notes.notes', ['canal' => $canal, 'lang'=>session('lang')]);
    }
    public function read()
    {
        $canal = 'read notes';
        if (session()->missing('lang')) {
            session(['lang' => 'br']);
        }
        return view('notes.notes-read', ['canal' => $canal, 'lang'=>session('lang')]);
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
