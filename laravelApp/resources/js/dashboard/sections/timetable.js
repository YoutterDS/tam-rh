$(document).ready(function(){
    $('#datapicker').daterangepicker({
        timePicker: false,
        // viewMode: "months",
        // minViewMode: "months",
        // singleDatePicker: true,
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
            "daysOfWeek": [
                "Dom",
                "Lun",
                "Mar",
                "Mié",
                "Jue",
                "Vie",
                "Sáb"
            ],
            "monthNames": [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ],
            "firstDay": 1,
            "customRangeLabel": "Rango de fechas",
        },
        "ranges": {
            'Hoy': [window.moment(), window.moment()],
            // 'Yesterday': [window.moment().subtract(1, 'days'), window.moment().subtract(1, 'days')],
            // 'Last 7 Days': [window.moment().subtract(6, 'days'), window.moment()],
            // 'Last 30 Days': [window.moment().subtract(29, 'days'), window.moment()],
            'Este mes': [window.moment().startOf('month'), moment().endOf('month')],
            'El pasado mes': [window.moment().subtract(1, 'month').startOf('month'), window.moment().subtract(1, 'month').endOf('month')],
            /* 'Last Month': [
                "2021-01-31T23:00:00.000Z",
                "2021-02-28T22:59:59.999Z"
            ] */
        },

    });
});
