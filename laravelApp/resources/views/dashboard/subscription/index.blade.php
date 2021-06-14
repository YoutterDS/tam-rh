@extends('layouts.dashboard')

@section('title-heading')
    @lang('subscription.title')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box-subscriptions">
                @include('dashboard.subscription.partials.basic')

                @include('dashboard.subscription.partials.business')

                @include('dashboard.subscription.partials.excellence')

                @include('dashboard.subscription.partials.premium')
            </div>
        </div>
    </div>
@endsection
