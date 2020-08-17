<div class="modal fade" id="sendEmailToEmployerModal" tabindex="-1" role="dialog" aria-labelledby="infoEmployerModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="text-uppercase text-center"><i class="fas fa-envelope"></i></h3>
                <form>
                    <div class="form-section">
                        <div class="form-group">
                            <label for="destinataryEmployerEmailInput">Destinatario</label>
                            <input type="email" class="form-control" id="destinataryEmployerEmailInput" aria-describedby="emailHelp"
                                   placeholder="Destinatario"
                                   value="ramon@tam.com">
                        </div>
                        <div class="form-group">
                            <label for="subjectEmployerEmailInput">Asunto</label>
                            <input type="text" class="form-control" id="subjectEmployerEmailInput" placeholder="Asunto del mail">
                        </div>
                        <div class="form-group">
                            <label for="messageEmployerEmail">Mensaje</label>
                            <textarea class="form-control" id="messageEmployerEmail" rows="3"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-none">
                <button type="button" class="btn btn-link text-uppercase font-weight-bold">
                    <i class="fas fa-paper-plane"></i><span>Enviar</span>
                </button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        let inputAsunto = $("#subjectEmployerEmailInput");
        let mensaje = $("#messageEmployerEmail");

        mensaje.on("change", function () {
            if (inputAsunto.val() !== '' && this.value.length) {
                $("#sendEmailToEmployerModal .modal-footer").removeClass('d-none');
            }
        });
    });
</script>
