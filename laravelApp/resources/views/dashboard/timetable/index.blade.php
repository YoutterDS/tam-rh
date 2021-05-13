@extends('layouts.dashboard')

@section('title-heading')
    @lang('timetable.title')
@endsection

@section('content')
    <div class="row" id="timetable">

        <div class="col-lg-12">
            <div class="box-timetable-selector">
                <a class="box-timetable-selector--item prev" href="#">
                    <img src="{{ asset('img/icons/blue/arrow-down.svg') }}" alt="">
                </a>
                <a class="box-timetable-selector--item datepicker" href="#empleados" id="datapicker">
                    {{ \Carbon\Carbon::now()->formatLocalized('%B') }} {{ \Carbon\Carbon::now()->format('Y') }}
                </a>
                <a class="box-timetable-selector--item next grey">
                    <img src="{{ asset('img/icons/blue/arrow-down.svg') }}" alt="">
                </a>
            </div>

            <div class="filter-button-section">
                @include('dashboard.timetable.partials.filters')
            </div>

            <div class="list-employees list-employees-grey">
                @foreach( range(0, 6) as $item)
                    @include('dashboard.timetable.partials.list-item', ['section'=>'employeer'])
                @endforeach
            </div>

            <div class="filter-button-section">
                <button class="btn btn-primary btn-forms">@lang('timetable.download-report')</button>
            </div>
        </div>

    </div>
@endsection

@section('js-sections')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
@endsection
