@extends('layouts.dashboard')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Inicio</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">04.05.2020 - 16:45</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Bienvenido de nuevo John Doe</div>
                <small>Su último acceso fué hace 4 horas y tres minutos.</small>
            </div>
            <div class="col-auto">
                <i class="fas fa-door-open fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Próximo evento hoy</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">Reunión dep. contabilidad a las 10:25h</div>
                <small>&nbsp;</small>
            </div>
            <div class="col-auto">
                <i class="fas fa-calendar-day fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tareas</div>
                <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                    <small>&nbsp;</small>
                </div>
                <div class="col">
                    <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small>&nbsp;</small>
                </div>
                </div>
            </div>
            <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
            </div>
        </div>
        </div>
    </div>

    </div>

    <div class="row">
    <div class="col-lg-12 mb-12">
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Trabajadores que aún no han iniciado la jordana hoy</h6>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
            <table class="table " id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                <thead>
                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" width="40" >&nbsp;</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" >
                    Nombre</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" >
                    Departamento
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >
                    Entrada
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">
                    Salida
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >
                    Retraso
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >
                    Teléfono
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr role="row" class="odd">
                    <td class="align-middle">
                    <img src="https://randomuser.me/api/portraits/men/0.jpg" class="rounded-circle" width="40">
                    </td>
                    <td class="sorting_1 align-middle">
                    John Doe
                    </td>
                    <td class="align-middle">Producción</td>
                    <td class="align-middle">09:00h</td>
                    <td class="align-middle">16:00h</td>
                    <td class="align-middle">23 minutos</td>
                    <td class="align-middle"><a href="tel:000000000">66000000</a></td>
                </tr>
                <tr role="row" class="even">
                    <td class="align-middle">
                    <img src="https://randomuser.me/api/portraits/women/7.jpg" class="rounded-circle" width="40">
                    </td>
                    <td class="sorting_1 align-middle">
                    Jaen Doe
                    </td>
                    <td class="align-middle">Almacén</td>
                    <td class="align-middle">08:00h</td>
                    <td class="align-middle">12:30h</td>
                    <td class="align-middle">1 hora y 23 minutos</td>
                    <td class="align-middle"><a href="tel:000000000">66000001</a></td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        </div>

    </div>
    </div>
    <!-- Content Row -->
    <div class="row">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tareas pendientes</h6>
        </div>
        <div class="card-body">
            <div>
            <h5 class="font-weight-bold align-middle">
                <i class="far fa-square" style="font-size: 20px;"></i>
                Presupuesto proyecto Libber
            </h5>
            <div class="mb-3 pl-4">
                El presupuesto debe englobar el proceso de manutención del producto.
            </div>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="text-right">
                <small class="text-muted"><em>Fecha límite: 20.06.2020</em></small>
            </div>
            </div>
            <hr class="sidebar-divider">
            <div>
            <h5 class="font-weight-bold align-middle">
                <i class="far fa-square" style="font-size: 20px;"></i>
                Validación petición vacaciones.
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
            <div>
            <h5 class="font-weight-bold align-middle">
                <i class="far fa-square" style="font-size: 20px;"></i>
                Cuadrante semanal
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

    <div class="col-lg-6 mb-4">

        <!-- Approach -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Próximos eventos</h6>
            </div>
            <div class="card-body">
                <small><b>05/05/2020 a las 10:25</b></small>
                <p>Reunión dep. contabilidad, en la sala nº 1, 1era planta.</p>

                <hr class="sidebar-divider">

                <small><b>05/05/2020 a las 18:00</b></small>
                <p>Briefing dep. producción, en la sala nº 20, 3era planta.</p>

                <hr class="sidebar-divider">

                <small><b>07/05/2020 a las 09:14</b></small>
                <p>
                Reunión con cliente IntelIngen en Plaza Catalunya nº 25, 1ero 4ª - 08100 Barcelona.<br />
                <em>Persona de contacto: Jaen Doe.</em>
                </p>
            </div>
        </div>

    </div>
</div>
@endsection
