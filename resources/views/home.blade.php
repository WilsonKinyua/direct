@extends('layouts.main-admin')
@section('content')
    {{-- <!-- =========================== start of superadmin access ================================= --> --}}
    @can('superadmin_management_access')
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title"><span class="text-primary">{{ Auth::user()->name ?? 'Admin' }} </span>
                            </div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                    href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div class="state-overview">
                    <div class="row text-uppercase">
                        <div class="col-lg-3 col-sm-6">
                            <a href="">
                                <div class="overview-panel yellow">
                                    <div class="symbol">
                                        <i class="fa fa-car usr-clr"></i>
                                    </div>
                                    <div class="value white">
                                        <p class="sbold addr-font-h1" data-counter="counterup"
                                            data-value="{{ count($showrooms) }}">0</p>
                                        <p>Showrooms</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <a href="">
                                <div class="overview-panel green">
                                    <div class="symbol">
                                        <i class="fa fa-cab"></i>
                                    </div>
                                    <div class="value white">
                                        <p class="sbold addr-font-h1" data-counter="counterup" data-value="0">0</p>
                                        <p>Vehicles</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <a href="">
                                <div class="overview-panel pink">
                                    <div class="symbol">
                                        <i class="fa fa-times-circle-o"></i>
                                    </div>
                                    <div class="value white">
                                        <p class="sbold addr-font-h1" data-counter="counterup" data-value="0">0</p>
                                        <p>Auctioneers</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <a href="">
                                <div class="overview-panel red">
                                    <div class="symbol">
                                        <i class="fa fa-money"></i>
                                    </div>
                                    <div class="value white">
                                        <p class="sbold addr-font-h1" data-counter="counterup" data-value="0">0</p>
                                        <p>Sold Vehicles</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card  card-box">
                            <div class="card-head">
                                <header>Recent Showrooms</header>
                                <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table display product-overview mb-30" id="support_table">
                                            <thead>
                                                <tr>
                                                    <th> Name </th>
                                                    <th> Location </th>
                                                    <th> Phone Number </th>
                                                    <th> Email </th>
                                                    <th> Admin Name </th>
                                                    <th> Admin Email </th>
                                                    <th> Date Joined </th>
                                                    <th>Status</th>
                                                    <th> Action </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($showrooms as $showroom)
                                                    <tr>
                                                        <td>
                                                            <a href="{{ route('admin.showrooms.show', $showroom->id) }}">
                                                                {{ $showroom->name ?? '' }}
                                                            </a>
                                                        </td>
                                                        <td>
                                                            {{ $showroom->location ?? '' }}
                                                        </td>
                                                        <td class="">
                                                            <a
                                                                href="tel:{{ $showroom->phone_number ?? '' }}">{{ $showroom->phone_number ?? '' }}</a>
                                                        </td>
                                                        <td>
                                                            <a
                                                                href="mailto:{{ $showroom->email ?? '' }}">{{ $showroom->email ?? '' }}</a>
                                                        </td>
                                                        <td>
                                                            {{ $showroom->admin_name ?? '' }}
                                                        </td>
                                                        <td>
                                                            <a
                                                                href="mailto:{{ $showroom->admin_email ?? '' }}">{{ $showroom->admin_email ?? '' }}</a>
                                                        </td>
                                                        <td>
                                                            {{ $showroom->created_at->diffForHumans() }}
                                                        </td>
                                                        <td>
                                                            @if ($showroom->status == 1)
                                                                <a href="{{ route('admin.showrooms.status', $showroom->id) }}"
                                                                    title="Click to deactivate" class="btn btn-success">
                                                                    <i class="fa fa-check"></i>
                                                                </a>
                                                            @else
                                                                <a href="{{ route('admin.showrooms.status', $showroom->id) }}"
                                                                    title="Click to activate" class="btn btn-danger">
                                                                    <i class="fa fa-times"></i>
                                                                </a>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('admin.showrooms.edit', $showroom->id) }}"
                                                                class="text-inverse" title="Edit Showroom"
                                                                data-bs-toggle="tooltip">
                                                                <i class="fa fa-edit"></i></a>
                                                            &nbsp; &nbsp;
                                                            <a href="{{ route('admin.showrooms.delete', $showroom->id) }}"
                                                                class="text-danger" data-bs-toggle="tooltip"
                                                                title="Delete Showroom"><i class="fa  fa-trash-o"></i></a>
                                                        </td>
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
    @endcan
    {{-- <!-- =========================== end of superadmin access ================================= --> --}}
    {{-- <!-- =========================== start showroom admin access ================================= --> --}}
    @can('showroom_admin_access')
        <div class="page-content-wrapper">
            <div class="page-content">
                <div class="page-bar">
                    <div class="page-title-breadcrumb">
                        <div class=" pull-left">
                            <div class="page-title"><span class="text-primary">
                                    {{ Auth::user()->showroom->name ?? Auth::user()->name }}
                                </span>
                            </div>
                        </div>
                        <ol class="breadcrumb page-breadcrumb pull-right">
                            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                    href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                            </li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
                <div class="state-overview">
                    <div class="row text-uppercase">
                        <div class="col-lg-3 col-sm-6">
                            <a href="{{ route('admin.staffs.index') }}">
                                <div class="overview-panel orange">
                                    <div class="symbol">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="value white">
                                        <p class="sbold addr-font-h1" data-counter="counterup"
                                            data-value="{{ count($users) }}">0
                                        </p>
                                        <p>Staffs</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <a href="{{ route('admin.inventories.index') }}">
                                <div class="overview-panel purple">
                                    <div class="symbol">
                                        <i class="fa fa-car usr-clr"></i>
                                    </div>
                                    <div class="value white">
                                        <p class="sbold addr-font-h1" data-counter="counterup"
                                            data-value="{{ count($inventories) }}">0</p>
                                        <p>Vehicles in Stock</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <a href="{{ route('admin.sales.index') }}">
                                <div class="overview-panel deepPink-bgcolor">
                                    <div class="symbol">
                                        <i class="fa fa-car usr-clr"></i>
                                    </div>
                                    <div class="value white">
                                        <p class="sbold addr-font-h1" data-counter="counterup"
                                            data-value="{{ count($sold_cars) }}">0</p>
                                        <p>Sold Out Vehicles</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <a href="{{ route('admin.sales.index') }}">
                                <div class="overview-panel blue-bgcolor">
                                    <div class="symbol">
                                        <i class="fa fa-money"></i>
                                    </div>
                                    <div class="value white">
                                        <p class="sbold addr-font-h1" data-counter="counterup"
                                            data-value="{{ number_format($sales->sum('price')) }}">0</p>
                                        <p>Sales in Ksh</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="card  card-box">
                            <div class="card-head">
                                <header>Recent Sales</header>
                                <div class="tools">
                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                </div>
                            </div>
                            <div class="card-body ">
                                <div class="table-wrap">
                                    <div class="table-responsive">
                                        <table class="table display product-overview mb-30" id="support_table">
                                            <thead>
                                                <tr class="text-uppercase">
                                                    <th>REFID</th>
                                                    <th> Inventory </th>
                                                    <th> Price (Ksh) </th>
                                                    <th> Sold At (Ksh) </th>
                                                    <th> Sold By </th>
                                                    <th> Sold To </th>
                                                    <th>Payment Method</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($sales->slice(0, 20) as $sale)
                                                    <tr>
                                                        <td class="text-uppercase">
                                                            <small><a href="">{{ $sale->ref_id ?? '' }}</a></small>
                                                        </td>
                                                        <td>
                                                            {{ $sale->inventory->brand_name ?? '' }}
                                                        </td>
                                                        <td>
                                                            {{ number_format($sale->inventory->price ?? '') }}
                                                        </td>
                                                        <td>
                                                            {{ number_format($sale->price ?? '') }}
                                                        </td>
                                                        <td>
                                                            {{ $sale->user->name ?? '' }}
                                                        </td>
                                                        <td>
                                                            {{ $sale->customer_name ?? '' }}
                                                        </td>
                                                        <td class="center">
                                                            <span
                                                                class="badge badge-info">{{ $sale->payment_method ?? '' }}</span>
                                                        </td>
                                                        <td>
                                                            {{ $sale->created_at->format('d-m-Y') ?? '' }}
                                                        </td>
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
    @endcan
@endsection
{{-- <!-- =========================== end showroom admin access ================================= --> --}}
