@extends('layouts.dashboard')

@section('content')

    <div class="events-detail-page row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-clipboard"></i> Eventos</h1>
        </div>

        <div class="card shadow col-lg-12 card-section p-2">
            <div class="card-body">
                <div class="row mb-5">
                    <div class="bg-primary text-white d-inline-block p-2 col col-md-3 p-2" >
                        <p><span class="text-lg">5</span> de mayo de 2020</p>
                        <p class="text-xs"><i class="far fa-clock mr-1"></i><b>10:25</b> a <b>17:30</b></p>
                        <b class="text-xs"><i class="fas fa-map-marker-alt"></i> Plaza Catalunya nº 25, 1ero 4ª - 08100 Barcelona</b>

                    </div>
                    <div class="col">
                        <h3><a href="{{ route('dashboard.events.show', ['locale' => app()->getLocale(), 'id' => 1]) }}">Reunión dep. contabilidad</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>

                    </div>
                    <div class="col-1 text-right">
                        <a href="" class="m-1"><i class="fas fa-pen"></i></a>
                        <a href="" class="m-1"><i class="fas fa-trash-alt"></i></a>
                    </div>
                </div>

                <div class="row px-4">
                    <div class="col-md-3">
                        <div class="panel panel-default widget">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-comment"></span>
                                <h4 class="panel-title text-center text-md-left">Ficheros adjuntos</h4>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group ">
                                    @foreach( [1,2,3] as $file)
                                        <a href="#" class="mr-3">
                                            <li class="list-group-item border-0">
                                                <div class="row">
                                                    <div class="col d-flex align-items-center">
                                                        <h5><i class="fas fa-paperclip mr-2"></i> mapa-salas-{{ $file }}.pdf</h5>
                                                    </div>
                                                </div>
                                            </li>
                                        </a>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default widget">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-comment"></span>
                                <h4 class="panel-title text-center text-md-left mt-3 mt-md-0">Comentarios recientes</h4>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group ">
                                    @foreach([1,2,3] as $comment)
                                        <li class="list-group-item border-0">
                                            <div class="row mb-3">
                                                <div>
                                                    <img width="60px;" src="http://tam.test/img/profile.png" class="img img-circle img-responsive" alt="" /></div>
                                                <div class="col">
                                                    <div>
                                                        <div class="mic-info">
                                                            <a href="#">Manel Domenech</a> <span class="d-block text-xs mb-2">02/10/2020 - 17:29</span>
                                                        </div>
                                                    </div>
                                                    <div class="comment-text">
                                                        Hola, me han dicho que no es necesario llevar la entrada impresa.
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                        <li class="list-group-item border-0">
                                            <div class="row mb-3">
                                                <div>
                                                    <img width="60px;" src="http://tam.test/img/profile.png" class="img img-circle img-responsive" alt="" /></div>
                                                <div class="col">
                                                    <div>
                                                        <div class="mic-info">
                                                            <a href="#">Manel Domenech</a> <span class="d-block text-xs mb-2">02/10/2020 - 17:29</span>
                                                        </div>
                                                    </div>
                                                    <div class="comment-text col-12 col-xl-6 p-0">
                                                        <form action="">
                                                            <textarea name="comment" class="form-control" rows="3" placeholder="Deja tu comentario"></textarea>
                                                            <button class="btn btn-primary w-100 my-2">Enviar comentario</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default widget">
                            <div class="panel-heading">
                                <span class="glyphicon glyphicon-comment"></span>
                                <h4 class="panel-title mb-3 text-center text-md-left">Participantes</h4>
                            </div>
                            <div class="panel-body">
                                <ul class="list-group ">
                                    @foreach(['Manel Domenech', 'Ramón Ribera', 'Pere Fonfreda', 'Rubén Centelles'] as $participante)
                                        <li class="list-group-item border-0">
                                            <div class="row">
                                                <div>
                                                    <img width="40px;" src="http://tam.test/img/profile.png" class="img img-circle img-responsive" alt="" /></div>
                                                <div class="col d-flex align-items-center">
                                                    <h5>{{ $participante }}</h5>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

            </div>
    </div>
@endsection
