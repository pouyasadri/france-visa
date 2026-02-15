<!DOCTYPE html>
<html>

<head>
    <title>New Question Submission</title>
</head>

<body>
    <h1>{{ __('emails.question.title') }}</h1>
    <p>{{ __('emails.question.intro_admin') }}</p>

    <p><strong>{{ __('emails.labels.name') }}:</strong> {{ $submission->name }}</p>
    <p><strong>{{ __('emails.labels.email') }}:</strong> {{ $submission->email }}</p>
    <p><strong>{{ __('emails.labels.phone') }}:</strong> {{ $submission->phone_number }}</p>
    <p><strong>{{ __('emails.labels.subject') }}:</strong> {{ $submission->subject }}</p>
    <p><strong>{{ __('emails.labels.page_type') }}:</strong> {{ $submission->page_type }}</p>
    <p><strong>{{ __('emails.labels.page_name') }}:</strong> {{ $submission->page_name }}</p>
    <p><strong>{{ __('emails.labels.message') }}:</strong></p>
    <p>{{ $submission->message }}</p>
</body>

</html>