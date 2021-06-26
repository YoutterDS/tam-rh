<div class="box-subscriptions--item @if( $type !== 'register') box-subscriptions--item_big @endif {{ $extraclass }}">
    <div class="box-subscriptions--item_title">
        @lang('subscription.pack-premium')
    </div>
    <div class="box-subscriptions--item_price">
        24,99€<small>/@lang('subscription.per-user')/@lang('subscription.per-month')</small>
    </div>
    <div class="box-subscriptions--item_list">
        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.time-control')
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.internal-management')
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.expenses-travel-and-meetings')
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.recruitment-and-objectives')
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.ticketing-it')
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.support-24-7')
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.electronic-signature')
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.internal-chat')
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.from-x-to-x-employees', ['from'=>41, 'to'=>100])
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.unlimited-storage')
        </div>

    </div>

    @if( $type !== 'register')
        <a href="#" class="btn btn-rounded">@lang('subscription.update-your-plan')</a>
    @endif
</div>
