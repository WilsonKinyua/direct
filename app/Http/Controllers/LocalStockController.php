<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class LocalStockController extends Controller
{
    public function index()
    {
        $inventories = Inventory::all();
        return view('public.local-stock', compact('inventories'));
    }
}
