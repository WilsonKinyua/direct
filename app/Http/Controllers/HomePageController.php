<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use App\Models\User;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $showrooms = Showroom::limit(4)->get();
        return view('public.home', compact('showrooms'));
    }

    public function localStock()
    {
        return view('public.local-stock');
    }


    // register new showroom
    public function registerShowroom(Request $request)
    {
        // $showroom_name = $request->name;
        // $showroom_email = $request->email;
        // $showroom_phone = $request->phone_number;
        // $showroom_location = $request->location;
        // $showroom_password = $request->password;

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


        return redirect()->route('public.home')->with('success', 'Showroom registered successfully');
    }
}
