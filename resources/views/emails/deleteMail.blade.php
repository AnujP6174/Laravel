@component('mail::message')
# Author Deleted

The {{$mailData['auth_fname']}} author was deleted!!

Thanks,<br>
{{ config('app.name') }}
@endcomponent
