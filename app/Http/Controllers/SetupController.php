<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class SetupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function setup()
    {
        $canal = 'setup';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('setup.setup', ['canal' => $canal, 'lang' => session('lang')]);
    }
    public function emails()
    {
        $canal = 'setup';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('setup.emails', ['canal' => $canal, 'lang' => session('lang')]);
    }
    public function goals()
    {
        $canal = 'setup';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('setup.goals', ['canal' => $canal, 'lang' => session('lang')]);
    }
    public function param()
    {
        $canal = 'setup';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('setup.param', ['canal' => $canal, 'lang' => session('lang')]);
    }
    public function products()
    {
        $canal = 'setup';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('setup.products', ['canal' => $canal, 'lang' => session('lang')]);
    }
    public function reasons()
    {
        $canal = 'setup';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('setup.reasons', ['canal' => $canal, 'lang' => session('lang')]);
    }
    public function tags()
    {
        $canal = 'setup';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('setup.tags', ['canal' => $canal, 'lang' => session('lang')]);
    }
    public function users()
    {
        $canal = 'setup';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('setup.users', ['canal' => $canal, 'lang' => session('lang')]);
    }
}

