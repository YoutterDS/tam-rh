<div class="box-subscriptions--item  {{ $extraclass }}">
    <div class="box-subscriptions--item_title">
        @lang('subscription.pack-excellence')
    </div>
    <div class="box-subscriptions--item_price">
        9,99€<small>/@lang('subscription.per-user')</small>
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
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.recruitment-and-objectives')
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.notifications')
        </div>

        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>'ok'])
            @lang('subscription.from-x-to-x-employees', ['from'=>21, 'to'=>40])
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
