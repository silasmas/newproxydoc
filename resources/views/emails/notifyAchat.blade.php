@component('mail::message')
# Bonjour {{ $user->name }}


@component('mail::panel')
@if ($type == 'success')
Votre achat des produits pharmaceutique a été fait avec succès.
Connectez-vous pour voir en detail
@else
Echéc d'achat des produit pharmaceutique.
{{ $type }}
@endif
@endcomponent

@component('mail::button', ['url' => config('app.url')])
Retour sur le site
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
