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
                                                    @if ($user->avatar)
                                                        <img src="{{ $user->avatar->getUrl() }}" alt="">
                                                    @else
                                                        <img src="{{ asset('images/avatar.jpeg') }}" alt="">
                                                    @endif
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
                                                    <a class="btn btn-primary btn-xs" data-bs-toggle="modal"
                                                        data-bs-target="#updateShowroomStaff{{ $user->id }}">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    {{-- edit showroom admin --}}
                                                    <div class="modal fade" id="updateShowroomStaff{{ $user->id }}"
                                                        tabindex="-1"
                                                        aria-labelledby="updateShowroomModal{{ $user->id }}Label"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header tex-white">
                                                                    <h5 class="modal-title"
                                                                        id="updateShowroomModal{{ $user->id }}Label">
                                                                        Edit Staff</h5>
                                                                    <button type="button" class="btn-close text-white"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form
                                                                        action="{{ route('admin.staffs.update', [$user->id]) }}"
                                                                        method="POST">
                                                                        @method('PUT')
                                                                        @csrf
                                                                        <div class="p-t-20">
                                                                            <div
                                                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                                                <input class="mdl-textfield__input"
                                                                                    type="text" id="txtFirstName"
                                                                                    name="name"
                                                                                    value="{{ $user->name ?? '' }}">
                                                                                <label class="mdl-textfield__label">Full
                                                                                    Name:</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="p-t-20">
                                                                            <div
                                                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                                                <input class="mdl-textfield__input"
                                                                                    type="text" id="txtLasttName"
                                                                                    name="location"
                                                                                    value="{{ $user->location ?? '' }}">
                                                                                <label
                                                                                    class="mdl-textfield__label">Location:</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="p-t-20">
                                                                            <div
                                                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                                                <input class="mdl-textfield__input"
                                                                                    type="email" id="txtemail" name="email"
                                                                                    value="{{ $user->email ?? '' }}">
                                                                                <label
                                                                                    class="mdl-textfield__label">Email:</label>
                                                                                <span class="mdl-textfield__error">Enter
                                                                                    Valid Email Address!</span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="p-t-20">
                                                                            <div
                                                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                                                <input class="mdl-textfield__input"
                                                                                    type="text"
                                                                                    pattern="-?[0-9]*(\.[0-9]+)?" id="text5"
                                                                                    name="phone_number"
                                                                                    value="{{ $user->phone_number ?? '' }}">
                                                                                <label class="mdl-textfield__label"
                                                                                    for="text5">Mobile Number:</label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="p-t-20">
                                                                            <div class="form-group">
                                                                                <label>Gender</label>
                                                                                <select class="form-select" name="gender"
                                                                                    id="gender">
                                                                                    <option>--Select Gender --</option>
                                                                                    <option value="male">Male</option>
                                                                                    <option value="female">Female</option>
                                                                                    <option value="other">Other</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="p-t-20">
                                                                            <div
                                                                                class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                                                <input class="mdl-textfield__input"
                                                                                    type="password" id="password"
                                                                                    name="password">
                                                                                <label
                                                                                    class="mdl-textfield__label">Password:</label>
                                                                            </div>
                                                                        </div>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Update</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- end modal --}}
                                                    <a href="{{ route('admin.staffs.delete', $user->id) }}"
                                                        class="btn btn-danger btn-xs">
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
