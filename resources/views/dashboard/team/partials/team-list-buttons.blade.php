<div class="filter-button-section p-2 text-right">
    @if ($import)
        @include('dashboard.team.modals.import-employers')
        @include('dashboard.team.modals.export-employers')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#importEmployersModal">
            <i class="fas fa-file-import"></i> <span>Importar empleados</span>
        </button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exportEmployersModal">
            <i class="fas fa-file-export"></i> <span>Exportar empleados</span>
        </button>
    @else
        <a href="{{ route('team.new', ['locale'=>app()->getLocale()]) }}" class="text-decoration-none" target="_blank">
            <button type="button" class="btn btn-success text-uppercase"><i class="fas fa-user-plus"></i> Alta nuevo empleado</button>
        </a>
    @endif
</div>
