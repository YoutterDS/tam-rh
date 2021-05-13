@extends('layouts.dashboard')

@section('title-heading')
    @lang('employees.title')
@endsection

@section('content')
    <div class="row">

        <div class="col-lg-12">
            <ul class="nav nav-pills">
                <li class="nav-pills-item">
                    <a class="nav-pills-item_link" data-toggle="tab" href="#{{ Str::slug(\Lang::get('nav-pills.employees-employees')) }}">
                        @lang('nav-pills.employees-employees')
                    </a>
                </li>
                <li class="nav-pills-item">
                    <a class="nav-pills-item_link" data-toggle="tab" href="#{{ Str::slug(\Lang::get('nav-pills.employees-departments')) }}">
                        @lang('nav-pills.employees-departments')
                    </a>
                </li>
                <li class="nav-pills-item">
                    <a class="nav-pills-item_link" data-toggle="tab" href="#{{ Str::slug(\Lang::get('nav-pills.employees-organization-chart')) }}">
                        @lang('nav-pills.employees-organization-chart')
                    </a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <div id="{{ Str::slug(\Lang::get('nav-pills.employees-employees')) }}" class="tab-pane fade">
                    @include('dashboard.employees.sections.employees')
                </div>
                <div id="{{ Str::slug(\Lang::get('nav-pills.employees-departments')) }}" class="tab-pane fade">
                    @include('dashboard.employees.sections.departments')
                </div>
                <div id="{{ Str::slug(\Lang::get('nav-pills.employees-organization-chart')) }}" class="tab-pane fade">
                    @include('dashboard.employees.sections.organigrama')
                </div>
            </div>
        </div>
    </div>
@endsection
