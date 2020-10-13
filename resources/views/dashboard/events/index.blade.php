@extends('layouts.dashboard')

@section('content')

    <div class="row">

        @include('dashboard.events.modals.new')

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-clipboard"></i> Eventos</h1>
        </div>

        <div class="card shadow col-lg-12 card-section p-2">
            <p class="text-center m-3">Listado de eventos del los próximos 30 días
                <button type="button" class="float-right btn btn-sm btn-success text-uppercase" data-toggle="modal" data-target="#new-event-modal">
                        <i class="fas fa-fw fa-clipboard"></i> Nuevo evento
                </button>
            </p>

            <div class="card-body">
                @foreach( [1,2,3,4,5,6] as $event)
                <div class="row mb-5">
                    <div class="bg-primary text-white d-inline-block p-2 col-2" >
                        <p><span class="text-lg">5</span> de mayo de 2020</p>
                        <p class="text-xs"><i class="far fa-clock mr-1"></i><b>10:25</b> a <b>17:30</b></p>
                    </div>
                    <div class="col">
                        <h3><a href="{{ route('dashboard.events.show', ['locale' => app()->getLocale(), 'id' => 1]) }}">Reunión dep. contabilidad</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>

                        <div>
                            <div class="d-inline-block mx-3">
                                <span><i class="fas fa-paperclip"></i> 5</span>
                            </div>

                            <div class="d-inline-block mx-3">
                                <span><i class="fas fa-comments"></i> 12</span>
                            </div>

                            <div class="d-inline-block mx-3">
                                <span><i class="fas fa-users"></i> 8</span>
                            </div>

                            <div class="d-inline-block mx-3">
                                <span><i class="fas fa-map-marker-alt"></i> Plaza Catalunya nº 25, 1ero 4ª - 08100 Barcelona</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-1 text-right">
                        <a href="" class="m-1"><i class="fas fa-pen"></i></a>
                        <a href="" class="m-1"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
    </div>
@endsection
