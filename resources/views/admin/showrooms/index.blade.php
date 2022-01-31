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
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
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
                                                                <th>Status</th>
                                                                <th> Action </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($showrooms as $showroom)
                                                                <tr class="odd gradeX">
                                                                    <td>
                                                                        @if ($showroom->logo)
                                                                            <a href="{{ $showroom->logo->getUrl() }}"
                                                                                target="_blank"
                                                                                style="display: inline-block">
                                                                                <img src="{{ $showroom->logo->getUrl('thumb') }}"
                                                                                    alt="" class="img img-responsive"
                                                                                    style="border-radius: 50%; ">
                                                                            </a>
                                                                        @endif
                                                                    </td>
                                                                    <td>
                                                                        <a
                                                                            href="{{ route('admin.showrooms.show', $showroom->id) }}">
                                                                            {{ $showroom->name ?? '' }}
                                                                        </a>
                                                                    </td>
                                                                    <td>
                                                                        {{ $showroom->location ?? '' }}
                                                                    </td>
                                                                    <td class="center">
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
                                                                                title="Click to deactivate"
                                                                                class="btn btn-success">
                                                                                <i class="fa fa-check"></i>
                                                                            </a>
                                                                        @else
                                                                            <a href="{{ route('admin.showrooms.status', $showroom->id) }}"
                                                                                title="Click to activate"
                                                                                class="btn btn-danger">
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
