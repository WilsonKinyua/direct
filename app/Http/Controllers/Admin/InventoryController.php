<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
// use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Controllers\Traits\MediaUploadingWatermarkTrait;
use App\Http\Requests\MassDestroyInventoryRequest;
use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;
use App\Models\Inventory;
use App\Models\VehicleFeatures;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;

class InventoryController extends Controller
{
    use MediaUploadingWatermarkTrait;

    public function index()
    {
        abort_if(Gate::denies('inventory_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $showroom_id = auth()->user()->showroom->id;
        if (!$showroom_id) {
            return redirect()->route('admin.inventories.index')->with('error', 'You must create a showroom before adding inventory');
        }
        $inventories = Inventory::where('showroom_id', $showroom_id)->with(['media'])->get();

        // $inventories = Inventory::with(['media'])->get();

        return view('admin.inventories.index', compact('inventories'));
    }

    public function create()
    {
        abort_if(Gate::denies('inventory_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $vehicle_features = VehicleFeatures::all()->pluck('name', 'id');
        return view('admin.inventories.create', compact('vehicle_features'));
    }

    public function store(StoreInventoryRequest $request)
    {
        // dd($request->all());
        // get current logged in user
        $user = auth()->user();
        if ($user->showroom) {
            $showroom_id = $user->showroom->id;
        } else {
            return redirect()->route('admin.inventories.create')->with('error', 'You need to have a showroom before you can create an inventory. Contact your administrator.');
        }
        $inventory = Inventory::create($request->all());
        $inventory->ref_id = Str::random(6);
        $inventory->slug = Str::slug($inventory->brand_name, '-');
        $slug = $inventory->slug;
        $count = Inventory::where('slug', 'LIKE', $slug . '%')->count();
        if ($count > 0) {
            $inventory->slug = $slug . '-' . Str::slug($inventory->model, '-');
        }
        // $showroom->update();
        $inventory->save();

        foreach ($request->input('pictures', []) as $file) {
            $inventory->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('pictures');
        }
        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $inventory->id]);
        }

        $inventory->vehicleFeatures()->sync($request->input('vehicle_features', []));

        return redirect()->route('admin.inventories.index')->with('success', 'Inventory created successfully.');
    }

    public function edit(Inventory $inventory)
    {
        abort_if(Gate::denies('inventory_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.inventories.edit', compact('inventory'));
    }

    public function update(UpdateInventoryRequest $request, Inventory $inventory)
    {
        $inventory->update($request->all());

        if (count($inventory->pictures) > 0) {
            foreach ($inventory->pictures as $media) {
                if (!in_array($media->file_name, $request->input('pictures', []))) {
                    $media->delete();
                }
            }
        }
        $media = $inventory->pictures->pluck('file_name')->toArray();
        foreach ($request->input('pictures', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $inventory->addMedia(storage_path('tmp/uploads/' . basename($file)))->toMediaCollection('pictures');
            }
        }

        return redirect()->route('admin.inventories.index')->with('success', 'Inventory updated successfully.');;
    }

    public function show(Inventory $inventory)
    {
        abort_if(Gate::denies('inventory_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.inventories.show', compact('inventory'));
    }

    public function destroy(Inventory $inventory)
    {
        abort_if(Gate::denies('inventory_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $inventory->delete();

        return back();
    }

    public function massDestroy(MassDestroyInventoryRequest $request)
    {
        Inventory::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('inventory_create') && Gate::denies('inventory_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Inventory();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
