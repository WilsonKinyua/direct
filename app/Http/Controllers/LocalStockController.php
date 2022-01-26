<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalStockController extends Controller
{
    public function index()
    {
        return view('public.local-stock');
    }
}
