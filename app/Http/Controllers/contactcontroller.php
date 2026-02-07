<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Email tujuan (bebas diganti)
        $toEmail = "a.iqbal27112005@gmail.com";

        Mail::send('emails.contact', [
            'email' => $validated['email'],
            'subject' => $validated['subject'],
            'bodyMessage' => $validated['message']
        ], function($message) use ($validated, $toEmail) {
            $message->to($toEmail)
                    ->subject($validated['subject'])
                    ->replyTo($validated['email']);
        });

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
