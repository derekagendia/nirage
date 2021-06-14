@component('mail::message')

    Mr/Mme : {{ $user['name'] }} requested a visit for  {{ $apartment['name'] }} apartments

    CLIENT'S INFORMATION

    Name : {{ $user['name'] }}
    Email : {{ $user['email'] }}
    Phone : {{ $user['phone'] }}

    MESSAGE

    {{ $user['content'] }}

    <img src="{{ asset('assets/img/apartments/6.jpg') }}" class="img-fluid" style="position:absolute; height:300px; width:auto;">

@endcomponent
