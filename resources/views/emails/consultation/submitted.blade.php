<!DOCTYPE html>
<html>

<head>
    <title>{{ __('emails.consultation.title') }}</title>
</head>

<body>
    <h1>{{ __('emails.consultation.title') }}</h1>
    <p>{{ __('emails.consultation.intro_admin') }}</p>

    <p><strong>{{ __('emails.labels.name') }}:</strong> {{ $data['user_name'] }}</p>
    <p><strong>{{ __('emails.labels.email') }}:</strong> {{ $data['user_email'] }}</p>
    <p><strong>{{ __('emails.labels.phone') }}:</strong> {{ $data['user_phone_number'] }}</p>
    <p><strong>{{ __('emails.labels.service') }}:</strong> {{ $data['user_service'] }}</p>
    <p><strong>{{ __('emails.labels.details') }}:</strong></p>
    <p>{{ $data['user_details'] }}</p>
</body>

</html>