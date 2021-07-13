<div>

    <div class="progress axios" wire:loading >
        <div class="indeterminate"></div>
    </div>

    <form class="text-center" wire:submit.prevent="subitForm">

        <img src="{{ asset('img/logos/tam-rh.svg') }}" alt="Logo TAM-RH" class="box-login_logo img-fluid">

        @csrf
        <div class="form-group mb-1">
            <label for="email">@lang('login.email')</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror"
                   wire:model.debounce.500ms="email"
                   id="email"
                   name="email"
                   value="{{ old('email') }}"
                   autocomplete="username"
                   autofocus >
        </div>
        <div class="form-group mb-0">
            <label for="email">@lang('login.password')</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror"
                   wire:model.debounce.500ms="password"
                   id="password" name="password"
                   autocomplete="current-password"
                   value="{{ old('password') }}" >
        </div>
        <div class="form-group mt-1">
            <div class="custom-control custom-checkbox small">
                <input type="checkbox" class="custom-control-input"
                       wire:model.debounce.500ms="remember"
                       id="remember"
                       name="remember"
                       value="true">
                <label class="custom-control-label" for="remember">@lang('login.remember-me')</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block" wire:loading.class="bg-gray">
            @lang('login.login')
        </button>

    </form>
    <div class="d-flex justify-content-between mt-4">
        <a href="{{ route('password.request') }}">@lang('login.forgot-password')</a>
        <a href="{{ route('user.register', ['locale'=>app()->getLocale(), 'package'=>'basic']) }}">@lang('login.not-client-yet')</a>
    </div>
    @error('throttle')
        {{ $message }}
    @enderror

    <script>
        document.addEventListener('livewire:load', function () {
            @if( Session::has('userInactive') )
                Swal.fire({
                    title: '¡Uuups!',
                    html: 'Parece que no tienes permisos para acceder.',
                    icon: 'error',
                    confirmButtonText: "@lang('main.close')"
                });
            @endif
            @if( Session::has('throttle') )
                Swal.fire({
                    title: '¡Uuups!',
                    html: "{{ session('throttle') }}",
                    icon: 'error',
                    confirmButtonText: "@lang('main.close')"
                });
            @endif
        });
    </script>
</div>
