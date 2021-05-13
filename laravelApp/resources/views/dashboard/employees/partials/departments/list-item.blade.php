<div class="list-departments--item" id="list-departments--item__{{ $loop->iteration }}" data-token="{{ bcrypt('token-department') }}">
    @php $totalEmployeers = rand(5,10); @endphp
    <div class="list-departments--item_color"
         style="background-color: {{ $colors[$loop->index] }}"
    ></div>

    <div class="list-departments--item_name">
        {{ $departments[$loop->index] }}
    </div>
    <div class="list-departments--item_employeers">
        <a href="#" class="list-departments--item_icon big"
            data-target="#departments_form_{{ $loop->iteration }}"
            data-section="employeers"
            data-action="open"
        >
            <span>{{ $totalEmployeers }}</span>
            <img src="{{ asset('img/icons/blue/employeers.svg') }}" alt="">
        </a>
    </div>
    <div class="list-departments--item_edit">
        <a href="#" class="list-departments--item_icon"
            data-target="#departments_form_{{ $loop->iteration }}"
            data-section="edit"
            data-action="open"
        >
            <img src="{{ asset('img/icons/blue/edit.svg') }}" alt="">
        </a>
    </div>
</div>

<div class="list-departments--form" id="departments_form_{{ $loop->iteration }}">
    <div class="list-departments--form_employeers">
        @if( $loop->iteration === 1 )
            <div class="list-employees list-employees-grey" >
                @foreach( range(1, $totalEmployeers) as $employeer)
                    @include('dashboard.employees.partials.employees.list-item', ['edit'=>'N'])
                @endforeach
            </div>

            <a href="#" class="btn-close"
                @if( @$loop )
                    data-target="#departments_form_{{ $loop->iteration }}"
                @else
                    data-target="#departments_form_create"
                @endif
                    data-section="edit"
                    data-action="close">
                <img src="{{ asset('img/icons/white/arrow-down.svg') }}" alt="">
            </a>
        @endif
    </div>
    <div class="list-departments--form_edit">
        @if( $loop->iteration === 1 )
            @include('dashboard.employees.partials.departments.edit', ['action'=>'update'])
        @endif
    </div>
</div>

