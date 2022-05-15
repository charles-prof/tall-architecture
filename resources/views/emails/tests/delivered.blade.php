@component('mail::message')
# Basic Email Test

If you're seeing this message in the inbox, the delivery is successful.

# User Model Injection

hello {{ $user->name }},

you are cordially invited you to try our application and get involved.

@component('mail::button', ['url' => $url])
Back to App
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
