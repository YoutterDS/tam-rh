@extends('layouts.dashboard')

@section('title-heading')
    @lang('calendar.title')
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <ul class="nav nav-pills">
                <li class="nav-pills-item">
                    <a class="nav-pills-item_link" data-toggle="tab" data-calendar="calendarEvents" href="#{{ Str::slug(\Lang::get('nav-pills.calendar-index')) }}">
                        @lang('nav-pills.calendar-index') @lang('calendar.festivity')
                    </a>
                </li>
                <li class="nav-pills-item">
                    <a class="nav-pills-item_link" data-toggle="tab" data-calendar="calendarEmployers" href="#{{ Str::slug(\Lang::get('nav-pills.calendar-employees')) }}">
                        @lang('calendar.holidays') @lang('nav-pills.calendar-employees')
                    </a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div id="{{ Str::slug(\Lang::get('nav-pills.calendar-index')) }}" class="tab-pane fade show">
                    @include('dashboard.calendar.sections.index')
                </div>
                <div id="{{ Str::slug(\Lang::get('nav-pills.calendar-employees')) }}" class="tab-pane fade">
                    @include('dashboard.calendar.sections.employees')
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modals-sections')
    @include('dashboard.calendar.modals.delete-festivity')
@endsection

@section('css')
    <link href='{{ asset('js/fullcalendar/main.css') }}' rel='stylesheet' />
@endsection

@section('js')
    <script src="{{ asset('js/fullcalendar/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            var calendarEl  = document.getElementById('calendarEvents');
            var calendar    = new FullCalendar.Calendar(calendarEl, {
                locale          : '{{ app()->getLocale() }}',
                firstDay        : 1,
                navLinks        : true,
                weekNumbers     : true,
                weekText        : 'S',
                nowIndicator    : true,
                editable        : true,
                progressiveEventRendering : true,
                headerToolbar   : {
                                    start: 'dayGridMonth,timeGridWeek,listWeek',
                                    center: 'today prev,next prevYear,nextYear',
                                    end: 'title'
                                  },
                buttonText      : {
                                    today:    'hoy',
                                    month:    'mes',
                                    week:     'semana',
                                    day:      'día',
                                    list:     'agenda'
                                  },
                allDayText      : 'Todo el día',
                noEventsContent : 'Sin eventos para mostrar',
                events          : [
                                    {
                                        id          : '1',
                                        title       : 'Fiesta local',
                                        start       : '{{ \Carbon\Carbon::now()->format("Y")}}-{{ \Carbon\Carbon::now()->format("m") }}-16', //'{{ \Carbon\Carbon::parse("2020-10-16")->format("Y-m-d") }}',
                                        end         : '{{ \Carbon\Carbon::now()->format("Y")}}-{{ \Carbon\Carbon::now()->format("m") }}-19',
                                        classNames  : ['day-festive', ''],
                                        allDay      : true,
                                        description : 'Fiesta local',
                                        customRender: true,
                                        display     : 'background',
                                        extendedProps: {
                                            type     : 'festive',
                                        },
                                    },
                                    {
                                        id          : '2',
                                        title       : 'Fiesta Regional',
                                        start       : '{{ \Carbon\Carbon::now()->format("Y")}}-{{ \Carbon\Carbon::now()->format("m") }}-30',
                                        end         : '{{ \Carbon\Carbon::now()->format("Y")}}-{{ \Carbon\Carbon::now()->format("m") }}-30',
                                        classNames  : ['day-festive', ''],
                                        allDay      : true,
                                        description : 'Fiesta local',
                                        customRender: true,
                                        display     : 'background',
                                        extendedProps: {
                                            type     : 'festive',
                                        },
                                    },
                                  ],
                eventClick: function(info) {
                    info.jsEvent.preventDefault();
                },
                dateClick: function(info) {
                    console.log( info )
                    window.subformFestivity('open', 'edit');
                }
            });

            setTimeout(() => {
                calendar.render();
            }, 600);

            $('.custom-switch--validate').change(function(){
                $('.custom-switch--refuse input[type=checkbox]').prop('checked', false);
            })

            $('.custom-switch--refuse').change(function(){
                $('.custom-switch--validate input[type=checkbox]').prop('checked', false);
            })

            $(".nav-link").click(function(e) {
                calendarToRender = $(this).attr("data-calendar");
                setTimeout(() => {
                    calendar.render();
                }, 600);
            })

            $('#sidebarToggle').click(function(){
                setTimeout(() => {
                    calendar.updateSize()
                }, 250);
            })

            var nowDate = new Date();
            var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
            $('#range_dates, starts_at, #ends_at').daterangepicker({
                timePicker: false,
                // viewMode: "months",
                // minViewMode: "months",
                // singleDatePicker: true,
                // minDate: today,
                // startDate: moment().startOf('hour'),
                // endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    "format": "DD/MM/YYYY",
                    "separator": " - ",
                    "applyLabel": "Aplicar",
                    "cancelLabel": "Cancelar",
                    "fromLabel": "Desde",
                    "toLabel": "Hasta",
                    // "customRangeLabel": "Custom",
                    "weekLabel": "W",
                    "daysOfWeek": ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
                    "monthNames": ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                    "firstDay": 1,
                    "customRangeLabel": "Rango de fechas"
                },
                /*
                "ranges": {
                    'Hoy': [window.moment(), window.moment()],
                    // 'Yesterday': [window.moment().subtract(1, 'days'), window.moment().subtract(1, 'days')],
                    // 'Last 7 Days': [window.moment().subtract(6, 'days'), window.moment()],
                    // 'Last 30 Days': [window.moment().subtract(29, 'days'), window.moment()],
                    'Este mes': [window.moment().startOf('month'), moment().endOf('month')],
                    'El pasado mes': [window.moment().subtract(1, 'month').startOf('month'), window.moment().subtract(1, 'month').endOf('month')]
                }
                */
            });

        });
    </script>
@endsection
