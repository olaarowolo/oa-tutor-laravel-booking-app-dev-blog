<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TuitionController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name'       => 'required|string',
            'email'      => 'required|email',
            'phone'      => 'required',
            'child_name' => 'required|string',
            'stage'      => 'required',
            'year_group' => 'required|string',
            'child_age'  => 'required|numeric'
        ]);

        Mail::send('emails.registration', $data, function ($message) {
            $message->to('tutor@olaarowolo.com')
                    ->subject('New Back to School Tuition Registration');
        });

        return back()->with('success', 'Registration successful! We’ll be in touch.');
    }
}
