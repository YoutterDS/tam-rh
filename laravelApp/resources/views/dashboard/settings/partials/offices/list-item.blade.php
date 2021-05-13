<div class="box-office box-office--youroffice">
    <img class="box-office_img" src="{{ asset('img/offices/barcelona.png') }}"
            alt="Card image cap">
    <div class="box-office_body">
        <div class="box-office_body--head">
            <div class="box-office_body--head-main">@lang('offices.headquarters')</div>
            <a class="box-office_body--head-count" href="{{ route('dashboard.employees.list', ['locale'=>app()->getLocale()]) }}">
                35
                <img src="{{ asset('img/icons/blue/employeers.svg') }}" alt="35 empleados">
            </a>
        </div>


        <h5 class="box-office_body-title">Barcelona</h5>
        <div class="box-office_body-text">
            <p>09:00 - 18:00 h</p>
            <p>
                <a href="https://www.google.com/maps/place/" target="_blank">
                    Av. Torre Blanca, 57<br />
                    08173 Sant Cugat del Vallès<br />
                    Barcelona - Spain
                </a>
            </p>

            <a href="tel:" class="box-office_body-text--phone">
                93 656 98 77
            </a>
            <br/>
            <a href="mailto:ofi-bcn@company.com" target="_blank">
                ofi-bcn@company.com
            </a>
        </div>
    </div>

    <div class="box-office_body-btns">
        <a type="button" class="btn btn-primary btn-forms"
                onclick="window.subformOffice('open', 'edit')"
            >
            @lang('offices.edit')
        </a>
        <a href="#" class="btn btn-primary btn-forms btn-delete"
           data-toggle="modal" data-target="#DeleteOfficeModal">
            <img src="{{ asset('img/icons/white/delete.svg') }}" class="icon" alt="">
        </a>
    </div>

</div>

<div class="box-office">
    <img class="box-office_img" src="{{ asset('img/offices/girona.jpg') }}" alt="Card image cap">
    <div class="box-office_body">
        <div class="box-office_body--head">
            <a class="box-office_body--head-count" href="{{ route('dashboard.employees.list', ['locale'=>app()->getLocale()]) }}">
                35
                <img src="{{ asset('img/icons/blue/employeers.svg') }}" alt="35 empleados">
            </a>
        </div>


        <h5 class="box-office_body-title">Girona</h5>
        <div class="box-office_body-text">
            <p>09:00 - 18:00 h</p>
            <p>
                <a href="https://www.google.com/maps/place/" target="_blank">
                    Carrer principal 10 <br />
                    Girona - Spain
                </a>
            </p>

            <a href="tel:" class="box-office_body-text--phone">
                93 656 98 77
            </a>
            <br/>
            <a href="mailto:ofi-bcn@company.com" target="_blank">
                ofi-girona@company.com
            </a>
        </div>
    </div>

    <div class="box-office_body-btns">
        <a type="button" class="btn btn-primary btn-forms"
                onclick="window.subformOffice('open', 'edit')"
            >
            Editar
        </a>
        <a href="#" class="btn btn-primary btn-forms btn-delete"
           data-toggle="modal" data-target="#DeleteOfficeModal">
            <img src="{{ asset('img/icons/white/delete.svg') }}" class="icon" alt="">
        </a>
    </div>

</div>

<div class="box-office">
    <img class="box-office_img" src="{{ asset('img/offices/tarragona.jpeg') }}"
            alt="Card image cap">
    <div class="box-office_body">
        <div class="box-office_body--head">
            <a class="box-office_body--head-count" href="{{ route('dashboard.employees.list', ['locale'=>app()->getLocale()]) }}">
                25
                <img src="{{ asset('img/icons/blue/employeers.svg') }}" alt="35 empleados">
            </a>
        </div>


        <h5 class="box-office_body-title">TARRAGONA</h5>
        <div class="box-office_body-text">
            <p>09:00 - 18:00 h</p>
            <p>
                <a href="https://www.google.com/maps/place/" target="_blank">
                    Carrer principal 10 <br />
                    Girona - Spain
                </a>
            </p>

            <a href="tel:" class="box-office_body-text--phone">
                93 656 98 77
            </a>
            <br/>
            <a href="mailto:ofi-bcn@company.com" target="_blank">
                ofi-tarragona@company.com
            </a>
        </div>
    </div>

    <div class="box-office_body-btns">
        <a type="button" class="btn btn-primary btn-forms"
                onclick="window.subformOffice('open', 'edit')"
            >
            Editar
        </a>
        <a href="#" class="btn btn-primary btn-forms btn-delete"
           data-toggle="modal" data-target="#DeleteOfficeModal">
            <img src="{{ asset('img/icons/white/delete.svg') }}" class="icon" alt="">
        </a>
    </div>

</div>

<div class="box-office">
    <img class="box-office_img" src="{{ asset('img/offices/new-york.jpg') }}"
            alt="Card image cap">
    <div class="box-office_body">
        <div class="box-office_body--head">
            <a class="box-office_body--head-count" href="{{ route('dashboard.employees.list', ['locale'=>app()->getLocale()]) }}">
                25
                <img src="{{ asset('img/icons/blue/employeers.svg') }}" alt="35 empleados">
            </a>
        </div>


        <h5 class="box-office_body-title">NEW YORK</h5>
        <div class="box-office_body-text">
            <p>09:00 - 18:00 h</p>
            <p>
                <a href="https://www.google.com/maps/place/" target="_blank">
                    5th AVE <br />
                    New York - EEUU
                </a>
            </p>

            <a href="tel:" class="box-office_body-text--phone">
                93 656 98 77
            </a>
            <br/>
            <a href="mailto:ofi-bcn@company.com" target="_blank">
                ofi-tarragona@company.com
            </a>
        </div>
    </div>

    <div class="box-office_body-btns">
        <a type="button" class="btn btn-primary btn-forms"
                onclick="window.subformOffice('open', 'edit')"
            >
            Editar
        </a>
        <a href="#" class="btn btn-primary btn-forms btn-delete"
           data-toggle="modal" data-target="#DeleteOfficeModal">
            <img src="{{ asset('img/icons/white/delete.svg') }}" class="icon" alt="">
        </a>
    </div>

</div>
