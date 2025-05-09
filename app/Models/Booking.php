<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'client_email',
        'phone_number',
        'plan',
        'booking_date',
        'booking_time_slot',
        'payment_status',
    ];
}
