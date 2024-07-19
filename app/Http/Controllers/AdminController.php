<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Result;
use Session;
use Redirect;

class AdminController extends Controller
{
    public function adminHome(){
        return view('admin.index');
    }

    public function profile(){
        return view('admin.profile');
    }

    public function addResults($id){
        $Users = DB::table('users')->where('id',$id)->get();
        return view('admin.addResults' , compact('Users'));
    }

    public function patients(){
        $Users = DB::table('users')->get();
        return view('admin.patients', compact('Users'));
    }

    public function results(){
        $Results = DB::table('results')->get();
        return view('admin.results', compact('Results'));
    }

    public function deleteResults($id){
        $Delete = DB::table('results')->where('id',$id)->delete();
        Session::flash('message', "Results Has Been Added");
        return Redirect::back();
    }

    public function update_profile(Request $request){
        if(isset($request->image)){
            $dir = 'uploads/results';
            $file = $request->file('image');
            $realPath = $request->file('image')->getRealPath();
            $SaveFilePath = $this->genericFIleUpload($file,$dir,$realPath);
        }else{
            $SaveFilePath = "0";
        }

        $User = new Result;
        $User->user = $request->user;
        $User->content = $request->content;
        $User->file = $SaveFilePath;
        $User->save();
        Session::flash('message', "Results Has Been Added");
        return Redirect::back();
    }

    public function genericFIleUpload($file,$dir,$realPath){
        $image_name = $file->getClientOriginalName();
        $file->move(public_path($dir),$image_name);
        $url = url('/');
        $image_path = "$url/$dir/" . $image_name;
        return $image_path;
    }

}

