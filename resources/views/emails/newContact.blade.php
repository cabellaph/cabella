<h1>You have New Contact</h1>

@component('mail::panel')
    # Email: {{$contact->contactEmail}}
    # Full Name: {{$contact->contactName}}
    # Subject: {{$contact->contactSubject}}
    # Message: {{$contact->message}}

    {{Lang::get('Please contact him/her via Email.')}}

@endcomponent

<h2>CABELLA. All rights reserved.</h2>