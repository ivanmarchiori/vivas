<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($lang)
    {
        // Salvar no banco de dados a preferencia do cliente
        $urlDaPaginaAnterior = URL::previous();
        return redirect()->to($urlDaPaginaAnterior);
    }
}
