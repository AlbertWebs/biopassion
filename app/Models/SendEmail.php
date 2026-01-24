<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;


class SendEmail extends Model
{
    use HasFactory;

    public static function SendAdmin($Message,$email,$subject){
        //The Generic mailler Goes here
        try {
            $data = array(
                'content'=>$Message,
                'subject'=>$subject,
            );
            $appName = config('app.name');
            $appEmail = config('mail.username');

            // Use proper from address instead of no-reply to reduce spam score
            $FromVariable = "info@biopassiondiagnostics.com";
            $FromVariableName = "Biopassion Diagnostics";

            $toVariable = "erickmasiga@biopassiondiagnostics.co.ke";
            $toVariableName = "Biopassion Diagnostics Medical Laboratory Center";

            Mail::send('SendEmail', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
                $message->from($FromVariable , $FromVariableName);
                $message->to($toVariable, $toVariableName)
                        ->bcc('albertmuhatia@gmail.com')
                        ->subject($subject)
                        ->priority(1); // High priority
            });
        } catch (\Exception $e) {
            // Log the error but don't break the process
            \Log::error('Failed to send admin email: ' . $e->getMessage());
        }
    }

    public static function SendTestBooking($Message,$email,$subject){
        //Send test booking emails to info@biopassiondiagnostics.com
        try {
            $data = array(
                'content'=>$Message,
                'subject'=>$subject,
            );

            // Use a proper from address instead of no-reply to reduce spam score
            $FromVariable = "info@biopassiondiagnostics.com";
            $FromVariableName = "Biopassion Diagnostics";

            $toVariable = "info@biopassiondiagnostics.com";
            $toVariableName = "Biopassion Diagnostics";

            Mail::send('SendEmail', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName,$email){
                $message->from($FromVariable , $FromVariableName);
                $message->to($toVariable, $toVariableName)
                        ->replyTo($email)
                        ->subject($subject)
                        ->priority(1); // High priority
            });
        } catch (\Exception $e) {
            // Log the error but don't break the booking process
            \Log::error('Failed to send booking email: ' . $e->getMessage());
            // Optionally, you can still save the booking even if email fails
        }
    }
}
