<ul class="navbar-nav  sidebar accordion d-none d-sm-block" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand" href="{{ route('dashboard.index', ['locale'=>app()->getLocale()]) }}">
      <div class="sidebar-brand-icon">
         {{-- <img src="{{ asset('img/logos/tam-rh.svg') }}" class="img-fluid" > --}}
      </div>
    </a>


    <li class="nav-item @if( request()->route()->getName() === 'dashboard.index' ) active @endif">
      <a class="nav-link" href="{{ route('dashboard.index', ['locale'=>app()->getLocale()]) }}" >
        <img src="{{ asset('img/icons/dashboard.svg') }}" class="nav-link__icon" >
        <span>@lang('sidebar.home')</span>
      </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item  @if( request()->route()->getName() === 'dashboard.settings' ) active @endif">
      <a class="nav-link " href="{{ route('dashboard.settings', ['locale'=>app()->getLocale()]) }}" >
        <img src="{{ asset('img/icons/configuration.svg') }}" class="nav-link__icon" >
        <span>@lang('sidebar.settings')</span>
      </a>
    </li>

    <li class="nav-item @if( request()->route()->getName() === 'dashboard.employees.index' ) active @endif">
        <a class="nav-link " href="{{ route('dashboard.employees.index', ['locale'=>app()->getLocale()]) }}" >
            <img src="{{ asset('img/icons/employeers.svg') }}" class="nav-link__icon" >
            <span>Empleados</span>
        </a>
    </li>

    <li class="nav-item @if( request()->route()->getName() === 'dashboard.timetable' or request()->route()->getName() === 'dashboard.timetable.detail' ) active @endif">
      <a class="nav-link" href="{{ route('dashboard.timetable', ['locale'=>app()->getLocale()]) }}" >
        <img src="{{ asset('img/icons/time-control.svg') }}" class="nav-link__icon" >
        <span>Control horario</span>
      </a>
    </li>
    <li class="nav-item @if( request()->route()->getName() === 'dashboard.documents' ) active @endif">
        <a class="nav-link " href="{{ route('dashboard.documents', ['locale'=>app()->getLocale()]) }}" >
            <img src="{{ asset('img/icons/documents.svg') }}" class="nav-link__icon" >
            <span>Documentos</span>
        </a>
    </li>

    <!-- Heading -->
    <div class="mb-5"></div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item noactions @if( request()->route()->getName() === 'dashboard.events.index' ) active @endif">
      <a class="nav-link" href="{{ route('dashboard.events.index', [ 'locale' => app()->getLocale() ]) }}" >
        <img src="{{ asset('img/icons/events.svg') }}" class="nav-link__icon" >
        <span>Eventos</span>
      </a>
    </li>

    <li class="nav-item @if( request()->route()->getName() === 'dashboard.calendar.index' ) active @endif">
        <a class="nav-link" href="{{ route('dashboard.calendar.index', ['locale'=>app()->getLocale()]) }}" >
            <img src="{{ asset('img/icons/calendar.svg') }}" class="nav-link__icon" >
            <span>Calendario</span>
        </a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item noactions @if( request()->route()->getName() === 'dashboard.tasks.index' ) active @endif">
      <a class="nav-link" href="{{ route('dashboard.tasks.index', [ 'locale' => app()->getLocale() ]) }}">
        <img src="{{ asset('img/icons/tasks.svg') }}" class="nav-link__icon" >
        <span>Tareas</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
      <a class="nav-link @if( request()->route()->getName() === 'dashboard.subscription.index' ) active @endif"
         href="{{ route('dashboard.subscription.index', ['locale'=>app()->getLocale()]) }}">
        <img src="{{ asset('img/icons/subscription.svg') }}" class="nav-link__icon" >
        <span>Subscripción</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center mt-4">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>

