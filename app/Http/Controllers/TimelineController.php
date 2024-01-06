<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $canal = 'timeline';

        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('timeline.timeline', ['canal' => $canal, 'lang' => session('lang')]);
    }
}
