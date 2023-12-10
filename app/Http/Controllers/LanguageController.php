<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;


class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($lang)
    {
        $user = Auth::user();
        $user->lang = $lang;
        $user->save();

        session(['lang' => $lang]);

        // Salvar no banco de dados a preferencia do cliente
        $urlDaPaginaAnterior = URL::previous();
        return redirect()->to($urlDaPaginaAnterior);
    }
}
