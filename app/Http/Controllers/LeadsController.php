<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $canal = 'leads';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('leads.leads-list', ['canal' => $canal, 'lang' => session('lang')]);
    }
    public function list()
    {
        $canal = 'Leads List';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('leads.leads-list', ['canal' => $canal, 'lang' => session('lang')]);
    }
    public function details($id)
    {
        $canal = 'Leads List';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('leads.leads-list-details', ['canal' => $canal, 'id' => $id, 'lang' => session('lang')]);
    }
    public function grid()
    {
        $canal = 'Leads Grid';
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = auth()->user()->lang;
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('leads.leads-grid', ['canal' => $canal, 'lang' => session('lang')]);
    }
}
