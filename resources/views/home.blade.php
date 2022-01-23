@extends('layouts.main-admin')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Welcome back, <span
                                class="text-primary">{{ Auth::user()->name ?? 'Admin' }}</span></div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- start widget -->

            <div class="state-overview">
                <div class="row">
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
                                    <p class="sbold addr-font-h1" data-counter="counterup" data-value="14">0</p>
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
                                    <p class="sbold addr-font-h1" data-counter="counterup" data-value="48">0</p>
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
                                    <p class="sbold addr-font-h1" data-counter="counterup" data-value="3421">0</p>
                                    <p>Sold Vehicles</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end widget -->

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
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- <tr>
                                                <td>1</td>
                                                <td>Lota Motors</td>
                                                <td>Mombasa Kenya</td>
                                                <td>300</td>
                                                <td>27/12/2021</td>
                                                <td>
                                                    <span class="label label-sm label-danger">closed</span>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0)" class="text-inverse" title="View Invoice"
                                                        data-bs-toggle="tooltip">
                                                        <i class="fa fa-bookmark-o"></i></a>
                                                    &nbsp; &nbsp;
                                                    <a href="javascript:void(0)" class=""
                                                        data-bs-toggle="tooltip" title="Fully Paid"><i
                                                            class="fa fa-check"></i></a>
                                                </td>
                                            </tr> --}}

                                            @foreach ($showrooms as $showroom)
                                                <tr>
                                                    <td>
                                                        {{ $showroom->name }}
                                                    </td>
                                                    <td>
                                                        {{ $showroom->location }}
                                                    </td>
                                                    <td class="">
                                                        <a
                                                            href="tel:{{ $showroom->phone_number }}">{{ $showroom->phone_number }}</a>
                                                    </td>
                                                    <td>
                                                        <a
                                                            href="mailto:{{ $showroom->email }}">{{ $showroom->email }}</a>
                                                    </td>
                                                    <td>
                                                        {{ $showroom->admin_name }}
                                                    </td>
                                                    <td>
                                                        <a
                                                            href="mailto:{{ $showroom->admin_email }}">{{ $showroom->admin_email }}</a>
                                                    </td>
                                                    <td>
                                                        {{ $showroom->created_at->diffForHumans() }}
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)" class="text-inverse"
                                                            title="Edit Showroom" data-bs-toggle="tooltip">
                                                            <i class="fa fa-edit"></i></a>
                                                        &nbsp; &nbsp;
                                                        <a href="javascript:void(0)" class="text-danger"
                                                            data-bs-toggle="tooltip" title="Delete Showroom"><i
                                                                class="fa  fa-trash-o"></i></a>
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

@endsection
