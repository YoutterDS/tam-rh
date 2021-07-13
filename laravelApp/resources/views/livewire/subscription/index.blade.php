<div>

    <div class="progress axios" wire:loading >
        <div class="indeterminate"></div>
    </div>
{{--
    <div class="logo-tamrh--bg" wire:loading.flex>
        <div class="logo-tamrh animate__animated animate__rotateIn">
            <div class="logo-tamrh--minuteand">
                <img src="{{ asset('img/logo-tamrh--minuteand.svg') }}" alt="minuteand" >
            </div>
        </div>
    </div>
--}}
    <div class="box-subscriptions">
        @foreach( app('rinvex.subscriptions.plan')->all() as $plan )
            @if( !$plan->isFree() )
                @include('dashboard.subscription.partials.plan-base', ['type'=>null, 'extraclass'=>env('SHOW_ANIMATION')])
            @endif
        @endforeach
    </div>

    <script>
        document.addEventListener('livewire:load', function () {
            {{-- Datos actualizados correctamente --}}
            @this.on('successful', () => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: "@lang('subscription.data-saved-successfully')",
                    showConfirmButton: false,
                    timer: 3500
                });
            });

            {{-- El usuario no tiene permisos para modificar datos --}}
            @this.on('user-cannot-edit', () => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: "@lang('main.without-permissions-to-edit')",
                    showConfirmButton: false,
                    timer: 2500
                });
            });

            {{-- Error al actualizar el plan --}}
            @this.on('error', (error) => {
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: "@lang('subscription.update-ko')",
                    showConfirmButton: false,
                    timer: 2500
                });
            });
        })
    </script>
</div>
