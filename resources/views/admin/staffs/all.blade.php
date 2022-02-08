@extends('layouts.main-admin')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Showrooms Staffs</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Showrooms Staffs</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body ">
                            <div class="table-scrollable">
                                <table
                                    class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
                                    id="example4">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                Showroom
                                            </th>
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $key => $user)
                                            <tr class="odd gradeX">
                                                <td class="patient-img">
                                                    @if ($user->avatar)
                                                        <img src="{{ $user->avatar->getUrl() }}" alt="">
                                                    @else
                                                        <img src="{{ asset('images/avatar.jpeg') }}" alt="">
                                                    @endif
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-info">{{ $user->showroom->name ?? '' }}</span>
                                                </td>
                                                <td>
                                                    {{ $user->name ?? '' }}
                                                </td>
                                                <td>
                                                    {{ $user->email ?? '' }}
                                                </td>
                                                <td>
                                                    <span class="badge badge-primary">{{ $user->gender ?? '' }}</span>
                                                </td>
                                                <td>
                                                    {{ $user->phone_number ?? '' }}
                                                </td>

                                                <td class="">{{ $user->location ?? '' }}</td>
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
