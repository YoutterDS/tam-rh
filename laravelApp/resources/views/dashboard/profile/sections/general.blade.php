<form action="">
    {{-- FORM @lang('nav-pills.profile-general') --}}

<h5>Información del puesto de trabajo</h5>
<div class="form-row">

    <div class="form-group col-lg-4 col-md-6 col-sm-6">

        <label for="office_id">Oficina</label>
        
        <div class="">   
            <div class="form-group">
                <select class="selectpicker"
                        data-live-search="true"
                        data-live-search-placeholder="Búsqueda por nombre"
                        data-live-search-style='startsWith'
                        title="Seleccione"
                        id="office_id"
                        data-width="100%">
                    <option>Oficina 1</option>
                    <option>Oofincina 2</option>
                    <option>Officina 3</option>
                </select>
            </div>
        </div>

    </div>

    <div class="form-group col-lg-4 col-md-6 col-sm-6">

        <label for="departments_id">Departamento</label>
        
        <div class="">   
            <div class="form-group">
                <select class="selectpicker"
                        data-live-search="true"
                        data-live-search-placeholder="Búsqueda por nombre"
                        data-live-search-style='startsWith'
                        title="Seleccione"
                        id="departments_id"
                        data-width="100%">
                    <option>Departamento 1</option>
                    <option>Deepartament 2</option>
                    <option>Ddepartamento 3</option>
                </select>
            </div>
        </div>
        
    </div>

    <div class="form-group col-lg-4 col-md-6 col-sm-6">

        <label for="users_id">Reportar a...</label>
        
        <div class="">   
            <div class="form-group">
                <select class="selectpicker"
                        data-live-search="true"
                        data-live-search-placeholder="Búsqueda por nombre"
                        data-live-search-style='startsWith'
                        title="Seleccione"
                        id="users_id"
                        data-width="100%">
                    <option>Uusuari 1</option>
                    <option>Ussuari 2</option>
                    <option>UUssuari 3</option>
                </select>
            </div>
        </div>

    </div>
</div>

<div class="form-row">
    <div class="progress axios">
        <div class="indeterminate"></div>
    </div>

    <button type="submit" class="btn btn-primary">GUARDAR</button>
</div>

</form>