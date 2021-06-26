<div class="box-subscriptions--item  @if( $type !== 'register') current special @endif {{ $extraclass }}">
    @if( $type !== 'register')<div class="triangle"></div>@endif
    <div class="box-subscriptions--item_title">
        @lang('subscription.pack-business')
    </div>
    <div class="box-subscriptions--item_price">
        6,99€<small>/@lang('subscription.per-user')/@lang('subscription.per-month')</small>
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
            @lang('subscription.multiple-offices')
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.laboral-calendar')
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.expenses-travel-and-meetings')
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ko'])
            @lang('subscription.recruitment-and-objectives')
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ko'])
            @lang('subscription.notifications')
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.from-x-to-x-employees', ['from'=>11, 'to'=>20])
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.x-gb-storage', ['storage'=>10])
        </div>

    </div>

    @if( $type !== 'register')
        <a href="#" class="btn btn-rounded">@lang('subscription.your-plan')</a>
    @endif

</div>
