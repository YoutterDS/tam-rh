<section id="offices-list-page" class="">
    <div class="row box-subforms" id="box-office-form">
        <div class="col-12 p-0">
            <div class="list-offices reverse">
                <div class="item-right">
                    <button type="button" id="officeFormBtn" class="btn btn-success btn-with-icon w-100"
                            data-create="@lang('offices.create--btn-text')"
                            data-edit="@lang('offices.edit--btn-text')"
                            onclick="window.subformOffice('open', 'create')">
                        <span>@lang('offices.create--btn-text')</span>
                        <img class="icon" src="{{ asset('img/icons/white/office.svg') }}" alt="">
                    </button>
                </div>
            </div>
        </div>
        <div class="col-12 box-subforms-form">
            @include('dashboard.settings.partials.offices.edit')
        </div>
    </div>
    <div class="row mt-1">
        <div class="col-12">
            <div class="list-offices">
                @include('dashboard.settings.partials.offices.list-item')
            </div>
        </div>
    </div>
</section>

@section('modals-sections')
    @include('dashboard.settings.partials.offices.modals.delete-office')
@endsection

@section('js')
    <script>
        $('.btn-see-office').click(function (e) {
            e.preventDefault();
            e.stopImmediatePropagation();

            var section = $(".card-section__primary");
            section.addClass("closed");
            section.on('transitionend webkitTransitionEnd', function (e) {
                var evt = e.originalEvent
                if (evt.propertyName === 'max-height') {
                    $('.card-section__secundary').removeClass("closed");
                    section.unbind('transitionend webkitTransitionEnd');
                }
            })
        })

        $('.btn-show-list').click(function (e) {
            e.preventDefault();
            e.stopImmediatePropagation();

            var section = $(".card-section__secundary");
            section.addClass("closed");
            section.on('transitionend webkitTransitionEnd', function (e) {
                var evt = e.originalEvent
                if (evt.propertyName === 'max-height') {
                    $('.card-section__primary').removeClass("closed");
                    section.unbind('transitionend webkitTransitionEnd');
                }
            })
        })

        $(".filter-by").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            var filterBy = $(this).attr('data-filter');
            var targetObj = $(this).attr('data-target');
            var targetli = $(this).attr('data-li');

            $(targetObj + ' ' + filterBy).filter(function () {
                $(this).parents(targetli).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    </script>
@endsection
