{{-- Editing Offices --}}
<div>
    <form wire:submit.prevent="submit()"
          wire:change="formHasChanged"
          method="POST"
          class="form @if($action==='create') form-green @endif @unlessrole('admin') noactions @endunlessrole {{ env('SHOW_ANIMATION') }}">
        <div class="form-section">
            @if( $action === 'edit' )
            <div class="form-row">
                <div class="form-group col-12">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="headquarters" wire:model="office.headquarters" >
                        <label class="custom-control-label" for="headquarters">@lang('offices.headquarters')</label><br/>
                        {{-- <small class="text-info">@lang('offices.only-one-headquarters')</small> --}}
                    </div>
                </div>
            </div>
            @endif

            <div class="form-section">
                <div class="box-subforms--title">
                    @lang('offices.basic-data')
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <div class="box-subforms--thumb">
                            @if( $image && !$isSaved )
                                <img class="box-office_img {{ env('SHOW_ANIMATION') }}" src="{{ $image->temporaryUrl()  }}" />
                            @endif
                            @if( !isset($image) && $office )
                            <img class="box-office_img {{ env('SHOW_ANIMATION') }}"
                                 @if( !empty($office['image']) )
                                    src="{{ asset('uploads/offices/' . $office['id'] . '/' . $office['image'])  }}"
                                 @else
                                    src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                 @endif
                                 alt="Imagen oficina">
                            @endif
                        </div>
                        <span class="btn btn-file" onclick="$(this).parent().find('input[type=file]').click();">@lang('offices.upload-img')</span>
                        <input type="file" accept="image/*" wire:model="image">
                        @error('office.image')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-8 mt-negative-1">
                        <div class="form-row">
                            <div class="form-group col-md-6 validate">
                                <label for="name">@lang('offices.name')</label>
                                <input type="text" class="form-control @error('office.name') is-invalid @enderror" required placeholder="@lang('offices.name--placeholder')"
                                       wire:model.defer="office.name">
                            </div>
                            <div class="form-group col-md-6 validate">
                                <label for="hours">Horario</label>
                                <input type="text" class="form-control @error('office.hours') is-invalid @enderror" required placeholder="@lang('offices.hours--placeholder')"
                                       wire:model.defer="office.hours">
                            </div>
                            <div class="col-md-12">
                                <div class="box-subforms--title mt-2">
                                    @lang('offices.contact-data')
                                </div>
                            </div>
                            <div class="form-group col-md-6 validate">
                                <label for="phone_number">@lang('offices.phone-number')</label>
                                <input type="text" class="form-control @error('office.phone_number') is-invalid @enderror" required name="phone_number" placeholder="@lang('offices.phone-number--placeholder')"
                                       wire:model.defer="office.phone_number">
                            </div>
                            <div class="form-group col-md-6 validate">
                                <label for="email">@lang('offices.email')</label>
                                <input type="email" class="form-control @error('office.email') is-invalid @enderror" required name="email" placeholder="@lang('offices.email--placeholder')"
                                       wire:model.defer="office.email">
                                @error('office.email')
                                    @if( $message !== \Lang::get('validation.required', ['attribute'=> 'office.email']) )
                                        <div class="text-danger">{{ $message }}</div>
                                    @endif
                                @enderror
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
                        <input type="text" class="form-control @error('office.address') is-invalid @enderror" required name="address" placeholder="@lang('offices.address--placeholder')"
                               wire:model.defer="office.address">
                    </div>
                    <div class="form-group col-md-6 validate">
                        <label for="city">@lang('offices.city')</label>
                        <input type="text" class="form-control @error('office.city') is-invalid @enderror" required name="city" placeholder="@lang('offices.city--placeholder')"
                               wire:model.defer="office.city">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4 validate">
                        <label for="postal_code">@lang('offices.postal-code')</label>
                        <input type="text" class="form-control @error('office.postal_code') is-invalid @enderror" required name="postal_code" placeholder="@lang('offices.postal-code--placeholder')"
                               wire:model.defer="office.postal_code">
                    </div>
                    <div class="form-group col-md-4 validate">
                        <label for="state_province_region">@lang('offices.state-province-region')</label>
                        <input type="text" class="form-control @error('office.state_province_region') is-invalid @enderror" required name="state_province_region" placeholder="@lang('offices.state-province-region--placeholder')"
                               wire:model.defer="office.state_province_region">
                    </div>

                    <div class="form-group col-md-4 validate" wire:ignore>
                        <label for="country_id">@lang('offices.country')</label>
                        <select class="form-control selectpicker @error('office.country') is-invalid @enderror" required
                                name="country_id"
                                data-width="100%"
                                data-size="8"
                                data-dropup-auto="false"
                                data-live-search="true"
                                data-live-search-placeholder="@lang('main.filter-by-name')"
                                data-live-search-style='startsWith'
                                data-container="body"
                                title="@lang('main.select')"
                                wire:model.defer="office.country_id">
                            @foreach( \App\Models\Country::all() as $country)
                                <option value="{{ $country->id }}" @if( $office && $office_country_id === $country->id) selected @endif >{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-subforms--footer">
            <div class="col-4 p-1 mx-auto">
                <button type="button" class="btn btn-primary btn-forms" @if( !$canBeSubmitted ) disabled @endif  wire:click.prevent="edit()">@lang('main.save')</button>
            </div>
            <a href="#" wire:click.prevent="hideForm()" class="btn-close"> {{-- javascript:window.subformOffice('close') --}}
                <img src="{{ asset('img/icons/white/arrow-down.svg') }}" alt="">
            </a>
        </div>
    </form>
</div>
