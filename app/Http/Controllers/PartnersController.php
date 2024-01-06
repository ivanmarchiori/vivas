<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $canal = 'partners';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('partners.partners', ['canal' => $canal, 'lang' => session('lang')]);
    }
}
