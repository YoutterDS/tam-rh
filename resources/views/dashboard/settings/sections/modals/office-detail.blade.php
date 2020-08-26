{{-- Editing Offices --}}
<div class="modal fade" id="modalOfficeDetail" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-uppercase" id="exampleModalLabel">Editar oficina</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="" class="form">
                <div class="modal-body">
                    {{--                    <div class="form-row">--}}
                    {{--                        <div class="form-group col-12">--}}
                    {{--                            <div class="custom-control custom-switch">--}}
                    {{--                                <input type="checkbox" class="custom-control-input" id="customSwitches">--}}
                    {{--                                <label class="custom-control-label" for="customSwitches">Oficina Principal</label><br/>--}}
                    {{--                                <small class="text-info">Solo puede haber una oficina central.</small>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="form-section">
                        <label class="text-uppercase font-weight-bold section-title"><i class="fas fa-info"></i> Datos básicos</label>
                        <div class="form-row">
                            <label for="officeTitle">Título</label>
                            <input type="text" class="form-control" required name="name" id="officeTitle" placeholder="Título de oficina"
                                   value="BARCELONA">
                        </div>
                        <div class="form-row">
                            <label for="officeTitle">Horario de la oficina</label>
                            <input type="text" class="form-control" required name="name" id="officeTitle" placeholder="Horario de la oficina"
                                   value="09:00 - 18:00 h">
                        </div>
                    </div>
                    <div class="form-section">
                        <label class="text-uppercase font-weight-bold section-title"><i class="fas fa-phone"></i> Datos de contacto</label>
                        <div class="form-row">
                            <label for="officePhone">Teléfono</label>
                            <input type="text" class="form-control" id="officePhone" placeholder="Teléfono de la oficina" value="93 658 88 74">
                        </div>
                        <div class="form-row">
                            <label for="officeEmail">Email</label>
                            <input type="email" class="form-control" id="officeEmail" placeholder="Correo electrónico de la oficina"
                                   value="oficina@tam.com">
                        </div>
                    </div>
                    <div class="form-section">
                        <label class="text-uppercase font-weight-bold section-title"><i class="fas fa-map-marker-alt"></i> Datos de localización</label>
                        <div class="form-row">
                            <label for="officeDirection">Dirección</label>
                            <input type="text" class="form-control" required name="name" id="officeDirection" placeholder="Dirección de la oficina"
                                   value="Av. Torre Blanca, 57 - 08173 Sant Cugat del Vallès, Barcelona - Spain">
                        </div>
                        <div class="form-row">
                            <label for="officeCity">Ciudad</label>
                            <input type="text" class="form-control" id="officeCity" placeholder="Ciudad de la oficina" value="Sant Cugat del Vallès">
                        </div>
                        <div class="form-row">
                            <label for="officePc">Código Postal</label>
                            <input type="text" class="form-control" id="officePc" placeholder="Código postal de la oficina" value="08173">
                        </div>
                        <div class="form-row">
                            <label for="officeProvince">Estado/Provincia/Región</label>
                            <input type="text" class="form-control" id="officeProvince" placeholder="Estado/Provincia/Región" value="Barcelona">
                        </div>
                        <div class="form-row">
                            <label for="oficeCountry">País</label>
                            <select class="form-control selectpicker" id="oficeCountry"
                                    data-width="100%"
                                    data-size="8"
                                    data-dropup-auto="false"
                                    data-live-search="true"
                                    data-live-search-placeholder="Filtrar por nombre"
                                    data-live-search-style='startsWith'
                                    title="Seleccione">
                                @foreach( \App\Country::all() as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary text-uppercase"><i class="fas fa-save"></i> Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

