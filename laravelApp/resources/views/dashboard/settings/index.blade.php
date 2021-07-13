@extends('layouts.dashboard')

@section('title-heading')
    @lang('sidebar.settings')
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-pills">
            @hasanyrole('super-admin|admin|manager')
            <li class="nav-pills-item">
                <a class="nav-pills-item_link" data-toggle="tab" href="#{{ Str::slug(\Lang::get('nav-pills.settings-profile')) }}">
                    @lang('nav-pills.settings-profile')
                </a>
            </li>
            @endhasanyrole
            <li class="nav-pills-item">
                <a class="nav-pills-item_link" data-toggle="tab" href="#{{ Str::slug(\Lang::get('nav-pills.settings-offices')) }}">
                    @lang('nav-pills.settings-offices')
                </a>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            @hasanyrole('super-admin|admin|manager')
            <div id="{{ Str::slug(\Lang::get('nav-pills.settings-profile')) }}" class="tab-pane fade show">
                <livewire:settings.profile.edit />
            </div>
            @endhasanyrole
            <div id="{{ Str::slug(\Lang::get('nav-pills.settings-offices')) }}" class="tab-pane fade">
                {{-- @include('dashboard.settings.sections.offices') --}}
                <livewire:settings.offices.index />
            </div>
        </div>
    </div>
</div>
@endsection
