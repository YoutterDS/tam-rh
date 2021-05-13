<div>
    <form action="" class="form">
        <div class="form-row mt-2">
            <div class="col-12">
                <div class="form-group validate">
                    <label for="festivity_name__{{ $index }}">@lang('calendar.name')</label>
                    <input type="text" class="form-control" required id="festivity_name__{{ $index }}" name="festivity_name">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group validate">
                    <label for="range_dates__{{ $index }}">@lang('calendar.range-dates')</label>
                    <input type="text" class="form-control" required  id="range_dates__{{ $index }}" name="range_dates">
                </div>
            </div>
            <div class="form-group col-md-6 validate">
                <label for="festivity_type_id__{{ $index }}">@lang('calendar.type')</label>
                <select class="form-control selectpicker"
                        id="festivity_type_id__{{ $index }}"
                        name="festivity_type_id"
                        data-width="100%"
                        data-size="8"
                        data-dropup-auto="false"
                        data-live-search="false"
                        data-live-search-placeholder="@lang('main.filter-by-name')"
                        data-live-search-style='startsWith'
                        data-container="body"
                        title="@lang('main.select')">
                            <option >Nacional</option>
                            <option >Regional</option>
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
            <div class="col-2 col-md-3 col-lg-2">
                <div class="form-group mt-4">
                    <a href="#" class="btn btn-delete ml-auto"
                        data-toggle="modal" data-target="#DeleteOfficeModal">
                        <img src="{{ asset('img/icons/white/delete.svg') }}" class="icon" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-12 mt-4">
                <a class="btn-close" href="javascript:subformFestivity('close')" style="position: relative; margin-left: auto; margin-top: 10px;">
                    <img src="{{ asset('img/icons/white/arrow-down.svg') }}" alt="">
                </a>
            </div>
        </div>
    </form>
</div>
