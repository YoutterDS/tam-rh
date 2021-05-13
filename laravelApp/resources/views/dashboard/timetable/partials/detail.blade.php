<div class="list-employees--form_detail--box">
    <div class="list-employees--form_detail--data_title">
        @lang('timetable.detail-timetable')
    </div>

    @foreach( range(1, 3) as $item )
        <form class="form list-employees--form_detail--records" id="formEmployeerDetailRecords_{{ $loop->iteration }}">
            <div class="list-employees--form_detail--records__item">
                <div class="form-group date validate">
                    <input type="text" class="form-control" id="day_{{ $loop->iteration }}" name="day" value="01/10/20" readonly>
                </div>

                <div class="form-group time validate">
                    <input type="text" class="form-control" id="time_entry_{{ $loop->iteration }}" name="time_entry" value="10:00">
                </div>

                <div class="form-group time validate">
                    <input type="text" class="form-control" id="time_exit_{{ $loop->iteration }}" name="time_exit" value="10:14">
                </div>

                <div class="form-group type validate">
                    <select class="form-control selectpicker" id="type_{{ $loop->iteration }}"
                            data-width="100%"
                            data-size="8"
                            data-dropup-auto="false"
                            data-live-search="false"
                            data-live-search-placeholder="@lang('main.filter-by-name')"
                            data-live-search-style='startsWith'
                            data-container="body"
                            title="@lang('main.select')">
                        @foreach( range(1, 4) as $item)
                            <option value="{{ $item }}" >Item {{ $item }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    @if( $loop->iteration != $loop->last )
                        <a class="btn btn-forms btn-save">
                            <img src="{{ asset('img/icons/white/save.svg') }}" alt="@lang('timetable.edit-timetable-record')" class="icon">
                        </a>
                    @else
                    <a class="btn btn-forms btn-add">
                        <img src="{{ asset('img/icons/grey/plus.svg') }}" alt="@lang('timetable.edit-timetable-record')" class="icon">
                    </a>
                    @endif
                </div>

                <div class="form-group">
                    10h 14'
                </div>

                <div class="form-group">
                    3h 44'
                </div>

                <div class="form-group">
                    @if( $loop->iteration != $loop->last )
                        <div class="custom-control custom-switch ">
                            <input type="checkbox" class="custom-control-input" id="validated_{{ $loop->iteration }}">
                            <label class="custom-control-label " for="validated_{{ $loop->iteration }}"></label>
                        </div>
                    @else
                        <div class="empty"></div>
                    @endif
                </div>

            </div>
        </form>
    @endforeach

    <div class="list-employees--form_detail--absences">
        <div class="list-employees--form_detail--absences__item medical">
            <div class="date">
                02/{{ \Carbon\Carbon::now()->format('m') }}/{{ \Carbon\Carbon::now()->format('Y') }}
            </div>
            <div class="type">
                BAJA MÉDICA
            </div>
        </div>

        <div class="list-employees--form_detail--absences__item holidays">
            <div class="date">
                03/{{ \Carbon\Carbon::now()->format('m') }}/{{ \Carbon\Carbon::now()->format('Y') }}
            </div>
            <div class="type">
                VACACIONES
            </div>
        </div>

        <div class="list-employees--form_detail--absences__item festive">
            <div class="date">
                04/{{ \Carbon\Carbon::now()->format('m') }}/{{ \Carbon\Carbon::now()->format('Y') }}
            </div>
            <div class="type">
                FESTIVO
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col mt-5 mr-2">
            <a href="#" class="btn-close"
                        data-target="#employeer_form_{{ $loop->iteration }}"
                        data-section="basic-info">
                <img src="{{ asset('img/icons/white/arrow-down.svg') }}" alt="">
            </a>
        </div>
    </div>
</div>
