@component('mail::message')


    Website: {{$website_name}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
