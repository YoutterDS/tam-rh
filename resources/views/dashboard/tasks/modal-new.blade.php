<div class="modal fade" id="new-task-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="event">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class=" text-center">Nueva tarea</h3>
                <form>
                    <div class="form-group form-section">
                        <div class="mb-3">
                            <label for="title" class="form-check-label">Titulo</label>
                            <input id="title" name="title" type="text" class="form-control form-control-sm">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-check-label">Descripción</label>
                            <textarea id="description" name="description" rows="3" class="form-control form-control-sm p-3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-check-label">Fecha límite</label>
                            <input type="text" id="datapicker" class="form-control form-control-sm">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" style="text-transform: uppercase;font-weight: bold;">
                    <i class="fas fa-save"></i>
                    Guardar
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        // https://www.daterangepicker.com/
        $('#datapicker').daterangepicker({
            timePicker: true,
            // viewMode: "months",
            // minViewMode: "months",
            singleDatePicker: true,
            // startDate: moment().startOf('hour'),
            // endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
                "format": "DD/MM/YYYY HH:mm",
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
                "firstDay": 1
            },
        });

        // With HTML5 history API, we can easily prevent scrolling!
        $('.nav-link').on('shown.bs.tab', function (e) {
            if(history.pushState) {
                history.pushState(null, null, e.target.hash);
            } else {
                window.location.hash = e.target.hash; // Polyfill for old browsers
            }
        })
        if(window.location.hash != "") {
            $('a[href="' + window.location.hash + '"]').click();
        } else {
            $('a[href="#tareas"]').click();
        }
    });
</script>
