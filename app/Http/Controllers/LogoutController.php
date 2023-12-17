<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

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

        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = "br";
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('logout.logout', ['canal' => $canal, 'lang' => session('lang')]);
    }
}
