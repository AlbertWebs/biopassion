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
        $data = array(
            'content'=>$Message,
            'subject'=>$subject,
        );
        $appName = config('app.name');
        $appEmail = config('mail.username');

        $FromVariable =     "no-reply@biopassiondiagnostics.com";
        $FromVariableName = "Biopassion Diagnostics Mailer";

        $toVariable =     "erickmasiga@biopassiondiagnostics.co.ke";
        $toVariableName = "Biopassion Diagnostics Medical Laboratory Center";


        Mail::send('SendEmail', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->bcc('albertmuhatia@gmail.com')->subject($subject);
        });
    }
}
