@extends('layouts.app-login')

@section('content')
<div class="container">
    <div class="row justify-content-center font-italic">

        <div class="col-9 col-sm-8 col-md-5 col-lg-4 col-xl-4">

            <h4 class="text-welcome">@lang('login.welcome-back')</h4>

            <form class="text-center" action="{{ route('dashboard.index') }}">

                <img src="{{ asset('img/logos/tam-rh.svg') }}" alt="Logo TAM-RH" class="box-login_logo img-fluid">

                @csrf
                <div class="form-group mb-1">
                    <label for="email">@lang('login.email')</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                           id="email" name="email" aria-describedby="emailHelp"
                           value="{{ old('email') }}"
                           autofocus >
                </div>
                <div class="form-group mb-0">
                    <label for="email">@lang('login.password')</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                           id="password" name="password"
                           value="{{ old('password') }}" >
                </div>
                <div class="form-group mt-1">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">@lang('login.remember-me')</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    @lang('login.login')
                </button>
            </form>
            <div class="d-flex justify-content-center mt-4">
                <div class="text-center">
                    <a href="{{ route('password.request') }}">@lang('login.forgot-password')</a>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection
