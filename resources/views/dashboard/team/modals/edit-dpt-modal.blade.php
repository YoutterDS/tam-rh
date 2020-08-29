<div class="modal fade" id="editDptModal" tabindex="-1" role="dialog" aria-labelledby="infoEmployerModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="text-uppercase text-center">Editar departamento</h3>
                <form>
                    <div class="row">
                        <div class="col col-sm-12 col-md-12 col-xl-12">
                            <div class="form-section">
                                <label class="text-uppercase font-weight-bold section-title"><i class="fas fa-camera"></i> Icono departamento</label>
                                <div style="max-height: 90px;margin: 15px auto;display: block;">
                                    <img src="{{URL::asset('/img/profile.png')}}" alt="TAM - Ramon Ribera"
                                         style="display: block;height: 90px;margin: 0 auto;">
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Subir icono</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-section">
                        <label class="text-uppercase font-weight-bold section-title"><i class="fas fa-info"></i> Datos básicos</label>

                        <div class="form-group">
                            <label for="infoTitleInput">Título del departmamento</label>
                            <input type="text" class="form-control" id="infoNameInput" aria-describedby="emailHelp" placeholder="Título del departmamento"
                                   value="MARKETING">
                        </div>ALTA NUEVO DEPARTAMENTO
                        <div class="form-group">
                            <label for="statusSelect">Estado del departamento</label>
                            <select class="form-control" id="statusSelect">
                                <option value="1" selected>Activo</option>
                                <option value="0">Desactivado</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-section">
                        <div class="form-group">
                            <label for="infoEmailInput" class="text-uppercase font-weight-bold section-title"><i class="fas fa-envelope"></i> Correo electrónico
                                departamental</label>
                            <input type="email" class="form-control" id="infoEmailInput" aria-describedby="emailHelp" placeholder="Correo electrónico departamento"
                                   value="marketing@tam.com">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary text-uppercase">
                    <i class="fas fa-save"></i> Guardar departamento
                </button>
            </div>
        </div>
    </div>
</div>
