<div class="form-section">
    <h5 class="section-title text-uppercase"><i class="fas fa-language"></i>Idioma y moneda</h5>
    <form action="" class="form">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputAddress2">Idioma</label>
                <select class="form-control selectpicker"
                        data-width="100%"
                        data-size="8"
                        data-dropup-auto="false"
                        data-live-search="true"
                        data-live-search-placeholder="Filtrar por nombre"
                        data-live-search-style='startsWith'
                        title="Seleccione">
                    @foreach( \App\Locale::all() as $locale)
                        <option value="{{ $locale->id }}">{{ $locale->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputAddress2">Formato</label>
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
            <div class="form-group col-md-4">
                <label for="inputAddress2">Moneda</label>
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

