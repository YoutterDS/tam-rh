<a class="nav-link dropdown-toggle notifications" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img src="{{ asset('img/icons/bell.svg') }}" alt="bell icon" class="icon icon-small" >
    <!-- Counter - Alerts -->
    <span class="badge badge-danger badge-counter">2</span>
</a>
<!-- Dropdown - Alerts -->
<div class="dropdown-menu dropdown-menu-right animated--grow-in box-notifications" aria-labelledby="alertsDropdown">
    <h6 class="box-notifications--header">
        Notificaciones
    </h6>
    <a class="box-notifications--item" href="#">
        <div class="box-notifications--item_icon document">
            <img src="{{ asset('img/icons/white/document.svg') }}" alt="">
        </div>
        <div class="box-notifications--item_body">
            <div class="box-notifications--item_body-date">
                12.01.2020
            </div>
            <div class="box-notifications--item_body-text">
                Se ha enviado un documento a administracion.
            </div>
        </div>
    </a>
    <a class="box-notifications--item" href="#">
        <div class="box-notifications--item_icon documents">
            <img src="{{ asset('img/icons/white/documents.svg') }}" alt="">
        </div>
        <div class="box-notifications--item_body">
            <div class="box-notifications--item_body-date">
                12.02.2020
            </div>
            <div class="box-notifications--item_body-text">
                Se ha enviado la nómina a todos los empleados.
            </div>
        </div>
    </a>
    <a class="box-notifications--item" href="#">
        <div class="box-notifications--item_icon warning">
            <img src="{{ asset('img/icons/white/alert.svg') }}" alt="">
        </div>
        <div class="box-notifications--item_body">
            <div class="box-notifications--item_body-date">
                18.02.2020
            </div>
            <div class="box-notifications--item_body-text">
                Alerta: Faltan validadar vacaciones.
            </div>
        </div>
    </a>

    <a class="dropdown-item box-notifications--link" href="#">Mostrar todas las Notificaciones</a>
</div>
