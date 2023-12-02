<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class ConsultController extends Controller
{
    protected Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function submit(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validate([
            'user_name' => 'required|string',
            'user_email' => 'required|email',
            'user_service' => 'required|string',
            'user_details' => 'required|string',
        ]);
        try {
            $client = new Client(env("TWILIO_SID"), env("TWILIO_AUTH_TOKEN"));

            $userName = $validatedData['user_name'];
            $userEmail = $validatedData['user_email'];
            $userService = $validatedData['user_service'];
            $userDetails = $validatedData['user_details'];

            $userPhoneNumber = "+33744140840";

            $yourPhoneNumber = "+33744140840";

            $this->sendWhatsAppMessage($client, $userPhoneNumber, "با سلام $userName \n درخواست $userService شما با موفقیت ثبت شد!\n تیم مشاورین ما به زودی با شماره واتساپ شما($userPhoneNumber)تماس برقرار خواهند کرد!\n استراس گروپ ");
            $this->sendWhatsAppMessage($client, $yourPhoneNumber, "درخواست $userService با موفقیت ثبت شد. \n نام متقضی: $userName \n ایمیل متقضی: $userEmail \n شماره تلفن متقضی: $userPhoneNumber \n  توضیحات : $userDetails");

            return redirect(route('home'));
        } catch (\Exception $e) {
            return redirect(route('consult'));

        }
    }

    private function sendWhatsAppMessage($to, $message): void
    {
        $from = "whatsapp:" . env("TWILIO_PHONE_NUMBER");
        $this->client->messages->create("whatsapp:$to", [
            'from' => $from,
            'body' => $message,
        ]);
    }
}
