<div>
    <div class="progress axios" wire:loading >
        <div class="indeterminate"></div>
    </div>

    <a wire:click="logout" class="exit-session {{ $extraClass }}" >
        <img src="{{ asset('img/icons/exit-session.svg') }}" alt="Exit session" >
        @if( $text === 'Y' ) @lang('main.logout') @endif
    </a>
</div>
