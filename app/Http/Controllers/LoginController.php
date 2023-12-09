<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $canal = 'login';
        if (session()->missing('lang')) {
            session(['lang' => 'br']);
        }
        return view('login.login', ['canal' => $canal, 'lang' => session('lang')]);
    }
    public function recoverpw()
    {
        $canal = 'recoverpw';
        if (session()->missing('lang')) {
            session(['lang' => 'br']);
        }
        return view('login.recoverpw', ['canal' => $canal, 'lang' => session('lang')]);
    }
    public function register()
    {
        $canal = 'register';
        if (session()->missing('lang')) {
            session(['lang' => 'br']);
        }
        return view('login.register', ['canal' => $canal, 'lang' => session('lang')]);
    }
}
