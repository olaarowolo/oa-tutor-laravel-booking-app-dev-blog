<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'full_name',
        'passionate_education',
        'flexible_schedule',
        'tutoring_preference',
        'passion_description',
        'subjects_proficient',
        'age_groups',
        'communication_skills',
        'reliability',
        'resume_path',
        'additional_info',
        'availability',
        'education_level',
        'prior_experience',
    ];
}
