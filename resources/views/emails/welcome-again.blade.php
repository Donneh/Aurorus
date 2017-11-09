@component('mail::message')
# Introduction

The body of your message.

- one
- two
- trhee

@component('mail::button', ['url' => '127:0.0.1:8000/'])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
    Mooie quote hier!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
