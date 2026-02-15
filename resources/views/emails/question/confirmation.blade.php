<!DOCTYPE html>
<html>

<head>
    <title>Question Received</title>
</head>

<body>
    <h1>{{ __('emails.question.greeting', ['name' => $submission->name]) }}</h1>
    <p>{!! __('emails.question.intro_user', ['name' => $submission->page_name]) !!}</p>
    <p>{{ __('emails.question.success_info') }}</p>

    <p><strong>{{ __('emails.question.copy_message') }}</strong></p>
    <p>{{ $submission->message }}</p>

    <br>
    <p>{{ __('emails.regards') }}</p>
    <p>{{ __('emails.team') }}</p>
</body>

</html>