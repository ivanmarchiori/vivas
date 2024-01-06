<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;

class SearchController extends Controller
{

    public function index(Request $request)
    {
        $canal = 'search';
        $str = $request->validate([
            'q' => ['required']
        ]);
        if (Cookie::has('lang')) {
            $lang = Cookie::get('lang');
        } else {
            $lang = "br";
            Cookie::queue('lang', $lang, 3);
        }

        session(['lang' => $lang]);
        return view('search.search', ['canal' => $canal, 'lang' => session('lang'), 'param' => $str]);
    }
}
