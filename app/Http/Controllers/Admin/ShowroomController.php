<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Events\NewShowroom;
use App\Http\Requests\ShowroomStoreRequest;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Jobs\SyncMedia;
use App\Mail\ShowroomAdmin;
use App\Models\Inventory;
use App\Models\Showroom;
use App\Models\User;
use Doctrine\DBAL\Schema\View;
use Illuminate\Http\Request;
use Gate;
use Illuminate\Support\Facades\Mail;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class ShowroomController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('superadmin_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $showrooms = Showroom::with(['media'])->get();
        // print_r(json_encode($showrooms));
        return view('admin.showrooms.index', compact('showrooms'));
    }

    public function create()
    {
        abort_if(Gate::denies('superadmin_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.showrooms.create');
    }
    public function store(ShowroomStoreRequest $request)
    {
        abort_if(Gate::denies('superadmin_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $showroom = Showroom::create($request->all());
        $showroom->status  = 1;
        $showroom->token = Str::random(60);
        $showroom->slug = Str::slug($showroom->name, '-');
        $slug = $showroom->slug;
        $count = Showroom::where('slug', 'LIKE', $slug . '%')->count();
        if ($count > 0) {
            $showroom->slug = $slug . '-' . Str::slug($showroom->location, '-');
        }
        $showroom->update();

        // send email to admin to activate the showroom account
        Mail::to($showroom->admin_email)->send(new ShowroomAdmin($showroom));
        if ($request->input('logo', false)) {
            $showroom->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $showroom->id]);
        }

        return redirect()->route('admin.showrooms.index')->with('success', 'Showroom created successfully');
    }

    public function show(Showroom $showroom)
    {
        abort_if(Gate::denies('superadmin_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!$showroom) {
            return redirect()->route('admin.showrooms.index')->with('error', 'Showroom not found');
        }
        $showroom->load('media');

        $inventories = Inventory::where('showroom_id', $showroom->id)->get();

        return view('admin.showrooms.show', compact('showroom', 'inventories'));
    }

    public function edit(Showroom $showroom)
    {
        abort_if(Gate::denies('superadmin_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!$showroom) {
            return redirect()->route('admin.showrooms.index')->with('error', 'Showroom not found');
        }
        $showroom->load('media');

        return view('admin.showrooms.edit', compact('showroom'));
    }

    public function update(Request $request, Showroom $showroom)
    {
        abort_if(Gate::denies('superadmin_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!$showroom) {
            return redirect()->route('admin.showrooms.index')->with('error', 'Showroom not found');
        }

        $showroom->update($request->all());
        // get showroom admin user details and update the showroom admin email in user table
        $showroom_admin = User::where('showroom_id', $showroom->id)->first();
        if ($showroom_admin) {
            $showroom_admin->email = $request->admin_email;
            $showroom_admin->name = $request->admin_name;
            $showroom_admin->save();
        }
        // check if showroom has logo in the media collection
        if ($showroom->logo) {
            $showroom->logo->delete();
        }
        if ($request->input('logo', false)) {
            $showroom->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        return redirect()->route('admin.showrooms.index')->with('success', 'Showroom updated successfully');
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('superadmin_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $showroom = Showroom::findOrFail($id);
        if (!$showroom) {
            return redirect()->route('admin.showrooms.index')->with('error', 'Showroom not found');
        }
        // get all inventories of this showroom and delete them
        $inventories = Inventory::where('showroom_id', $showroom->id)->get();
        foreach ($inventories as $inventory) {
            $inventory->delete();
        }
        // get all media of this showroom and delete them
        // $media = $showroom->getMedia();
        // foreach ($media as $m) {
        //     $m->delete();
        // }
        // delete all user of this showroom
        $users = User::where('showroom_id', $showroom->id)->get();
        foreach ($users as $user) {
            $user->delete();
        }
        $showroom->delete();
        return redirect()->route('admin.showrooms.index')->with('success', 'Showroom deleted successfully');
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('showroom_create') && Gate::denies('showroom_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Showroom();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }

    // activate showroom
    public function activateShowroomAdminAccount($token)
    {
        $showroom = Showroom::where('token', $token)->first();

        if ($showroom) {
            return view('admin.showrooms.activate', compact('showroom'));
        }

        abort(404);
    }

    // set showroom admin password
    public function updateShowroomAdminAccountPassword(Request $request)
    {
        $showroom = Showroom::where('token', $request->token)->first();
        // print_r(json_encode($showroom));
        if ($showroom) {
            // create a new user for the showroom admin
            $user = User::create([
                'name' => $request->admin_name,
                'email' => $showroom->admin_email,
                'showroom_id' => $showroom->id,
                'password' => bcrypt($request->password),
            ]);

            User::findOrFail($user->id)->roles()->sync(2);

            $showroom->token = null;
            $showroom->save();

            return redirect()->route('login')->with('success', 'Showroom account activated successfully');
        }

        abort(404);
    }

    // update showroom status
    public function updateShowroomStatus(Showroom $showroom)
    {
        abort_if(Gate::denies('superadmin_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if (!$showroom) {
            return redirect()->route('admin.showrooms.index')->with('error', 'Showroom not found');
        }

        $showroom->status = $showroom->status == 1 ? 0 : 1;
        $showroom->save();
        // update showroom admin user role to showroom admin
        $showroom_admin = User::where('showroom_id', $showroom->id)->first();
        if ($showroom_admin) {
            $showroom_admin->roles()->sync(2);
        }

        return redirect()->back()->with('success', 'Showroom status updated successfully');
    }
}
