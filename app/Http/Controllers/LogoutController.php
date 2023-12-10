<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $canal = 'logout';
        if (session()->missing('lang')) {
            session(['lang' => 'br']);
        }
        return view('logout.logout', ['canal' => $canal, 'lang'=>session('lang')]);
    }

}
