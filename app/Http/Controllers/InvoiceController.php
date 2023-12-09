<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $canal = 'invoiced';
        if (session()->missing('lang')) {
            session(['lang' => 'br']);
        }
        return view('invoice.invoice', ['canal' => $canal, 'lang'=>session('lang')]);
    }
    public function details($id)
    {
        $canal = 'invoice details';
        if (session()->missing('lang')) {
            session(['lang' => 'br']);
        }
        return view('invoice.invoice-details', ['canal' => $canal,'id' => $id, 'lang'=>session('lang')]);
    }

}
