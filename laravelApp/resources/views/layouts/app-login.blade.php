<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TAM-RH - Login') }}</title>

    @yield('css')

    <!-- Styles -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body>

    <main id="app" class="box-login">
        @yield('content')
    </main>

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken'          => csrf_token(),
            'app_debug'          => config('app.debug'),
            'url'                => url('/'),
            'locale'             => app()->getLocale(),
        ]); ?>
      </script>
      <script src="{{ asset('js/dashboard.js') }}"></script>
      @yield('js')
      @livewireScripts
</body>
</html>

