<div>
    {{-- <div class="loading" wire:loading></div> --}}

    <form class="text-center" {{-- action="{{ route('dashboard.index') }}" --}} wire:submit.prevent="subitForm">

        <img src="{{ asset('img/logos/tam-rh.svg') }}" alt="Logo TAM-RH" class="box-login_logo img-fluid">

        @csrf
        <div class="form-group mb-1">
            <label for="email">@lang('login.email')</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror"
                   wire:model="email"
                   id="email"
                   name="email"
                   value="{{ old('email') }}"
                   autocomplete="username"
                   autofocus >
        </div>
        <div class="form-group mb-0">
            <label for="email">@lang('login.password')</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror"
                   wire:model="password"
                   id="password" name="password"
                   autocomplete="current-password"
                   value="{{ old('password') }}" >
        </div>
        <div class="form-group mt-1">
            <div class="custom-control custom-checkbox small">
                <input type="checkbox" class="custom-control-input"
                       wire:model="remember"
                       id="remember"
                       name="remember">
                <label class="custom-control-label" for="remember">@lang('login.remember-me')</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block" wire:loading.class="bg-gray">
            @lang('login.login')
        </button>

    </form>
    <div class="d-flex justify-content-center mt-4">
        <div class="text-center">
            <a href="{{ route('password.request') }}">@lang('login.forgot-password')</a>
        </div>
    </div>
</div>
