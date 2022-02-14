<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreSalesRequest;
use App\Http\Requests\UpdateSalesRequest;
use App\Models\Sales;
use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;
use Gate;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('sales_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $showroom_id = auth()->user()->showroom->id;
        if (!$showroom_id) {
            return redirect()->route('admin.sales.index')->with('error', 'You must have a showroom before managing sales');
        }
        $sales = Sales::where('showroom_id', $showroom_id)->get();

        return view('admin.sales.index', compact('sales'));
    }
    public function create()
    {
        abort_if(Gate::denies('sales_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $showroom_id = auth()->user()->showroom->id;
        if (!$showroom_id) {
            return redirect()->route('admin.sales.index')->with('error', 'You must have a showroom before managing sales');
        }
        $inventories = Inventory::where('showroom_id', $showroom_id)->with(['media'])->get();

        return view('admin.sales.create', compact('inventories'));
    }

    public function store(Request $request)
    {
        $sales = Sales::create($request->all());
        $sales->ref_id = Str::random(6);
        $sales->sold_by_id = auth()->user()->id;
        $sales->save();
        $inventory = Inventory::find($request->inventory_id);
        $inventory->is_active = 0;
        $inventory->save();
        return redirect()->route('admin.sales.index')->with('success', 'Sales created successfully');
    }

    public function show(Sales $sales)
    {
        //
    }

    public function update(UpdateSalesRequest $request, Sales $sales)
    {
        //
    }

    public function destroy(Sales $sales)
    {
        //
    }
}
