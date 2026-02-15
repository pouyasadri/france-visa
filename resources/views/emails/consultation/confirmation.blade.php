<!DOCTYPE html>
<html>

<head>
    <title>Consultation Request Confirmation</title>
</head>

<body>
    <h1>{{ __('emails.consultation.greeting', ['name' => $data['user_name']]) }}</h1>
    <p>{{ __('emails.consultation.intro_user') }}</p>
    <p>{!! __('emails.consultation.service_info', ['service' => $data['user_service']]) !!}</p>

    <p><strong>{{ __('emails.consultation.copy_details') }}</strong></p>
    <p><strong>{{ __('emails.labels.phone') }}:</strong> {{ $data['user_phone_number'] }}</p>
    <p><strong>{{ __('emails.labels.details') }}:</strong></p>
    <p>{{ $data['user_details'] }}</p>

    <br>
    <p>{{ __('emails.regards') }}</p>
    <p>{{ __('emails.team') }}</p>
</body>

</html>