@extends('layouts.dashboard')

@section('content')
    <div class="row" id="team-departamentos">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-uppercase"><i class="fas fa-fw fa-users"></i> Departamentos</h1>
        </div>
        <div class="card shadow col-lg-12 card-section">
            <div class="card-body p-2">
            <div class="row text-right">
                <div class="col-sm">
                    <a href="http://local.tam.com/dashboard/es/team/new" class="text-decoration-none" target="_blank">
                        <button type="button" class="btn btn-success text-uppercase"><i class="fas fa-user-plus"></i> Crear departamento</button>
                    </a>
                </div>
            </div>
            </div>
            <div class="card-body p-2">
                <div class="list-group dpm-list">
                    <div class="list-group-item list-group-item-action dpm-detail" data-name="MARKETING">
                        <div class="info-section">
                            <div class="dpm-logo">
                                <i class="fab fa-adversal"></i>
                            </div>
                            <div class="dpm-info">
                                <p>
                                    <span class="dtm-name">MARKETING</span>
                                </p>
                            </div>
                        </div>
                        <div class="actions-section">
                            <div class="dpm-action">
                                <button type="button" class="btn btn-link btn-employers" title="Editar departamento" style="color: black;text-decoration: none;">
                                    9 <i class="fas fa-users"></i>
                                </button>
                                <button type="button" class="btn btn-primary" title="Editar departamento">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action dpm-detail" data-name="RRHH">
                        <div class="info-section">
                            <div class="dpm-logo">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="dpm-info">
                                <p>
                                    <span class="dtm-name">RRHH</span>
                                </p>
                            </div>
                        </div>
                        <div class="actions-section">
                            <div class="dpm-action">
                                <button type="button" class="btn btn-link btn-employers" title="Editar departamento" style="color: black;text-decoration: none;">
                                    5 <i class="fas fa-users"></i>
                                </button>
                                <button type="button" class="btn btn-primary" title="Editar departamento">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action dpm-detail" data-name="SALES">
                        <div class="info-section">
                            <div class="dpm-logo">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div class="dpm-info">
                                <p>
                                    <span class="dtm-name">SALES</span>
                                </p>
                            </div>
                        </div>
                        <div class="actions-section">
                            <div class="dpm-action">
                                <button type="button" class="btn btn-link btn-employers" title="Editar departamento" style="color: black;text-decoration: none;">
                                    20 <i class="fas fa-users"></i>
                                </button>
                                <button type="button" class="btn btn-primary" title="Editar departamento">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="list-group-item list-group-item-action dpm-detail" data-name="MARKETING">
                        <div class="info-section">
                            <div class="dpm-logo">
                                <i class="fab fa-black-tie"></i>
                            </div>
                            <div class="dpm-info">
                                <p><span class="dtm-name">DIRECTION</span></p>
                            </div>
                        </div>
                        <div class="actions-section">
                            <div class="dpm-action">
                                <button type="button" class="btn btn-link btn-employers" title="Editar departamento" style="color: black;text-decoration: none;">
                                    5 <i class="fas fa-users"></i>
                                </button>
                                <button type="button" class="btn btn-primary" title="Editar departamento">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
