<?php

namespace App\Http\Controllers;

use App\Mail\sendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class SendMailController extends Controller
{
    public function send(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('ilhamputra0601@gmail.com')->send(new sendMail($data));

        return back()->with('success', 'Thanks for contacting us!');
      }
}
