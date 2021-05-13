<nav class="navbar navbar-expand topbar static-top">

    <!-- Page Heading -->
    <h1 class="topbar-page-heading">@yield('title-heading')</h1>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            @include('dashboard.partials.notifications')
        </li>

        <div class="topbar-divider"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item topbar-user">
            <div class="mt-1">
                <div class="topbar-user_name">John Doe</div>
                <a href="#" class="topbar-user_edit">Editar perfil</a>
                 |
                <a href="#" data-toggle="modal" data-target="#logoutModal">
                    <img src="{{ asset('img/icons/exit-session.svg') }}" alt="Exit session" class="exit-session">
                </a>
            </div>
            <img class="topbar-user_img rounded-circle" src="{{ asset('img/icons/user-default.svg') }}">
        </li>

    </ul>
</nav>
@if( request()->route()->getName() === 'dashboard.index' )
<nav class="topbar-bottom">
    <div class="topbar-bottom__welcome">Bienvenido de nuevo Nombre Apellido</div>
    <div class="topbar-bottom__lastacces">Su último acceso fué hace 04:03h</div>
    <div class="topbar-bottom__date">04.05.2020 - 16:45</div>
</nav>
@endif

<div class="topbar-mobile-sticky">
    <nav class="topbar-mobile">
        <div>
            <a href="{{ route('dashboard.index') }}">
                <div class="topbar-mobile-logo"></div>
            </a>
            <div class="topbar-mobile-date">04.05.2020 - 16:45</div>
        </div>
        <div class="navbar topbar-mobile-user">
            <a href="#" class="" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="topbar-mobile-user_img rounded-circle" src="{{ asset('img/icons/white/user-default.svg') }}">
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                    <img class="topbar-mobile-user_icon" src="{{ asset('img/icons/blue/edit.svg') }}" alt="">
                    Editar Perfil
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <img src="{{ asset('img/icons/exit-session.svg') }}" alt="Exit session" class="topbar-mobile-user_icon">
                        Cerrar sessión
                    </a>
                </div>
            </a>
        </div>
    </nav>

    <nav class="navbar topbar-mobile_bottom">
        <div>
            <h1 class="topbar-mobile_bottom--page-heading">@yield('title-heading')</h1>
        </div>
        <div class=" nav-item dropdown no-arrow mx-1">
            @include('dashboard.partials.notifications')
        </div>
    </nav>
</div>

