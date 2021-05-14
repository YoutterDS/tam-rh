<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name') }}</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- favicons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#1D5FBF">
    <meta name="theme-color" content="#1D5FBF">

    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2/select2.css') }}">
    @yield('css')
    @livewireStyles
</head>

<body id="page-top">

    <div class="progress axios" wire:loading >
        <div class="indeterminate"></div>
    </div>

    <div id="wrapper">
        @include('dashboard.partials.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">

            @include('dashboard.partials.topbar')

            <div id="content" >
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('dashboard.partials.footer')
        </div>
    </div>

    <a class="scroll-to-top" href="#page-top">
        <img src="{{ asset('img/icons/white/arrow-down.svg') }}" alt="">
    </a>
{{--
    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Tan pronto?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sessión" si está seguro de terminar la sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="{{ route('login', ['locale'=>app()->getLocale()]) }}">Cerrar sessión</a>
                </div>
            </div>
        </div>
    </div>
--}}
    @yield('modals-sections')

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            'app_debug' => config('app.debug'),
            'url' => url('/'),
        ]); ?>
    </script>

    <script src="{{ asset('js/dashboard.js') }}"></script>
    @yield('js')
    @yield('js-sections')
    @livewireScripts
</body>

</html>
