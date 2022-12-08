@component('mail::message')

    Hello <b>{{ ucfirst($full_name) }}</b>,

    Full Name: {{ucfirst($full_name)}}

    Email Address: {{ucfirst($email)}}

    Phone Number: {{ucfirst($phone)}}

    Thanks,
    {{ config('app.name') }}

@endcomponent
