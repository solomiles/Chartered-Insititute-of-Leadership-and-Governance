<?php

namespace App\Traits;

use App\Mail\NotificationMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

trait EmailTrait
{
    /**
     * Creates single email send method
     *
     * @param string $subject - Email Subject
     * @param string $recipientEmail
     * @param array $data
     * @param string $template - Email blade template
     *
     * @return boolean
     */
    public function sendSingleEmail($subject, $recipientEmail, $data, $template)
    {

        try {
            Mail::to($recipientEmail)->send(new NotificationMail($subject,$data,$template));

            return true;
        } catch (\Throwable$th) {
            Log::error($th);

            return false;
        }

    }

}
