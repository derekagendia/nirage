@component('mail::message')

    Mr/Mme : {{ $data['name'] }} requested a simple visit

    CLIENT'S INFORMATION

    Name : {{ $data['name'] }}
    Email : {{ $data['email'] }}
    Phone : {{ $data['phone'] }}

    MESSAGE

    {{ $data['content'] }}

@endcomponent
