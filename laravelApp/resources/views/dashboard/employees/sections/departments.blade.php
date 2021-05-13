
<div class="row" id="employeers-departments">
    <div class="col-6 col-lg-3">
        <form action="" class="form">
            <div class="form-group">
                <select class="form-control selectpicker"
                    id="department_filter_office_id"
                    name="office_id"
                    data-width="100%"
                    data-size="8"
                    data-dropup-auto="false"
                    data-live-search="false"
                    data-live-search-placeholder="@lang('main.filter-by-name')"
                    data-live-search-style='startsWith'
                    title="@lang('main.select')">
                        <option selected>@lang('main.select-office')</option>
                        <option value="1">BARCELONA</option>
                        <option value="2">GIRONA</option>
                </select>
            </div>
        </form>
    </div>
    <div class="col-lg-9">
        <div class="row box-subforms" id="box-departments-form">
            <div class="col-12 p-0 mb-3">
                <div class="list-offices reverse">
                    <div class="item-right">
                        <button type="button" class="btn btn-success btn-with-icon w-100" onclick="window.subformEditDepartment('open')">
                            <span>@lang('department.add-department')</span>
                            <img class="icon" src="{{ asset('img/icons/white/circle.svg') }}" alt="">
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 box-subforms-form">
                @include('dashboard.employees.partials.departments.edit', ['action' => 'create'])
            </div>
        </div>

    </div>
    <div class="col-12">
        <div class="list-departments" id="departmentsListPage">
            @php
                $colors = ['#656565','#CCC559', '#3A6591', '#C46262'];
                $departments = ['MARKETING','RRHH', 'SALES', 'DIRECTION'];
            @endphp
            @foreach( range(0, 3) as $item)
                @include('dashboard.employees.partials.departments.list-item', ['section'=>'departments'])
            @endforeach
        </div>

    </div>
</div>
