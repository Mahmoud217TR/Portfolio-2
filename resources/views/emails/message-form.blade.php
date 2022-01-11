@component('mail::message')
# New Email from Protifolio

<strong>Fullname:</strong> {{ $data['fullname'] }},<br>
<strong>Subject:</strong> {{ $data['subject'] }},<br>
<strong>Email:</strong> {{ $data['email'] }},<br>
<strong>Message:</strong><br>{{ $data['message'] }}

<i><strong>MahmoudTR</strong> Portifolio message system.</i>
@endcomponent
