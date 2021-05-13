<!-- Delete Document List Modal-->
<div class="modal fade" id="DeleteDocumentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('documents.modal-delete--title')</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                @lang('documents.modal-delete--body')
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">@lang('main.cancel')</button>
                <a class="btn btn-primary" href="#">@lang('main.yes-delete')</a>
            </div>
        </div>
    </div>
</div>
