<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function auth(Request $request)
    {
        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (session()->missing('lang')) {
            session(['lang' => 'br']);
        }
        if (Auth::attempt($credenciais, $request->remember)) {
            $request->session()->regenerate();
            session(['lang' => auth()->user()->lang]);
            return redirect()->intended('/');
        } else {
            return redirect()->back()->with('erro', 'EmailSenha');
        }
    }
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
