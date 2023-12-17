<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;


class HomeController extends Controller
{
    public function index()
    {
        $canal = 'home';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }
        session(['lang' => $lang]);
        return view('home.home', ['canal' => $canal, 'lang' => session('lang')]);
    }
}
