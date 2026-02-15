<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use App\Http\Requests\StoreContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use App\Mail\ContactFormConfirmation;

class ContactController extends Controller
{
    public function submit(StoreContactRequest $request): \Illuminate\Http\RedirectResponse
    {
        $validatedData = $request->validated();

        try {
            $name = $validatedData['name'];
            $email = $validatedData['email'];
            $phoneNumber = $validatedData['phone_number'];
            $subject = $validatedData['msg_subject'];
            $message = $validatedData['message'];

            // Save to database
            $submission = ContactSubmission::create([
                'name' => $name,
                'email' => $email,
                'phone_number' => $phoneNumber,
                'subject' => $subject,
                'message' => $message,
                'locale' => app()->getLocale(),
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);
            // Send Confirmation Email to User
            Mail::to($email)
                ->locale(app()->getLocale())
                ->send(new ContactFormConfirmation($submission));

            // Send Notification Email to Admin
            $adminEmail = "info@applyvipconseil.com";
            Mail::to($adminEmail)
                ->locale('fa')
                ->send(new ContactFormSubmitted($submission));

            return redirect()->back()->with('success', __('messages.contact_success'));
        } catch (\Exception $e) {
            Log::error("Error in contact form submission: " . $e->getMessage());
            return redirect()->back()->with('error', __('messages.contact_error'));
        }
    }
}
