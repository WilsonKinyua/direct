@extends('layouts.main-admin')
@section('content')
    <!-- start page content -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Add Showroom</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">New Showroom</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div class="card-head">
                            <header>Showroom Details</header>
                            <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                                data-upgraded=",MaterialButton">
                                <i class="material-icons">more_vert</i>
                            </button>
                        </div>
                        <form action="{{ route('admin.showrooms.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body row">
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseName" name="name"
                                            required>
                                        <label class="mdl-textfield__label">Name: <span
                                                class="required text-danger">*</span></label>
                                    </div>
                                </div>

                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseCode" name="location"
                                            required>
                                        <label class="mdl-textfield__label">Location: <span
                                                class="required text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="url" id="txtCourseCode" name="map_link">
                                        <label class="mdl-textfield__label">Map Link:</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="tel" id="txtCourseCode"
                                            name="phone_number" required>
                                        <label class="mdl-textfield__label">Phone Number: <span
                                                class="required text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="email" id="txtCourseCode" name="email"
                                            required>
                                        <label class="mdl-textfield__label">Email: <span
                                                class="required text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-12 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="url" id="txtCourseCode" name="web_url">
                                        <label class="mdl-textfield__label">Web Url:</label>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="text" id="txtCourseCode" name="admin_name"
                                            required>
                                        <label class="mdl-textfield__label">Admin Name: <span
                                                class="required text-danger">*</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-t-20">
                                    <div
                                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                        <input class="mdl-textfield__input" type="email" id="txtCourseCode"
                                            name="admin_email" required>
                                        <label class="mdl-textfield__label">Admin Email: <span
                                                class="required text-danger">*</span></label>
                                    </div>
                                </div>


                                {{-- <div class="col-lg-6 p-t-20">
                                            <div class="mdl-textfield mdl-js-textfield txt-full-width">
                                                <textarea class="mdl-textfield__input" rows="4" id="text7"></textarea>
                                                <label class="mdl-textfield__label" for="text7">Purchase details:</label>
                                            </div>
                                        </div> --}}
                                <div class="col-lg-12 p-t-20 text-center">
                                    {{-- <button type="button"
                                                class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel
                                            </button> --}}

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
    <!-- end page content -->

@endsection
