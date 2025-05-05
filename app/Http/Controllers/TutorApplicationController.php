<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TutorApplicationMail;
use App\Models\TutorApplication;

class TutorApplicationController extends Controller
{
    public function showForm()
    {
        return view('docs.join-oa-tutors');
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'full_name' => 'required|string|max:255',
            'passionate_education' => 'required|string',
            'flexible_schedule' => 'required|string',
            'tutoring_preference' => 'required|string',
            'passion_description' => 'required|string',
            'subjects_proficient' => 'required|string',
            'age_groups' => 'nullable|string',
            'communication_skills' => 'nullable|string',
            'reliability' => 'nullable|string',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'additional_info' => 'nullable|string',
            'availability' => 'nullable|string',
            'education_level' => 'nullable|string',
            'prior_experience' => 'nullable|string',
        ]);

        // Handle file upload if present
        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $path = $file->store('resumes', 'public');
            $validatedData['resume_path'] = $path;
        } else {
            $validatedData['resume_path'] = null;
        }

        // Save application to database
        TutorApplication::create($validatedData);

        // Send email to specified recipients
        Mail::to(['info@oatutors.co.uk', 'tutor@olaarowolo.com'])
            ->send(new TutorApplicationMail($validatedData));

        return redirect()->back()->with('success', 'Your application has been submitted successfully.');
    }
}
