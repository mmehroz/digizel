@component('mail::message')

    @if(count($package_name)>0)
        Website: {{  implode(", ",$package_name) }}
    @endif

    Thanks,
    {{ config('app.name') }}

@endcomponent
