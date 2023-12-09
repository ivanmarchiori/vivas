<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $canal = 'home';
        if (session()->missing('lang')) {
            session(['lang' => 'br']);
        }
        return view('home.home', ['canal' => $canal, 'lang'=>session('lang')]);
    }

}
