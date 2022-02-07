@extends('layouts.main-admin')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">All Staffs</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">All Staffs</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-6">
                                    <div class="btn-group">
                                        <a href="{{ route('admin.staffs.create') }}" id="addRow" class="btn btn-info">
                                            Add New Staff<i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="table-scrollable">
                                <table
                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                    id="example4">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                {{ trans('cruds.user.fields.name') }}
                                            </th>
                                            <th>
                                                {{ trans('cruds.user.fields.email') }}
                                            </th>
                                            <th>
                                                Gender
                                            </th>
                                            <th>
                                                Phone Number
                                            </th>
                                            <th>
                                                Location
                                            </th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key => $user)
                                            <tr class="odd gradeX">
                                                <td class="patient-img">
                                                    <img src="{{ asset('images/avatar.jpeg') }}" alt="">
                                                </td>
                                                <td>
                                                    {{ $user->name ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $user->email ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $user->gender ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $user->phone_number ?? '' }}
                                                </td>

                                                <td class="">{{ $user->location ?? '' }}</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger btn-xs">
                                                        <i class="fa fa-trash-o "></i>
                                                    </a>
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

@endsection
