<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- favicons --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#1D5FBF">
    <meta name="theme-color" content="#1D5FBF">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TAM-RH - Login') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
    @yield('css')

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
</body>
</html>

