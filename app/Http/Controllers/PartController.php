<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartController extends Controller
{
    public function index()
    {
        return view('parts');
    }

    public function addToCart(Request $request)
    {
        // Spracovanie pridania dielu do košíka
        return redirect()->route('parts')->with('success', 'Diel bol pridaný do košíka.');
    }
}
