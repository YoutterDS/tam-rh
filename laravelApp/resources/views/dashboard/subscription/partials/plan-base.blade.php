<div class="box-subscriptions--item @if( $type !== 'register') @if( $myPlan === $plan->id ) border-1 border-primary @endif  @endif @if( $type !== 'register' && $plan->name === 'PREMIUM') box-subscriptions--item_big @endif {{-- @if( $package->special === 'Y' ) special @endif --}} {{ $extraclass }} ">
    {{-- @if( $package->special === 'Y' )<div class="triangle"></div>@endif --}}
    <div class="box-subscriptions--item_title">
        {{ $plan->name }}
    </div>
    <div class="box-subscriptions--item_price">
        @if ( $plan->isFree() )
            @lang('subscription.free')
            @if( $plan->hasTrial() )
                <div class="box-subscriptions--item_list--item">
                    {{ $plan->trial_period }} días de prueba
                </div>
            @endif
        @else
            {{ number_format($plan->price, 2, ',', '.') }}€<small>/@lang('subscription.per-user')/@lang('subscription.per-month')</small>
        @endif
    </div>
    <div class="box-subscriptions--item_list">
        @foreach( $plan->features->sortBy('sort_order') as $feature )
        <div class="box-subscriptions--item_list--item">
            @include('dashboard.subscription.partials.icons', ['icon'=>$feature->value])
            @switch( $feature->name )
                @case('office')
                    {{ trans_choice('subscription.' . $feature->name, $feature->value, ['number'=>$feature->value]) }}
                @break

                @case('employees')
                    {{ trans_choice('subscription.' . $feature->name, $feature->value, ['to'=>$feature->value]) }}
                @break

                @case('disc-space')
                    {{ trans_choice('subscription.' . $feature->name, $feature->value, ['storage'=>($feature->value/1000)]) }}
                @break

                @default
                    @lang('subscription.' . $feature->name)
                @break
            @endswitch
        </div>
        @endforeach
    </div>

    @if( $type !== 'register')
        <a href="#" class="btn btn-rounded @if( $myPlan === $plan->id ) noactions border-0 @endif" wire:click.prevent="changePlan({{ $plan->id }})">
            @if( $myPlan !== $plan->id )
                @lang('subscription.update-your-plan')
            @else
                @lang('subscription.your-plan')
            @endif
        </a>
    @endif
</div>
