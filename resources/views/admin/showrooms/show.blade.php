@extends('layouts.main-admin')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">{{ $showroom->name }}</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="{{ route('admin.showrooms.index') }}">Showrooms</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">{{ $showroom->name }}</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <div class="card">
                            <div class="card-body no-padding height-9">
                                <div class="row">
                                    @if ($showroom->logo)
                                        <div class="profile-userpic">
                                            <img src="{{ $showroom->logo->getUrl() }}" class="img-responsive"
                                                alt="{{ $showroom->name ?? '' }}">
                                        </div>
                                    @endif
                                </div>
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name">{{ $showroom->name ?? '' }} </div>
                                </div>
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>Location</b> <a class="pull-right">{{ $showroom->location ?? '' }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Phone</b> <a href="tel:+{{ $showroom->phone_number ?? '' }}"
                                            class="pull-right">{{ $showroom->phone_number ?? '' }}</a>
                                    </li>
                                </ul>
                                <!-- END SIDEBAR USER TITLE -->
                                <!-- SIDEBAR BUTTONS -->
                                <div class="profile-userbuttons">
                                    <a href="mailto:{{ $showroom->email ?? '' }}"
                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-primary">Email</a>
                                    <a target="_blank" href="{{ $showroom->web_url ?? '' }}"
                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-pink">Website</a>
                                    <a target="_blank" href="{{ $showroom->map_link ?? '' }}"
                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-circle btn-pink">Map</a>
                                </div>
                                <!-- END SIDEBAR BUTTONS -->
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-head">
                                <header>Showroom Admin Details</header>
                            </div>
                            <div class="card-body no-padding height-9">
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>Name </b>
                                        <div class="profile-desc-item pull-right">{{ $showroom->admin_name ?? '' }}</div>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Email </b>
                                        <div class="profile-desc-item pull-right"><a
                                                href="malto:{{ $showroom->admin_email ?? '' }}">Email</a>
                                        </div>
                                    </li>
                            </div>
                        </div>
                        {{-- <div class="card">
                            <div class="card-head">
                                <header>Address</header>
                            </div>
                            <div class="card-body no-padding height-9">
                                <div class="row text-center m-t-10">
                                    <div class="col-md-12">
                                        <p>456, Pragri flat, varacha road, Surat
                                            <br> Gujarat, India.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-head">
                                <header>Interest In</header>
                            </div>
                            <div class="card-body no-padding height-9">
                                <div class="work-monitor work-progress">
                                    <div class="states">
                                        <div class="info">
                                            <div class="desc pull-left">Study</div>
                                            <div class="percent pull-right">50%</div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger progress-bar-striped active"
                                                role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 70%">
                                                <span class="sr-only">50% </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="states">
                                        <div class="info">
                                            <div class="desc pull-left">Cricket</div>
                                            <div class="percent pull-right">85%</div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-success progress-bar-striped active"
                                                role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 45%">
                                                <span class="sr-only">85% </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="states">
                                        <div class="info">
                                            <div class="desc pull-left">Music</div>
                                            <div class="percent pull-right">20%</div>
                                        </div>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-info progress-bar-striped active"
                                                role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 35%">
                                                <span class="sr-only">20% </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->
                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="card">
                                <div class="card-topline-aqua">
                                    <header></header>
                                </div>
                                <div class="white-box">
                                    <!-- Nav tabs -->
                                    <div class="p-rl-20">
                                        <ul class="nav customtab nav-tabs" role="tablist">
                                            <li class="nav-item"><a class="text-white">Inventory List</a></li>
                                        </ul>
                                    </div>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane active fontawesome-demo" id="tab1">
                                            <div id="biography">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12">
                                                        <div class="table-scrollable">
                                                            <table
                                                                class="table table-striped table-bordered table-hover table-checkable order-column valign-middle  center datatable-showroom"
                                                                id="example4">
                                                                <thead>
                                                                    <tr class="text-capitalize">
                                                                        <th>
                                                                            Ref Id
                                                                        </th>
                                                                        <th>
                                                                            Name
                                                                        </th>
                                                                        <th>
                                                                            Make
                                                                        </th>
                                                                        <th>
                                                                            Model
                                                                        </th>
                                                                        <th>
                                                                            Year
                                                                        </th>
                                                                        <th>
                                                                            Price
                                                                        </th>
                                                                        <th>
                                                                            {{ trans('cruds.inventory.fields.interior_color') }}
                                                                        </th>
                                                                        <th>
                                                                            {{ trans('cruds.inventory.fields.exterior_color') }}
                                                                        </th>
                                                                        {{-- <th>
                                                                            {{ trans('cruds.inventory.fields.pictures') }}
                                                                        </th> --}}
                                                                        {{-- <th>
                                                                            Action
                                                                        </th> --}}
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($inventories as $key => $inventory)
                                                                        <tr class="odd gradeX">
                                                                            <td class="text-uppercase">
                                                                                <a href="">
                                                                                    {{ $inventory->ref_id ?? '' }}
                                                                                </a>
                                                                            </td>
                                                                            <td>
                                                                                {{ $inventory->brand_name ?? '' }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $inventory->make ?? '' }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $inventory->model ?? '' }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $inventory->manufacture_year ?? '' }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $inventory->price ?? '' }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $inventory->interior_color ?? '' }}
                                                                            </td>
                                                                            <td>
                                                                                {{ $inventory->exterior_color ?? '' }}
                                                                            </td>
                                                                            {{-- <td>
                                                                                @can('inventory_show')
                                                                                    <a class="btn btn-xs btn-primary"
                                                                                        href="{{ route('admin.inventories.show', $inventory->id) }}">
                                                                                        {{ trans('global.view') }}
                                                                                    </a>
                                                                                @endcan
                                                                                <br>
                                                                                @can('inventory_edit')
                                                                                    <a class="btn btn-xs btn-info"
                                                                                        href="{{ route('admin.inventories.edit', $inventory->id) }}">
                                                                                        {{ trans('global.edit') }}
                                                                                    </a>
                                                                                @endcan
                                                                                <br>
                                                                                @can('inventory_delete')
                                                                                    <form
                                                                                        action="{{ route('admin.inventories.destroy', $inventory->id) }}"
                                                                                        method="POST"
                                                                                        onsubmit="return confirm('{{ trans('global.areYouSure') }}');"
                                                                                        style="display: inline-block;">
                                                                                        <input type="hidden" name="_method"
                                                                                            value="DELETE">
                                                                                        <input type="hidden" name="_token"
                                                                                            value="{{ csrf_token() }}">
                                                                                        <input type="submit"
                                                                                            class="btn btn-xs btn-danger"
                                                                                            value="{{ trans('global.delete') }}">
                                                                                    </form>
                                                                                @endcan

                                                                            </td> --}}
                                                                            {{-- <td>
                                                                                <a href="{{ route('admin.inventories.edit', $inventory->id) }}"
                                                                                    class="btn btn-primary btn-xs">
                                                                                    <i class="fa fa-pencil"></i>
                                                                                </a>
                                                                                <a href="{{ route('admin.inventories.destroy', $inventory->id) }}"
                                                                                    class="btn btn-danger btn-xs">
                                                                                    <i class="fa fa-trash-o "></i>
                                                                                </a>
                                                                            </td> --}}
                                                                        </tr>
                                                                    @endforeach
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
                    <!-- END PROFILE CONTENT -->
                </div>
            </div>
        </div>
    </div>
@endsection
