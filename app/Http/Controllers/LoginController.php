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
        return view('login.login', ['canal' => $canal, 'lang' => session('lang')]);
    }
}
