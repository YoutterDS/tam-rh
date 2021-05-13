<form class="form @if($action==='create') form-green @endif" id="@if($action==='create'){{ 'employerSave_form' }}@else{{ 'employerEdit_form' }}@endif">
    <div class="form-row">
        <div class="col-12 col-sm-12 col-md-4 col-xl-4">
            <div class="form-group">
                <div class="list-employees--form_edit--photo">
                    @if( $action === 'create')
                        <img src="{{ asset('/img/employeer-default-create.svg') }}" alt="TAM - Ramon Ribera" >
                    @else
                        <img src="{{ asset('/img/employeer-default.svg') }}" alt="TAM - Ramon Ribera" >
                    @endif
                </div>
                <div class="custom-file">
                    <span class="btn btn-file" onclick="$(this).parent().find('input[type=file]').click();">@lang('main.upload-photo')</span>
                    <input type="file" class="custom-file-input" id="photo__{{ $index }}" name="photo">
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-xl-4">
            <div class="form-section_title small">
                @lang('employees.general-data')
            </div>

            <div class="form-group validate">
                <label for="gender_id__{{ $index }}">@lang('employees.gender')</label>
                <select class="form-control selectpicker"
                        id="gender_id__{{ $index }}"
                        name="gender_id"
                        data-width="100%"
                        data-size="8"
                        data-dropup-auto="false"
                        data-live-search="false"
                        data-live-search-placeholder="@lang('main.filter-by-name')"
                        data-live-search-style='startsWith'
                        data-container="body"
                        title="@lang('main.select')">
                    <option value="1">Femenino</option>
                    <option value="2" >Masculino</option>
                </select>
            </div>

            <div class="form-group">
                <label for="name__{{ $index }}">@lang('employees.name')</label>
                <input type="text" class="form-control" id="name__{{ $index }}" name="name" aria-describedby="name__{{ $index }}">
            </div>

            <div class="form-group">
                <label for="surname__{{ $index }}">@lang('employees.surname')</label>
                <input type="text" class="form-control" id="surname__{{ $index }}" name="surname" aria-describedby="surname__{{ $index }}">
            </div>

            <div class="form-group">
                <label for="nif_nie__{{ $index }}">@lang('employees.nif-nie')</label>
                <input type="text" class="form-control" id="nif_nie__{{ $index }}" name="nif_nie" aria-describedby="nif_nie__{{ $index }}">
            </div>

        </div>

        <div class="col col-sm-12 col-md-4 col-xl-4">
            <div class="form-section_title small">
                @lang('employees.contact-data')
            </div>

            <div class="form-group">
                <label for="phone_number__{{ $index }}">@lang('employees.phone-number')</label>
                <input type="text" class="form-control" id="phone_number__{{ $index }}" name="phone_number" aria-describedby="phone_number__{{ $index }}">
            </div>

            <div class="form-group">
                <label for="mobile_number{{ $action }}">@lang('employees.mobile-number')</label>
                <input type="text" class="form-control" id="mobile_number__{{ $index }}" name="mobile_number" aria-describedby="mobile_number__{{ $index }}">
            </div>

            <div class="form-group">
                <label for="link_twitter__{{ $index }}">@lang('employees.twitter')</label>
                <div class="d-flex align-items-center">
                    <span class="social-network--item_icon twitter" ></span>
                    <input type="text" class="form-control" id="link_twitter__{{ $index }}" name="link_twitter" alt="link Twitter" >
                </div>
            </div>

            <div class="form-group">
                <label for="link_facebook__{{ $index }}">@lang('employees.facebook')</label>
                <div class="d-flex align-items-center">
                    <span class="social-network--item_icon facebook" ></span>
                    <input type="text" class="form-control" id="link_facebook__{{ $index }}" name="link_facebook" alt="link Facebook" >
                </div>
            </div>

        </div>
    </div>

    <div class="form-row">
        <div class="col-12">
            <div class="form-section_title small pt-3">
                @lang('employees.department-data')
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col col-sm-12 col-md-4 col-xl-4">
            <div class="form-group">
                <label for="office_id__{{ $index }}">@lang('main.office')</label>
                <select class="form-control selectpicker"
                    id="office_id__{{ $index }}"
                    name="office_id"
                    data-width="100%"
                    data-size="8"
                    data-dropup-auto="false"
                    data-live-search="false"
                    data-live-search-placeholder="@lang('main.filter-by-name')"
                    data-live-search-style='startsWith'
                    title="@lang('main.select')">
                        <option value="1">BARCELONA</option>
                        <option value="2">GIRONA</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col col-sm-12 col-md-4 col-xl-4">
            <div class="form-group">
                <label for="department_id__{{ $index }}">Departamento</label>
                <select class="form-control selectpicker"
                        id="department_id__{{ $index }}"
                        name="department_id"
                        data-width="100%"
                        data-size="8"
                        data-dropup-auto="false"
                        data-live-search="false"
                        data-live-search-placeholder="@lang('main.filter-by-name')"
                        data-live-search-style='startsWith'
                        data-container="body"
                        title="@lang('main.select')">
                    <option value="1" >Marketing</option>
                    <option value="2">Ventas</option>
                    <option value="3">RRHH</option>
                    <option value="4">IT</option>
                </select>
            </div>
        </div>

        <div class="col col-sm-12 col-md-4 col-xl-4">
            <div class="form-group">
                <label for="position__{{ $index }}">@lang('employees.position')</label>
                <input type="text" class="form-control" id="position__{{ $index }}" name="position" aria-describedby="position" >
            </div>
        </div>

        <div class="col col-sm-12 col-md-4 col-xl-4">
            <div class="form-group">
                <label for="manager_id__{{ $index }}">@lang('main.manager')</label>
                <select class="form-control selectpicker"
                        id="manager_id__{{ $index }}"
                        name="manager_id"
                        data-width="100%"
                        data-size="8"
                        data-dropup-auto="false"
                        data-live-search="false"
                        data-live-search-placeholder="@lang('main.filter-by-name')"
                        data-live-search-style='startsWith'
                        data-container="body"
                        title="@lang('main.select')">
                    <option value="0">@lang('main.without-manager')</option>
                    <option value="1" >Paco Palotes</option>
                    <option value="2">Antonio manda</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="col-12">
            <div class="form-section_title small pt-3">
                @lang('employees.time-data')
            </div>
        </div>

        <div class="form-group col-6 col-sm-2">
            <label for="daily_hours__{{ $index }}">@lang('employees.daily-hours')</label>
            <input type="text" class="form-control" id="daily_hours__{{ $index }}" name="daily_hours" aria-describedby="daily_hours__{{ $index }}"
                   value="8">
        </div>

        <div class="form-group col-6 col-sm-2">
            <label for="annual_hours__{{ $index }}">@lang('employees.annual-hours')</label>
            <input type="text" class="form-control" id="annual_hours__{{ $index }}" name="annual_hours" aria-describedby="annual_hours__{{ $index }}">
        </div>

        <div class="form-group col-12 col-sm-8">
            <div class="form-group">
                <label for="weekdais__{{ $index }}">@lang('employees.working-days-of-week')</label>
                <div class="btn-group-toggle weekdays" data-toggle="buttons">
                    @foreach( $weekdays as $day )
                    <label class="btn btn-secondary ">
                        <input type="checkbox" name="weekdais" autocomplete="off" value="{{ $day['id'] }}">
                        {{ $day['name'] }}
                    </label>
                    @endforeach
                </div>
                <div class="invalid-feedback" data-target="weekdais"></div>
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-section_title small col-12">
            @lang('employees.salary-data')
        </div>
    </div>
    <div class="form-row">
        <div class="col-12 col-sm-4">
            <div class="form-group">
                <label for="contract_id__{{ $index }}">@lang('employees.type-contract')</label>
                <select class="form-control selectpicker"
                        id="contract_id__{{ $index }}"
                        name="contract_id"
                        data-width="100%"
                        data-size="8"
                        data-dropup-auto="false"
                        data-live-search="false"
                        data-live-search-placeholder="@lang('main.filter-by-name')"
                        data-live-search-style='startsWith'
                        data-container="body"
                        title="@lang('main.select')">
                    <option value="1">Indefinido</option>
                    <option value="2">Prácticas</option>
                    <option value="3">Autónomo</option>
                </select>
            </div>
        </div>

        <div class="col-12 col-sm-4">
            <div class="form-group">
                <label for="number_payments__{{ $index }}">@lang('employees.num-payments')</label>
                <select class="form-control selectpicker"
                        id="number_payments__{{ $index }}"
                        name="number_payments"
                        data-width="100%"
                        data-size="8"
                        data-dropup-auto="false"
                        data-live-search="false"
                        data-live-search-placeholder="Filtrar por nombre"
                        data-live-search-style='startsWith'
                        data-container="body"
                        title="@lang('main.select')">
                    <option value="12">12</option>
                    <option value="14">14</option>
                </select>
            </div>
        </div>

        <div class="col-12 col-sm-4">
            <div class="form-group">
                <label for="annual_gross_salary__{{ $index }}">@lang('employees.annual-gross-salary')</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" ><i class="fas fa-euro-sign"></i></span>
                    </div>
                    <input type="text" id="annual_gross_salary__{{ $index }}" name="annual_gross_salary" class="form-control" >
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label for="iban_number__{{ $index }}">@lang('employees.iban-number')</label>
                <input type="text" class="form-control" id="iban_number__{{ $index }}" name="iban_number">
            </div>
        </div>

        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label for="contracted_at__{{ $index }}">@lang('employees.contracted-at')</label>
                <input type="text" class="form-control" id="contracted_at__{{ $index }}" name="contracted_at">
            </div>
        </div>
    </div>

    <div class="form-row">
        <div class="form-section_title small col-12">
            @lang('employees.acces-data')
        </div>

        <div class="col-12 col-sm-3">
            <div class="form-group">
                <label for="locale_id__{{ $index }}">@lang('main.locale')</label>
                <select class="form-control selectpicker"
                        id="locale_id__{{ $index }}"
                        name="locale_id"
                        data-width="100%"
                        data-size="8"
                        data-dropup-auto="false"
                        data-live-search="false"
                        data-live-search-placeholder="@lang('main.filter-by-name')"
                        data-live-search-style='startsWith'
                        data-container="body"
                        title="@lang('main.select')">
                    <option value="1">Català</option>
                    <option value="2">Español</option>
                    <option value="3">English</option>
                </select>
            </div>
        </div>
        <div class="form-group col-12 col-sm-3">
            <label for="email__{{ $index }}">@lang('login.email')</label>
            <input type="text" class="form-control" id="email__{{ $index }}" name="email" aria-describedby="email__{{ $index }}">
        </div>

        <div class="form-group col-12 col-sm-3">
            <label for="password__{{ $index }}">@lang('login.password')</label>
            <input type="password" class="form-control" id="password__{{ $index }}" name="password" aria-describedby="password__{{ $index }}">
        </div>

        <div class="form-group col-12 col-sm-3">
            <label for="password-confirm__{{ $index }}">@lang('login.confirm-password-placeholder')</label>
            <input type="password" class="form-control" id="password-confirm__{{ $index }}" name="password-confirm" aria-describedby="password-confirm__{{ $index }}">
        </div>

    </div>

    <div class="form-row mt-4 mb-4">
        <div class="col center-align">
            <button class="btn btn-primary btn-forms">
                @if($action==='create')
                    @lang('main.save')
                @else
                    @lang('main.update')
                @endif
            </button>
        </div>
        <div class="col-1">
            <a href="#" class="btn-close"
              onclick="window.subformEditEmployeer('close')"
                @if( @$loop )
                    data-target="#employeer_form_{{ @$loop->iteration }}"
                @else
                    data-target="#employeer_form_create"
                @endif
                    data-section="basic-info">
                <img src="{{ asset('img/icons/white/arrow-down.svg') }}">
            </a>
        </div>
    </div>
</form>
