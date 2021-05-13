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
            <div class="list-employees--item_department-info">
                <div class="list-employees--item_department bg-primary"></div>
                <span>tipo departamento</span>
            </div>

            <div class="list-employees--item_view">
                <img src="{{ asset('img/icons/ok.svg') }}" alt="">
            </div>
            <div class="list-employees--item_info-hourly-record">
                <a href="#" class="list-employees--item_icon"
                    data-target="#employeer_form_{{ $loop->iteration }}"
                    data-section="info-hourly-record"
                    data-action="open"
                >
                    <img src="{{ asset('img/icons/blue/chart.svg') }}" alt="">
                </a>
            </div>
    </div>
</div>
<div class="list-employees--form " id="employeer_form_{{ $loop->iteration }}">
    <div class="list-employees--form_info-hourly-record">
        @if( $loop->iteration === 1 )
            @include('dashboard.timetable.partials.info-hourly-record')
        @endif
    </div>
    <div class="list-employees--form_detail">
        @if( $loop->iteration === 1 )
            @include('dashboard.timetable.partials.detail')
        @endif
    </div>
</div>
