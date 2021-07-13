<div class="form-section">
    <h5 class="form-section_title">
        @lang('company-profile.contact-info')
    </h5>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="phone_number">@lang('company-profile.phone-number')</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" wire:model.defer="phone_number">
        </div>
        <div class="form-group col-md-4">
            <label for="fax_number">@lang('company-profile.fax-number')</label>
            <input type="text" class="form-control" id="fax_number" name="fax_number" wire:model.defer="fax_number">
        </div>
        <div class="form-group col-md-4">
            <label for="email">@lang('company-profile.email')</label>
            <input type="email" class="form-control" name="email" id="email" wire:model.defer="email">
        </div>
    </div>
</div>
