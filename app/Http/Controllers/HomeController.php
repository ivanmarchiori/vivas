<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $languageService;


    public function index()
    {
        $canal = 'home';
        return view('home.home', ['canal' => $canal, 'lang'=>session('lang')]);
    }

}
