<form class="form col-sm-7">
    <div class="row">
        <div class="form-group col-6">
            <label for="filter_{{ $section }}_office_id"></label>
            <select class="form-control selectpicker"
                    id="filter_{{ $section }}_office_id"
                    data-width="100%"
                    data-size="8"
                    data-dropup-auto="false"
                    data-live-search="true"
                    data-live-search-placeholder="@lang('main.filter-by-name')"
                    data-live-search-style='startsWith'
                    title="@lang('main.filter-by-office')">
                    <option value="1">Girona</option>
                    <option value="1">Barcelona</option>
            </select>
        </div>
        <div class="form-group col-6">
            <label for="filter_{{ $section }}_department_id"></label>
            <select class="form-control selectpicker"
                    id="filter_{{ $section }}_department_id"
                    name="department_id"
                    data-width="100%"
                    data-size="8"
                    data-dropup-auto="false"
                    data-live-search="true"
                    data-live-search-placeholder="@lang('main.filter-by-name')"
                    data-live-search-style='startsWith'
                    title="@lang('main.filter-by-department')">
                    <option value="1">Marketing</option>
                    <option value="1">RRHH</option>
                    <option value="1">Ventas</option>
                    <option value="1">Dirección</option>
            </select>
        </div>
    </div>
</form>
