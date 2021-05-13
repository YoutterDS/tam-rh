<form class="form" id="employerSendNotifications_form">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="d-flex mb-2">
                <div class="custom-control custom-switch pr-5">
                    <input type="checkbox" class="custom-control-input" id="send-notification" checked="">
                    <label class="custom-control-label" for="send-notification">@lang('main.notification')</label><br>
                </div>
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="send-email" >
                    <label class="custom-control-label" for="send-email">@lang('main.email')</label><br>
                </div>
            </div>

            <div class="form-group">
                <label for="subjectEmployerEmailInput">@lang('main.to')</label>
                <input type="text" class="form-control" id="subjectEmployerEmailInput" readonly value="test@tam-rh.online">
            </div>

            <div class="form-group">
                <label for="subjectEmployerSubjectInput">@lang('main.subject')</label>
                <input type="text" class="form-control" id="subjectEmployerSubjectInput" >
            </div>

            <div class="form-group">
                <div class="custom-file" lang="es">
                    <label class="custom-file-label" for="customFile" ></label>
                    <input type="file" class="custom-file-input" id="customFile" aria-describedby="fileHelp">
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="form-group">
                <label for="messageEmployerEmail">@lang('main.message')</label>
                <textarea class="form-control" id="messageEmployerEmail" ></textarea>
            </div>

            <div class="d-flex">
                <div class="form-group">
                    <button type="button" class="btn btn-primary btn-forms btn-with-icon  ">
                        <span>@lang('main.send')</span>
                        <img class="icon" src="{{ asset('img/icons/white/email.svg') }}" alt="">
                    </button>
                </div>
                <div class="form-group">
                    <a href="#" data-target="#employeer_form_{{ $loop->iteration }}" class="btn-close">
                        <img src="{{ asset('img/icons/white/arrow-down.svg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</form>
