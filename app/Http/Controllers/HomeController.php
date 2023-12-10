<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $canal = 'home';
        session(['lang' => auth()->user()->lang]);
        return view('home.home', ['canal' => $canal, 'lang'=>session('lang')]);
    }

}
