<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Showroom;
use App\Models\User;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $showrooms = Showroom::limit(4)->get();
        $inventories = Inventory::limit(8)->get();
        return view('public.home', compact('showrooms', 'inventories'));
    }

    public function localStock()
    {
        return view('public.local-stock');
    }


    // register new showroom
    public function registerShowroom(Request $request)
    {
        // check if user exists
        $user = User::where('email', $request->email)->first();
        if ($user) {
            return redirect()->back()->with('error', 'User already exists. Please login to continue');
        } else {
            // create new showroom
            $showroom = new Showroom();
            $showroom->name = $request->name;
            $showroom->email = $request->email;
            $showroom->phone_number = $request->phone_number;
            $showroom->location = $request->location;
            $showroom->admin_name = $request->name;
            $showroom->admin_email = $request->email;
            $showroom->save();
            // create showroom admin account
            $user = User::create([
                'name' => $request->name,
                'email' =>  $request->email,
                'password' => bcrypt($request->password),
                'showroom_id' => $showroom->id,
            ]);
            User::findOrFail($user->id)->roles()->sync(2);
        }
        return redirect()->route('login')->with('message', 'Showroom registered successfully. Please login to continue');
    }
}
