@extends('layouts.dashboard')

@section('title-heading')
    @lang('subscription.title')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <livewire:subscription.index />
        </div>
    </div>
@endsection
