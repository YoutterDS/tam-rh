<div>
    <form action="" class="form">
        <div class="form-row mt-2">
            <div class="col-6">
                <div class="form-group validate">
                    <label for="officeTitle">@lang('calendar.range-dates')</label>
                    <input type="text" class="form-control" required name="range_dates" id="range_dates" placeholder="00/00/000">
                </div>
            </div>
            <div class="form-group col-md-6 validate">
                <label for="festivity_type_id">@lang('calendar.type')</label>
                <select class="form-control selectpicker"
                        id="festivity_type_id"
                        name="festivity_type_id"
                        data-width="100%"
                        data-size="8"
                        data-dropup-auto="false"
                        data-live-search="false"
                        data-live-search-placeholder="@lang('main.filter-by-name')"
                        data-live-search-style='startsWith'
                        data-container="body"
                        title="@lang('main.select')">
                            <option >Vacaciones</option>
                            <option >Días personales</option>
                            <option >Otros</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="col-10 col-md-9 col-lg-10">
                <div class="form-group mt-4">
                    <button class="btn btn-primary btn-forms" style="min-width:100%;">
                        @lang('main.save')
                    </button>
                </div>
            </div>
            <div class="col-2 col-md-3 col-lg-2 mt-4">
                <a class="btn-close" href="javascript:subformHolidays('close')" style="position: relative; margin-left: auto; margin-top: 10px;">
                    <img src="{{ asset('img/icons/white/arrow-down.svg') }}" alt="">
                </a>
            </div>
        </div>
    </form>
</div>
