<div>
    <div class="row">

        @include('dashboard.calendar.partials.filters', ['section'=>'festivities'])

        <div class="col-12 col-sm-5">
            <div class="box-subforms" id="box-addFestivity-form">
                <div class="col-12 p-0">
                    <div class="item-right">
                        <button type="button" id="addFestivityFormBtn" class="btn btn-success btn-with-icon ml-auto w-auto"
                                onclick="window.subformFestivity('open', 'create')" style="">
                            <span>@lang('calendar.add-festivity')</span>
                            <img class="icon" src="{{ asset('img/icons/white/add-festivity.svg') }}" alt="">
                        </button>
                    </div>
                </div>
                <div class="col-12 box-subforms-form">
                    @include('dashboard.calendar.partials.edit-festivity-day', ['index'=>0])
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div id="calendarEvents"></div>
    </div>
</div>
