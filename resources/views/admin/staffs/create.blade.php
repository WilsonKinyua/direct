@extends('layouts.main-admin')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Add Staff</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li><a class="parent-item" href="{{ route('admin.staffs.index') }}">Staff</a>&nbsp;<i
                                class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Add Staff</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-head">
                            <header>Basic Information</header>
                            <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                data-upgraded=",MaterialButton">
                                <i class="material-icons">more_vert</i>
                            </button>
                        </div>
                        <form action="{{ route('admin.staffs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @if (Auth::check())
                                <input type="hidden" name="showroom_id" value="{{ Auth::user()->showroom_id }}">
                            @endif
                            <div class="card-body row">
                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtFirstName" name="name"
                                            required>
                                        <label class="mdl-textfield__label">Full Name:</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtLasttName" name="location">
                                        <label class="mdl-textfield__label">Location:</label>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="email" id="txtemail" name="email"
                                            required>
                                        <label class="mdl-textfield__label">Email:</label>
                                        <span class="mdl-textfield__error">Enter Valid Email Address!</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?"
                                            id="text5" name="phone_number" required>
                                        <label class="mdl-textfield__label" for="text5">Mobile Number:</label>
                                        <span class="mdl-textfield__error">Phone Number is required!</span>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="form-select" name="gender" id="gender">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="password" id="password" name="password">
                                        <label class="mdl-textfield__label">Password:</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-t-20 text-center">
                                    <button type="submit"
                                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Add
                                        Staff</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
