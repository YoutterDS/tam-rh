@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-uppercase"><i class="fas fa-list"></i> Listado de Empleados</h1>
        </div>
        <div class="card shadow col-lg-12 card-section">
            @include('dashboard.team.partials.team-list-buttons', ['import' => false])
            <div class="card-body p-2">
                <input id="searchEmployersInput" onkeyup="filterMembers()" type="text">
            </div>
            <div class="card-body p-2">
                <div class="list-group employers-list" id="employersListEmployersPage">
                    <div class="list-group-item list-group-item-action employers-detail" data-name="Ramon" data-dpt="DIRECTION">
                        @include('dashboard.partials.employers.info-section', ['name' => 'Ramon Ribera', 'job' => 'Manager','dptm' => 'DIRECTION'])
                        <div class="actions-section">
                            <div class="employer-action">
                                @include('dashboard.team.partials.send-email-to-employer-btn')
                                <button type="button" class="btn btn-primary" title="Ver registro horario" data-toggle="modal"
                                        data-target="#infoEmployerModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action employers-detail" data-name="Ramon" data-dpt="IT">
                        @include('dashboard.partials.employers.info-section', ['name' => 'Ramon Ribera', 'job' => 'IT Manager','dptm' => 'IT'])
                        <div class="actions-section">
                            <div class="employer-action">
                                @include('dashboard.team.partials.send-email-to-employer-btn')
                                <button type="button" class="btn btn-primary" title="Ver registro horario" data-toggle="modal"
                                        data-target="#infoEmployerModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action employers-detail" data-name="Ruben" data-dpt="MARKETING">
                        @include('dashboard.partials.employers.info-section', ['name' => 'Ruben Centelles', 'job' => 'Social Manager','dptm' => 'Marketing'])
                        <div class="actions-section">
                            <div class="employer-action">
                                @include('dashboard.team.partials.send-email-to-employer-btn')
                                <button type="button" class="btn btn-primary" title="Ver registro horario" data-toggle="modal"
                                        data-target="#infoEmployerModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action employers-detail" data-name="Pau" data-dpt="IT">
                        @include('dashboard.partials.employers.info-section', ['name' => 'Pau Garcia', 'job' => 'Web Developer','dptm' => 'IT'])
                        <div class="actions-section">
                            <div class="employer-action">
                                @include('dashboard.team.partials.send-email-to-employer-btn')
                                <button type="button" class="btn btn-primary" title="Ver registro horario" data-toggle="modal"
                                        data-target="#infoEmployerModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action employers-detail disabled" data-name="Rocio" data-dpt="RRHH">
                        @include('dashboard.partials.employers.info-section', ['name' => 'ROCIO Contrata', 'job' => 'IT Talent Acquisition','dptm' => 'RRHH'])
                        <div class="actions-section">
                            <div class="employer-action">
                                @include('dashboard.team.partials.send-email-to-employer-btn')
                                <button type="button" class="btn btn-primary" title="Ver registro horario" data-toggle="modal"
                                        data-target="#infoEmployerModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action employers-detail" data-name="Manuel" data-dpt="RRHH">
                        @include('dashboard.partials.employers.info-section', ['name' => 'Manuel Garcia', 'job' => 'RRHH Manager','dptm' => 'RRHH'])
                        <div class="actions-section">
                            <div class="employer-action">
                                @include('dashboard.team.partials.send-email-to-employer-btn')
                                <button type="button" class="btn btn-primary" title="Ver registro horario" data-toggle="modal"
                                        data-target="#infoEmployerModal">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-button-section">
                @include('dashboard.team.partials.team-list-buttons', ['import' => true])
            </div>
        </div>
    </div>
    @include('dashboard.timetable.partials.modals.filter-employers-list')
    @include('dashboard.team.modals.info-employer')
    @include('dashboard.team.modals.send-email-to-employer')
@endsection


@section('js')
    <script>
        function filterMembers() {
            let employers = $(".employers-detail");
            let input, filter, list, items;
            input = document.getElementById("searchEmployersInput");
            filter = input.value.toUpperCase();
            list = document.getElementById("employersListEmployersPage");
            items = list.getElementsByClassName("employers-detail");

            const elements = document.querySelectorAll('.employers-detail');

            $('#employersListEmployersPage .employers-detail').each(function (item, i) {
                 let name = $(this).data('name');
                if (name.toUpperCase().indexOf(filter) > -1) {
                    $(this).removeClass('d-none');
                } else {
                    $(this).addClass('d-none');
                }
            });
        }
    </script>
    @endsection
