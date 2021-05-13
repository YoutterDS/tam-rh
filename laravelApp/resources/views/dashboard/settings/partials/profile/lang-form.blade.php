<div class="form-section">
    <h5 class="form-section_title">
        @lang('company-profile.language-coin')
    </h5>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="language">@lang('company-profile.language')</label>
            <select class="form-control selectpicker"
                    id="language"
                    name="language"
                    data-width="100%"
                    data-size="8"
                    data-dropup-auto="false"
                    data-live-search="false"
                    data-live-search-placeholder=""
                    data-live-search-style='startsWith'
                    data-container="body">
                        <option value="es-ES" selected>Español</option>
                        <option value="ca-ES">Català</option>
                        <option value="en-GB">English</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="coin_format_id">@lang('company-profile.coin-format')</label>
            <select class="form-control selectpicker"
                    id="coin_format_id"
                    name="coin_format_id"
                    data-width="100%"
                    data-size="8"
                    data-dropup-auto="false"
                    data-live-search="false"
                    data-live-search-placeholder=""
                    data-live-search-style='startsWith'
                    data-container="body">
                        <option value="es" selected>ES (07/05/2020 - 1234,56 €)</option>
                        <option value="es-do">DO (07/05/2020 - 1234,56 €)</option>
                        <option value="es-us">US (05/07/2020 - 1234,56 €)</option>
                        <option value="es-mx">MX (07/05/2020 - 1234,56 €)</option>
                        <option value="es-ar">AR (07/05/2020 - € 1,234.56)</option>
                        <option value="es-co">CO (07/05/2020 - 1234,56 €</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="coin_id">@lang('company-profile.coin')</label>
            <select id="coin_id" name="coin_id" class="form-control selectpicker">
                <option value="1" selected>€</option>
            </select>
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-forms">@lang('main.save')</button>
        </div>
    </div>
</div>

