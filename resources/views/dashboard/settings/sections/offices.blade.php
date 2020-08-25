<section id="offices-list-page" class="card-section__primary">
    <div class="card-body p-2">
        <div class="row text-right">
            <div class="col-sm">
                    <button type="button" class="btn btn-success text-uppercase" data-toggle="modal" data-target="#modalOfficeCreate">
                        <i class="fas fa-fw fa-building"></i> Crear oficina
                    </button>
            </div>
        </div>
    </div>
    <div class="row card-deck mt-2">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="card office-card">
                        <div class="main-office">Oficina Principal</div>
                        <a href="{{ route('team.departamentos', ['locale'=>app()->getLocale()]) }}">
                            <div class="workers-office-count"><i class="fas fa-users" title="35 Empleados"></i>35</div>
                        </a>
                        <img class="card-img-top" src="https://xceed.me/blog/wp-content/uploads/2016/05/Barcelona-best-clubs-2019-at-xceed.png"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Barcelona</h5>
                            <p class="card-text"><i class="far fa-clock"></i> 09:00 - 18:00 h</p>
                            <div class="card-text">
                                <p><a href="https://www.google.com/maps/place/" target="_blank">
                                        <i class="fas fa-map" title="35 Empleados"></i>
                                        <span>Av. Torre Blanca, 57 - 08173 Sant Cugat del Vallès, Barcelona - Spain</span>
                                    </a></p>
                                <p><span><i class="fas fa-phone"></i> 93 656 98 77</span></p>
                                <p><a href="mailto:ofi-bcn@company.com" target="_blank">
                                        <i class="far fa-envelope"></i> ofi-bcn@company.com
                                    </a></p>
                            </div>
                        </div>
                        <div class="card-body text-right">
                            <button type="button" class="btn btn-primary btn-sm text-uppercase" data-toggle="modal" data-target="#modalOfficeDetail">
                                <i class="fas fa-edit"></i> Editar Oficina
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="card office-card">
                        <a href="{{ route('team.departamentos', ['locale'=>app()->getLocale()]) }}">
                            <div class="workers-office-count"><i class="fas fa-users" title="35 Empleados"></i>15</div>
                        </a>
                        <img class="card-img-top" src="https://img1.elperiodico.com/56/14/4f/girona-3-980x570.jpg"
                             alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase">Girona</h5>
                            <div class="card-text">
                                <p class="card-text"><i class="far fa-clock"></i> 09:00 - 18:00 h</p>
                                <p><a href="https://www.google.com/maps/place/" target="_blank">
                                        <i class="fas fa-map" title="35 Empleados"></i>
                                        <span>Carrer principal 10 - Girona - Spain</span>
                                    </a></p>
                                <p><span><i class="fas fa-phone"></i> 93 656 98 77</span></p>
                                <p><a href="mailto:ofi-girona@company.com" target="_blank">
                                        <i class="far fa-envelope"></i> ofi-girona@company.com
                                    </a></p>
                            </div>
                        </div>
                        <div class="card-body text-right">
                            <button type="button" class="btn btn-primary btn-sm text-uppercase" data-toggle="modal" data-target="#modalOfficeDetail">
                                <i class="fas fa-edit"></i> Crear Oficina
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@section('modals-sections')
    @include('dashboard.settings.sections.modals.office-create')
    @include('dashboard.settings.sections.modals.office-detail')
    @include('dashboard.settings.sections.modals.remove-office')

    {{-- Add employee to Office --}}
    <div class="modal fade" id="modalAddEmployeeToDepartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Añadir empleado/s</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                @include('dashboard.settings.sections.modals.employee')

            </div>
        </div>
    </div>

    {{-- Editing Department --}}
    <div class="modal fade" id="modalDepartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edición de Departamento</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                @include('dashboard.settings.sections.modals.department')


            </div>
        </div>
    </div>

    {{-- Removing Department --}}
    <div class="modal fade" id="modalDeleteDepartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminación de Departamento</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        ¿Seguro que desea eliminar este departamento?<br/>
                        <b class="text-danger">Esta operación no podrá desacerse.</b>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="#">Eliminar</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Removing Employee from Department --}}
    <div class="modal fade" id="modalRemoveEmployeeFromDepartment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Desvinculación empleado</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        ¿Seguro que desea desvincular este empleado del departamento?<br/>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="#">Desvincular</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Removing Holiday --}}
    <div class="modal fade" id="modalDeleteHoliday" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminación de Días festivos</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        ¿Seguro que desea eliminar este festivo?<br/>
                        <b class="text-danger">Esta operación no podrá desacerse.</b>
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-danger" href="#">Eliminar</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Editing Holiday --}}
    <div class="modal fade" id="modalAddHoliday" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edición de días festivos</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                @include('dashboard.settings.sections.modals.add-holiday')

            </div>
        </div>
    </div>

    {{-- Import Holiday --}}
    <div class="modal fade" id="modalImportHoliday" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Importación de días festivos</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                @include('dashboard.settings.sections.modals.import-holiday')

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        /*
        ID de la clau   : 58e79yerj6oovizy9dqugmokf
        Clau secreta    : 1lbf874nz4vi59ualo5lvqmjk2sqj0qb5mzb6v5ssotscikl47

        $.ajax({
            url: "https://www.googleapis.com/calendar/v3/calendars/es.spain%23holiday%40group.v.calendar.google.com/events",
            type: "GET",
            data: {
                "key"       : "AIzaSyCsS5Jcwob3Mc4nPQQhgXSDvKlYpOOMZHY",
                "timeMin"   : "{{ \Carbon\Carbon::parse('2019-01-01')->format('Y-m-d\TH:i:s.u\Z') }}",
            "timeMax"   : "{{ \Carbon\Carbon::parse('2019-12-31')->format('Y-m-d\TH:i:s.u\Z') }}"
        }
    }).done(function(data) {
        console.log("Retrieved " + data.items.length + " records from the dataset!");
        console.log(data.items);
    });
 */
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
            /*
                var whitelist = "p"; // for more tags use the multiple selector, e.g. "p, img"
                $(targetObj + ' ' + filterBy + " *").not(whitelist).each(function() {
                    var content = $(this).contents();
                    $(this).replaceWith(content);
                });
            */
            $(targetObj + ' ' + filterBy).filter(function () {
                // var rgxp = new RegExp(value, 'ig');
                // var repl = '<b>' + value + '</b>';

                $(this).parents(targetli).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                // $(this).html($(this).html().replace(value, repl));

            });
        });

        $('#exampleModal').on('show.bs.modal', function (event) {
            /*
              var button = $(event.relatedTarget) // Button that triggered the modal
              var recipient = button.data('whatever') // Extract info from data-* attributes
              var modal = $(this)
              modal.find('.modal-title').text('New message to ' + recipient)
              modal.find('.modal-body input').val(recipient)
             */
        })
    </script>
@endsection
