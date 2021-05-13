<div class="row box-documents--header_info" id="documents_form_{{ $id }}">
    <div class="col">
        <h1 class="box-documents--header_info-title">
            {!! $titulo !!} @if( $type === 'predefined' ) <i>(Lista predefinia)</i> @endif
        </h3>
        <p class="box-documents--header_info-description">{!! $descripcion !!}</p>
    </div>

    {{--
        - Tipos de listas:
            - predefined => Se dan de alta automáticamente y ningún usuario puede editarlas o eliminarlas.
            - standard   => Los usuarios con role administrador o gestor pueden darlas de alta, editarlas y borrarlas.

        - Los usuarios con role administrativo o gestor pueden añadir documentos.
    --}}
    @if( $type === "standard" )
        <div class="col-2">
            <a class="btn" href="javascript:subformEditDocumentsList('open', {{ $id }})">
                <img src="{{ asset('img/icons/blue/edit.svg') }}" alt="Edit" class="icon">
            </a>
            <a href="#" class="btn" data-toggle="modal" data-target="#DeleteDocumentsListModal">
                <img src="{{ asset('img/icons/blue/delete.svg') }}" alt="Delete" class="icon">
            </a>
        </div>
    @endif
    <div class="col-12 d-flex">
        <button type="button" class="btn btn-success btn-with-icon" onclick="window.subformAddDocument('open', '#documents_form_{{ $id }}')">
            <span class="pr-2">@lang('documents.add-document')</span>
            <img src="{{ asset('img/icons/white/clip.svg') }}" alt="@lang('documents.add-document')" class="icon">
        </button>
    </div>

    <div class="col-12 list-documents--form_add create">
        @include('dashboard.documents.partial.add-document')
    </div>
</div>


<div class="list-documents">
    @foreach( range(1,3) as $document )
        <div class="list-documents--item">
            <div class="list-documents--block">
                <div class="list-documents--item_type">
                    <img src="{{ asset('img/icons/documents-type/excel.svg') }}" alt="">
                </div>
                <div class="list-documents--item_document">
                    <div class="list-documents--item_document-name @if($loop->iteration === 1) text-danger @endif">
                        @if($loop->iteration === 1)
                            Normativa-COVID19.pdf
                        @else
                            Calendario-labora-{{ \Carbon\Carbon::now()->format('Y') }}
                        @endif
                    </div>
                    <div class="list-documents--item_document-date">
                        20/07/2021
                    </div>
                </div>
            </div>
            <div class="list-documents--block">
                <div class="list-employees--item_department-info">
                    <div class="list-employees--item_department bg-primary"></div>
                    <span>tipo departamento</span>
                </div>
                <div class="list-documents--item_see">
                    <a href="#" class="list-documents--item_icon">
                        <img src="{{ asset('img/icons/blue/eye.svg') }}" alt="">
                    </a>
                </div>
                <div class="list-documents--item_download">
                    <a href="#" class="list-documents--item_icon">
                        <img src="{{ asset('img/icons/blue/download.svg') }}" alt="">
                    </a>
                </div>
                <div class="list-documents--item_delete">
                    <a href="#" class="list-documents--item_icon"
                       data-toggle="modal" data-target="#DeleteDocumentModal">
                        <img src="{{ asset('img/icons/blue/delete.svg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
