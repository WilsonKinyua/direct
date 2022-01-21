@extends('layouts.main-admin')
@section('content')
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Showrooms Records</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="index.html">Home</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="#">Showrooms</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">All</li>
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
                                            <div class="card-head">
                                                <header></header>
                                                {{-- <div class="tools">
                                                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                                                    <a class="t-collapse btn-color fa fa-chevron-down"
                                                        href="javascript:;"></a>
                                                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                                                </div> --}}
                                            </div>
                                            <div class="card-body ">
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <div class="btn-group">
                                                            <a href="{{ route('admin.showrooms.create') }}" id="addRow"
                                                                class="btn btn-info">
                                                                Add New Showrooms <i class="fa fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-6">
                                                        <div class="btn-group pull-right">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-scrollable">
                                                    <table
                                                        class="table table-striped table-bordered table-hover table-checkable order-column valign-middle  center datatable-showroom"
                                                        id="example4">
                                                        <thead>
                                                            <tr class="text-uppercase">
                                                                <th>###</th>
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
                                                            @foreach ($showrooms as $showroom)
                                                                <tr class="odd gradeX">
                                                                    <td>
                                                                        <img src="https://direct.co.ke/showroom/assets/img/lota.png"
                                                                            alt="" class="img img-responsive"
                                                                            style="border-radius: 3px; ">
                                                                    </td>
                                                                    <td>
                                                                        {{ $showroom->name }}
                                                                    </td>
                                                                    <td>
                                                                        {{ $showroom->location }}
                                                                    </td>
                                                                    <td class="center">
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
                                                                            data-bs-toggle="tooltip"
                                                                            title="Delete Showroom"><i
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
                </div>
            </div>
        </div>
    </div>
    <!-- end page content -->
@endsection
