<div class="box-subscriptions--item @if( $type !== 'register') special @endif {{ $extraclass }}">
    @if( $type !== 'register')<div class="triangle"></div>@endif
    <div class="box-subscriptions--item_title">
        @lang('subscription.pack-basic')
    </div>
    <div class="box-subscriptions--item_price">
        3,99€<small>/@lang('subscription.per-user')/@lang('subscription.per-month')</small>
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
            {{ trans_choice('subscription.x-office', 1, ['number'=>1]) }}
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ko'])
            @lang('subscription.laboral-calendar')
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ko'])
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
            @lang('subscription.from-x-to-x-employees', ['from'=>1, 'to'=>10])
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.x-gb-storage', ['storage'=>3])
        </div>

    </div>

    @if( $type !== 'register')
        <a href="#" class="btn btn-rounded">@lang('subscription.update-your-plan')</a>
    @endif

</div>
