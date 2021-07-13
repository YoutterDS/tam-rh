<div>
    <div class="progress axios" wire:loading wire:target="personalDataSend,companyDataSend,accesDataSend" >
        <div class="indeterminate"></div>
    </div>

    <div class="row justify-content-center font-italic">
        <div class="col mb-3">
            <h4 class="text-center mt-4 mb-2">
                @if( $step < 4 )
                    @lang('register.title')
                @else
                    @lang('register.title-finished')
                @endif
            </h4>
            <div class="text-center pt-4">
                <img src="{{ asset('img/logos/tam-rh.svg') }}" alt="Logo TAM-RH" class="box-login_logo img-fluid ">
            </div>
        </div>
    </div>
    <div class="row pb-4">

        @if( $step < 4 )
            <div class="col-sm-12 col-md-12 col-lg-4 pr-3 mt-2" >
                <div class="box-subscriptions">
                    @foreach( app('rinvex.subscriptions.plan')->all() as $plan )
                        <div class="custom-control custom-switch custom-switch--validate @if( !$loop->last ) mr-2 @endif">
                            <input type="checkbox"
                                    class="custom-control-input"
                                    id="package_{{ $plan->id }}"
                                    @if($package === $plan->id) checked @endif
                                    wire:click="$set('package', {{ $plan->id }})">
                            <label class="custom-control-label" for="package_{{ $plan->id }}" >{{ $plan->name }}</label>
                        </div>
                    @endforeach
                    @include('dashboard.subscription.partials.plan-base', ['plan'=> app('rinvex.subscriptions.plan')->find($package), 'type'=>'register', 'extraclass'=>'text-blue shadow-none m-0 w-100 ' . env('SHOW_ANIMATION') ])
                </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-8">
                    <div id="accordion" class="accordion">
                        <div class="accordion-item">
                            <div class="accordion-item--header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link @if($step !== 1) collapsed @endif" data-toggle="collapse" data-target="#personalData" aria-expanded="true" aria-controls="collapseOne">
                                    1. @lang('register.personal-data')
                                    </button>
                                </h5>
                            </div>

                            <div id="personalData" class="accordion-item--content collapse @if($step === 1) show @endif" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <form name="personalDataForm" method="POST" wire:submit.prevent="submit" >
                                        {{-- PERSONAL DATA --}}
                                        <div class="row">
                                            <div class="col-12 col-md-6 form-group">
                                                <label for="name">@lang('register.name')</label>
                                                <input type="text"
                                                        class="form-control @error('name') is-invalid @enderror"
                                                        wire:model.defer="name"
                                                        name="name"
                                                        value="{{ old('name') }}"
                                                        autofocus >
                                            </div>
                                            <div class="col-12 col-md-6 form-group">
                                                <label for="surname">@lang('register.surname')</label>
                                                <input type="text"
                                                        class="form-control @error('surname') is-invalid @enderror"
                                                        wire:model.defer="surname"
                                                        name="surname"
                                                        value="{{ old('surname') }}" >
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-md-6 form-group">
                                                <label for="nif_nie">@lang('register.nif-nie')</label>
                                                <input type="text"
                                                        class="form-control @error('nif_nie') is-invalid @enderror"
                                                        wire:model.defer="nif_nie"
                                                        name="nif_nie"
                                                        value="{{ old('nif_nie') }}" >
                                            </div>
                                            <div class="col-12 col-md-6 form-group" >
                                                <label for="birthdate">@lang('register.birthdate')</label>
                                                <input type="text"
                                                        class="form-control datepicker @error('birthdate') is-invalid @enderror"
                                                        wire:model.defer="birthdate"
                                                        name="birthdate"
                                                        autocomplete="off"
                                                        readonly
                                                        value="{{ old('birthdate') }}" >
                                                        @error('birthdate')
                                                            <div class="text-warning">{{ $message }}</div>
                                                        @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 col-md-6 form-group">
                                                <label for="email">@lang('register.email')</label>
                                                <input type="text"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        wire:model.defer="email"
                                                        name="email"
                                                        value="{{ old('email') }}" >
                                                @error('email')
                                                    @if( $message !== \Lang::get('validation.required', ['attribute'=> \Lang::get('validation.attributes.email')]) )
                                                        <div class="text-warning">{{ $message }}</div>
                                                    @endif
                                                @enderror
                                            </div>
                                            <div class="col-12 col-md-6 form-group">
                                                <label for="phone_number">@lang('register.phone')</label>
                                                <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                                        wire:model.defer="phone_number"
                                                        name="phone_number"
                                                        value="{{ old('phone') }}" >
                                            </div>
                                        </div>

                                        <div class="form-group mt-4">
                                            <div class="custom-control custom-checkbox d-flex justify-content-center">
                                                <input type="checkbox"
                                                        wire:model.defer="politics"
                                                        class="custom-control-input @error('politics') is-invalid @enderror"
                                                        name="politics"
                                                        id="politics"
                                                        value="Y"
                                                        @if( old('politics') === 'Y' ) checked @endif >
                                                <label class="custom-control-label" for="politics">@lang('register.politica', ['urlLegal'=>route('preregister.legal', ['locale'=>app()->getLocale()])])</label>
                                            </div>

                                            @error('politics')
                                                <div class="invalid-feedback">
                                                    {{ $errors->first('politics') }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="row">
                                            <div class="col d-flex justify-content-center mt-2">
                                                <a class="btn btn-primary pl-4 pr-4"
                                                wire:click.prevent="personalDataSend">
                                                    @lang('register.send-step-01')
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-item--header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link @if($step !== 2) collapsed @endif" data-toggle="collapse" data-target="#companyData" aria-expanded="false" aria-controls="collapseTwo" >
                                    2. @lang('register.company-data')
                                    </button>
                                </h5>
                            </div>
                            <div id="companyData" class="accordion-item--content collapse @if($step === 2) show @endif" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <form name="companyDataForm" method="POST" wire:submit.prevent="submit" >
                                        <div class="row">
                                            <div class="col-12 col-md-6 form-group">
                                                <label for="business_name">@lang('register.business-name')</label>
                                                <input type="text" class="form-control @error('business_name') is-invalid @enderror"
                                                    wire:model.defer="business_name"
                                                    name="business_name"
                                                    value="{{ old('business_name') }}"
                                                    autofocus >
                                            </div>
                                            <div class="col-12 col-md-6 form-group">
                                                <label for="company_cif">@lang('register.cif')</label>
                                                <input type="text" class="form-control @error('company_cif') is-invalid @enderror"
                                                    wire:model.defer="company_cif"
                                                    name="company_cif"
                                                    value="{{ old('cif') }}" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 form-group">
                                                <label for="company_city">@lang('register.city')</label>
                                                <input type="text" class="form-control @error('company_city') is-invalid @enderror"
                                                    wire:model.defer="company_city"
                                                    name="company_city"
                                                    value="{{ old('cif') }}" >
                                            </div>
                                            <div class="col-12 col-md-6 form-group">
                                                <label for="company_postal_code">@lang('register.postal-code')</label>
                                                <input type="text" class="form-control @error('company_postal_code') is-invalid @enderror"
                                                    wire:model.defer="company_postal_code"
                                                    name="company_postal_code"
                                                    value="{{ old('company_postal_code') }}" >
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 form-group">
                                                <label for="company_email">@lang('register.email')</label>
                                                <input type="text" class="form-control @error('company_email') is-invalid @enderror"
                                                    wire:model.defer="company_email"
                                                    name="company_email"
                                                    value="{{ old('company_email') }}" >
                                            </div>
                                            <div class="col-12 col-md-6 form-group">
                                                <label for="company_phone_number">@lang('register.phone')</label>
                                                <input type="text" class="form-control @error('company_phone_number') is-invalid @enderror"
                                                    wire:model.defer="company_phone_number"
                                                    name="company_phone_number"
                                                    value="{{ old('company_phone_number') }}" >
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col d-flex justify-content-center mt-2">
                                                <a class="btn btn-primary pl-4 pr-4"
                                                wire:click.prevent="companyDataSend">
                                                    @lang('register.send-step-01')
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-item--header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link @if($step !== 3) collapsed @endif" data-toggle="collapse" data-target="#accesData" aria-expanded="false" aria-controls="collapseThree" >
                                3. @lang('register.acces-data')
                                </button>
                            </h5>
                            </div>
                            <div id="accesData" class="accordion-item--content collapse @if($step === 3) show @endif" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <form name="accesDataForm" method="POST" wire:submit.prevent="submit" >
                                        <div class="row">
                                            <div class="col-12 col-md-6 form-group">
                                                <label for="username">@lang('register.username')</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                    wire:model.defer="email"
                                                    name="username"
                                                    value="{{ old('username') }}"
                                                    autocomplete="email"
                                                    disabled >
                                            </div>
                                            <div class="col-12 col-md-6 form-group">
                                                <label for="email">@lang('register.password')</label>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                                    wire:model="password"
                                                    name="password"
                                                    autocomplete="current-password"
                                                    value="{{ old('password') }}"
                                                    autofocus >
                                                    @error('password')
                                                        @if( $message !== \Lang::get('validation.required', ['attribute'=> \Lang::get('validation.attributes.password')]) )
                                                            <div class="text-warning">{{ $message }}</div>
                                                        @endif
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-10 col-md-6 form-group text-right pt-2">
                                                @lang('passwords.required-format')
                                            </div>
                                            <div class="col-10 col-md-6 form-group">
                                                <label for="password_confirmation">@lang('register.confirm-password')</label>
                                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    wire:model="password_confirmation"
                                                    name="password_confirmation"
                                                    autocomplete="current-password"
                                                    value="{{ old('password_confirmation') }}" >
                                                    @error('password_confirmation')
                                                    <div class="text-warning">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col d-flex justify-content-center mt-2">
                                                <a class="btn btn-primary pl-4 pr-4"
                                                    wire:click.prevent="accesDataSend">
                                                    @lang('register.send-step-01')
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <div class="accordion-item--header" id="headingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link @if($step !== 4) collapsed @endif" data-toggle="collapse" data-target="#billingData" aria-expanded="false" aria-controls="collapseThree" >
                                4. @lang('register.billing-data')
                                </button>
                            </h5>
                            </div>
                            <div id="billingData" class="accordion-item--content collapse @if($step === 4) show @endif" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <form name="billingDataForm" method="POST" wire:submit.prevent="submit" >
                                        <div class="row">
                                            <div class="col-12 col-md-6 form-group">
                                                <label for="username">@lang('register.username')</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                    wire:model.defer="email"
                                                    name="username"
                                                    value="{{ old('username') }}"
                                                    autocomplete="email"
                                                    disabled >
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col d-flex justify-content-center mt-2">
                                                <a class="btn btn-primary pl-4 pr-4"
                                                    wire:click.prevent="accesDataSend">
                                                    @lang('register.send-step-01')
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        @endif
        @if( $step ===  4 )
            <div class="col text-center">
                @lang('register.description-finished', ['urlLogin'=> route('login')])
            </div>
        @endif
    </div>

    <style>
        .card {background-color: transparent;}
        .box-subscriptions--item {
            pointer-events: none;
        }
    </style>

    <script>
        document.addEventListener('livewire:load', function () {
            $('.selectpicker').selectpicker();

            $('.datepicker').daterangepicker({
                timePicker: false,
                singleDatePicker: true,
                autoUpdateInput: false,
                showDropdowns: true,
                locale: {
                    "format": "DD/MM/YYYY",
                    "separator": " - ",
                    "applyLabel": "Aplicar",
                    "cancelLabel": "Cancelar",
                    "fromLabel": "Desde",
                    "toLabel": "Hasta",
                    "weekLabel": "W",
                    "daysOfWeek": ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
                    "monthNames": ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                    "firstDay": 1
                },
            })

            $('.datepicker').on('apply.daterangepicker', function (ev, picker) {
                @this.set('birthdate', picker.startDate.format('DD/MM/YYYY'))
            });

            $('.datepicker').on('cancel.daterangepicker', function (ev, picker) {
                $(this).val('');
            });
        })
    </script>
</div>
