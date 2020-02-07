@component('mail::message')
HI, I'M {{$name}}!

I have {{$info['businesses']}} with {{$info['employees']}} and running the business in {{$info['operating']}}

Message: {{$message}}


Email: {{$email}}

Contact: {{$contact}}

@endcomponent
