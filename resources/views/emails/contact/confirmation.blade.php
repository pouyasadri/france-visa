<!DOCTYPE html>
<html>

<head>
    <title>Contact Request Confirmation</title>
</head>

<body>
    <h1>{{ __('emails.contact.greeting', ['name' => $submission->name]) }}</h1>
    <p>{{ __('emails.contact.intro_user') }}</p>
    <p>{!! __('emails.contact.subject_info', ['subject' => $submission->subject]) !!}</p>

    <p><strong>{{ __('emails.contact.copy_message') }}</strong></p>
    <p>{{ $submission->message }}</p>

    <br>
    <p>{{ __('emails.regards') }}</p>
    <p>{{ __('emails.team') }}</p>
</body>

</html>