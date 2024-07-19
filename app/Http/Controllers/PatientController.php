<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use Redirect;

class PatientController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function results(){
        $Results = DB::table('results')->where('user', Auth::User()->id)->get();
        return view('dashboard.results', compact('Results'));
    }

    public function profile(){
        $Users = DB::table('users')->where('id', Auth::User()->id)->get();
        return view('dashboard.profile', compact('Users'));
    }

    public function update_profile(Request $request){
        if(isset($request->image)){
            $dir = 'uploads/users';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = "0";
        }
        $update = array(
            'name'=>$request->name,
            'mobile'=>$request->mobile,
            'content'=>$request->content,
        );

        DB::table('users')->where('id', Auth::User()->id)->update($update);
        Session::flash('message', "Results Has Been Added");
        return Redirect::back();
    }

}
