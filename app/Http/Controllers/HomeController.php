<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function sendContactEmail(Request $request) {
        $to_email = env('TO_EMAIL');
        $from_email = $request->get('email');
        $message = $request->get('message');
        $name = $request->get('name');
        $phone_number = $request->get('phone_number');
        $headers = "From: $from_email" . "\r\n";
        $subject = env('APP_NAME').' - Contact Email';
        mail($to_email, $subject, $message, $headers);
        return back()->with('success', 'Email was sent successfully!');
    }
}
