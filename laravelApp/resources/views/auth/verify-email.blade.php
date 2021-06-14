@extends('layouts.app-login')

@section('content')
<div class="container">
    <div class="row justify-content-center font-italic text-center">

        <div class="col-9 col-sm-8 col-md-5 col-lg-5 col-xl-5">

            <h4 class="text-welcome">{{ __('Verify Your Email Address') }}</h4>

            <img src="{{ asset('img/logos/tam-rh.svg') }}" alt="Logo TAM-RH" class="box-login_logo img-fluid">

            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            <p>
                {{ __('Before proceeding, please check your email for a verification link.') }}
            </p>
            <p>
                {{ __('If you did not receive the email') }},
            </p>
            <form class="d-inline mt-2" method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="btn btn-primary m-auto">{{ __('click here to request another') }}</button>
            </form>

            <p class="mt-4">
                <a href="{{ route('login') }}" class="btn btn-primary bg-success m-auto">{{ __('I have already verified the email') }}</a>
            </p>
        </div>

    </div>
</div>
@endsection
