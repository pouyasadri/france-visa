<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ConsultController extends Controller
{
    public function submit(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validate([
            'user_name' => 'required|string',
            'user_email' => 'required|email',
            'user_service' => 'required|string',
            'user_phone_number' => "required|string",
            'user_details' => 'required|string',
        ]);

        try {
            $userName = $validatedData['user_name'];
            $userEmail = $validatedData['user_email'];
            $userService = $validatedData['user_service'];
            $userDetails = $validatedData['user_details'];
            $userPhoneNumber = $validatedData['user_phone_number'];

            // Template for User Confirmation
            $this->sendEmailJS($userEmail, [
                'to_name' => $userName,
                'user_service' => $userService,
                'user_phone_number' => $userPhoneNumber,
                'user_details' => $userDetails,
                'to_email' => $userEmail,
            ], env('EMAILJS_TEMPLATE_ID_USER'));

            // Template for Internal Notification
            $yourEmail = "info@applyvipconseil.com";
            $this->sendEmailJS($yourEmail, [
                'to_name' => $userName,
                'user_service' => $userService,
                'user_phone_number' => $userPhoneNumber,
                'user_details' => $userDetails,
                'to_email' => $yourEmail,
            ], env('EMAILJS_TEMPLATE_ID_INTERNAL'));

            return redirect("/")->with('success', 'Your request has been submitted successfully!');
        } catch (\Exception $e) {
            // Log the error message
            Log::error("Error in submitting consultation request: " . $e->getMessage());
            return redirect("/consult")->with('error', 'There was an error processing your request.');
        }
    }

    private function sendEmailJS($toEmail, $templateParams, $templateId): void
{
    $url = 'https://api.emailjs.com/api/v1.0/email/send';

    // Create the data payload
    $data = [
        'service_id' => env('EMAILJS_SERVICE_ID'),
        'template_id' => $templateId,
        'user_id' => env('EMAILJS_USER_ID'),
        'accessToken' => env('EMAILJS_PRIVATE_KEY'),
        'template_params' => $templateParams, // Keep this as an associative array
    ];

    // Convert the data to a JSON string
    $jsonData = json_encode($data);

    // Set up the HTTP options with JSON payload
    $options = [
        'http' => [
            'header'  => "Content-Type: application/json\r\n",
            'method'  => 'POST',
            'content' => $jsonData,
        ],
    ];

    $responseBody = null;

    try {
        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        if ($result === FALSE) {
            throw new \Exception('HTTP request failed.');
        }

        // Capture the response body if the request is successful
        $responseBody = $result;
        Log::info("EmailJS Response: " . $responseBody);

    } catch (\Exception $e) {
        Log::error("EmailJS API error: " . $e->getMessage());
        Log::error("Response Body: " . ($responseBody ?? 'No response body'));
        Log::error("Request Data: " . $jsonData);
        throw new \Exception('Error sending email via EmailJS');
    }
}


}
