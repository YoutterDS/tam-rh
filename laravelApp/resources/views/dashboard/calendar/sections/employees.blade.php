<div class="row">

    @include('dashboard.calendar.partials.filters', ['section'=>'employees'])

    <div class="col-12 col-sm-5">
        <div class="box-subforms" id="box-employeerRequestHolidays-form">
            <div class="col-12 p-0">
                <div class="item-right">
                    <button type="button" id="employeerRequestHolidaysFormBtn" class="btn btn-success btn-with-icon ml-auto w-auto"
                            onclick="window.subformHolidays('open', 'create')" style="">
                        <span>@lang('calendar.request-festivity')</span>
                        <img class="icon" src="{{ asset('img/icons/white/add-festivity.svg') }}" alt="">
                    </button>
                </div>
            </div>
            <div class="col-12 box-subforms-form">
                @include('dashboard.calendar.partials.employees.request-holidays')
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="list-employees list-employees-grey" id="employersListEmployersPage">
            @foreach( range(0, 6) as $item)
                @include('dashboard.calendar.partials.employees.list-item', ['section'=>'employeer', 'index'=>$loop->index])
            @endforeach
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-6">
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
    <div class="col-6 col-md-3 mt-4">
        <a class="btn btn-success btn-sm btn-with-icon"
           data-toggle="modal" data-target="#AcceptRequestEmployeerModal">
            <span class="pr-2">@lang('calendar.validate-all')</span>
            <img src="{{ asset('img/icons/white/ok.svg') }}" alt="New document" class="icon">
        </a>
    </div>
    <div class="col-6 col-md-3 mt-4">
        <a class="btn btn-danger btn-sm btn-with-icon"
           data-toggle="modal" data-target="#RefuseRequestEmployeerModal">
            <span class="pr-2">@lang('calendar.reject-all')</span>
            <img src="{{ asset('img/icons/white/alert.svg') }}" alt="New document" class="icon">
        </a>
    </div>
</div>

@section('modals-sections')
    @include('dashboard.calendar.modals.employees.request-accepted')
    @include('dashboard.calendar.modals.employees.request-refused')
@endsection
