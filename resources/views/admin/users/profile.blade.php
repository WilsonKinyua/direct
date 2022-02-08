@extends('layouts.main-admin')
@section('content')

    <div class="page-content-wrapper">
        <div class="page-content">
            <div class="page-bar">
                <div class="page-title-breadcrumb">
                    <div class=" pull-left">
                        <div class="page-title">My Account</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                                href="{{ route('admin.home') }}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
                        </li>
                        <li class="active">User Profile</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <div class="card">
                            <div class="card-body no-padding height-9">
                                <div class="row">
                                    <div class="profile-userpic">
                                        @if (Auth::user()->avatar)
                                            <img src="{{ Auth::user()->avatar->getUrl() }}" class="img-responsive" alt="">
                                        @else
                                            <img src="{{ asset('images/avatar.jpeg') }}" class="img-responsive" alt="">
                                        @endif
                                    </div>
                                </div>
                                <div class="profile-usertitle">
                                    <div class="profile-usertitle-name">{{ Auth::user()->name ?? '' }}</div>
                                    <div class="profile-usertitle-job"> <a
                                            href="mailto:{{ Auth::user()->email ?? '' }}">{{ Auth::user()->email ?? '' }}</a>
                                    </div>
                                </div>
                                <ul class="list-group list-group-unbordered">
                                    <li class="list-group-item">
                                        <b>Location</b> <a class="pull-right">{{ Auth::user()->location ?? '' }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Gender</b> <a class="pull-right">{{ Auth::user()->gender ?? '' }}</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Phone</b> <a class="pull-right">{{ Auth::user()->phone_number ?? '' }}</a>
                                    </li>
                                </ul>
                                {{-- <!-- END SIDEBAR USER TITLE -->
                                <!-- SIDEBAR BUTTONS -->
                                <div class="profile-userbuttons">
                                    <button type="button" class="btn btn-circle green btn-sm">Follow</button>
                                    <button type="button" class="btn btn-circle red btn-sm">Message</button>
                                </div>
                                <!-- END SIDEBAR BUTTONS --> --}}
                            </div>
                        </div>
                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->
                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="card-head">
                                        <header>My Account</header>
                                    </div>
                                    <form action="{{ route('admin.user.profile.update', [Auth::user()->id]) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                                        @csrf
                                        <div class="card-body row">
                                            <div class="col-lg-6 p-t-20">
                                                <div
                                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                    <input class="mdl-textfield__input" type="text"
                                                        value="{{ Auth::user()->name ?? '' }}" id="txtFirstName"
                                                        name="name" required>
                                                    <label class="mdl-textfield__label">Name</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 p-t-20">
                                                <div
                                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                    <input class="mdl-textfield__input" type="text"
                                                        value="{{ Auth::user()->phone_number ?? '' }}" id="txtRollNo"
                                                        name="phone_number">
                                                    <label class="mdl-textfield__label">Phone</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 p-t-20">
                                                <div
                                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                    <input class="mdl-textfield__input" type="email" name="email"
                                                        id="txtemail" value="{{ Auth::user()->email ?? '' }}" required>
                                                    <label class="mdl-textfield__label">Email</label>
                                                    <span class="mdl-textfield__error">Enter Valid Email Address!</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 p-t-20">
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <select class="form-select" name="gender" id="gender" required>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 p-t-20">
                                                <div
                                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                    <input class="mdl-textfield__input" type="text"
                                                        value="{{ Auth::user()->location ?? '' }}" id="date"
                                                        name="location">
                                                    <label class="mdl-textfield__label">Location</label>
                                                </div>
                                            </div>
                                            {{-- <div class="col-lg-12 p-t-20">
                                                <label class="control-label col-md-3">Upload Photo
                                                </label>
                                                <div class="col-md-12">
                                                    <div id="id_dropzone" class="dropzone"></div>
                                                </div>
                                            </div> --}}
                                            <div class="col-lg-12">
                                                <div
                                                    class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                                                    <label class="control-label col-md-12">Upload Photo
                                                        <div class="col-md-12">
                                                            <div class="needsclick dropzone {{ $errors->has('avatar') ? 'is-invalid' : '' }}"
                                                                id="avatar-dropzone">
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 p-t-20 text-center">
                                                <button type="submit"
                                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Update
                                                    Profile</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE CONTENT -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end page content -->
    </div>
@endsection
@section('js')
    <script>
        Dropzone.options.avatarDropzone = {
            url: '{{ route('admin.users.storeMedia') }}',
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('form').find('input[name="avatar"]').remove()
                $('form').append('<input type="hidden" name="avatar" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="avatar"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($showroomAvatar) && $showroomAvatar->avatar)
                    var file = {!! json_encode($showroomAvatar->avatar) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="avatar" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
@endsection
