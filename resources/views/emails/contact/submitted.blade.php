<!DOCTYPE html>
<html>

<head>
    <title>New Contact Form Submission</title>
</head>

<body>
    <h1>{{ __('emails.contact.title') }}</h1>
    <p>{{ __('emails.contact.intro_admin') }}</p>

    <p><strong>{{ __('emails.labels.name') }}:</strong> {{ $submission->name }}</p>
    <p><strong>{{ __('emails.labels.email') }}:</strong> {{ $submission->email }}</p>
    <p><strong>{{ __('emails.labels.phone') }}:</strong> {{ $submission->phone_number }}</p>
    <p><strong>{{ __('emails.labels.subject') }}:</strong> {{ $submission->subject }}</p>
    <p><strong>{{ __('emails.labels.message') }}:</strong></p>
    <p>{{ $submission->message }}</p>
</body>

</html>