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
use Illuminate\Http\Request;
use Gate;
use Illuminate\Support\Facades\Mail;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ShowroomController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        $showrooms = Showroom::with(['media'])->get();
        // print_r(json_encode($showrooms));
        return view('admin.showrooms.index', compact('showrooms'));
    }

    public function create()
    {

        return view('admin.showrooms.create');
    }
    public function store(ShowroomStoreRequest $request)
    {
        $showroom = Showroom::create($request->all());

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
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
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
}
