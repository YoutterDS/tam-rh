@extends('layouts.dashboard')

@section('content')
    <div class="row">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 text-uppercase"><i class="fas fa-user-plus"></i> Alta nuevo empleado</h1>
        </div>
        <div class="card shadow col-lg-12 card-section">
            <div class="card-body p-5">
                <form>
                    <div class="row">
                        <div class="col col-sm-12 col-md-12 col-xl-6">
                            <div class="form-section">
                                <label class="text-uppercase font-weight-bold"><i class="fas fa-camera"></i> Foto perfil</label>
                                <div style="max-height: 90px;margin: 15px auto;display: block;">
                                    <img src="{{URL::asset('/img/profile.png')}}" alt="TAM - Ramon Ribera" style="display: block;height: 90px;margin: 0 auto;">
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Subir fotografia</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-section">
                        <label class="text-uppercase font-weight-bold"><i class="fas fa-info"></i> Datos básicos</label>
                        <div class="form-group">
                            <label for="GenderSelect" class="text-uppercase">Género</label>
                            <select class="form-control" id="GenderSelect">
                                <option value="1">Femenino</option>
                                <option value="2" selected>Masculino</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="infoNameInput">Nombre</label>
                            <input type="text" class="form-control" id="infoNameInput" aria-describedby="emailHelp" placeholder="Nombre"
                                   value="Ramon">
                        </div>
                        <div class="form-group">
                            <label for="infoLastnamesInput">Apellidos</label>
                            <input type="text" class="form-control" id="infoLastnamesInput" aria-describedby="emailHelp" placeholder="Apellidos"
                                   value="Ribera">
                        </div>
                        <div class="form-group">
                            <label for="infoDniInput">DNI</label>
                            <input type="text" class="form-control" id="infoDniInput" aria-describedby="emailHelp" placeholder="Apellidos"
                                   value="45985632D">
                        </div>
                        <div class="form-group">
                            <label for="infoIbanInput">Número de cuenta bancaria (IBAN)</label>
                            <input type="text" class="form-control" id="infoIbanInput" aria-describedby="emailHelp" placeholder="Apellidos"
                                   value="ES5504877639949951451996">
                        </div>
                    </div>
                    <div class="form-section">
                        <label for="DeptmSelect" class="text-uppercase font-weight-bold"><i class="fas fa-envelope"></i> Datos de contacto</label>
                        <div class="form-group">
                            <label for="infoEmailInput">Téléfono</label>
                            <input type="text" class="form-control" id="infoEmailInput" aria-describedby="emailHelp" placeholder="+34 685888888"
                                   value="698999999">
                        </div>
                        <div class="form-group">
                            <label for="infoEmailInput">Correo electrónico</label>
                            <input type="email" class="form-control" id="infoEmailInput" aria-describedby="emailHelp" placeholder="info@tam.com"
                                   value="ramon@tam.com">
                        </div>
                    </div>
                    <div class="form-section">
                        <div class="form-group">
                            <label for="DeptmSelect" class="text-uppercase font-weight-bold"><i class="fas fa-users"></i> Departamento</label>
                            <select class="form-control" id="DeptmSelect">
                                <option value="0">Todos los departamentos</option>
                                <option value="1" selected>Marketing</option>
                                <option value="2">Ventas</option>
                                <option value="3">RRHH</option>
                                <option value="4">IT</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="infoPositionInput">Cargo</label>
                            <input type="text" class="form-control" id="infoPositionInput" aria-describedby="emailHelp"
                                   placeholder="Manager/Sub Manager..."
                                   value="Manager">
                        </div>
                        <div class="form-group">
                            <label for="DeptmSelect" class="text-uppercase">Manager</label>
                            <select class="form-control" id="DeptmSelect">
                                <option value="0">Sin manager</option>
                                <option value="1" selected>Paco Palotes</option>
                                <option value="2">Antonio manda</option>
                            </select>
                        </div>
                    </div>
                    <ul>
                        <li>
                            <p><strong>Fecha de contratación:</strong> 10/04/2015</p>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="card-footer text-right">
                <button type="button" class="btn btn-primary text-uppercase"><i class="fas fa-user-plus"></i> Crear empleado</button>
            </div>
        </div>
    </div>
@endsection
