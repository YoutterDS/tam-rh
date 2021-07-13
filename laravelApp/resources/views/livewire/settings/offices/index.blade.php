<div>

    <div class="progress axios" wire:loading >
        <div class="indeterminate"></div>
    </div>

    <section id="offices-list-page" class="">
        <div class="row box-subforms @if($edit) active {{ env('SHOW_ANIMATION') }} @endif  {{ $action }}" id="box-office-form">
            <div class="col-12 p-0">
                <div class="list-offices reverse">
                    <div class="item-right">
                        <button type="button" id="officeFormBtn" class="btn btn-success btn-with-icon w-100"
                                {{--
                                    data-create="@lang('offices.create--btn-text')"
                                    data-edit="@lang('offices.edit--btn-text')"
                                    onclick="window.subformOffice('open', 'create')"
                                --}}
                                wire:click="showForm(null,'create')"
                                >
                            <span>
                                @if( $action === 'edit' )
                                    @lang('offices.edit--btn-text')
                                @else
                                    @lang('offices.create--btn-text')
                                @endif
                            </span>

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
                    @foreach ( $offices as $office )
                        @include('dashboard.settings.partials.offices.list-item')
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('livewire:load', function () {

            {{-- Realiza scroll al top de la página --}}
            @this.on('scroll-to-top', (office) => {
                $('html, body').stop().animate({ scrollTop: 0}, 100);
                $('#country_id.selectpicker').selectpicker('val', office['country_id']);
            })

            {{-- Datos actualizados correctamente --}}
            @this.on('successful', () => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: "@lang('main.data-saved-successfully')",
                    showConfirmButton: false,
                    timer: 1500
                });
            })

            {{-- No se ha actualizado nada en el formulario, por lo tanto, no se realiza la acción de guardar datos y se avisa al usuario --}}
            @this.on('nothing-updated', () => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'warning',
                    title: "@lang('main.nothing-was-changed')",
                    showConfirmButton: false,
                    timer: 2500,
                    willClose: () => {
                        @this.canBeSubmitted = false;
                    }
                });
            })

            {{-- El usuario no tiene permisos para modificar datos --}}
            @this.on('user-cannot-edit', () => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: "@lang('main.without-permissions-to-edit')",
                    showConfirmButton: false,
                    timer: 2500,
                    willClose: () => {
                        @this.canBeSubmitted = false;
                    }
                });
            })

            {{-- Muestra modal confirmación para eliminar una oficina --}}
            @this.on('confirm-delete', (id) => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: "@lang('offices.modal-delete-text')",
                    html: "<p class='text-danger'><u>@lang('main.this-action-cannot-undone')</u></p>",
                    showConfirmButton: true,
                    confirmButtonText: "@lang('main.yes-delete')",
                    showCancelButton: true,
                    cancelButtonText: "@lang('main.cancel')",
                }).then((result) => {
                    if (result.isConfirmed) {
                        @this.delete(id);
                    };
                })
            })

            {{-- Muestra modal confirmación de eliminación de una oficina --}}
            @this.on('ok-deleted', () => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: "@lang('main.data-deleted-successfully')",
                    showConfirmButton: false,
                    timer: 1500
                });
            })

            {{-- El usuario no tiene permisos para modificar datos --}}
            @this.on('error-on-delete', () => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: "@lang('main.ups')",
                    html: "@lang('main.something-is-wrong')",
                    showConfirmButton: false,
                    timer: 2500,
                    willClose: () => {
                        @this.canBeSubmitted = false;
                    }
                });
            })

            {{-- Se ha realizado un upload de la imagen de la oficina --}}
            @this.on('headquarters-warning', (officeName) => {
                Swal.fire({
                    position: 'center',
                    icon: 'warning',
                    title: "¡Sólo puede haber una oficina principal!",
                    html: `<p class='text-danger'>La oficina "<b>${officeName}</b>" está asignada actualmente como la principal. Si guarda los cambios, dejará de serlo.</p>`,
                    showConfirmButton: true,
                    confirmButtonText: "¡Lo entiendo!",
                    showCancelButton: false,
                });
            })

            // keep alive Livewire session!
            setInterval(function(){ window.livewire.emit('alive'); }, 1800);

        });
    </script>
</div>
