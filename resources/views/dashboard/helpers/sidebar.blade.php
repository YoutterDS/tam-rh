<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="{{ asset('img/tam.svg') }}" class="img-fluid img-thumbnail" style="max-width: 50px;">
      </div>
      <div class="sidebar-brand-text mx-3">{{ config('app.name') }}</div>
    </a>

    <!-- Heading -->
    <div class="sidebar-heading  pt-4">
      Tu
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if( request()->route()->getName() === 'dashboard.index' ) active @endif">
      <a class="nav-link" href="{{ route('dashboard.index', ['locale'=>app()->getLocale()]) }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Inicio</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="perfil.html" >
        <i class="fas fa-fw fa-user"></i>
        <span>@lang('sidebar.my-profile')</span>
      </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Tu Empresa
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item  @if( request()->route()->getName() === 'dashboard.settings' ) active @endif">
      <a class="nav-link " href="{{ route('dashboard.settings', ['locale'=>app()->getLocale()]) }}" >
        <i class="fas fa-fw fa-cogs"></i>
        <span>Configuración</span>
      </a>
    </li>
    <!--
    <li class="nav-item">
      <a class="nav-link " href="departamentos.html" >
        <i class="fas fa-fw fa-sitemap"></i>
        <span>Departamentos</span>
      </a>
    </li>
     -->
    <li class="nav-item">
      <a class="nav-link " href="empleados.html" >
        <i class="fas fa-fw fa-users"></i>
        <span>Empleados</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="control-horario.html" >
        <i class="fas fa-fw fa-clipboard-list"></i>
        <span>Control horario</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="calendario.html" >
        <i class="fas fa-fw fa-calendar"></i>
        <span>Calendario</span>
      </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Extras
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link " href="eventos.html" >
        <i class="fas fa-fw fa-calendar"></i>
        <span>Eventos</span>
      </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link" href="tareas.html">
        <i class="fas fa-fw fa-clipboard-list"></i>
        <span>Tareas</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

     <!-- Heading -->
    <div class="sidebar-heading">
      Estructura APP
    </div>

    <li class="nav-item">
      <a class="nav-link" href="roles-y-permisos.html">
        <i class="fas fa-fw fa-frog"></i>
        <span>Roles y permisos</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
