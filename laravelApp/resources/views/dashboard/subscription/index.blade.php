@extends('layouts.dashboard')

@section('title-heading')
    @lang('subscription.title')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="box-subscriptions">
                <div class="box-subscriptions--item special">
                    <div class="triangle"></div>
                    <div class="box-subscriptions--item_title">
                        @lang('subscription.pack-basic')
                    </div>
                    <div class="box-subscriptions--item_price">
                        3,99€<small>/@lang('subscription.per-user')</small>
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

                    <a href="#" class="btn btn-rounded">@lang('subscription.update-your-plan')</a>

                </div>

                <div class="box-subscriptions--item current special">
                    <div class="triangle"></div>
                    <div class="box-subscriptions--item_title">
                        @lang('subscription.pack-business')
                    </div>
                    <div class="box-subscriptions--item_price">
                        6,99€<small>/@lang('subscription.per-user')</small>
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

                    <a href="#" class="btn btn-rounded">@lang('subscription.your-plan')</a>

                </div>

                <div class="box-subscriptions--item ">
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

                    <a href="#" class="btn btn-rounded">@lang('subscription.update-your-plan')</a>

                </div>

                <div class="box-subscriptions--item box-subscriptions--item_big">
                    <div class="box-subscriptions--item_title">
                        @lang('subscription.pack-premium')
                    </div>
                    <div class="box-subscriptions--item_price">
                        24,99€<small>/@lang('subscription.per-user')</small>
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

                    <a href="#" class="btn btn-rounded">@lang('subscription.update-your-plan')</a>
                </div>
            </div>
        </div>
    </div>
@endsection
