@include('dashboard.timetable.partials.modals.filter-employers-list')
<div class="filter-button-section">
    @include('dashboard.timetable.partials.index-buttons')
</div>
@include('dashboard.timetable.partials.modals.time-table-ok')
@include('dashboard.timetable.partials.modals.time-table-pending')
<div class="card-body p-2">
    <div class="list-group employers-list">
        <div class="list-group-item list-group-item-action employers-detail" data-dpt="DIRECTION">
            @include('dashboard.partials.employers.info-section', ['name' => 'Ramon Ribera', 'job' => 'Manager','dptm' => 'DIRECTION'])
            <div class="actions-section">
                <div class="employer-action">
                    <p>papap</p>
                </div>
            </div>
        </div>
        <div class="list-group-item list-group-item-action employers-detail" data-dpt="IT">
            @include('dashboard.partials.employers.info-section', ['name' => 'Ramon Ribera', 'job' => 'IT Manager','dptm' => 'IT'])
            <div class="actions-section">
                <div class="employer-action">
                   <p>papap</p>
                </div>
            </div>
        </div>
        <div class="list-group-item list-group-item-action employers-detail" data-dpt="MARKETING">
            @include('dashboard.partials.employers.info-section', ['name' => 'Ruben Centelles', 'job' => 'Social Manager','dptm' => 'Marketing'])
            <div class="actions-section">
                <div class="employer-action">
                    <p>papap</p>
                </div>
            </div>
        </div>
        <div class="list-group-item list-group-item-action employers-detail" data-dpt="IT">
            @include('dashboard.partials.employers.info-section', ['name' => 'Pau Garcia', 'job' => 'Web Developer','dptm' => 'IT'])
            <div class="actions-section">
                <div class="employer-action">
                    <p>papap</p>
                </div>
            </div>
        </div>
        <div class="list-group-item list-group-item-action employers-detail disabled" data-dpt="RRHH">
            @include('dashboard.partials.employers.info-section', ['name' => 'ROCIO Contrata', 'job' => 'IT Talent Acquisition','dptm' => 'RRHH'])
            <div class="actions-section">
                <div class="employer-action">
                    <p>papap</p>
                </div>
            </div>
        </div>
        <div class="list-group-item list-group-item-action employers-detail" data-dpt="RRHH">
            @include('dashboard.partials.employers.info-section', ['name' => 'Manuel Garcia', 'job' => 'RRHH Manager','dptm' => 'RRHH'])
            <div class="actions-section">
                <div class="employer-action">
                    <p>papap</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="filter-button-section">
    @include('dashboard.timetable.partials.index-buttons')
</div>
