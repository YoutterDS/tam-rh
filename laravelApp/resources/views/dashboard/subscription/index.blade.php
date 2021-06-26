@extends('layouts.dashboard')

@section('title-heading')
    @lang('subscription.title')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box-subscriptions">
                @foreach( \App\Models\Package::where('code', '<>', 'DEM')->get() as $package )
                    @include('dashboard.subscription.partials.base', ['type'=>null, 'extraclass'=>''])
                @endforeach
            </div>
        </div>
    </div>
@endsection
