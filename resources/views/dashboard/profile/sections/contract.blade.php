{{-- FORM @lang('nav-pills.profile-contract') --}}

<form action="">
    <h5>Información General</h5>

    <div class="form-row">

        <div class="col-lg-3 col-md-3 col-sm-3">
            <label for="contracts_date_start">Inicio</label>
            <input type="text" class="form-control" id="contracts_date_start" value="" placeholder="FECHA CHUNGA" required>
            <div class="valid-feedback">Valor aceptado!</div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
            <label for="contracts_date_ending">Final</label>
            <input type="text" class="form-control" id="contracts_date_ending" value="" placeholder="FECHA CHUNGA" required>
            <div class="valid-feedback">Valor aceptado!</div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
            <label for="contract_title">Título</label>
            <input type="text" class="form-control" id="contract_title" value="" placeholder="título..." required>
            <div class="valid-feedback">Valor aceptado!</div>
        </div>
    </div>

    <div class="form-row">
        <div class="progress axios">
            <div class="indeterminate"></div>
        </div>

        <button type="submit" class="btn btn-primary">GUARDAR</button>
    </div>
</form>

<form action="">
    <h5>Horario laboral</h5>

    <div class="form-row">

        <div class="col-lg-1 col-md-1 col-sm-1">
            <label for="contracts_hours">Horas</label>
            <input type="text" class="form-control" id="contracts_hours" value="" placeholder="h..." required>
            <div class="valid-feedback">Valor aceptado!</div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2">
            <label for="NO_ENCONTRADO_CAMPO_EQUIVALENTE">Unidad</label>
            <select class="custom-select" id="NO_ENCONTRADO_CAMPO_EQUIVALENTE" required>
                <option selected disabled value="" placeholder="">Día</option>
                <option>Semana</option>
            </select>
            <div class="invalid-feedback">No has elegido opción</div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2">
            <label for="NO_ENCONTRADO_CAMPO_EQUIVALENTE">Dias semana</label>
            <input type="text" class="form-control" id="NO_ENCONTRADO_CAMPO_EQUIVALENTE" value="" placeholder="l,m,m,j,v,s,d..." required>
            <div class="valid-feedback">Valor aceptado!</div>
        </div>

        <div class="col-lg-7 col-md-7 col-sm-7">
            <label for="NO_ENCONTRADO_CAMPO_EQUIVALENTE">Resumen</label>
            <input type="text" class="form-control" id="NO_ENCONTRADO_CAMPO_EQUIVALENTE" value="" placeholder="Resumen..." required>
            <div class="valid-feedback">Valor aceptado!</div>
        </div>
    </div>

    <div class="form-row">
        <div class="progress axios">
            <div class="indeterminate"></div>
        </div>

        <button type="submit" class="btn btn-primary">GUARDAR</button>
    </div>
</form>

<form action="">
    <h5>Salario fijo</h5>

    <div class="form-row">
        <div class="col-lg-3 col-md-3 col-sm-3">
            <label for="contract_periodicity_id">Tipo de retribución</label>
            <select class="custom-select" id="contract_periodicity_id" required>
                <option selected disabled value="">Anual</option>
                <option>Mensual</option>
                <option>Semanal</option>
                <option>Por horas</option>
            </select>
            <div class="invalid-feedback">No has elegido opción</div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2">
            <label for="contract_quantity">Cantidad</label>
            <input type="text" class="form-control" id="contract_quantity" value="" placeholder="Qnt..." required>
            <div class="valid-feedback">Valor aceptado!</div>
        </div>

        <div class="col-lg-7 col-md-7 col-sm-7"></div>
    </div>

    <div class="form-row">
        <div class="progress axios">
            <div class="indeterminate"></div>
        </div>

        <button type="submit" class="btn btn-primary">GUARDAR</button>
    </div>
</form>




