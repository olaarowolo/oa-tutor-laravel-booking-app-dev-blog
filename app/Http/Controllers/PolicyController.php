<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function showPolicies()
    {
        return view('docs.policies'); // Adjust the view name if necessary
    }
}