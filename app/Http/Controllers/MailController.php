<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SimpleMail;

class MailController extends Controller
{
    public function sendMail()
    {
        $details = [
            'title' => 'Mail From Palani Bala',
            'body' => 'This is a test email.'
        ];

        Mail::to('dvijayaramprabhu@gmail.com')->send(new SimpleMail($details));

        return 'Email sent successfully';
    }
}
