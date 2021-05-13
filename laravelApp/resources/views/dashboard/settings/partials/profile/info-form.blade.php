<div class="form-section">
    <h5 class="form-section_title">
        @lang('company-profile.basic-information')
    </h5>
    <div class="form-row">
        <div class="form-group col-md-4 validate">
            <label for="name">@lang('company-profile.company-name')</label>
            <input type="text" class="form-control" required name="name" id="name">
        </div>
        <div class="form-group col-md-4">
            <label for="business_name">@lang('company-profile.business-name')</label>
            <input type="text" class="form-control" name="business_name" id="business_name">
        </div>
        <div class="form-group col-md-4">
            <label for="cif">@lang('company-profile.cif')</label>
            <input type="text" class="form-control" id="cif" name="cif">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="address">@lang('company-profile.address')</label>
            <input type="text" class="form-control" id="address" id="address">
        </div>
        <div class="form-group col-md-6">
            <label for="address_secondary">@lang('company-profile.secondary-address')</label>
            <input type="text" class="form-control" name="secondary_address" id="secondary_address">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="city">@lang('company-profile.city')</label>
            <input type="text" class="form-control" name="city" id="city">
        </div>
        <div class="form-group col-md-3">
            <label for="postal_code">@lang('company-profile.postal-code')</label>
            <input type="text" class="form-control" name="postal_code" id="postal_code">
        </div>
        <div class="form-group col-md-3">
            <label for="state_province_region">@lang('company-profile.state-province-region')</label>
            <input type="text" class="form-control" id="state_province_region" name="state_province_region">
        </div>
        <div class="form-group col-md-3">
            <label for="country_id">@lang('company-profile.country')</label>
            <select class="form-control selectpicker "
                    id="country_id"
                    name="country_id"
                    data-width="100%"
                    data-size="8"
                    data-dropup-auto="false"
                    data-live-search="true"
                    data-live-search-placeholder="@lang('main.filter-by-name')"
                    data-live-search-style='startsWith'
                    data-container="body"
                    title="Seleccione">
                @foreach( \App\Models\Country::all() as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
