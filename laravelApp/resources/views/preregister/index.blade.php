@extends('layouts.preregister')

@section('content')
<div class="container">
    <div class="row justify-content-center font-italic">
        <div class="col-9 col-sm-8 col-md-5 col-lg-4 col-xl-4">
            <img src="{{ asset('img/logos/tam-rh.svg') }}" alt="Logo TAM-RH" class="box-login_logo img-fluid">
            @if( !Session::get('success') )
                <h4 class="text-welcome">@lang('preregister.welcome')</h4>
            @endif
            <div class="returned">
                @if(Session::get('success'))
                    <h4 class="ok text-success d-flex justify-content-center align-items-center flex-column text-center">
                        <img src="{{ asset('img/icons/ok.svg') }}" alt="ok icon" class="fluid-img" style="width: 40px;">@lang('preregister.mssg-ok')
                    </h4>
                @endif
                {{-- @if($errors->any())
                    <h4 class="ko text-danger d-flex justify-content-center align-items-center flex-column text-center mb-2">
                        <img src="{{ asset('img/icons/warning.svg') }}" alt="ko icon" class="fluid-img w-25">
                        @lang('preregister.mssg-ko')
                    </h4>
                @endif --}}
            </div>
            @if( !Session::get('success') )
            <form class="text-center" action="{{ route('register.send-form', ['locale'=>app()->getLocale()]) }}" method="POST">
                @csrf
                <div class="form-group mb-1">
                    <label for="fullname">@lang('preregister.fullname')</label>
                    <input type="text" class="form-control @error('fullname') is-invalid @enderror"
                           id="fullname" name="fullname" aria-describedby="fullnameHelp"
                           value="{{ old('fullname') }}"
                           autofocus >
                    @error('fullname')
                        <div class="invalid-feedback">
                            {{ $errors->first('fullname') }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-1">
                    <label for="email">@lang('preregister.email')</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                           id="email" name="email" aria-describedby="emailHelp"
                           value="{{ old('email') }}" >
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-1">
                    <label for="phone">@lang('preregister.phone')</label>
                    <input type="tel" class="form-control @error('phone') is-invalid @enderror"
                           id="phone" name="phone" aria-describedby="phoneHelp"
                           value="{{ old('phone') }}" >
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $errors->first('phone') }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mt-1">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input"  id="politics" name="politics" value="Y" @if( old('politics') === 'Y' ) checked @endif >
                        <label class="custom-control-label" for="politics">@lang('preregister.politica', ['urlLegal'=>route('register.legal', ['locale'=>app()->getLocale()])])</label>
                    </div>

                    @error('politics')
                        <div class="invalid-feedback">
                            {{ $errors->first('politics') }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-5">
                    @lang('preregister.send')
                </button>
            </form>
            @endif
        </div>
    </div>
</div>
@endsection

@section('js')
{{--
<script>
    var politicsCheckbox = document.getElementById("politics");
    politicsCheckbox.onclick = function() {
        var checked = politicsCheckbox.getAttribute('disabled');
        alert(checked)
        if( politicsCheckbox.getAttribute('disabled') ) {
            alert("nops")
        }
    }
    document.getElementById("legal_btn").onclick = function () { document.getElementById("politics").removeAttribute('disabled'); };
</script>
--}}
@endsection
@section('css')
<style>
    .custom-control-label::before, .custom-control-label::after {
        left: -25px;
    }
    .custom-control-label::after {
        top: 0.12rem;
    }
    .invalid-feedback {
        display: block;
        font-weight: bold;
        font-size: 14px;
        margin-bottom: 14px;
    }
    a[target='TAM-RH'] {
        text-decoration: underline;
    }
</style>
@endsection
