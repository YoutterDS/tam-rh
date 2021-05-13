{{-- Editing Offices --}}
<div>
    <form action="" class="form">
        <div class="form-section">
            <div class="form-row">
                <div class="form-group col-12">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="headquarters" checked>
                        <label class="custom-control-label" for="headquarters">@lang('offices.headquarters')</label><br/>
                        <small class="text-info">@lang('offices.only-one-headquarters')</small>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="box-subforms--title">
                    @lang('offices.basic-data')
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <div class="box-subforms--thumb">
                            <img class="box-office_img" src="{{ asset('img/offices/barcelona.png') }}" alt="Nombre archivo imagen oficina">
                        </div>
                        <span class="btn btn-file" onclick="$(this).parent().find('input[type=file]').click();">@lang('offices.upload-img')</span>
                        <input type="file" id="image" name="image">
                    </div>

                    <div class="col-md-8 mt-negative-1">
                        <div class="form-row">
                            <div class="form-group col-md-6 validate">
                                <label for="name">@lang('offices.name')</label>
                                <input type="text" class="form-control" required name="name" id="name" placeholder="@lang('offices.name--placeholder')"
                                        value="BARCELONA">
                            </div>
                            <div class="form-group col-md-6 validate">
                                <label for="hours">Horario</label>
                                <input type="text" class="form-control" required name="hours" id="hours" placeholder="@lang('offices.hours--placeholder')"
                                        value="09:00 - 18:00 h">
                            </div>
                            <div class="col-md-12">
                                <div class="box-subforms--title mt-2">
                                    @lang('offices.contact-data')
                                </div>
                            </div>
                            <div class="form-group col-md-6 validate">
                                <label for="phone_number">@lang('offices.phone-number')</label>
                                <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="@lang('offices.phone-number--placeholder')" value="93 658 88 74">
                            </div>
                            <div class="form-group col-md-6 validate">
                                <label for="email">@lang('offices.email')</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="@lang('offices.email--placeholder')"
                                        value="oficina@tam.com">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section">
                <div class="box-subforms--title">
                    @lang('offices.location-data')
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6 validate">
                        <label for="address">@lang('offices.address')</label>
                        <input type="text" class="form-control" required name="address" id="address" placeholder="@lang('offices.address--placeholder')"
                               value="Av. Torre Blanca, 57 - 08173 Sant Cugat del Vallès, Barcelona - Spain">
                    </div>
                    <div class="form-group col-md-6 validate">
                        <label for="city">@lang('offices.city')</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="@lang('offices.city--placeholder')" value="Sant Cugat del Vallès">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4 validate">
                        <label for="postal_code">@lang('offices.postal-code')</label>
                        <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="@lang('offices.postal-code--placeholder')" value="08173">
                    </div>
                    <div class="form-group col-md-4 validate">
                        <label for="officeProvince">@lang('offices.state-province-region')</label>
                        <input type="text" class="form-control" id="officeProvince" placeholder="@lang('offices.state-province-region--placeholder')" value="Barcelona">
                    </div>

                    <div class="form-group col-md-4 validate">
                        <label for="country_id">@lang('offices.country')</label>
                        <select class="form-control selectpicker"
                                name="country_id"
                                id="country_id"
                                data-width="100%"
                                data-size="8"
                                data-dropup-auto="false"
                                data-live-search="true"
                                data-live-search-placeholder="@lang('main.filter-by-name')"
                                data-live-search-style='startsWith'
                                data-container="body"
                                title="@lang('main.select')">
                            @foreach( \App\Models\Country::all() as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-subforms--footer">
            <div class="col-4 p-1 mx-auto">
                <button type="button" class="btn btn-primary btn-forms">@lang('main.save')</button>
            </div>
            <a href="javascript:window.subformOffice('close')" class="btn-close">
                <img src="{{ asset('img/icons/white/arrow-down.svg') }}" alt="">
            </a>
        </div>
    </form>
</div>
