@extends('layouts.dashboard')

@section('content')
<div class="row" id="control-horario-detalle">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 text-uppercase"><i class="fas fa-fw fa-clipboard-list"></i> Control horario detalle</h1>
    </div>

    <div class="card shadow col-lg-12 card-section">
        <div class="card-body p-3">
            <div class="row">
                <div class="col-sm col-sm-4">
                    <div class="input-group mb-2">

                        <select class="custom-select" id="inputGroupSelect01">
                            <option value="2020" selected>2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm col-sm-4">
                    <div class="input-group mb-2">
                        <select class="custom-select" id="inputGroupSelect01">
                            <option value="1" selected>Enero</option>
                            <option value="2">Febrero</option>
                            <option value="2">Marzo</option>
                            <option value="2">Abril</option>
                            <option value="2">Mayo</option>
                            <option value="2">Junio</option>
                            <option value="2">Julio</option>
                            <option value="2">Agosto</option>
                            <option value="2">Septiembre</option>
                            <option value="2">Octubre</option>
                            <option value="2">Noviembre</option>
                            <option value="2">Diciembre</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .table-time-registrations .filled .fichaje-block .save-btn {
                display: inline-block;
                height: 29px;
                line-height: 1;
            }
            .table-time-registrations .filled.repetida td {
                border-top: none;
            }

            .table-time-registrations .filled.repetida .tag-dia-container {
                display: none;
            }
        </style>


        <table class="table table-time-registrations table-zebra">
            <thead>
            <tr>
                <th><i class="fas fa-calendar-day"></i></th>
                <th><i class="fas fa-list"></i></th>
                <th></th>
                <th></th>
                <th class="aright text-center"><i class="fas fa-clock"></i></th>
                <th class="aright text-center"><i class="fas fa-business-time"></i></th>
                <th class="aright text-center">Validado</th>
            </tr>
            </thead>
            <tbody>
            <tr class="filled main disabled">
                <td><span class="tag-dia-container">01/10/2020</span></td>
                <td class="fichaje-block">
                    <form class="d-inline-block">
                        <span class="time-container">
                            <input disabled="" type="time" id="start_29790" class="form-time" value="10:00">
                        </span>
                        <span>-</span>
                        <span class="time-container">
                            <input disabled="" type="time" id="end_29790" class="form-time" required="" value="10:14">
                        </span>
                    </form>
                </td>
                <td>@include('dashboard.timetable.partials.detail.register-type')</td>
                <td class="text-center">
                    <button class="btn save-btn btn-primary hidden"><i class="far fa-save"></i></button>
                </td>
                <td class="aright text-center">0h 14'</td>
                <td class="col-total text-center">3h 44'</td>
                <td class="aright text-center">
                    <i class="fas fa-toggle-on" style="font-size: 2rem;color: #22d422;"></i>
                </td>
            </tr>
            <tr class="filled repetida disabled">
                <td></td>
                <td class="fichaje-block">
                    <form class="d-inline-block">
                        <span class="time-container">
                            <input disabled="" type="time" id="start_29790" class="form-time" value="10:30">
                        </span>
                        <span>-</span>
                        <span class="time-container">
                            <input disabled="" type="time" id="end_29790" class="form-time" required="" value="12:00">
                        </span>
                    </form>
                </td>
                <td>@include('dashboard.timetable.partials.detail.register-type')</td>
                <td></td>
                <td class="aright text-center">1h 30'</td>
                <td class="col-total aright"></td>
                <td class="aright"></td>
            </tr>
            <tr class="filled repetida disabled">
                <td></td>
                <td class="fichaje-block">
                    <form class="d-inline-block">
                        <span class="time-container">
                            <input type="time" id="start_29790" class="form-time" value="14:00">
                        </span>
                        <span>-</span>
                        <span class="time-container">
                            <input type="time" id="end_29790" class="form-time" required="" value="16:00">
                        </span>
                    </form>
                </td>
                <td>@include('dashboard.timetable.partials.detail.register-type')</td>
                <td class="text-center">
                    <button type="button" title="Añadir tiempo" class="btn btn-new btn-new-small">
                        <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                             height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                    </button>
                </td>
                <td class="aright text-center">2h 00'</td>
                <td class="col-total aright"></td>
                <td class="aright"></td>
            </tr>
            <tr class="vacational" style="background-color: #ff101024;font-weight: bold;">
                <td><span class="tag-dia-container">02/10/2020</span></td>
                <td class="fichaje-block">BAJA MÉDICA</td>
                <td></td>
                <td></td>
                <td class="aright text-center">-</td>
                <td class="col-total text-center">-</td>
                <td class="aright"></td>
            </tr>
            <tr class="vacational" style="background-color: #10ff2324;font-weight: bold;">
                <td><span class="tag-dia-container">03/10/2020</span></td>
                <td class="fichaje-block">VACACIONES</td>
                <td></td>
                <td></td>
                <td class="aright text-center">-</td>
                <td class="col-total text-center">-</td>
                <td class="aright"></td>
            </tr>
            <tr class="festivo" style="background-color: #ff740024;font-weight: bold;">
                <td><span class="tag-dia-container">04/10/2020</span></td>
                <td class="fichaje-block">DIA FESTIVO</td>
                <td></td>
                <td></td>
                <td class="aright text-center">-</td>
                <td class="col-total text-center">-</td>
                <td class="aright"></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
