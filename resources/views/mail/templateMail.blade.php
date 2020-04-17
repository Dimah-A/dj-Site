

<h1>Bonjour, {{$name}}</h1><br>

<span>Merci pour ton inscription avec l'adresse email suivante :</span>
<span> {{$email}}</span><br>

<span>Avec le mot de passe : {{$password}}</span><br>

<span>Merci pour ton inscription</span>
<span>C'est sympa de t'etre inscrit, hate de te revoir ! </span>



@component('mail::message')

bonjour {{$name}} 

Votre mail [{{$email}}] a bien été envoyé ! contacter moi sur facbook
<span>Avec le mot de passe : {{$password}}</span><br>

@component('mail::button', ['url' => 'https://www.facebook.com/profile.php?id=100020431292910&__tn__=%2CdC-R-R&eid=ARDbzdR4x54_BAgPBfxWeWSDhcy-gNfN-2ab6zliBaTizBrl5UqQru3XvIG4WL3yOpsGH6ioF0O8IjxM&hc_ref=ARQbv05z1dH01JmUSDPKiKnJ6WnLUDJscpeuhTSXTaoQ-i0-5AIUUtc8uq2ZidjZUMg&fref=nf'])

Facebook

@endcomponent

Copyright Asma sisi, <br>
{{config('app.name')}}

@endcomponent