<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index()
    {
        $canal = 'notes';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('notes.notes', ['canal' => $canal, 'lang' => session('lang')]);
    }
    public function read()
    {
        $canal = 'read notes';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('notes.notes-read', ['canal' => $canal, 'lang' => session('lang')]);
    }
}
