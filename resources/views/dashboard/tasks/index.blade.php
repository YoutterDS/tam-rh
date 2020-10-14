@extends('layouts.dashboard')

@section('content')

    <style>
        .task .edit-btns {
            visibility: hidden !important;
            font-size: 0.9rem;
        }
        .task:hover .edit-btns {
            visibility: visible !important;
        }
    </style>

    <div class="row">

        @include('dashboard.tasks.modals.new')

        <div class="d-sm-flex align-items-center w-100 px-1 justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-clipboard-list"></i> Tareas</h1>
            <button type="button" class="justify-content-end btn btn-sm btn-success text-uppercase" data-toggle="modal" data-target="#new-task-modal">
                <i class="fas fa-fw fa-clipboard-list"></i> Nueva tarea
            </button>
        </div>

        <div class="card shadow w-100 card-section p-2">
            <div class="card-header ">
                <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tareas"><i class="fas fa-fw fa-calendar"></i> Tareas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#historial"><i class="fas fa-fw fa-history"></i> Historial de tareas</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="pills-tabContent">
                    <div id="tareas"  class="tab-pane fade show active">
                        <div class="row">
                            <div class="col-lg-6 mb-4 px-4">
                                <!-- Project Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Tareas pendientes para hoy</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="task">
                                            <h5 class="task-title font-weight-bold align-middle">
                                                <i class="far fa-check-square text-success" style="font-size: 20px;"></i>
                                                Presupuesto proyecto Libber
                                                <div class="edit-btns float-right">
                                                    <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                                    <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </h5>

                                            <div class="task-description mb-3 pl-4">
                                                El presupuesto debe englobar el proceso de manutención del producto.
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-success  " role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="text-right">
                                                <small class="text-muted"><em>Fecha límite: 20.06.2020</em></small>
                                            </div>
                                        </div>
                                        <hr class="sidebar-divider">
                                        <div class="task">
                                            <h5 class="font-weight-bold align-middle">
                                                <i class="far fa-square" style="font-size: 20px;"></i>
                                                Validación petición vacaciones.
                                                <div class="edit-btns float-right">
                                                    <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                                    <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </h5>
                                            <div class="mb-4 pl-4">
                                                Validar días libres trabajador John Doe de este mes.
                                            </div>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="text-right">
                                                <small class="text-muted"><em>Fecha límite: 18.05.2020</em></small>
                                            </div>
                                        </div>
                                        <hr class="sidebar-divider">
                                        <div class="task">
                                            <h5 class="font-weight-bold align-middle">
                                                <i class="far fa-square" style="font-size: 20px;"></i>
                                                Cuadrante semanal
                                                <div class="edit-btns float-right">
                                                    <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                                    <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                                </div>
                                            </h5>
                                            <div class="mb-4 pl-4">
                                                Se debe presentar el cuadrante semanal para el departamento de fábrica.
                                            </div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-right">
                                            <small class="text-muted"><em>Fecha límite: 06.05.2020</em></small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-4 px-4">
                                <!-- Project Card Example -->
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Otras tareas pendientes</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="task">
                                            <h7 class="font-weight-bold align-middle">
                                                <i class="far fa-square" style="font-size: 16px;"></i>
                                                Validación petición vacaciones.</h7>
                                            <div class="edit-btns float-right">
                                                <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                                <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                            <div class="mb-4 pl-4">
                                                Validar días libres trabajador John Doe de este mes.
                                            </div>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="text-right ">
                                                <small class="text-muted"><em>Fecha límite: 18.05.2020</em></small>
                                            </div>
                                        </div>
                                        <hr class="sidebar-divider">
                                        <div class="task">
                                            <h7 class="task-title font-weight-bold align-middle">
                                                <i class="far fa-check-square text-success" style="font-size: 16px;"></i>
                                                Presupuesto proyecto Libber
                                            </h7>
                                            <div class="edit-btns float-right">
                                                <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                                <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                            <div class="task-description mb-3 pl-4">
                                                El presupuesto debe englobar el proceso de manutención del producto.
                                            </div>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="text-right">
                                                <small class="text-muted"><em>Fecha límite: 20.06.2020</em></small>
                                            </div>
                                        </div>
                                        <hr class="sidebar-divider">
                                        <div class="task">
                                            <h7 class="task-title font-weight-bold align-middle">
                                                <i class="far fa-check-square text-success" style="font-size: 16px;"></i>
                                                Presupuesto proyecto Libber
                                            </h7>
                                            <div class="edit-btns float-right">
                                                <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                                <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                            <div class="task-description mb-3 pl-4">
                                                El presupuesto debe englobar el proceso de manutención del producto.
                                            </div>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="text-right">
                                                <small class="text-muted"><em>Fecha límite: 20.06.2020</em></small>
                                            </div>
                                        </div>
                                        <hr class="sidebar-divider">
                                        <div class="task">
                                            <h7 class="font-weight-bold align-middle">
                                                <i class="far fa-square" style="font-size: 16px;"></i>
                                                Cuadrante semanal
                                            </h7>
                                            <div class="edit-btns float-right">
                                                <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                                <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                            <div class="mb-4 pl-4">
                                                Se debe presentar el cuadrante semanal para el departamento de fábrica.
                                            </div>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-right">
                                            <small class="text-muted"><em>Fecha límite: 06.05.2020</em></small>
                                        </div>
                                        <hr class="sidebar-divider">
                                        <div class="task">
                                            <h7 class="font-weight-bold align-middle">
                                                <i class="far fa-square" style="font-size: 16px;"></i>
                                                Validación petición vacaciones.</h7>
                                            <div class="edit-btns float-right">
                                                <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                                <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                            <div class="mb-4 pl-4">
                                                Validar días libres trabajador John Doe de este mes.
                                            </div>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="text-right ">
                                                <small class="text-muted"><em>Fecha límite: 18.05.2020</em></small>
                                            </div>
                                        </div>
                                        <hr class="sidebar-divider">
                                        <div class="task">
                                            <h7 class="task-title font-weight-bold align-middle">
                                                <i class="far fa-check-square text-success" style="font-size: 16px;"></i>
                                                Presupuesto proyecto Libber
                                            </h7>
                                            <div class="edit-btns float-right">
                                                <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                                <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                            <div class="task-description mb-3 pl-4">
                                                El presupuesto debe englobar el proceso de manutención del producto.
                                            </div>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="text-right">
                                                <small class="text-muted"><em>Fecha límite: 20.06.2020</em></small>
                                            </div>
                                        </div>
                                        <hr class="sidebar-divider">
                                        <div class="task">
                                            <h7 class="task-title font-weight-bold align-middle">
                                                <i class="far fa-check-square text-success" style="font-size: 16px;"></i>
                                                Presupuesto proyecto Libber
                                            </h7>
                                            <div class="edit-btns float-right">
                                                <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                                <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                            <div class="task-description mb-3 pl-4">
                                                El presupuesto debe englobar el proceso de manutención del producto.
                                            </div>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="text-right">
                                                <small class="text-muted"><em>Fecha límite: 20.06.2020</em></small>
                                            </div>
                                        </div>
                                        <hr class="sidebar-divider">
                                        <div class="task">
                                            <h7 class="font-weight-bold align-middle">
                                                <i class="far fa-square" style="font-size: 16px;"></i>
                                                Cuadrante semanal
                                            </h7>
                                            <div class="edit-btns float-right">
                                                <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                                <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                            <div class="mb-4 pl-4">
                                                Se debe presentar el cuadrante semanal para el departamento de fábrica.
                                            </div>
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-right">
                                            <small class="text-muted"><em>Fecha límite: 06.05.2020</em></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="historial" class="tab-pane fade">
                        <div class="mb-4 px-4">
                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Tareas anteriores</h6>
                                </div>
                                <div class="card-body">
                                    <div class="task">
                                        <h7 class="font-weight-bold align-middle">
                                            <i class="far fa-square" style="font-size: 16px;"></i>
                                            Validación petición vacaciones.</h7>
                                        <div class="edit-btns float-right">
                                            <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                            <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                        <div class="mb-4 pl-4">
                                            Validar días libres trabajador John Doe de este mes.
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-right ">
                                            <small class="text-muted"><em>Fecha límite: 18.05.2020</em></small>
                                        </div>
                                    </div>
                                    <hr class="sidebar-divider">
                                    <div class="task">
                                        <h7 class="task-title font-weight-bold align-middle">
                                            <i class="far fa-check-square text-success" style="font-size: 16px;"></i>
                                            Presupuesto proyecto Libber
                                        </h7>
                                        <div class="edit-btns float-right">
                                            <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                            <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                        <div class="task-description mb-3 pl-4">
                                            El presupuesto debe englobar el proceso de manutención del producto.
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-right">
                                            <small class="text-muted"><em>Fecha límite: 20.06.2020</em></small>
                                        </div>
                                    </div>
                                    <hr class="sidebar-divider">
                                    <div class="task">
                                        <h7 class="task-title font-weight-bold align-middle">
                                            <i class="far fa-check-square text-success" style="font-size: 16px;"></i>
                                            Presupuesto proyecto Libber
                                        </h7>
                                        <div class="edit-btns float-right">
                                            <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                            <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                        <div class="task-description mb-3 pl-4">
                                            El presupuesto debe englobar el proceso de manutención del producto.
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-right">
                                            <small class="text-muted"><em>Fecha límite: 20.06.2020</em></small>
                                        </div>
                                    </div>
                                    <hr class="sidebar-divider">
                                    <div class="task">
                                        <h7 class="task-title font-weight-bold align-middle">
                                            <i class="far fa-check-square text-success" style="font-size: 16px;"></i>
                                            Presupuesto proyecto Libber
                                        </h7>
                                        <div class="edit-btns float-right">
                                            <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                            <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                        <div class="task-description mb-3 pl-4">
                                            El presupuesto debe englobar el proceso de manutención del producto.
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-right">
                                            <small class="text-muted"><em>Fecha límite: 20.06.2020</em></small>
                                        </div>
                                    </div>
                                    <hr class="sidebar-divider">
                                    <div class="task">
                                        <h7 class="task-title font-weight-bold align-middle">
                                            <i class="far fa-check-square text-success" style="font-size: 16px;"></i>
                                            Presupuesto proyecto Libber
                                        </h7>
                                        <div class="edit-btns float-right">
                                            <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                            <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                        <div class="task-description mb-3 pl-4">
                                            El presupuesto debe englobar el proceso de manutención del producto.
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-right">
                                            <small class="text-muted"><em>Fecha límite: 20.06.2020</em></small>
                                        </div>
                                    </div>
                                    <hr class="sidebar-divider">
                                    <div class="task">
                                        <h7 class="task-title font-weight-bold align-middle">
                                            <i class="far fa-check-square text-success" style="font-size: 16px;"></i>
                                            Presupuesto proyecto Libber
                                        </h7>
                                        <div class="edit-btns float-right">
                                            <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                            <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                        <div class="task-description mb-3 pl-4">
                                            El presupuesto debe englobar el proceso de manutención del producto.
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-right">
                                            <small class="text-muted"><em>Fecha límite: 20.06.2020</em></small>
                                        </div>
                                    </div>
                                    <hr class="sidebar-divider">
                                    <div class="task">
                                        <h7 class="task-title font-weight-bold align-middle">
                                            <i class="far fa-check-square text-success" style="font-size: 16px;"></i>
                                            Presupuesto proyecto Libber
                                        </h7>
                                        <div class="edit-btns float-right">
                                            <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                            <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                        <div class="task-description mb-3 pl-4">
                                            El presupuesto debe englobar el proceso de manutención del producto.
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-right">
                                            <small class="text-muted"><em>Fecha límite: 20.06.2020</em></small>
                                        </div>
                                    </div>
                                    <hr class="sidebar-divider">
                                    <div class="task">
                                        <h7 class="task-title font-weight-bold align-middle">
                                            <i class="far fa-check-square text-success" style="font-size: 16px;"></i>
                                            Presupuesto proyecto Libber
                                        </h7>
                                        <div class="edit-btns float-right">
                                            <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                            <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                        <div class="task-description mb-3 pl-4">
                                            El presupuesto debe englobar el proceso de manutención del producto.
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-right">
                                            <small class="text-muted"><em>Fecha límite: 20.06.2020</em></small>
                                        </div>
                                    </div>
                                    <hr class="sidebar-divider">
                                    <div class="task">
                                        <h7 class="task-title font-weight-bold align-middle">
                                            <i class="far fa-check-square text-success" style="font-size: 16px;"></i>
                                            Presupuesto proyecto Libber
                                        </h7>
                                        <div class="edit-btns float-right">
                                            <a class="edit-btn" href=""><i class="fas fa-pen mr-1"></i></a>
                                            <a class="delete-btn" href=""><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                        <div class="task-description mb-3 pl-4">
                                            El presupuesto debe englobar el proceso de manutención del producto.
                                        </div>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="text-right">
                                            <small class="text-muted"><em>Fecha límite: 20.06.2020</em></small>
                                        </div>
                                    </div>
                                    <hr class="sidebar-divider">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
