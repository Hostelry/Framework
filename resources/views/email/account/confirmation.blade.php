@component('mail::message')
Hi {{$owner->first_name}}!

Please enter this confirmation code in the window where you started creating your account:

@component('mail::panel')
{{$owner->activation_code}}
@endcomponent

If you didn't create an account in Hostelry, please ignore this message.

@endcomponent
