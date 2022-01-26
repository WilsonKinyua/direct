<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('public.home');
    }

    public function localStock()
    {
        return view('public.local-stock');
    }
}
