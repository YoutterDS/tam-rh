<div class="list-employees--item" id="list-employees--item__{{ $loop->iteration }}" data-token="{{ bcrypt('token-user') }}">
    <div class="list-employees--block">
        <div class="list-employees--item_img">
            <img src="{{ asset('img/icons/grey/user-default.svg') }}" alt="">
        </div>
        <div class="list-employees--item_employeer">
            <div class="list-employees--item_employeer-name">
                NOMBRE y APELLIDOS
            </div>
            <div class="list-employees--item_employeer-position">Cargo</div>
        </div>
    </div>
    <div class="list-employees--block">
        @if( $section === 'employeer' )
            <div class="list-employees--item_department-info">
                <div class="list-employees--item_department bg-primary"></div>
                <span>tipo departamento</span>
            </div>
            <div class="list-employees--item_email">
                <a href="#" class="list-employees--item_icon"
                   data-target="#{{$section}}_form_{{ $loop->iteration }}"
                   data-section="email"
                   data-action="open"
                >
                    <img src="{{ asset('img/icons/blue/email.svg') }}" alt="">
                </a>
            </div>
            <div class="list-employees--item_view">
                <a href="#" class="list-employees--item_icon"
                   data-target="#employeer_form_{{ $loop->iteration }}"
                   data-section="basic-info"
                   data-action="open"
                >
                    <img src="{{ asset('img/icons/blue/eye.svg') }}" alt="">
                </a>
            </div>
            <div class="list-employees--item_edit">
                <a href="#" class="list-employees--item_icon"
                   data-target="#employeer_form_{{ $loop->iteration }}"
                   data-section="edit"
                   data-action="open"
                >
                    <img src="{{ asset('img/icons/blue/edit.svg') }}" alt="">
                </a>
            </div>
            <div class="list-employees--item_active">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" checked id="employeer_active_{{ $loop->iteration }}">
                    <label class="custom-control-label" for="employeer_active_{{ $loop->iteration }}"></label>
                </div>
            </div>
            <div class="list-employees--item_delete">
                <a class="btn btn-delete"
                    data-toggle="modal" data-target="#DeleteEmployeerModal">
                    <img src="{{ asset('img/icons/white/delete.svg') }}" class="icon" alt="">
                </a>
            </div>
        @endif
    </div>
</div>
@if( $edit === 'Y')
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
@endif
