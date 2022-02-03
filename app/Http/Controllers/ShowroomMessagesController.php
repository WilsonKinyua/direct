<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShowroomMessagesRequest;
use App\Http\Requests\UpdateShowroomMessagesRequest;
use App\Models\ShowroomMessages;

class ShowroomMessagesController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }

    public function store(StoreShowroomMessagesRequest $request)
    {
        ShowroomMessages::create($request->all());
        return redirect()->back()->with('success', 'Your message has been sent successfully');
    }


    public function show(ShowroomMessages $showroomMessages)
    {
        //
    }


    public function edit(ShowroomMessages $showroomMessages)
    {
        //
    }


    public function update(UpdateShowroomMessagesRequest $request, ShowroomMessages $showroomMessages)
    {
        //
    }


    public function destroy(ShowroomMessages $showroomMessages)
    {
        //
    }
}
