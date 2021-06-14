@component('mail::message')
# Estimado {{ $user->full_name }},

@switch($count)
@case(1)
Hemos visto que no has terminado el registro, ¿has tenido algún problema?
@break

@case(2)
¿Continuar sin decidirte? Vamos, animate!
@break

@default
¡Vaya!, vemos que aún no has finalizado el registro...
Lamentablemente, si no lo finalizas hoy, eliminaremos todos tus datos del proceso.
Igualmente, no te preocupes, ¡siempre puedes volver a empezar el proceso!
@endswitch

@component('mail::button', ['url' => $url])
¡Haz click aquí para finalizar el registro!
@endcomponent

Gracias!<br>
el equipo de {{ config('app.name') }}
@endcomponent
