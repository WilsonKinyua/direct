<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Showroom;
use Illuminate\Http\Request;

class ShowroomDetailsController extends Controller
{

    public function index($slug)
    {
        $showroom = Showroom::where('slug', $slug)->first();
        if (!$showroom) {
            abort(404);
        }
        $inventories = Inventory::where('showroom_id', $showroom->id)->where("is_active", True)->get();

        return view('public.showroom-details', compact('showroom', 'inventories'));
    }
}
