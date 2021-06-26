<div class="box-subscriptions--item @if( $type !== 'register' && $package->code === 'PRE') box-subscriptions--item_big @endif @if( $package->special === 'Y' ) special @endif {{ $extraclass }}">
    @if( $package->special === 'Y' )<div class="triangle"></div>@endif
    <div class="box-subscriptions--item_title">
        {{ $package->name }}
    </div>
    <div class="box-subscriptions--item_price">
        {{ $package->price_formatted }}€<small>/@lang('subscription.per-user')/@lang('subscription.per-month')</small>
    </div>
    <div class="box-subscriptions--item_list">
        @foreach( $package->options as $option )
        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>$option->active])
            {!! $option->name !!}
        </div>
        @endforeach

    </div>

    @if( $type !== 'register')
        @if( auth()->user()->company->package->code === $package->code )
            <a href="#" class="btn btn-rounded border-0">@lang('subscription.your-plan')</a>
        @else
            <a href="#" class="btn btn-rounded">@lang('subscription.update-your-plan')</a>
        @endif
    @endif

</div>
