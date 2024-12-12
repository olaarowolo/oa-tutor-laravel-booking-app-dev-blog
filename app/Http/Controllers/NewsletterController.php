<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Subscriber; // Assuming you have a Subscriber model

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the email input
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:subscribers,email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Store the subscriber's email
        Subscriber::create([
            'email' => $request->input('email'),
        ]);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
}