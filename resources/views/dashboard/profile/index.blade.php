@extends('layouts.dashboard')

@section('content')
<!-- Content Row -->
<div class="row">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Configuración</h1>
    </div>

    <div class="card shadow col-lg-12 ">
    <div class="card-header ">

        <ul class="nav nav-pills justify-content-center">
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#{{ str_slug(\Lang::get('nav-pills.profile-general')) }}"><i class="fas fa-fw fa-cog"></i> @lang('nav-pills.profile-general')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#{{ str_slug(\Lang::get('nav-pills.profile-personal')) }}"><i class="fas fa-fw fa-building"></i> @lang('nav-pills.profile-personal')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#{{ str_slug(\Lang::get('nav-pills.profile-contract')) }}"><i class="fas fa-fw fa-sitemap"></i> @lang('nav-pills.profile-contract')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#{{ str_slug(\Lang::get('nav-pills.profile-documents')) }}"><i class="fas fa-fw fa-clipboard"></i> @lang('nav-pills.profile-documents')</a>
            </li>
        </ul>
    </div>
    <div class="card-body p-0">
        <div class="tab-content" id="pills-tabContent">
            <div id="{{ str_slug(\Lang::get('nav-pills.profile-general')) }}" class="tab-pane fade show">
                @include('dashboard.profile.sections.general')
            </div>
            <div id="{{ str_slug(\Lang::get('nav-pills.profile-personal')) }}" class="tab-pane fade">
                @include('dashboard.profile.sections.personal')
            </div>
            <div id="{{ str_slug(\Lang::get('nav-pills.profile-contract')) }}" class="tab-pane fade">
                @include('dashboard.profile.sections.contract')
            </div>
            <div id="{{ str_slug(\Lang::get('nav-pills.profile-documents')) }}" class="tab-pane fade">
                @include('dashboard.profile.sections.documents')
            </div>
        </div>
    </div>
    </div>

</div>
@endsection

@section('js')
<script>
    $(document).ready(function(){
        // aquí el codigo específico de la sección
    });
</script>
@endsection
