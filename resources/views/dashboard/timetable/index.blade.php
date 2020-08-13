@extends('layouts.dashboard')

@section('content')

    <div class="row" id="control-horario">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-clipboard-list"></i> Control horario</h1>
        </div>

        <div class="card shadow col-lg-12 card-section">
            <div class="card-header">
                <ul class="nav justify-content-center" id="tab1">
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="tab">
                            <i class="fas fa-fw fa-chevron-left"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#empleados" id="datapicker">Mayo 2020</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link grey" data-toggle="tab">
                            <i class="fas fa-fw fa-chevron-right opacity-40"></i>
                        </a>
                    </li>
                </ul>
            </div>
            @include('dashboard.timetable.partials.modals.filter-employers-list')
            <div class="filter-button-section">
                @include('dashboard.timetable.partials.index-buttons')
            </div>
            @include('dashboard.timetable.partials.modals.time-table-ok')
            @include('dashboard.timetable.partials.modals.time-table-pending')
            <div class="card-body p-2">
                <div class="list-group employers-list">
                    <div class="list-group-item list-group-item-action employers-detail" data-dpt="DIRECTION">
                        @include('dashboard.partials.employers.info-section', ['name' => 'Ramon Ribera', 'job' => 'Manager','dptm' => 'DIRECTION'])
                        <div class="actions-section">
                            <div class="employer-action">
                                @include('dashboard.timetable.partials.register-status', ['registerStatus' => 1])
                                <button type="button" class="btn btn-primary" title="Ver registro horario" data-toggle="modal"
                                        data-target="#timetableExampleModal1">
                                    <i class="fas fa-calendar-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action employers-detail" data-dpt="IT">
                        @include('dashboard.partials.employers.info-section', ['name' => 'Ramon Ribera', 'job' => 'IT Manager','dptm' => 'IT'])
                        <div class="actions-section">
                            <div class="employer-action">
                                @include('dashboard.timetable.partials.register-status', ['registerStatus' => 0])
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#timetableExampleModal2">
                                    <i class="fas fa-calendar-alt"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action employers-detail" data-dpt="MARKETING">
                        @include('dashboard.partials.employers.info-section', ['name' => 'Ruben Centelles', 'job' => 'Social Manager','dptm' => 'Marketing'])
                        <div class="actions-section">
                            <div class="employer-action">
                                @include('dashboard.timetable.partials.register-status', ['registerStatus' => 1])
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#timetableExampleModal1"><i
                                        class="fas fa-calendar-alt"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action employers-detail" data-dpt="IT">
                        @include('dashboard.partials.employers.info-section', ['name' => 'Pau Garcia', 'job' => 'Web Developer','dptm' => 'IT'])
                        <div class="actions-section">
                            <div class="employer-action">
                                @include('dashboard.timetable.partials.register-status', ['registerStatus' => 1])
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#timetableExampleModal1"><i
                                        class="fas fa-calendar-alt"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action employers-detail disabled" data-dpt="RRHH">
                        @include('dashboard.partials.employers.info-section', ['name' => 'ROCIO Contrata', 'job' => 'IT Talent Acquisition','dptm' => 'RRHH'])
                        <div class="actions-section">
                            <div class="employer-action">
                                @include('dashboard.timetable.partials.register-status', ['registerStatus' => 1])
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#timetableExampleModal1"><i
                                        class="fas fa-calendar-alt"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action employers-detail" data-dpt="RRHH">
                        @include('dashboard.partials.employers.info-section', ['name' => 'Manuel Garcia', 'job' => 'RRHH Manager','dptm' => 'RRHH'])
                        <div class="actions-section">
                            <div class="employer-action">
                                @include('dashboard.timetable.partials.register-status', ['registerStatus' => 1])
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#timetableExampleModal1"><i
                                        class="fas fa-calendar-alt"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-button-section">
                @include('dashboard.timetable.partials.index-buttons')
            </div>
        </div>
    </div>
@endsection
