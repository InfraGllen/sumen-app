@component('mail::message')
# ¡Atención {{$user->name}}! 👏👏

Tenemos que informarte que han **eliminado** el evento **{{$event->title}}** en Sumen 🗓️.

Como estas suscripto a una meta relacionado con el evento, nos parecio que teniamos que avisarte. 😮

Muchas gracias, <br>
{{ config('app.name') }} 😉
@endcomponent