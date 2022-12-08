@component('mail::message')

    Full Name:  {{ $expert_full_name ?? '' }} <br>
    Company Name:  {{ $expert_company_name ?? '' }} <br>
    Email:  {{ $expert_email ?? '' }} <br>
    Phone:  {{ $expert_phone ?? '' }} <br>
    Package:  {{ $expert_package ?? '' }} <br>
    Comment: {{ $expert_comment ?? '' }} <br>

    Thanks,
    {{ config('app.name') }}

@endcomponent
