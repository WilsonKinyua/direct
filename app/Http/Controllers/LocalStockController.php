<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class LocalStockController extends Controller
{
    public function index()
    {
        $inventories = Inventory::where("is_active", True)->get();
        return view('public.local-stock', compact('inventories'));
    }
}
