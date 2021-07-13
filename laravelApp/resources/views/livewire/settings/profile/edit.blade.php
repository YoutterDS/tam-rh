<div>

    <div class="progress axios" wire:loading >
        <div class="indeterminate"></div>
    </div>

    <form wire:submit.prevent="submit()"
          wire:change="formHasChanged"
          method="POST"
          class="form @unlessrole('admin') noactions @endunlessrole {{ env('SHOW_ANIMATION') }}">
        <section id="config-profile-page">
            @include('dashboard.settings.partials.profile.info-form')
            @include('dashboard.settings.partials.profile.contact-form')
            @include('dashboard.settings.partials.profile.lang-form')
            @hasrole('admin')
                @include('dashboard.settings.partials.profile.billing-form')
            @endhasrole

            @hasrole('admin')
            <div class="form-row">
                <div class="col-md-12">
                    <button type="submit"
                            class="btn btn-primary btn-forms"
                            @if( !$canBeSubmitted ) disabled @endif >
                        @lang('main.save')
                    </button>
                </div>
            </div>
            @endhasrole
        </section>
    </form>

    <script>
        document.addEventListener('livewire:load', function () {
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

            {{-- Petición para desencriptar datos sensibles --}}
            @this.on('decrypt-encrypt', (value) => {
                if( !@this.is_validated_password ) {
                    Swal.fire({
                        title: "@lang('company-profile.put-your-password')",
                        input: 'password',
                        showCancelButton: true,
                        cancelButtonText: "@lang('main.cancel')",
                        confirmButtonText: "@lang('company-profile.decrypt-data')",
                        // showLoaderOnConfirm: true,
                        preConfirm: (password) => {
                            if( password ) {
                                @this.validatePassword(password, value)
                                Swal.close()
                            } else {
                                Swal.showValidationMessage(
                                    `{{\Lang::get('validation.required', ['attribute'=>'contraseña'])}}`
                                )
                            }
                        }
                    });
                } else {
                    @this.validatePassword(null, value)
                }
            })

            {{-- Resultado para la petición de desencriptar datos sensibles --}}
            @this.on('validate-password', (validated, value) => {
                if( !validated ) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: "@lang('main.data-wrong')",
                        showConfirmButton: false,
                        timer: 2500
                    });
                }
                if( @this['decript_action_' + value] === 'hidde') {
                    countDown(value);
                } else {
                    clearInterval(window['countdown_'+value]);
                }
            })

            {{-- Cuenta atrás para la ocultación automática de datos sensibles (20 segundos) --}}
            function countDown(value) {
                var count = 19;
                window['countdown_'+value] = setInterval(function(){
                    document.getElementById('countdown_' + value).innerHTML = count + 's';
                    if( --count < 0 ) {
                        clearInterval();
                        count = 19;
                        @this.hiddeValues(value);
                        clearInterval(window['countdown_'+value]);
                    }
                }, 1000);
            }

            {{-- Se ha añadido/modificado una tarjeta de credito --}}
            @this.on('credit-card-updated', () => {
                let timerInterval
                Swal.fire({
                title: 'TPVV CaixaBank',
                html: 'simulando gestiones CaixaBank <b></b>ms.',
                timer: 2000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    timerInterval = setInterval(() => {
                    const content = Swal.getHtmlContainer()
                    if (content) {
                            const b = content.querySelector('b')
                        if (b) {
                            b.textContent = Swal.getTimerLeft()
                        }
                    }
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: "Simulación OK/KO entidad bancaria",
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                })
            })

            {{--
            @if( $isSaved === false && $canBeSubmitted === true )
            function exitWithoutSave(e) {
                if(!e) e = window.event;
                // e.cancelBubble is supported by IE - this will kill the bubbling process.
                e.cancelBubble = true;
                e.returnValue = '';

                //e.stopPropagation works in Firefox.
                if (e.stopPropagation) {
                    e.stopPropagation();
                    e.preventDefault();
                }
            }

            window.onbeforeunload=exitWithoutSave;
            @endif
            --}}
        })
    </script>
</div>

@push('scripts')
@endpush
