<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Booking;
use App\Models\SendEmail;
use App\Models\Test;
use Session;
use Redirect;

class HomeController extends Controller
{

    public function index()
    {
        return view('front.index');
    }

    public function pricelist()
    {
        return view('front.pricelist');
    }

    public function careers()
    {
        return view('front.careers');
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

    public function directory(Request $request){
        $query = Test::query();
        
        // Search functionality
        if ($request->has('search') && $request->search) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('category', 'like', '%' . $request->search . '%');
        }
        
        // Category filter
        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }
        
        $tests = $query->orderBy('title', 'asc')->paginate(200);
        $categories = Test::select('category')->distinct()->whereNotNull('category')->orderBy('category')->pluck('category');
        
        return view('front.directory', compact('tests', 'categories'));
    }

    public function testLists(Request $request){
        $query = Test::query();
        
        // Search functionality
        if ($request->has('search') && $request->search) {
            $query->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('category', 'like', '%' . $request->search . '%');
        }
        
        // Category filter
        if ($request->has('category') && $request->category) {
            $query->where('category', $request->category);
        }
        
        $tests = $query->orderBy('title', 'asc')->paginate(200);
        $categories = Test::select('category')->distinct()->whereNotNull('category')->orderBy('category')->pluck('category');
        
        return view('front.test-lists', compact('tests', 'categories'));
    }

    public function bookTest($slug){
        $test = Test::where('slug', $slug)->firstOrFail();
        return view('front.book-test', compact('test'));
    }

    public function bookTestPost(Request $request, $slug){
        $test = Test::where('slug', $slug)->firstOrFail();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'location' => 'nullable|string|max:255',
            'apartment' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:1000',
        ]);

        $booking = new Booking;
        $booking->name = $request->name;
        $booking->email = $request->email;
        $booking->phone = $request->phone;
        $booking->location = $request->location;
        $booking->apartment = $request->apartment;
        $booking->message = $request->message;
        $booking->test_slug = $test->slug;
        $booking->test_title = $test->title;
        $booking->test_category = $test->category;
        $booking->save();

        // Send email
        $subject = 'New Test Booking - ' . $test->title;
        $emailMessage = "Hello Admin,\n\nYou have received a new test booking:\n\n";
        $emailMessage .= "Test: {$test->title}\n";
        $emailMessage .= "Category: {$test->category}\n";
        $emailMessage .= "Customer Name: {$request->name}\n";
        $emailMessage .= "Email: {$request->email}\n";
        $emailMessage .= "Phone: {$request->phone}\n";
        if($request->location) {
            $emailMessage .= "Location: {$request->location}\n";
        }
        if($request->apartment) {
            $emailMessage .= "Apartment: {$request->apartment}\n";
        }
        if($request->message) {
            $emailMessage .= "Message: {$request->message}\n";
        }
        $emailMessage .= "\nTest Price: KSh " . number_format($test->current_price ?? 0, 2) . "\n";
        if($test->original_price && $test->original_price > $test->current_price) {
            $emailMessage .= "Original Price: KSh " . number_format($test->original_price, 2) . "\n";
        }

        SendEmail::SendTestBooking($emailMessage, $request->email, $subject);

        Session::flash('message', 'Your booking has been submitted successfully! We will contact you soon.');
        return redirect()->route('book-test', $test->slug);
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



    public function estimate_bill(Request $request){
        $Booking = new Booking;
        $Booking->name = $request->name;
        $Booking->email = $request->email;
        $Booking->phone = $request->phone;
        $Booking->message = $request->message;
        $Booking->save();

        $subject = 'Price Estimate Request';

        $Message = "Hello Admin, You Have a new Estimate Request from $request->name, Email: $request->email, Phone is $request->phone, Message: $request->message";
        SendEmail::SendAdmin($Message,$request->email,$subject);
        $MessageSender = "Your Email Has Been Received";
     //    SendEmail::SendSender($request->email, $MessageSender);
        Session::flash('message', "Message Has Been Sent");
        return Redirect::Back();
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
        if($request->verify_contact == $request->verify_contact_input){
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
        }else{
            return Redirect::Back();
        }
    }

    public function appointment(Request $request){
        if($request->verify_contact == $request->verify_contact_input){
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
        }else{
            return Redirect::Back();
        }
    }

    public function what_single($slung){
        $Services = DB::table('services')->where('slung',$slung)->first();
        return view('front.what_single',compact('Services'));
    }

}
