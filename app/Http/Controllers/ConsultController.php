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

            $userName = $request->input('user_name');
            $userEmail = $request->input("user_email");
            // $userPhoneNumber = $request->input('user_phone_number');
            $userService = $request->input("user_service");
            $userDetails = $request->input("user_details");
            $userPhoneNumber = "+33744140840";

            $yourPhoneNumber = "+33744140840";

            $this->sendWhatsAppMessage($client, $userPhoneNumber, "با سلام $userName \n درخواست $userService شما با موفقیت ثبت شد!\n تیم مشاورین ما به زودی با شماره واتساپ شما($userPhoneNumber)تماس برقرار خواهند کرد!\n استراس گروپ ");
            $this->sendWhatsAppMessage($client, $yourPhoneNumber, "درخواست $userService با موفقیت ثبت شد. \n نام متقضی: $userName \n ایمیل متقضی: $userEmail \n شماره تلفن متقضی: $userPhoneNumber \n  توضیحات : $userDetails");

            return redirect("/");
        } catch (\Exception $e) {
            return redirect("/consult");

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
