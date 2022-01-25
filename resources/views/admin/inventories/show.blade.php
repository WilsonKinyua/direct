@extends('layouts.main-admin')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Inventory Details</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="{{ route('admin.inventories.index') }}">Inventory</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Car Details</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable-line">
                        <div class="tab-content">
                            <div class="tab-pane active fontawesome-demo" id="tab1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <a class="btn btn-danger"
                                                            href="{{ route('admin.inventories.index') }}">
                                                            Go Back
                                                        </a>
                                                    </div>
                                                    <table class="table table-bordered table-striped">
                                                        <tbody>
                                                            <tr>
                                                                <th>
                                                                    Brand Name
                                                                </th>
                                                                <td>
                                                                    {{ $inventory->brand_name ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Make
                                                                </th>
                                                                <td>
                                                                    {{ $inventory->make ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Model
                                                                </th>
                                                                <td>
                                                                    {{ $inventory->model ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Manufacture Year
                                                                </th>
                                                                <td>
                                                                    {{ $inventory->manufacture_year ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Registration Year
                                                                </th>
                                                                <td>
                                                                    {{ $inventory->registration_year ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Transmission
                                                                </th>
                                                                <td>
                                                                    {{ $inventory->transmission ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Milage
                                                                </th>
                                                                <td>
                                                                    {{ $inventory->milage ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Number Of Doors
                                                                </th>
                                                                <td>
                                                                    {{ $inventory->no_of_doors ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Price
                                                                </th>
                                                                <td>
                                                                    Ksh {{ $inventory->price ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Engine Size
                                                                </th>
                                                                <td>
                                                                    {{ $inventory->engine_size ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Fuel
                                                                </th>
                                                                <td>
                                                                    {{ $inventory->fuel ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    {{ trans('cruds.inventory.fields.engine_type') }}
                                                                </th>
                                                                <td>
                                                                    {{ $inventory->engine_type ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Body Type
                                                                </th>
                                                                <td>
                                                                    {{ $inventory->body_type ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    {{ trans('cruds.inventory.fields.interior_color') }}
                                                                </th>
                                                                <td>
                                                                    {{ $inventory->interior_color ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    {{ trans('cruds.inventory.fields.exterior_color') }}
                                                                </th>
                                                                <td>
                                                                    {{ $inventory->exterior_color ?? '' }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Description
                                                                </th>
                                                                <td>
                                                                    {!! $inventory->description ?? '' !!}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Created At
                                                                </th>
                                                                <td>
                                                                    {{ $inventory->created_at->format('d-m-Y') }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th>
                                                                    Car Photos
                                                                </th>
                                                                <td>
                                                                    @foreach ($inventory->pictures as $key => $media)
                                                                        <a href="{{ $media->getUrl() }}" target="_blank"
                                                                            style="display: inline-block">
                                                                            <img src="{{ $media->getUrl('thumb') }}">
                                                                        </a>
                                                                    @endforeach
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
