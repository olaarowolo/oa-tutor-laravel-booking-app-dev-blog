<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingPolicyController extends Controller
{
    public function index()
    {
        return view('docs.booking-policy');
    }
}
