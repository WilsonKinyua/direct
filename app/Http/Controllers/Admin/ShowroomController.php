<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Events\NewShowroom;
use App\Http\Requests\ShowroomStoreRequest;
use App\Jobs\SyncMedia;
use App\Mail\CreateNewShowroomAdmin;
use App\Models\Showroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $showrooms = Showroom::all();
        return view('admin.showrooms.index', compact('showrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.showrooms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShowroomStoreRequest $request)
    {
        $showroom = Showroom::create($request->all());

        // Mail::to($showroom->admin_email)->send(new CreateNewShowroomAdmin($showroom));

        SyncMedia::dispatch($showroom);

        event(new NewShowroom($showroom));

        // $request->session()->flash('showroom.name', $showroom->name);

        return redirect()->back()->with('success', 'Showroom created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
