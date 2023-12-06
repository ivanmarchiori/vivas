<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $canal = 'contact';
       return view('contact-list',['canal'=>$canal]);
    }
    public function list()
    {
       $canal = 'contact List';
       return view('contact-list',['canal'=>$canal]);
    }
    public function grid()
    {
       $canal = 'contact Grid';
       return view('contact-grid',['canal'=>$canal]);
    }
    public function profile()
    {
       $canal = 'Profile';
       return view('contact-profile',['canal'=>$canal]);
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
