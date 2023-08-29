<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class ConsultController extends Controller
{
    public function submit(Request $request)
    {
        try {
            $client = new Client(env("TWILIO_SID"), env("TWILIO_AUTH_TOKEN"));
            // $userPhoneNumber = $request->input('user_phone_number');
            $userPhoneNumber = "+33744140840";

            $yourPhoneNumber = "+33744140840";

            $this->sendWhatsAppMessage($client, $userPhoneNumber, "Thank you for submitting a consultation request. We will get in touch with you soon.");
            $this->sendWhatsAppMessage($client, $yourPhoneNumber, "New consultation request from: $userPhoneNumber");

            return response()->json(['message' => 'Consultation request submitted successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to submit consultation request'], 500);
        }
    }

    private function sendWhatsAppMessage(Client $client, $to, $message)
    {
        $from = "whatsapp:" . env("TWILIO_PHONE_NUMBER");
        $client->messages->create("whatsapp:$to", [
            'from' => $from,
            'body' => $message,
        ]);
    }
}
