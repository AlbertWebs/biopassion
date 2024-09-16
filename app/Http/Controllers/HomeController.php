<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Booking;
use App\Models\SendEmail;
use Session;
use Redirect;

class HomeController extends Controller
{

    public function index()
    {
        return view('front.index');
    }

    public function about(){
        return view('front.about');
    }

    public function contact(){
        return view('front.contact');
    }
    public function who(){
        return view('front.who');
    }

    public function what(){
        return view('front.what');
    }

    public function conditions(){
        return view('front.conditions');
    }

    public function prepare(){
        return view('front.prepare');
    }
    public function infertility(){
        return view('front.infertility');
    }
    public function costing(){
        return view('front.costing');
    }
    public function estimate(){
        return view('front.estimate');
    }
    public function family_results(){
        return view('front.family_results');
    }
    public function abuse(){
        return view('front.abuse');
    }

    public function directory(){
        return view('front.directory');
    }

    public function asthma(){
        return view('front.asthma');
    }

    public function arthritis(){
        return view('front.arthritis');
    }

    public function autoimmune(){
        return view('front.autoimmune');
    }

    public function best(){
        \Artisan::call('cache:clear');
        \Artisan::call('down');
    }

    public function cancer(){
        return view('front.cancer');
    }
    public function cardiovascular(){
        return view('front.cardiovascular');
    }

    public function fertility(){
        return view('front.fertility');
    }
    public function guidelines(){
        return view('front.guidelines');
    }
    public function health_checkup(){
        return view('front.health_checkup');
    }



    public function clinical(){
        return view('front.clinical');
    }

    public function clinical_education(){
        return view('front.clinical_education');
    }

    public function diagnostic_insights(){
        return view('front.diagnostic_insights');
    }

    public function employee_screening(){
        return view('front.employee_screening');
    }

    public function corporate_welness(){
        return view('front.corporate_welness');
    }

    public function coaching(){
        return view('front.coaching');
    }
    public function workplace(){
        return view('front.workplace');
    }

    public function outreach(){
        return view('front.outreach');
    }
    public function collaborative(){
        return view('front.collaborative');
    }
    public function consultation(){
        return view('front.consultation');
    }

    public function trials(){
        return view('front.trials');
    }

    public function sposored(){
        return view('front.sposored');
    }
    public function privacy(){
        return view('front.privacy');
    }
    public function terms(){
        return view('front.terms');
    }
    public function collection(){
        return view('front.collection');
    }
    public function fertility_testing(){
        return view('front.fertility_testing');
    }

    public function sexual_transmited(){
        return view('front.sexual_transmited');
    }

    public function dna_paternity_testing(){
        return view('front.dna_paternity_testing');
    }
    public function pay_bill(){
        return view('front.pay_bill');
    }



    public function book(){
        return view('front.book');
    }

    public function book_post(Request $request){
       $Booking = new Booking;
       $Booking->name = $request->name;
       $Booking->email = $request->email;
       $Booking->phone = $request->phone;
       $Booking->apartment = $request->apartment;
       $Booking->location = $request->location;
       $Booking->message = $request->message;
       $Booking->save();

       $subject = 'New Booking';

       $Message = "Hello Admin, You Have a Booking from $request->name, Email: $request->email, Phone is $request->phone, Location: $request->location, Apartments: $request->apartment, Message: $request->message";
       SendEmail::SendAdmin($Message,$request->email,$subject);
       $MessageSender = "Your Email Has Been Received";
    //    SendEmail::SendSender($request->email, $MessageSender);
       Session::flash('message', "Message Has Been Sent");
       return Redirect::Back();
    }

    public function send_message(Request $request){
        $subject = 'New Message';
        $Message =
        "Hello Admin, You Have a message from $request->name,
        Email: $request->email, Phone is $request->phone,
        Services: $request->service, Location: $request->location, Apartments: $request->apartment,
        Message: $request->message";
        SendEmail::SendAdmin($Message,$request->email,$subject);
        $MessageSender = "Your Email Has Been Received";
        Session::flash('message', "Message Has Been Sent");
        return Redirect::Back();
    }

    public function appointment(Request $request){
        $subject = 'New Appointmet';
        $Message =
        "Hello Admin, You Have a appointment from $request->name,
        Email: $request->email, Phone is $request->phone,
        Services: $request->service, Date: $request->date,
        Message: $request->message";
        SendEmail::SendAdmin($Message,$request->email,$subject);
        $MessageSender = "Your Email Has Been Received";
        Session::flash('message', "Message Has Been Sent");
        return Redirect::Back();
    }

    public function what_single($slung){
        $Services = DB::table('services')->where('slung',$slung)->first();
        return view('front.what_single',compact('Services'));
    }

}
