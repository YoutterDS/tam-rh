<div class="list-employees--form_info-hourly-record--box">
    <div class="list-employees--form_info-hourly-record--data">
        <div class="list-employees--form_info-hourly-record--data_title">
            @lang('timetable.monthly-records')
        </div>
        <div class="list-employees--form_info-hourly-record--data_hours">
            <div class="list-employees--form_info-hourly-record--data_hours__item">
                <div class="list-employees--form_info-hourly-record--data_hours__item-title">
                    @lang('timetable.min-hours')
                </div>
                <div class="list-employees--form_info-hourly-record--data_hours__item-calculation">
                    {{ rand(100, 200) }}
                </div>
            </div>
            <div class="list-employees--form_info-hourly-record--data_hours__item">
                <div class="list-employees--form_info-hourly-record--data_hours__item-title">
                    @lang('timetable.computed-hours')
                </div>
                <div class="list-employees--form_info-hourly-record--data_hours__item-calculation">
                    {{ rand(100, 200) }}
                </div>
            </div>
            <div class="list-employees--form_info-hourly-record--data_hours__item">
                <div class="list-employees--form_info-hourly-record--data_hours__item-title">
                    @lang('timetable.extra-hours')
                </div>
                <div class="list-employees--form_info-hourly-record--data_hours__item-calculation">
                    +{{ rand(1, 30) }}
                </div>
            </div>
        </div>
    </div>
    <div class="list-employees--form_info-hourly-record--chart" >
        <canvas id="timetableChart_{{ $loop->iteration }}"></canvas>
    </div>
    <div class="row list-employees--form_info-hourly-record--buttons">
        <div class="col">
            <button type="button" class="btn btn-secondary w-100 h-100 btn-toggle-subsection"
                data-target="#employeer_form_{{ $loop->iteration }}"
                data-section="detail"
                data-action="open">
                @lang('main.detail')
            </button>
        </div>
        <div class="col">
            <button type="button" class="btn btn-secondary w-100 btn-with-icon">
                <span>@lang('timetable.download-report')</span>
                <img class="icon" src="{{ asset('img/icons/white/export.svg') }}" alt="">
            </button>
        </div>
        <div class="col">
            <a href="#" class="btn-close"
                        data-target="#employeer_form_{{ $loop->iteration }}"
                        data-section="basic-info">
                <img src="{{ asset('img/icons/white/arrow-down.svg') }}" alt="">
            </a>
        </div>
    </div>
</div>

@if( $loop->iteration === 1)
<script>
document.addEventListener("DOMContentLoaded", function(event) {
    window["ctx_{{ $loop->iteration }}"]    = document.getElementById("timetableChart_{{ $loop->iteration }}").getContext('2d');
    window["myChart{{ $loop->iteration }}"] = new Chart(window["ctx_{{ $loop->iteration }}"], {
        type: 'bar',
        data: {
            labels: [{!! collect(range(1,31))->implode(",") !!}],
            datasets: [{
                label: '# Horas',
                data: [{{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}, {{rand(0,12)}}],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderWidth: 0,
            }]
        },
        options: {
            maintainAspectRatio: false,
            responsive: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        callback: function(value, index, values) {
                            return value + "h";
                        },
                        fontColor: '#1D5FBF',
                        fontSize: 15,
                        padding: 4
                    },
                    gridLines : {
                        display : true,
                        color: 'rgba(160, 189, 230, 1)',
                        drawBorder: false,
                    },
                }],
                xAxes : [ {
                    gridLines : {
                        display : false
                    },
                    maxBarThickness: 10,
                }]
            },
            legend: {
                display: false
            },
        }
    });
})
</script>
@endif
