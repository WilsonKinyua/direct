@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <p class="text-muted">Set Password</p>

                    <form method="POST" action="{{ route('showroom.account.password') }}">
                        @csrf
                        <input name="token" value="{{ $showroom->token }}" type="hidden">
                        <div class="form-group">
                            <input id="admin_name" type="text" name="admin_name"
                                class="form-control{{ $errors->has('admin_name') ? ' is-invalid' : '' }}" required
                                autocomplete="admin_name" autofocus placeholder="{{ trans('global.login_email') }}"
                                value="{{ $showroom->admin_name }}">
                        </div>
                        {{-- <div class="form-group">
                            <input id="admin_email" type="email" name="admin_email"
                                class="form-control{{ $errors->has('admin_email') ? ' is-invalid' : '' }}" required
                                autocomplete="admin_email" autofocus placeholder="{{ trans('global.login_email') }}"
                                value="{{ $showroom->admin_email }}" disabled>
                        </div> --}}
                        <div class="form-group">
                            <input id="password" type="password" name="password" class="form-control" required
                                placeholder="{{ trans('global.login_password') }}">

                            @if ($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>
                        {{-- <div class="form-group">
                            <input id="password-confirm" type="password" name="password_confirmation" class="form-control"
                                required placeholder="{{ trans('global.login_password_confirmation') }}">
                        </div> --}}

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary btn-block btn-flat">
                                    Set Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
