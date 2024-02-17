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

    public function what_single($slung){

        $Services = DB::table('services')->where('slung',$slung)->first();
        return view('front.what_single',compact('Services'));
    }

}
