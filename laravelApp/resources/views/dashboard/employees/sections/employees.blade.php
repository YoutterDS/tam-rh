@include('dashboard.employees.partials.employees.list-buttons', ['import' => false])

<div class="list-employees list-employees-grey" id="employersListEmployersPage">
    @foreach( range(0, 6) as $item)
        @include('dashboard.employees.partials.employees.list-item', ['section'=>'employeer', 'edit'=>'Y'])
    @endforeach

    <ul class="pagination justify-content-center mt-4">
        <li class="page-item"><a class="page-link" href="#"><<</a></li>
        <li class="page-item"><a class="page-link" href="#"><</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item noaction"><a class="page-link" href="#">...</a></li>
        <li class="page-item"><a class="page-link" href="#">23</a></li>
        <li class="page-item"><a class="page-link" href="#">24</a></li>
        <li class="page-item"><a class="page-link" href="#">></a></li>
        <li class="page-item"><a class="page-link" href="#">>></a></li>
    </ul>

</div>

@include('dashboard.employees.partials.employees.list-buttons', ['import' => true])

@section('modals-sections')
    @include('dashboard.employees.modals.delete-employeer')
    @include('dashboard.employees.modals.inactive-employeer')
@endsection

@section('js-sections')

@endsection
