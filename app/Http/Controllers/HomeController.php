<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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



    public function what_single($slung){

        $Services = DB::table('services')->where('slung',$slung)->first();
        return view('front.what_single',compact('Services'));
    }

}
