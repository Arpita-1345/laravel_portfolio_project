@component('mail::message')

<h3>New Message from {{$contact_form_data['email']}}</h3>

<p>Name: {{$contact_form_data['name']}}</p>

<p>project: {{$contact_form_data['project']}}</p>

<p>Message: {{$contact_form_data['message']}}</p>

@endcomponent
 