@extends('layouts.main-admin')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Record Sales</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="{{ route('admin.sales.index') }}">Sales</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">New Record</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-head">
                            <header>Purchase Details</header>
                        </div>
                        <form action="{{ route('admin.sales.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="showroom_id" value="{{ Auth::user()->showroom->id }}">
                            <div class="card-body row">
                                <div class="col-lg-6 p-t-20">
                                    <div class="form-group">
                                        <label>Vehicle <span class="text-danger">*</span></label>
                                        <select class="form-select" name="inventory_id" id="inventory_id" required>
                                            @foreach ($inventories as $vehicle)
                                                <option value="{{ $vehicle->id }}">{{ $vehicle->brand_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div class="form-group">
                                        <label>Payment Method <span class="text-danger">*</span></label>
                                        <select class="form-select" name="payment_method" id="payment_method" required>
                                            <option value="mpesa">Mpesa</option>
                                            <option value="bank">Bank</option>
                                            <option value="bank">Cash</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="number" id="txtCourseCode" name="price"
                                            required>
                                        <label class="mdl-textfield__label">Price(Ksh): <span
                                                class="text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseCode"
                                            name="customer_name" required>
                                        <label class="mdl-textfield__label">Customer Name:</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseCode"
                                            name="customer_phone_number" required>
                                        <label class="mdl-textfield__label">Contact:</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="email" id="txtCourseCode"
                                            name="customer_email">
                                        <label class="mdl-textfield__label">Customer Email:</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseCode"
                                            name="customer_address">
                                        <label class="mdl-textfield__label">Customer Address:</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseCode"
                                            name="payment_status">
                                        <label class="mdl-textfield__label">Payment Status (paid/not paid): </label>
                                    </div>
                                </div>

                                <div class="col-lg-12 p-t-20">
                                    <div class="mdl-textfield mdl-js-textfield txt-full-width">
                                        <textarea class="mdl-textfield__input" rows="4" id="text7" name="note"></textarea>
                                        <label class="mdl-textfield__label" for="text7">Purchase details:</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-t-20 text-center">
                                    <button type="submit"
                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
