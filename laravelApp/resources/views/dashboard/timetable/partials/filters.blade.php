<form action="" class="form form-grey mt-5">
    <div class="row">
        <div class="col-12 col-sm">
            <div class="input-group mb-3">
                <input type="text" id="searchEmployersInput" onkeyup="filterMembers()" class="form-control"
                       placeholder="@lang('main.filter-by-employee')" >
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
                    id="office_id"
                    name="office_id"
                    data-width="100%"
                    data-size="8"
                    data-dropup-auto="false"
                    data-live-search="false"
                    data-live-search-placeholder="@lang('main.filter-by-name')"
                    data-live-search-style='startsWith'
                    title="@lang('main.select')">
                        <option selected>@lang('main.filter-by-office')</option>
                        <option value="1">BARCELONA</option>
                        <option value="2">GIRONA</option>
                </select>
            </div>
        </div>
        <div class="col-6 col-sm">
            <div class="input-group mb-3">
                <select class="form-control selectpicker" id="department"
                    data-width="100%"
                    data-size="8"
                    data-dropup-auto="false"
                    data-live-search="false"
                    data-live-search-placeholder="@lang('main.filter-by-name')"
                    data-live-search-style='startsWith'
                    data-container="body"
                    title="@lang('main.select')">
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
