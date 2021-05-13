<div class="form-section">
    <h5 class="section-title text-uppercase"><i class="fas fa-id-card"></i>Información básica</h5>
    <form action="" class="form">
        <div class="form-row">
            <div class="form-group col-md-4 validate">
                <label for="name">Nombre de la empresa</label>
                <input type="name" class="form-control" required name="name" id="name" placeholder="">
            </div>
            <div class="form-group col-md-4">
                <label for="business_name">Razón Social</label>
                <input type="text" class="form-control" name="business_name" id="business_name" placeholder="">
            </div>
            <div class="form-group col-md-4">
                <label for="inputAddress2">CIF</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="address">Direccion principal</label>
                <input type="text" class="form-control" id="address" id="address">
            </div>
            <div class="form-group col-md-6">
                <label for="address_secondary">Dirección secundaria</label>
                <input type="text" class="form-control" name="address_secondary" id="address_secondary">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="name">Ciudad</label>
                <input type="name" class="form-control" name="name" id="name" placeholder="">
            </div>
            <div class="form-group col-md-3">
                <label for="business_name">Código Postal</label>
                <input type="text" class="form-control" name="business_name" id="business_name" placeholder="">
            </div>
            <div class="form-group col-md-3">
                <label for="inputAddress2">Estado/Provincia/Región</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="">
            </div>
            <div class="form-group col-md-3">
                <label for="inputAddress2">País</label>
                <select class="form-control selectpicker"
                        data-width="100%"
                        data-size="8"
                        data-dropup-auto="false"
                        data-live-search="true"
                        data-live-search-placeholder="Filtrar por nombre"
                        data-live-search-style='startsWith'
                        title="Seleccione">
                    @foreach( \App\Country::all() as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="submit-zone">
            <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Guardar</button>
        </div>
    </form>
</div>
