@component('mail::message')

    Mr/Mme : {{ $user['name'] }} Make a request to Visit The Apartment {{ $apartment['name'] }}

    INFORMATION OF REQUESTER

    Name : {{ $user['name'] }}
    Email : {{ $user['email'] }}
    Number : {{ $user['phone'] }}

    <img src="{{ asset('assets/img/apartments/6.jpg') }}" class="img-fluid"
         style="position:absolute; height:300px; width:auto;">

@endcomponent
