<div class="form-section">
    <h5 class="form-section_title">
        @lang('company-profile.billing-info')
    </h5>
    <div class="form-row">
        <div class="form-group col-sm-12 col-md-2" wire:ignore>
            <label for="billing_recurrency_id">@lang('company-profile.billing-recurrency')</label>
            <select class="form-control selectpicker"
                    id="billing_recurrency_id"
                    name="billing_recurrency_id"
                    data-width="100%"
                    data-size="8"
                    data-dropup-auto="false"
                    data-live-search="false"
                    data-live-search-placeholder=""
                    data-live-search-style='startsWith'
                    data-container="body"
                    title="@lang('main.select')"
                    wire:model.defer="billing_recurrency_id">
                    @foreach( \App\Models\BillingRecurrency::all() as $billingRecurrency )
                        <option value="{{ $billingRecurrency->id }}" @if($billingRecurrency->id === $billing_recurrency_id) selected @endif >{{ $billingRecurrency->name }}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group col-sm-12 col-md-2 text-center">
            <label for="phone_number">@lang('company-profile.next-renovation')</label>
            <div class="pt-2">{{ \Carbon\Carbon::now()->format('d/m/Y') }}</div>
        </div>
        <div class="form-group col-sm-12 col-md-2 text-center">
            <label for="phone_number">@lang('company-profile.next-quote')</label>
            <div class="pt-2">{{ \Carbon\Carbon::now()->format('d/m/Y') }}</div>
        </div>
        <div class="form-group col-sm-12 col-md-2 text-center">
            <label for="phone_number">@lang('company-profile.total-to-pay')</label>
            <div class="pt-2">{{ number_format( ( floatval (auth()->user()->company->package->price * App\Models\User::all()->count()) ), 2, ',', '.') }}€+IVA</div>
        </div>
        <div class="form-group d-flex flex-wrap col-sm-3 pt-switch">
            @foreach( \App\Models\BillingType::all() as $billingType)
                <div class="custom-control custom-switch custom-switch--validate mr-4">
                    <input type="radio"
                        class="custom-control-input"
                        id="billingType{{ $billingType->code }}"
                        name="billing_type_id"
                        value="{{ $billingType->code }}"
                        wire:model="billing_type"
                        wire:click="$set('billing_type', '{{$billingType->code}}')">
                    <label class="custom-control-label" for="billingType{{ $billingType->code }}" >{{ $billingType->name }}</label>
                </div>
            @endforeach
            {{--
            @if( $company->billingType && $billing_type !== $company->billingType->code )
                <small class="animate__animated animate__fadeIn animate__faster">
                    <span class="text-danger">*</span>@lang('company-profile.changing-billing-type')<br/>
                    <span class="text-danger">@lang('company-profile.this-action-cannot-be-undone')</span>
                </small>
            @endif
            --}}
        </div>
    </div>
    @if( $billing_type === 'TC' )
    <div id="billintTypeTC" class="form-row mt-4 animate__animated animate__fadeIn animate__faster">
        <div class="col-sm-12 col-md-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-secondary"><img src="{{ asset('img/icons/credit-card-chip.png') }}"> @lang('company-profile.credit-card')</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        {{ $business_name }}<br/>
                        XXXX-XXXX-XXXX-XXXX
                    </h6>
                    <p class="card-text text-right">{{ $credit_card_caducity ?? 'XX/XX' }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-2 d-flex flex-column">
            <small>
                <span class="text-danger">*</span> @lang('company-profile.credit-card--description')
            </small>

            <a href="#" class="btn btn-primary btn-forms align-self-start m-0 mt-auto" wire:click="addCreditCard()">
                {{ !$credit_card ? 'Alta tarjeta' : 'Modificar tarjeta' }}
            </a>
            <small><span class="text-danger">**</span>
                @if( $credit_card )
                    @lang('company-profile.updating-credit-card--description')
                @else
                    @lang('company-profile.new-credit-card--description')
                @endif
            </small>
        </div>
        </p>
    </div>
    @endif

    @if( $billing_type === 'DB' )
    <div id="billintTypeDO" class="mt-4 animate__animated animate__fadeIn animate__faster">
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="bank_name">@lang('company-profile.name-bank')</label>
                <input type="text" class="form-control @error('bank_name') is-invalid @enderror" name="bank_name" id="bank_name" wire:model.defer="bank_name">
            </div>
            <div class="form-group col-md-4">
                <label for="bank_cc">@lang('company-profile.number-cc')</label>
                <div class="input-group">
                    <input type="text" class="form-control @error('bank_cc') is-invalid @enderror" id="bank_cc" name="bank_cc"  wire:model.defer="bank_cc" @if( $bank_cc && $bank->cc && $decript_action_cc === 'show' ) disabled @endif>
                    @if( $bank && $bank_cc )
                    <div class="input-group-prepend" type="button" wire:click.prevent="decryptEncrypt('cc')" >
                        <span class="input-group-text" ><i class="fas fa-eye{{ $eye_cc }}"></i></span>
                    </div>
                    @endif
                </div>
                <div class="@if( $bank && !$bank->cc ) d-none @else d-flex justify-content-between @endif">
                    @if( $decript_action_cc === 'show')
                        <small>@lang('company-profile.encrypted-data--show') <i class="fas fa-eye-slash"></i></small>
                    @else
                        <small>@lang('company-profile.encrypted-data--hide') <small id="countdown_cc" class="text-danger ml-auto">20s</small></small>
                    @endif
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="bank_iban">@lang('company-profile.iban')</label>
                <div class="input-group">
                    <input type="text" class="form-control @error('bank_iban') is-invalid @enderror" id="bank_iban" name="bank_iban"  wire:model.defer="bank_iban"  @if( $bank_iban && $bank->iban && $decript_action_iban === 'show' ) disabled @endif>
                    @if( $bank && $bank->iban )
                    <div class="input-group-prepend" type="button" wire:click.prevent="decryptEncrypt('iban')" >
                        <span class="input-group-text" ><i class="fas fa-eye{{ $eye_iban }}"></i></span>
                    </div>
                    @endif
                </div>
                <div class="@if( $bank && !$bank->iban ) d-none @else d-flex justify-content-between @endif">
                    @if($decript_action_iban === 'show')
                        <small>@lang('company-profile.encrypted-data--show') <i class="fas fa-eye-slash"></i></small>
                    @else
                        <small>@lang('company-profile.encrypted-data--hide') <small id="countdown_iban" class="text-danger ml-auto">20s</small></small>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

