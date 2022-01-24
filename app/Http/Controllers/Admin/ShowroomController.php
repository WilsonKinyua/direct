<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Events\NewShowroom;
use App\Http\Requests\ShowroomStoreRequest;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Jobs\SyncMedia;
use App\Mail\ShowroomAdmin;
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
        $showroom->token = Str::random(60);
        $showroom->update();

        // send email to admin to activate the showroom account
        Mail::to($showroom->admin_email)->send(new ShowroomAdmin($showroom));

        // create a new user for the showroom admin
        // User::create([
        //     'name' => $showroom->admin_name,
        //     'email' => $showroom->admin_email,
        //     'showroom_id' => $showroom->id,
        //     'role_id' => 2,
        // ]);

        if ($request->input('logo', false)) {
            $showroom->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $showroom->id]);
        }

        return redirect()->route('admin.showrooms.index')->with('success', 'Showroom created successfully');
    }

    public function show($id)
    {
        abort_if(Gate::denies('superadmin_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    }

    public function edit($id)
    {
        abort_if(Gate::denies('superadmin_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    }

    public function update(Request $request, $id)
    {
        abort_if(Gate::denies('superadmin_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('superadmin_management_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
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
}
