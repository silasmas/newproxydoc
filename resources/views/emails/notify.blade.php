@component('mail::message')
# Bonjour {{ $user->name }}


@component('mail::panel')
@if ($type == 'success')
Félicitation, le paiement de votre abonnement a été fait avec succès.
Connectez-vous pour en profiter 
@else
Echéc de paiement pour l'abonnement.
{{ $type }}
@endif
@endcomponent

@component('mail::button', ['url' => config('app.url')])
Retour sur le site
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
