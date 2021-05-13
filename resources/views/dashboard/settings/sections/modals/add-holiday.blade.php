<form action="" class="form">
    <div class="modal-body">
        <div class="modal-body">

            <div class="form-group">
                <label for="inputAddress2">Departamento</label>
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

            <div class="form-row">
                <div class="form-group col-12">
                    <label for="inputAddress2">Responsable</label>
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

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="business_name">Cargo del responsable</label>
                    <input type="text" class="form-control" name="business_name"  id="business_name" placeholder="">
                </div>
                <div class="form-group col-6">
                    <label for="business_name">Email del responsable</label>
                    <input type="email" class="form-control" name="business_name"  id="business_name" placeholder="">
                </div>
            </div>

        </div>
    </div>

    <div class="modal-footer">
        <button class="btn btn-secondary " type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary" href="#">Guardar</a>
    </div>
</form>

