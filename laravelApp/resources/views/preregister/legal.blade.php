@extends('layouts.preregister')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mt-5">
            <img src="{{ asset('img/logos/tam-rh.svg') }}" alt="Logo TAM-RH" class="box-login_logo img-fluid mx-auto">
            @lang('legal.text', ['businessName'=>'YOUTTER DIGITAL ADVERTISING, S.L.'])
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-5">
            @lang('cookies.text', ['businessName'=>'YOUTTER DIGITAL ADVERTISING, S.L.'])
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
    .box-login {
        width: 1200px;
        margin: auto;
    }
</style>
@endsection