<div class="sidebar-mobile collapsed">
    <div id="sidebarMobileSmall">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a class="sidebar-mobile-link @if( request()->route()->getName() === 'dashboard.employees.index' ) active @endif"
                       href="{{ route('dashboard.employees.index', ['locale'=>app()->getLocale()]) }}" >
                        <img src="{{ asset('img/icons/employeers.svg') }}" class="sidebar-mobile-link__icon" >
                    </a>
                </div>
                <div class="col">
                    <a class="sidebar-mobile-link noactions @if( request()->route()->getName() === 'dashboard.tasks.index' ) active @endif"
                       href="{{ route('dashboard.tasks.index', ['locale'=>app()->getLocale()]) }}" >
                        <img src="{{ asset('img/icons/tasks.svg') }}" class="sidebar-mobile-link__icon" >
                    </a>
                </div>
                <div class="col">
                    <a class="sidebar-mobile-link noactions @if( request()->route()->getName() === 'dashboard.events.index' ) active @endif"
                       href="{{ route('dashboard.events.index', ['locale'=>app()->getLocale()]) }}" >
                        <img src="{{ asset('img/icons/events.svg') }}" class="sidebar-mobile-link__icon" >
                    </a>
                </div>
                <div class="col">
                    <a class="sidebar-mobile-link @if( request()->route()->getName() === 'dashboard.documents' ) active @endif"
                       href="{{ route('dashboard.documents', ['locale'=>app()->getLocale()]) }}" >
                        <img src="{{ asset('img/icons/documents.svg') }}" class="sidebar-mobile-link__icon" >
                    </a>
                </div>
                <div class="col">
                    <a class="sidebar-mobile-link @if( request()->route()->getName() === 'dashboard.timetable' or request()->route()->getName() === 'dashboard.timetable.detail' ) active @endif"
                       href="{{ route('dashboard.timetable', ['locale'=>app()->getLocale()]) }}" >
                        <img src="{{ asset('img/icons/time-control.svg') }}" class="sidebar-mobile-link__icon" >
                    </a>
                </div>
                <div class="col">
                    <a class="sidebar-mobile-link" href="#" id="expandSidebarMobile" >
                        <img src="{{ asset('img/icons/white/dots.svg') }}" class="sidebar-mobile-link__icon" >
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="sidebarMobileBig">
        <div class="container">
            <div class="row">
                <div class="col mb-2">
                    <a href="#" id="collapseSidebarMobile">
                        <img src="{{ asset('img/icons/white/arrow-down.svg') }}" >
                    </a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
                <div class="row">
                    <div class="col s6">
                        <a class="sidebar-mobile-link @if( request()->route()->getName() === 'dashboard.settings' ) active @endif"
                           href="{{ route('dashboard.settings', ['locale'=>app()->getLocale()]) }}" >
                            <img src="{{ asset('img/icons/configuration.svg') }}" class="sidebar-mobile-link__icon" >
                            <span>Configuración</span>
                        </a>
                    </div>
                    <div class="col s6">
                        <a class="sidebar-mobile-link reverse noactions @if( request()->route()->getName() === 'dashboard.events.index' ) active @endif"
                           href="{{ route('dashboard.events.index', ['locale'=>app()->getLocale()]) }}" >
                            <img src="{{ asset('img/icons/events.svg') }}" class="sidebar-mobile-link__icon" >
                            <span>Eventos</span>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col s6">
                        <a class="sidebar-mobile-link @if( request()->route()->getName() === 'dashboard.employees.index' ) active @endif"
                           href="{{ route('dashboard.employees.index', ['locale'=>app()->getLocale()]) }}" >
                            <img src="{{ asset('img/icons/employeers.svg') }}" class="sidebar-mobile-link__icon" >
                            <span>Empleados</span>
                        </a>
                    </div>
                    <div class="col s6">
                        <a class="sidebar-mobile-link reverse  @if( request()->route()->getName() === 'dashboard.calendar.index' ) active @endif"
                           href="{{ route('dashboard.calendar.index', ['locale'=>app()->getLocale()]) }}" >
                            <img src="{{ asset('img/icons/calendar.svg') }}" class="sidebar-mobile-link__icon" >
                            <span>Calendario</span>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col s6">
                        <a class="sidebar-mobile-link @if( request()->route()->getName() === 'dashboard.timetable' or request()->route()->getName() === 'dashboard.timetable.detail' ) active @endif"
                           href="{{ route('dashboard.timetable', ['locale'=>app()->getLocale()]) }}" >
                            <img src="{{ asset('img/icons/time-control.svg') }}" class="sidebar-mobile-link__icon" >
                            <span>Control horario</span>
                        </a>
                    </div>
                    <div class="col s6">
                        <a class="sidebar-mobile-link reverse noactions @if( request()->route()->getName() === 'dashboard.tasks.index' ) active @endif"
                           href="{{ route('dashboard.tasks.index', ['locale'=>app()->getLocale()]) }}" >
                            <img src="{{ asset('img/icons/tasks.svg') }}" class="sidebar-mobile-link__icon" >
                            <span>Tareas</span>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col s6">
                        <a class="sidebar-mobile-link @if( request()->route()->getName() === 'dashboard.documents' ) active @endif"
                           href="{{ route('dashboard.documents', ['locale'=>app()->getLocale()]) }}" >
                            <img src="{{ asset('img/icons/documents.svg') }}" class="sidebar-mobile-link__icon" >
                            <span>Documentos</span>
                        </a>
                    </div>
                    <div class="col s6">
                        <a class="sidebar-mobile-link reverse @if( request()->route()->getName() === 'dashboard.subscription.index' ) active @endif"
                           href="{{ route('dashboard.subscription.index', ['locale'=>app()->getLocale()]) }}" >
                            <img src="{{ asset('img/icons/subscription.svg') }}" class="sidebar-mobile-link__icon" >
                            <span>Subscripción</span>
                        </a>
                    </div>
                </div>
        </div>
    </div>
</div>

