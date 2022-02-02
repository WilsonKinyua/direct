@extends('layouts.main-admin')
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">Showrooms Admin</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">Showrooms Admin</li>
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
                                        <a data-bs-toggle="modal" data-bs-target="#exampleModal" id="addRow"
                                            class="btn btn-info">
                                            Add Showroom Admin<i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            {{-- add showroom admin modal --}}
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header tex-white">
                                            <h5 class="modal-title" id="exampleModalLabel">Add A Showroom Admin</h5>
                                            <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.showrooms.admin.create')}}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="name" class="col-form-label">Showroom: <span
                                                            class="text-danger">*</span></label>
                                                    <select name="showroom_id" id="showroom_id" class="form-control">
                                                        <option value="">
                                                            Select Showroom
                                                        </option>
                                                        @foreach ($showrooms as $showroom)
                                                            <option value="{{ $showroom->id }}">{{ $showroom->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="name" class="col-form-label">Name: <span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Email: <span
                                                            class="text-danger">*</span></label>
                                                    <input type="email" class="form-control" id="email" name="email"
                                                        required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="message-text" class="col-form-label">Password: <span
                                                            class="text-danger">*</span></label>
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- end of modal --}}
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
                                                Showroom
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
                                                    <span
                                                        class="badge badge-info">{{ $user->showroom->name ?? '' }}</span>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btn-xs">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('admin.showrooms.admin.delete', $user->id) }}"
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
