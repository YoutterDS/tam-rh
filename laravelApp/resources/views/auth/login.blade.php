@extends('layouts.app-login')

@section('content')
<div class="container">
    <div class="row justify-content-center font-italic">

        <div class="col-9 col-sm-8 col-md-5 col-lg-4 col-xl-4">

            <h4 class="text-welcome">@lang('login.welcome-back')</h4>

            <livewire:login />

        </div>

    </div>
</div>
@endsection
