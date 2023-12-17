<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;


class LanguageController extends Controller
{
    public function index($lang)
    {
        $user = Auth::user();
        $user->lang = $lang;
        $user->save();

        Cookie::queue('lang', $lang, 3);
        session(['lang' => $lang]);

        // Salvar no banco de dados a preferencia do cliente
        $urlDaPaginaAnterior = URL::previous();
        return redirect()->to($urlDaPaginaAnterior);
    }
}
