<form action="">
    {{-- FORM @lang('nav-pills.profile-general') --}}

<h5>Información General</h5>

<div class="form-row mb-lg-3 mb-md-3 mb-sm-7">
    <div class="col-lg-4 col-md-4 col-sm-4">
        <label for="user_name">Nombre</label>
        <input type="text" class="form-control" id="user_name" value="" placeholder="Nombre..." required>
        <div class="valid-feedback">Valor aceptado!</div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="user_surname">Apellidos</label>
        <input type="text" class="form-control" id="user_surname" value="" placeholder="Apellidos..." required>
        <div class="valid-feedback">Valor aceptado!</div>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-2">
        <label for="user_birthdate">Nacimiento</label>
        <input type="text" class="form-control" id="user_birthdate" value="" placeholder="NACIMIENTO CHUNGO" required>
        <div class="valid-feedback">Valor aceptado!</div>
    </div>
</div>

<div class="form-row mb-lg-3 mb-md-3 mb-sm-7">
    <div class="col-lg-3 col-md-3 col-sm-3">
        <label for="gender_id">Género</label>
        <select class="custom-select" id="gender_id" required>
            <option selected disabled value="" placeholder="">Femenino</option>
            <option>Masculino</option>
        </select>
        <div class="invalid-feedback">No has elegido opción</div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3">
        <label for="country_id">Nacionalidad</label>
        <div class="">
            <select class="selectpicker"
                    data-live-search="true"
                    data-live-search-placeholder="Búsqueda por nombre"
                    data-live-search-style='startsWith'
                    title="Seleccione"
                    id="country_id">
                <option>Moza en Bike</option>
                <option>Japonesa</option>
                <option>Etrusca</option>
                <option>Arapajoe profundo</option>
            </select>
        </div>
        <div class="invalid-feedback">No has elegido opción</div>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-2">
        <label for="user_phone_number">Teléfono</label>
        <input type="text" class="form-control" id="user_phone_number" value="" placeholder="Número" required>
        <div class="valid-feedback">Valor aceptado!</div>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-4">
        <label for="user_email">Correo</label>
        <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text">@</span>
        </div>
        <input type="text" class="form-control rounded-right" id="user_email" required>
        <div class="invalid-feedback">Please choose a username.</div>
        </div>
    </div>
</div>

<div class="form-row mb-lg-3 mb-md-3 mb-sm-7">

    <div class="progress axios">
        <div class="indeterminate"></div>
    </div>

    <button type="submit" class="btn btn-primary">GUARDAR</button>
</div>

</form>

<form action="">
    {{-- FORM @lang('nav-pills.profile-general') --}}

<h5>Documentos</h5>

<div class="form-row mb-lg-3 mb-md-3 mb-sm-7">

    <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="user_nif_nie">Documento de identidad</label>
        <input type="text" class="form-control" id="user_nif_nie" value="" placeholder="DNI/NIE" required>
        <div class="valid-feedback">Valor aceptado!</div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="user_social_security_number">Número de Seguridad Social</label>
        <input type="text" class="form-control" id="user_social_security_number" value="" placeholder="Número de la seguridad social..." required>
        <div class="valid-feedback">Valor aceptado!</div>
    </div>

</div>

<div class="form-row mt-sm-5 mt-md-4 mt-lg-3 mt-xl-2 mt-1">
    <div class="progress axios">
        <div class="indeterminate"></div>
    </div>

    <button type="submit" class="btn btn-primary">GUARDAR 01</button>
</div>

</form>

<form action="">
    {{-- FORM @lang('nav-pills.profile-general') --}}
    <h5>Dirección</h5>

    <div class="form-row mb-lg-3 mb-md-3 mb-sm-7">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <label for="user_address">Dirección principal</label>
            <input type="text" class="form-control" id="user_address" value="" placeholder="Dirección primaria..." required>
            <div class="valid-feedback">Valor aceptado!</div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
            <label for="user_address_secondary">Dirección secundaria</label>
            <input type="text" class="form-control" id="user_address_secondary" value="" placeholder="Dirección secundaria..." required>
            <div class="valid-feedback">Valor aceptado!</div>
        </div>
    </div>

    <div class="form-row mb-lg-3 mb-md-3 mb-sm-7">
        <div class="col-lg-2 col-md-2 col-sm-3">
            <label for="user_city">Ciudad</label>
            <input type="text" class="form-control" id="user_city" value="" placeholder="Ciudad..." required>
            <div class="valid-feedback">Valor aceptado!</div>
        </div>

        <div class="col-lg-1 col-md-1 col-sm-2">
            <label for="user_postal_code">CP</label>
            <input type="text" class="form-control" id="user_postal_code" value="" placeholder="CP..." required>
            <div class="valid-feedback">Valor aceptado!</div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-4">
            <label for="user_state_province_region">Estado/Provincia/Región</label>
            <input type="text" class="form-control" id="user_state_province_region" value="" placeholder="Estado/Provincia/Región" required>
            <div class="valid-feedback">Valor aceptado!</div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3">
            <label for="country_id">País</label>
            <div class="">
                <select class="selectpicker"
                        data-live-search="true"
                        data-live-search-placeholder="Búsqueda por nombre"
                        data-live-search-style='startsWith'
                        title="Seleccione"
                        id="country_id">
                    <option>Moza en Bike</option>
                    <option>Turquia</option>
                    <option>China</option>
                    <option>San Marino</option>
                </select>
            </div>
            <div class="invalid-feedback">No has elegido opción</div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-0"></div>
    </div>

    <div class="form-row mb-lg-3 mb-md-3 mb-sm-7">
        <div class="progress axios">
            <div class="indeterminate"></div>
        </div>

        <button type="submit" class="btn btn-primary">GUARDAR</button>
    </div>
</form>

<form action="">
    {{-- FORM @lang('nav-pills.profile-general') --}}

<h5>Contacto de emergencia</h5>

<div class="form-row mb-lg-3 mb-md-3 mb-sm-7">
    <div class="col-lg-6 col-md-6 col-sm-6">
        <label for="emergency_contacts_name">Nombre y apellidos</label>
        <input type="text" class="form-control" id="emergency_contacts_name" value="" placeholder="Contacto de emergencia..." required>
        <div class="valid-feedback">Valor aceptado!</div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3">
        <label for="emergency_contacts_phone_number">1r Teléfono</label>
        <input type="text" class="form-control" id="emergency_contacts_phone_number" value="" placeholder="Teléfono primario..." required>
        <div class="valid-feedback">Valor aceptado!</div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-3">
        <label for="emergency_contacts_phone_number_secondary">2n Teléfono</label>
        <input type="text" class="form-control" id="emergency_contacts_phone_number_secondary" value="" placeholder="Teléfono secundario..." required>
        <div class="valid-feedback">Valor aceptado!</div>
    </div>
</div>

<div class="form-row mb-lg-3 mb-md-3 mb-sm-7">
    <div class="progress axios">
        <div class="indeterminate"></div>
    </div>

    <button type="submit" class="btn btn-primary">GUARDAR</button>
</div>
</form>
