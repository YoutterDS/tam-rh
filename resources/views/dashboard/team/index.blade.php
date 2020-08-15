@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-users"></i> Empleados</h1>
        </div>
        <div class="card shadow col-lg-12 card-section">
            <div class="card-header">
                <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#{{ str_slug(\Lang::get('nav-pills.settings-profile')) }}"><i class="fas fa-list"></i> Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#{{ str_slug(\Lang::get('nav-pills.settings-offices')) }}"><i class="fas fa-users"></i> Departamentos</a>
                    </li>

                </ul>
            </div>
            <div class="card-body p-0 ">
                <div class="tab-content" id="pills-tabContent">
                    <div id="{{ str_slug(\Lang::get('nav-pills.settings-profile')) }}" class="tab-pane fade show">
                        @include('dashboard.team.sections.list')
                    </div>
                    <div id="{{ str_slug(\Lang::get('nav-pills.settings-offices')) }}" class="tab-pane fade">
                        @include('dashboard.team.sections.dptm')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
