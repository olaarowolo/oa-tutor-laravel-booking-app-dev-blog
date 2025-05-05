<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TutorApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $applicationData;

    /**
     * Create a new message instance.
     *
     * @param array $applicationData
     * @return void
     */
    public function __construct(array $applicationData)
    {
        $this->applicationData = $applicationData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->subject('New OA Tutor Application')
                      ->view('emails.tutor_application')
                      ->with('applicationData', $this->applicationData);

        if (!empty($this->applicationData['resume_path'])) {
            $email->attach(storage_path('app/public/' . $this->applicationData['resume_path']));
        }

        return $email;
    }
}
