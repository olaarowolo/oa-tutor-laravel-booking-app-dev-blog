<?php

namespace App\Mail;

use App\Models\Booking;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;
    public $serviceDetails;
    public $status;

    /**
     * Create a new message instance.
     */
    public function __construct(Booking $booking, array $serviceDetails, string $status = 'confirmed')
    {
        $this->booking = $booking;
        $this->serviceDetails = $serviceDetails;
        $this->status = $status;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $subject = $this->status === 'canceled' ? 'Booking Cancellation Notification' : 'New Booking Notification';

        return $this->subject($subject)
                    ->view('emails.booking_notification');
    }
}
