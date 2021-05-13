<div class="list-employees--item @if($loop->iteration === 2) refused @elseif($loop->iteration === 1) validated @endif" id="list-employees--item__{{ $loop->iteration }}" data-token="{{ bcrypt('token-user') }}">
    <div class="list-employees--block">
        <div class="list-employees--item_img">
            @switch($loop->iteration)
                @case(1)
                    <img src="{{ asset('img/icons/green/user-default.svg') }}" alt="">
                @break

                @case(2)
                    <img src="{{ asset('img/icons/red/user-default.svg') }}" alt="">
                @break

                @default
                    <img src="{{ asset('img/icons/grey/user-default.svg') }}" alt="">
                @break
            @endswitch
        </div>
        <div class="list-employees--item_employeer">
            <div class="list-employees--item_employeer-name">
                NOMBRE y APELLIDOS
            </div>
            <div class="list-employees--item_employeer-position">Cargo</div>
        </div>
    </div>
    <div class="list-employees--block">
        <div class="list-employees--item_dates">
            <span>del 10.03.2021 al 20.03.2021</span>
        </div>
        <div class="list-employees--item_validation">
            <div class="custom-control custom-switch custom-switch--validate">
                <input type="checkbox" class="custom-control-input"
                       @if($loop->iteration === 1) checked @endif
                       id="employeer_valdate_{{ $loop->iteration }}"
                       data-toggle="modal" data-target="#AcceptRequestEmployeerModal"
                >
                <label class="custom-control-label" for="employeer_valdate_{{ $loop->iteration }}" >@if($loop->iteration === 1) Validada @else Validar @endif</label>
            </div>
            <div class="custom-control custom-switch custom-switch--refuse">
                <input type="checkbox" class="custom-control-input"
                       @if($loop->iteration === 2) checked @endif
                       id="employeer_refuse_{{ $loop->iteration }}"
                       data-toggle="modal" data-target="#RefuseRequestEmployeerModal"
                >
                <label class="custom-control-label" for="employeer_refuse_{{ $loop->iteration }}" >@if($loop->iteration === 2) Rechazada @else Rechazar @endif</label>
            </div>
        </div>
    </div>
</div>
<div class="list-employees--form" id="employeer_form_{{ $loop->iteration }}">
    <div class="list-employees--form_email">
        @if( $loop->iteration === 1 )
            @include('dashboard.employees.partials.employees.send-email-to-employer')
        @endif
    </div>
    <div class="list-employees--form_basic-info">
        @if( $loop->iteration === 1 )
            @include('dashboard.employees.partials.employees.basic-info')
        @endif
    </div>
    <div class="list-employees--form_edit">
        @if( $loop->iteration === 1 )
            @include('dashboard.employees.partials.employees.edit', ['action' => 'update', 'index'=>$loop->iteration])
        @endif
    </div>
</div>
