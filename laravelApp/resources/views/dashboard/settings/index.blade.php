@extends('layouts.dashboard')

@section('title-heading')
    @lang('sidebar.settings')
@endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-pills">
            <li class="nav-pills-item">
                <a class="nav-pills-item_link" data-toggle="tab" href="#{{ Str::slug(\Lang::get('nav-pills.settings-profile')) }}">
                    @lang('nav-pills.settings-profile')
                </a>
            </li>
            <li class="nav-pills-item">
                <a class="nav-pills-item_link" data-toggle="tab" href="#{{ Str::slug(\Lang::get('nav-pills.settings-offices')) }}">
                    @lang('nav-pills.settings-offices')
                </a>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div id="{{ Str::slug(\Lang::get('nav-pills.settings-profile')) }}" class="tab-pane fade show">
                <form action="" class="form">
                    @include('dashboard.settings.sections.profile')
                </form>
            </div>
            <div id="{{ Str::slug(\Lang::get('nav-pills.settings-offices')) }}" class="tab-pane fade">
                @include('dashboard.settings.sections.offices')
            </div>
        </div>
    </div>
</div>
@endsection
