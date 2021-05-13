<form class="form @if($action==='create') action @endif">
    <div class="form-row justify-content-md-end">
        <div class="col-12 col-sm-4">
            <div class="form-group">
                <label for="name__{{ $action }}">@lang('main.department')</label>
                <input type="text" class="form-control" id="name__{{ $action }}" name="name" aria-describedby="name__{{ $action }}">
            </div>

            <div class="form-group">
                <label for="active__{{ $action }}">@lang('main.status')</label>
                <select class="form-control selectpicker"
                        id="active__{{ $action }}"
                        name="active"
                        data-width="100%"
                        data-size="8"
                        data-dropup-auto="false"
                        data-live-search="false"
                        data-live-search-placeholder="@lang('main.filter-by-name')"
                        data-live-search-style='startsWith'
                        data-container="body"
                        title="@lang('main.select')">
                    <option value="Y">@lang('main.active')</option>
                    <option value="N" >@lang('main.inactive')</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email__{{ $action }}">@lang('main.email')</label>
                <input type="email" class="form-control" id="email__{{ $action }}" name="email" aria-describedby="email__{{ $action }}">
            </div>
        </div>

        <div class="col-12 col-sm-6">
            <div class="form-group">
                <label for="color__{{ $action }}" class="p-0">@lang('main.color')</label>
                <input type="color" class="form-control" id="color__{{ $action }}" name="color"  list="colorList">
                <datalist id="colorList">
                    <option value="#333333"></option>
                    <option value="#656565"></option>
                    <option value="#CCC559"></option>
                    <option value="#3A6591"></option>
                    <option value="#C46262"></option>
                </datalist>
            </div>
        </div>
    </div>

    <div class="form-row justify-content-md-end">
        <div class="col-6 col-sm-4">
            <div class="form-group mt-4">
                <button class="btn btn-primary btn-forms">
                    @if($action==='create')
                        @lang('main.save')
                    @else
                        @lang('main.update')
                    @endif
                </button>
            </div>
        </div>
        <div class="col-6 col-sm-6">
            <a class="btn-close"
                @if( @$loop )
                    href="#"
                    data-target="#departments_form_{{ $loop->iteration }}"
                    data-section="edit"
                    data-action="close"
                @endif
                    href="javascript:subformEditDepartment('close')"
            >
                <img src="{{ asset('img/icons/white/arrow-down.svg') }}" alt="">
            </a>
        </div>
    </div>
</form>
