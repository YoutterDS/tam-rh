@extends('layouts.dashboard')

@section('title-heading')
    @lang('sidebar.documents')
@endsection

@section('content')
<div class="row" id="documents">
    <div class="col-lg-12">
        <div class="row box-subforms" id="box-documents-form">
            <div class="col-12 p-0 mb-3">
                <div class="list-offices reverse">
                    <div class="item-right">
                        <button type="button" id="documentListFormBtn" class="btn btn-success btn-with-icon w-100" onclick="window.subformEditDocumentsList('open')">
                            <span>@lang('documents.add-document-list')</span>
                            <img class="icon" src="{{ asset('img/icons/white/document.svg') }}" alt="">
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 box-subforms-form">
                @include('dashboard.documents.partial.edit')
            </div>
        </div>

        <div class="d-flex mb-4">
            <div class="mr-2 pl-2"><b>@lang('documents.total-free-space'):</b></div>
            <div class="w-25">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                        25%
                    </div>
                </div>
            </div>
        </div>

        <div class="box-documents">
            <div class="box-documents--item">
                @include('dashboard.documents.partial.type-list', ['id'=> 1, 'type'=> 'predefined', 'titulo' => 'Bienvenida a trabajadores/as', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque est nobis odio optio saepe sequi sint tempora ut velit veniam. Autem blanditiis distinctio eveniet in quod rem saepe tempore temporibus.'])
            </div>
            <div class="box-documents--item">
                @include('dashboard.documents.partial.type-list', ['id'=> 2, 'type'=> 'predefined', 'titulo' => 'Cesión de derechos de imagen', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque est nobis odio optio saepe sequi sint tempora ut velit veniam. Autem blanditiis distinctio eveniet in quod rem saepe tempore temporibus.'])
            </div>
            <div class="box-documents--item">
                @include('dashboard.documents.partial.type-list', ['id'=> 3, 'type'=> 'predefined', 'titulo' => 'Confidencialidad', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque est nobis odio optio saepe sequi sint tempora ut velit veniam. Autem blanditiis distinctio eveniet in quod rem saepe tempore temporibus.'])
            </div>
            <div class="box-documents--item">
                @include('dashboard.documents.partial.type-list', ['id'=> 4, 'type'=> 'standard', 'titulo' => 'Documentos Lorem', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque est nobis odio optio saepe sequi sint tempora ut velit veniam. Autem blanditiis distinctio eveniet in quod rem saepe tempore temporibus.'])
            </div>
        </div>
    </div>
</div>
@endsection

@section('modals-sections')
    @include('dashboard.documents.modals.delete-documents-list')
@endsection
