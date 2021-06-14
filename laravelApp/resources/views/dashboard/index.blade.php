@extends('layouts.dashboard')

@section('title-heading')
    @lang('sidebar.home')
@endsection

@section('content')

<!-- Content Row -->
<div class="row">

    <div class="col-xl-7 col-md-7 mb-1 mb-md-4">

        <!-- Next Event Today -->
        <div class="box box-secondary">
            <div class="box-title">
                <img src="{{ asset('img/icons/blue/events.svg') }}" class="box-title--icon" alt="Events icon">
                Próximo evento a las 10:25h.
            </div>
            <div class="box-body">
                <div class="box-body--title">
                    Lorem Ipsum is simply
                </div>
                <div class="box-body--text">
                    Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry. Lorem industry's standard dummy text ever since the 1500s...
                </div>
            </div>
        </div>

        <!-- Responsable: Workers pending to start the day -->
        <div class="box">
            <div class="box-title">
                <img src="{{ asset('img/icons/blue/employeers.svg') }}" class="box-title--icon" alt="Events icon">
                Personas pendientes de iniciar la jornada
            </div>
            <ul class="list list-employees list-employees-home">
                @foreach( range(1,5) as $item)
                    <li class="list-employees--item">
                        <div class="list-employees--block">
                            <div class="list-employees--item_img">
                                <img src="{{ asset('img/icons/grey/user-default.svg') }}" alt="">
                            </div>
                            <div class="list-employees--item_name">
                                NOMBRE y APELLIDOS
                                <div class="list-employees--item_department bg-primary"></div>
                            </div>
                            <div class="list-employees--item_delay">
                                00.20h
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>

    </div>


    <div class="col-xl-5 col-md-5 mb-1 mb-md-4">

        <!-- Tasks Today -->
        <div class="box">
            <div class="box-title">
                <img src="{{ asset('img/icons/blue/tasks.svg') }}" class="box-title--icon" alt="Tasks icon">
                Tareas pendientes para hoy
            </div>
            <div class="box-body">
                <div class="box-body--btns">
                    <a href="" class="btn btn-secondary btn-sm">Crear Tarea</a>
                    <a href="" class="btn btn-secondary btn-sm">Ver todas</a>
                </div>
                <ul class="list list-tasks">
                    <li class="list-tasks--item">
                        <label class="form-check">Lorem Ipsum is simply
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            </label>
                        <div>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        </div>
                        <div>
                            <div class="list-tasks--item_progress-bar">
                                <span class="danger" style="width: 80%;"></span>
                            </div>
                            <div class="list-tasks--item_date-limit">Fecha límite: 20.06.2020</div>
                        </div>
                    </li>
                    <li class="list-tasks--item">
                        <label class="form-check">Lorem Ipsum is simply
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            </label>
                        <div>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        </div>
                        <div>
                            <div class="list-tasks--item_progress-bar">
                                <span class="success" style="width: 40%;"></span>
                            </div>
                            <div class="list-tasks--item_date-limit">Fecha límite: 20.06.2020</div>
                        </div>
                    </li>
                    <li class="list-tasks--item">
                        <label class="form-check">Lorem Ipsum is simply
                            <input type="checkbox">
                            <span class="checkmark"></span>
                            </label>
                        <div>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        </div>
                        <div>
                            <div class="list-tasks--item_progress-bar">
                                <span class="warning" style="width: 60%;"></span>
                            </div>
                            <div class="list-tasks--item_date-limit">Fecha límite: 20.06.2020</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Next Events -->
        <div class="box">
            <div class="box-title">
                <img src="{{ asset('img/icons/blue/events.svg') }}" class="box-title--icon" alt="Events icon">
                Próximos eventos
            </div>
            <div class="box-body">
                <div class="box-body--btns">
                    <a href="" class="btn btn-secondary btn-sm">Crear Evento</a>
                    <a href="" class="btn btn-secondary btn-sm">Ir a Eventos</a>
                </div>
                <ul class="list list-tasks">
                    <li class="list-tasks--item">
                        <div class="list-tasks--item_title">Lorem Ipsum is simply</div>
                        <div>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        </div>
                        <div>
                            <div class="list-tasks--item_date-limit">17:15 - 20.06.2020</div>
                        </div>
                    </li>
                    <li class="list-tasks--item">
                        <div class="list-tasks--item_title">Lorem Ipsum is simply</div>
                        <div>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        </div>
                        <div>
                            <div class="list-tasks--item_date-limit">17:15 - 20.06.2020</div>
                        </div>
                    </li>
                    <li class="list-tasks--item">
                        <div class="list-tasks--item_title">Lorem Ipsum is simply</div>
                        <div>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        </div>
                        <div>
                            <div class="list-tasks--item_date-limit">17:15 - 20.06.2020</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
@endsection

@section('js')
<script>
   var wClock = null;
   if( typeof(Worker) !== "undefined" ){
        if ( wClock==null ){
            wClock = new Worker("{{ asset('js/clock.js') }}");
        }
        wClock.onmessage = function (event) {
            document.getElementById("clock").innerText = event.data;
            document.getElementById("clockMobile").innerText = event.data;
        };
    } else {
        console.log("Sorry, your browser does not support Web Workers...");
    }

    @if (Session::has('emailVerified'))
        Swal.fire({
            title: '¡Genial!',
            html: 'Tu email ha sido validado.<br />Puedes empezar a utilizar tu herramienta',
            icon: 'success',
            confirmButtonText: 'Cerrar'
        })
    @endif
</script>
@endsection
