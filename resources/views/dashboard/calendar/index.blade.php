@extends('layouts.dashboard')

@section('content')

    <div class="row" id="documents">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-uppercase"><i class="fas fa-fw fa-clipboard"></i> Documentos</h1>
        </div>

        <div class="card shadow col-lg-12 card-section p-2">
            <secion class="doc-type-list p-3">
            @include('dashboard.documents.partial.document-type-list', ['titulo' => 'Documentos Tipo A', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque est nobis odio optio saepe sequi sint tempora ut velit veniam. Autem blanditiis distinctio eveniet in quod rem saepe tempore temporibus.'])
            </secion>
            <secion class="doc-type-list p-3">
                @include('dashboard.documents.partial.document-type-list', ['titulo' => 'Documentos Tipo A', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque est nobis odio optio saepe sequi sint tempora ut velit veniam. Autem blanditiis distinctio eveniet in quod rem saepe tempore temporibus.'])
            </secion>
            <secion class="doc-type-list p-3">
                @include('dashboard.documents.partial.document-type-list', ['titulo' => 'Documentos Tipo A', 'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque est nobis odio optio saepe sequi sint tempora ut velit veniam. Autem blanditiis distinctio eveniet in quod rem saepe tempore temporibus.'])
            </secion>
        </div>
    </div>
@endsection