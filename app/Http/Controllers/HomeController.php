<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $canal = 'home';
        return view('home.home', ['canal' => $canal, 'lang'=>session('lang')]);
    }

}
