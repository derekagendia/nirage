@component('mail::message')

    Mr/Mme : {{ $user['name'] }} requested a visit for  {{ $apartment['name'] }} apartments

    CLIENT'S INFORMATION

    Name : {{ $user['name'] }}
    Email : {{ $user['email'] }}
    Phone : {{ $user['phone'] }}

    MESSAGE

    {{ $user['content'] }}


@endcomponent
