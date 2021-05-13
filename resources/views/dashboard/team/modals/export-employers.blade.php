<div class="modal fade text-left" id="exportEmployersModal" tabindex="-1" role="dialog" aria-labelledby="infoEmployerModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="text-uppercase"><i class="fas fa-file-export"></i> <span>Exportar empleados</span></h3>
                <p>Para exportar tus empleados debes seleccionar el tipo de reporte a realizar (Ausencias/Empleados). Una vez hayas seleccionado el tipo de reporte, se podrán exportar como muestran los siguientes ficheros de muestra:</p>
                <p class="font-weight-bold text-uppercase"><a href=""><i class="fas fa-file-excel"></i> XLS ejemplo Ausencias</a></p>
                <p class="font-weight-bold text-uppercase"><a href=""><i class="fas fa-file-excel"></i> XLS ejemplo Empleados</a></p><br>
                <form>
                    <div class="form-section">
                        <label for="typeExportSelect" class="text-uppercase font-weight-bold">Reporte</label>
                        <select class="custom-select" id="typeExportSelect">
                            <option value="1">Ausencias</option>
                            <option value="2">Empleados</option>
                        </select>
                    </div>
                    <div class="form-section">
                        <label for="yearExportSelect" class="text-uppercase font-weight-bold">Año</label>
                        <select id="yearExportSelect" class="custom-select">
                            <option selected>Todos</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link text-uppercase font-weight-bold">
                    <i class="fas fa-file-export"></i> <span>Exportar</span>
                </button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $("#typeExportSelect").change(function () {
            if ($("#typeExportSelect").val() > 1) {
                $("#yearExportSelect").parent().addClass('d-none');
            } else {
                $("#yearExportSelect").parent().removeClass('d-none');
            }
        })
    });
</script>
