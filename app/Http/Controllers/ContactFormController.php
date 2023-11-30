<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    function post_message(Request $request){

        $request->validate([
            'email' => 'required|email'
        ]);

        $data = [
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        //send email
        Mail::to('faqihfirdaus528@gmail.com')->send(new ContactFormMail($data));
    
        return back()->with('msg', 'PESAN SUDAH TERKIRIM!!');
    }
}