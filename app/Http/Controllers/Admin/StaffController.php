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

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('admin.staffs.index')->with('success', 'Staff updated successfully.');
    }
    public function destroy($id)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user = User::findOrFail($id);
        if (empty($user)) {
            return redirect()->route('admin.staffs.index')->with('error', 'Staff not found');
        }
        $user->delete();
        $user->roles()->detach();

        return redirect()->route('admin.staffs.index')->with('success', 'Staff deleted successfully.');
    }

    public function allStaffs()
    {
        abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        // all users where role is showroom staff
        $users = User::whereHas('roles', function ($q) {
            $q->where('id', '=', Role::where('title', 'Showroom Staff')->first()->id);
        })->get();
        return view('admin.staffs.all', compact('users'));
    }
}
