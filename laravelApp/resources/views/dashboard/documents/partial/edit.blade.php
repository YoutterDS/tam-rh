
<form class="form action" id="addDocumentList_form">
    <div class="form-row">
        {{--
            - Este select solo aparece si el usuario tiene role administrativo,
            el resto sólo pueden asignar listas de documentos a la oficina a la
            cual estan asigandos
        --}}
        <div class="col-12 col-md-4 form-group">
            <label for="infoPositionInput">@lang('main.office')</label>
            <select class="form-control selectpicker"
                    id="office_id"
                    name="office_id"
                    data-width="100%"
                    data-size="8"
                    data-dropup-auto="false"
                    data-live-search="false"
                    data-live-search-placeholder="@lang('main.filter-by-name')"
                    data-live-search-style='startsWith'
                    data-container="body"
                    title="@lang('main.select')">
                <option value="1">Barcelona</option>
                <option value="2">Girona</option>
                <option value="3">Londres</option>
            </select>
        </div>

        {{--
            - Si el usuario está asignado a un departamento, sólo podrá asignar listas
            de documentos a aquel al cual esté vinculado.

            - Cuando se selecciona oficina, deben cargarse los departamentos que tienen
            vinculados la oficina seleccionada
        --}}
        <div class="col-12 col-md-4 form-group">
            <label for="infoPositionInput">@lang('main.department-s')</label>
            <select class="form-control selectpicker" id="DeptmSelect"
                    multiple
                    data-width="100%"
                    data-size="8"
                    data-dropup-auto="false"
                    data-live-search="false"
                    data-live-search-placeholder="@lang('main.filter-by-name')"
                    data-live-search-style='startsWith'
                    data-container="body"
                    title="@lang('main.select')">
                <option value="1">Marketing</option>
                <option value="2">Ventas</option>
                <option value="3">RRHH</option>
                <option value="4">IT</option>
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 form-group">
            <label for="infoNameInput">@lang('documents.name') <small><i>@lang('main.lang-castellano')</i></small></label>
            <input type="text" id="name_es" name="name_es" class="form-control">
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 form-group">
            <label for="infoNameInput">@lang('documents.name') <small><i>@lang('main.lang-catala')</i></small></label>
            <input type="text" id="name_es" name="name_es" class="form-control">
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-4 form-group">
            <label for="infoNameInput">@lang('documents.name') <small><i>@lang('main.lang-english')</i></small></label>
            <input type="text" id="name_es" name="name_es" class="form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="col-12 col-md-4 form-group">
            <label for="description">@lang('main.description') <small><i>@lang('main.lang-castellano')</i></small></label>
            <textarea name="description" id="description" class="w-100 h-100" rows="5"></textarea>
        </div>
        <div class="col-12 col-md-4 form-group">
            <label for="description">@lang('main.description') <small><i>@lang('main.lang-catala')</i></small></label>
            <textarea name="description" id="description" class="w-100 h-100" rows="5"></textarea>
        </div>
        <div class="col-12 col-md-4 form-group">
            <label for="description">@lang('main.description') <small><i>@lang('main.lang-english')</i></small></label>
            <textarea name="description" id="description" class="w-100 h-100" rows="5"></textarea>
        </div>
    </div>

    <div class="form-row">
        <div class="col-11">
            <div class="form-group mt-4 ">
                <button class="btn btn-primary btn-forms">
                    @lang('main.save')
                </button>
            </div>
        </div>
        <div class="col-1">
            <a class="btn-close" href="javascript:subformEditDocumentsList('close')">
                <img src="{{ asset('img/icons/white/arrow-down.svg') }}" alt="">
            </a>
        </div>
    </div>
</form>
