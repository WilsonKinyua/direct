<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;
use App\Models\Role;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class StaffController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $showroom_id = auth()->user()->showroom_id;
        if ($showroom_id) {
            $users = User::where('showroom_id', $showroom_id)->get();
        } else {
            $users = [];
        }
        return view('admin.staffs.index', compact('users'));
    }

    public function create()
    {
        abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.staffs.create');
    }

    public function store(Request $request)
    {

        $user = User::create($request->all());
        $user->roles()->sync(Role::where('title', 'Showroom Staff')->first());

        return redirect()->route('admin.staffs.index')->with('message', 'Staff created successfully.');
    }


    public function show($id)
    {
        abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //
    }

    public function edit($id)
    {
        abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //
    }

    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //
    }
}
