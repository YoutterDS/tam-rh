<div class="filter-button-section p-2 text-right">
    @if ($import)
        @include('dashboard.team.modals.import-employers')
        @include('dashboard.team.modals.export-employers')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#importEmployersModal">
            <i class="fas fa-file-import"></i> <span>Importar empleados</span>
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exportEmployersModal">
            <i class="fas fa-file-export"></i> <span>Exportar empleados</span>
        </button>
    @else
        <div class="card-body p-2">
            <div class="row">
                <div class="col-sm">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-fw fa-user"></i></span>
                        </div>
                        <input type="text" id="searchEmployersInput" onkeyup="filterMembers()" class="form-control" placeholder="Buscar empleado" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-fw fa-users"></i></label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Filtrar por departamento</option>
                            <option value="DIRECTION">DIRECTION</option>
                            <option value="IT">IT</option>
                            <option value="MARKETING">MARKETING</option>
                            <option value="RRHH">RRHH</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-fw fa-building"></i></label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Filtrar por oficina</option>
                            <option value="1">BARCELONA</option>
                            <option value="2">GIRONA</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm">
                    <a href="{{ route('team.new', ['locale'=>app()->getLocale()]) }}" class="text-decoration-none" target="_blank">
                        <button type="button" class="btn btn-success text-uppercase"><i class="fas fa-user-plus"></i> Alta nuevo empleado</button>
                    </a>
                </div>
            </div>
        </div>
    @endif
</div>
