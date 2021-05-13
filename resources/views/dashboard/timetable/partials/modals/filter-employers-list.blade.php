<div class="modal fade" id="filterEmployersModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="text-uppercase text-center">Filtrar empleados</h3>
                <form>
                    <div class="form-group form-section">
                        <label for="DeptmSelect" class="text-uppercase font-weight-bold"><i class="fas fa-users"></i> Departamento</label>
                        <select class="form-control" id="DeptmSelect">
                            <option value="0">Todos los departamentos</option>
                            <option value="1">Marketing</option>
                            <option value="2">Ventas</option>
                            <option value="3">RRHH</option>
                            <option value="4">IT</option>
                        </select>
                    </div>
                </form>
                <form>
                    <div class="form-group form-section">
                        <label for="exampleFormControlSelect1" class="text-uppercase font-weight-bold"><i class="fas fa-user"></i>
                            Empleado</label><br>
                        <select class="js-example-basic-single" name="state" id="exampleFormControlSelect1" style="width: 100%">
                            <option value="0">Buscar empleado</option>
                            <option value="1">Ramon Ribera</option>
                            <option value="2">Ruben Centelles</option>
                            <option value="3">Pau Garcia</option>
                            <option value="4">Pere</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-none">
                <button type="button" class="btn btn-link" style="text-transform: uppercase;font-weight: bold;"><i class="fas fa-sync-alt"></i>
                    Restablecer filtros
                </button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('#exampleFormControlSelect1').select2({
            placeholder: 'Buscar empleado'
        });

        $("#DeptmSelect").change(function () {
            console.log($(this).val());
            if ($(this).val() > 0) {
                $("#filterEmployersModal1 .modal-footer").removeClass('d-none');
            } else {
                $("#filterEmployersModal1 .modal-footer").addClass('d-none');
            }
        });

        $('#exampleFormControlSelect1').change(function () {
            console.log($(this).val());
            if ($(this).val() > 0) {
                $("#filterEmployersModal1 .modal-footer").removeClass('d-none');
            } else {
                $("#filterEmployersModal1 .modal-footer").addClass('d-none');
            }
        });

        $("#filterEmployersModal1 .modal-footer button").click(function () {
            $("#filterEmployersModal1 .modal-footer").addClass('d-none');
            $("#DeptmSelect").val(0);
            $("#exampleFormControlSelect1").select2("val", 0);
        })
    });
</script>
