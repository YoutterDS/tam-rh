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
        <li class="nav-item topbar-user ">
            <div class="mt-1">
                <div class="topbar-user_name">{{ auth()->user()->full_name }}</div>
                <div class="d-flex align-items-center">
                    <a href="#" class="topbar-user_edit">@lang('main.edit-profile')</a>
                    <div class="divider-vertical">|</div>
                    <livewire:logout />
                </div>
            </div>
            <img class="topbar-user_img rounded-circle" src="{{ asset('img/icons/user-default.svg') }}">
        </li>
    </ul>
</nav>
@if( request()->route()->getName() === 'dashboard.index' )
    <nav class="topbar-bottom">
        <div class="topbar-bottom__welcome">@lang('topbar.welcome-back') {{ auth()->user()->name }}</div>
        <div class="topbar-bottom__lastacces">@if( auth()->user()->last_login )@lang('main.your-last-access-was-ago') {{ auth()->user()->last_login }}@endif</div>
        <div class="topbar-bottom__date">{{ \Carbon\Carbon::now()->format('d.m.Y') }} - <span id="clock">{{ \Carbon\Carbon::now()->format('h:i A') }}</span></div>
    </nav>
@endif

<div class="topbar-mobile-sticky">
    <nav class="topbar-mobile">
        <div>
            <a href="{{ route('dashboard.index') }}">
                <div class="topbar-mobile-logo"></div>
            </a>
            <div class="topbar-mobile-date">{{ \Carbon\Carbon::now()->format('d.m.Y') }} - <span id="clockMobile">{{ \Carbon\Carbon::now()->format('h:i A') }}</span></div>
        </div>
        <div class="navbar topbar-mobile-user">
            <a href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="topbar-mobile-user_img rounded-circle" src="{{ asset('img/icons/white/user-default.svg') }}">
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <img class="topbar-mobile-user_icon" src="{{ asset('img/icons/blue/edit.svg') }}" alt="">
                        @lang('main.edit-profile')
                    </a>
                    <div class="dropdown-divider"></div>
                    <livewire:logout text="Y" extraClass="dropdown-item" />
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

