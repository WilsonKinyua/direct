@extends('layouts.main-admin')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Sales Records</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="{{ route('admin.sales.index') }}">Sales</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
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
                                                            <a href="{{ route('admin.sales.create') }}" id="addRow"
                                                                class="btn btn-info">
                                                                Add New Record <i class="fa fa-plus"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-6">

                                                    </div>
                                                </div>
                                                <div class="table-scrollable">
                                                    <table
                                                        class="table table-striped table-bordered table-hover table-checkable order-column valign-middle  center"
                                                        id="example4">
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

                                                            @foreach ($sales as $sale)
                                                                <tr class="odd gradeX text-capitalize">
                                                                    <td class="text-uppercase">
                                                                        <small><a
                                                                                href="">{{ $sale->ref_id ?? '' }}</a></small>
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
                </div>
            </div>
        </div>
    </div>
@endsection
