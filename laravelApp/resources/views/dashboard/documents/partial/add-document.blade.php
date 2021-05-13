<form class="form form-green" id="addDocument_form__{{ $id }}" name="addDocument_form__{{ $id }}">
    <div class="form-row">

        <div class="col-12">
            <div class="col form-group">
                <label for="name">@lang('documents.name')</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="col form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file" name="file">
                    <label class="custom-file-label" for="file">@lang('documents.select-document')</label>
                </div>
            </div>
        </div>


        <input type="hidden" id="id" name="id" value="{{ $id }}">
    </div>

    <div class="form-row justify-content-md-end">
        <div class="col col-sm-6">
            <div class="form-group mt-4">
                <button class="btn btn-primary btn-forms">
                    @lang('main.save')
                </button>
            </div>
        </div>
        <div class="col col-sm-4">
            <a class="btn-close" href="javascript:subformAddDocument('close', '#documents_form_{{ $id }}')">
                <img src="{{ asset('img/icons/white/arrow-down.svg') }}" alt="">
            </a>
        </div>
    </div>
</form>
