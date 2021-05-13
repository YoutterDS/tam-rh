@if ($import)
<div class="row">
    <div class="col-md d-sm-none d-md-block  mb-2"></div>
    <div class="col-6 col-md mb-2">
        <button type="button" class="btn btn-secondary w-100 btn-with-icon" data-toggle="modal" data-target="#importEmployersModal">
            <span>@lang('main.import')</span>
            <img class="icon" src="{{ asset('img/icons/white/users-import.svg') }}" alt="">
        </button>
    </div>
    <div class="col-6 col-md mb-2">
        <button type="button" class="btn btn-secondary w-100 btn-with-icon" data-toggle="modal" data-target="#exportEmployersModal">
            <span>@lang('main.export')</span>
            <img class="icon" src="{{ asset('img/icons/white/users-export.svg') }}" alt="">
        </button>
    </div>
</div>
@else
    <div class="row box-subforms" id="box-employeer-form">
        <div class="col-12 p-0 mb-3">
            <div class="list-offices reverse">
                <div class="item-right">
                    <button type="button" class="btn btn-success btn-with-icon w-100" onclick="window.subformEditEmployeer('open', 'create')">
                        <span>@lang('employees.add-employee')</span>
                        <img class="icon" src="{{ asset('img/icons/white/employeer.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>
        <div class="col-12 box-subforms-form">
           {{-- @include('dashboard.employees.partials.employees.edit', ['action' => 'create', 'index'=>0]) --}}
        </div>
    </div>

    <form action="" class="form form-grey">
        <div class="row">
            <div class="col-12 col-sm">
                <div class="input-group mb-3">
                    <input type="text" id="searchEmployersInput" onkeyup="filterMembers()" class="form-control" placeholder="Buscar empleado" aria-label="Username" aria-describedby="basic-addon1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <img class="input-group-text-icon" src="{{ asset('img/icons/blue/search.svg') }}" alt="">
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm">
                <div class="input-group mb-3">
                    <select class="form-control selectpicker"
                        id="employee_filter_office_id"
                        name="office_id"
                        data-width="100%"
                        data-size="8"
                        data-dropup-auto="false"
                        data-live-search="false"
                        data-live-search-placeholder="Filtrar por nombre"
                        data-live-search-style='startsWith'
                        title="Seleccione">
                            <option selected>@lang('main.filter-by-office')</option>
                            <option value="1">BARCELONA</option>
                            <option value="2">GIRONA</option>
                    </select>
                </div>
            </div>
            <div class="col-6 col-sm">
                <div class="input-group mb-3">
                    <select class="form-control selectpicker"
                        id="employee_filter_department_id"
                        name="department_id"
                        data-width="100%"
                        data-size="8"
                        data-dropup-auto="false"
                        data-live-search="false"
                        data-live-search-placeholder="Filtrar por nombre"
                        data-live-search-style='startsWith'
                        data-container="body"
                        title="Seleccione">
                            <option selected>@lang('main.filter-by-department')</option>
                            <option value="DIRECTION">DIRECTION</option>
                            <option value="IT">IT</option>
                            <option value="MARKETING">MARKETING</option>
                            <option value="RRHH">RRHH</option>
                    </select>
                </div>
            </div>
        </div>
    </form>
@endif
