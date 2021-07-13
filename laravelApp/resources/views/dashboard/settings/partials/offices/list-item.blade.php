<div class="box-office @if( in_array(auth()->user()->id, $office->users()->get()->pluck('id')->toArray() ) ) box-office--youroffice @endif">
    <img class="box-office_img"
         @if( $office['image'] )
            src="{{ asset('uploads/offices/' . $office->id . '/' . $office->image) }}"
         @else
            src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
         @endif
            alt="Card image cap">
    <div class="box-office_body">
        <div class="box-office_body--head">
            @if( $office->headquarters )<div class="box-office_body--head-main">@lang('offices.headquarters')</div>@endif
            <a class="box-office_body--head-count" href="{{ route('dashboard.employees.list', ['locale'=>app()->getLocale()]) }}">
                {{ $office->users()->get()->count() }}
                <img src="{{ asset('img/icons/blue/employeers.svg') }}" title="{{ trans_choice('offices.total-employees', $office->users()->get()->count(), ['total'=>$office->users()->get()->count()]) }}">
            </a>
        </div>

        <h5 class="box-office_body-title">{{ $office->name ?? '-' }}</h5>
        <div class="box-office_body-text">
            <p>{{ $office->hours ?? '' }}</p>
            @if( $office->address or $office->postal_code or $office->state_province_region or $office->city or $office->country->name )
                <p>
                    <a href="https://www.google.com/maps?q={{ $office->address }},{{ $office->postal_code ?? '' }} - {{ $office->state_province_region ?? '' }}&hl={{ app()->getLocale() }};z=5" target="_blank">
                        {{ $office->address }}<br />
                        {{ $office->postal_code ?? '' }} {{ $office->state_province_region ?? '' }}<br />
                        {{ $office->city ?? '' }} - {{ $office->country->name ?? '' }}
                    </a>
                </p>
            @endif

            @if( $office->phone_number )
                <a href="tel:{{ $office->phone_number }}" class="box-office_body-text--phone">
                    {{ $office->phone_number }}
                </a>
            @endif
            @if( $office->phone_number && $office->email )
                <br/>
            @endif
            @if( $office->email )
                <a href="mailto:{{ $office->email }}" target="_blank">
                    {{ $office->email }}
                </a>
            @endif
        </div>
    </div>

    @hasrole('admin')
    <div class="box-office_body-btns">
        <a type="button" class="btn btn-primary btn-forms"
            wire:click.prevent="showForm({{ $office->id }})">
            @lang('offices.edit')
        </a>
        <a href="#" class="btn btn-primary btn-forms btn-delete"
           wire:click.prevent="showConfirmDeleteModal({{ $office->id }})">
            <img src="{{ asset('img/icons/white/delete.svg') }}" class="icon" alt="">
        </a>
    </div>
    @endhasrole
</div>
