<div class="modal fade" id="new-event-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="event">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class=" text-center">Nuevo evento</h3>
                <form>
                    <div class="form-group form-section">
                        <div class="mb-3">
                            <label for="title" class="form-check-label">Titulo</label>
                            <input id="title" name="title" type="text" class="form-control form-control-sm">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-check-label">Descripción</label>
                            <textarea id="description" name="description" rows="3" class="form-control form-control-sm"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="location" class="form-check-label">Ubicación</label>
                            <input id="location" name="location" type="text" class="form-control form-control-sm">
                        </div>

                        <div>
                            <label for="location" class="form-check-label">Fechas</label>
                            <input type="text" id="datapicker" name="date" class="form-control form-control-sm">
                        </div>

                    </div>
                    <div class="form-group form-section">
                        <div>
                            <label for="files" class="form-check-label mb-3">Ficheros</label>
                            <input  name="files[]" type="file" class="form-control-file mb-2">
                            <input  name="files[]" type="file" class="form-control-file mb-2">
                            <input  name="files[]" type="file" class="form-control-file">
                        </div>
                    </div>
                    <div class="form-group form-section">
                        <div class="mb-2">
                            <label for="selectOficinas" class="form-check-label">
                                Oficina
                            </label>
                            <select class="js-example-basic-multiple" name="oficinas[]" id="selectOficinas" multiple="multiple">
                                <option value="1">Barcelona</option>
                                <option value="2">Girona</option>
                                <option value="3">Zaragoza</option>
                                <option value="4">Madrid</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label for="selectDepartamentos" class="form-check-label">
                                Departamentos
                            </label>
                            <select class="js-example-basic-multiple" name="departamentos[]" id="selectDepartamentos" multiple="multiple">
                                <option value="1">Dirección</option>
                                <option value="2">Recursos humanos</option>
                                <option value="3">Técnicos</option>
                                <option value="4">Mantenimiento</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label for="selectParticipantes" class="form-check-label">
                                Empleados
                            </label>
                            <select class="js-example-basic-multiple" name="participantes[]" id="selectParticipantes" multiple="multiple">
                                <option value="1">Ramon Ribera</option>
                                <option value="2">Ruben Centelles</option>
                                <option value="3">Pau Garcia</option>
                                <option value="4">Pere</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-section">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Permitir comentarios
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Solicitar confirmación de asistencia
                            </label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" style="text-transform: uppercase;font-weight: bold;"><i class="fas fa-save"></i>
                    Guardar
                </button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('#selectOficinas').select2({
            dropdownAutoWidth: true,
            multiple: true,
            width: '100%',
            height: '30px',
            placeholder: "Selecciona una o más oficinas",
            allowClear: true
        });

        $('#selectDepartamentos').select2({
            dropdownAutoWidth: true,
            multiple: true,
            width: '100%',
            height: '30px',
            placeholder: "Selecciona uno o más departamentos",
            allowClear: true
        });

        $('#selectParticipantes').select2({
            dropdownAutoWidth: true,
            multiple: true,
            width: '100%',
            height: '30px',
            placeholder: "Selecciona uno o más empleados",
            allowClear: true
        });

        $('.select2-search__field').css('width', '100%');

        $('#datapicker').daterangepicker({
            timePicker: true,
            // viewMode: "months",
            // minViewMode: "months",
            // singleDatePicker: true,
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

    });
</script>
