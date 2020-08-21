<h3 class="color-primary text-uppercase">{{$titulo}}</h3>
<p>{{$descripcion}}</p>
<div class="col-12 d-flex flex-wrap align-items-end justify-content-between ">
    <table class="table " id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info">
        <thead>
            <tr role="row">
                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" width="40" >&nbsp;</th>
                <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" >
                    Nombre</th>
                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" >
                    Fecha subida
                </th>
                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">
                    Responsable
                </th>
                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            <tr role="row" class="odd">
                <td class="align-center">
                    <i class="fas fa-file-pdf"></i>
                </td>
                <td class="sorting_1 align-middle" style="color: red;"><i class="fas fa-exclamation-triangle"></i> Normativa-COVID19.pdf</td>
                <td class="align-middle">20/07/2020</td>
                <td class="align-middle"><span class="badge badge-secondary">DIRECCIÓN</span></td>
                <td class="align-middle">
                    <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i> Ver</button>
                    <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-file-download"></i> Descargar</button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
            <tr role="row" class="odd">
                <td class="align-center">
                    <i class="fas fa-file-pdf"></i>
                </td>
                <td class="sorting_1 align-middle">Calendario-laboral-2020.pdf</td>
                <td class="align-middle">01/01/2020</td>
                <td class="align-middle"><span class="badge badge-secondary">RRHH</span></td>
                <td class="align-middle">
                    <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i> Ver</button>
                    <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-file-download"></i> Descargar</button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
            <tr role="row" class="even">
                <td class="align-center"><i class="fas fa-file-word"></i></td>
                <td class="sorting_1 align-middle">Normativa-interna-company.pdf</td>
                <td class="align-middle">20/01/2018</td>
                <td class="align-middle"><span class="badge badge-secondary">RRHH</span></td>
                <td class="align-middle">
                    <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-info-circle"></i> Ver</button>
                    <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-file-download"></i> Descargar</button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
