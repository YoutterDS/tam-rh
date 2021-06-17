@extends('layouts.app-login')

@section('content')
<div class="container">
    <div class="row justify-content-center font-italic">

        <div class="col-9 col-sm-8 col-md-5 col-lg-4 col-xl-4">
            <h4 class="text-welcome">@lang('login.reset-password')</h4>

            <form method="POST" action="{{ route('password.update') }}" class="text-center">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">

                <img src="{{ asset('img/logos/tam-rh.svg') }}" alt="Logo TAM-RH" class="box-login_logo img-fluid">

                <div class="form-group mb-1">
                    <label for="email">@lang('login.email')</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" name="email" aria-describedby="emailHelp" required
                            value="{{ old('email') }}"
                            autofocus>
                </div>
                <div class="form-group mb-1">
                    <label for="email">@lang('login.password')</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password" required
                            value="{{ old('password') }}">
                </div>
                <div class="form-group">
                    <label for="email">@lang('login.confirm-password-placeholder')</label>
                    <input type="password" class="form-control  @error('password') is-invalid @enderror"
                            id="password_confirmation" name="password_confirmation" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">
                    @lang('login.update-password')
                </button>
            </form>
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <a class="small" href="{{ route('login') }}">@lang('login.already-have-an-account')</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
