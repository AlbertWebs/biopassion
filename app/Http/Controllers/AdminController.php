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

    public function dangerZone(){
        // Get record counts for each table
        $tables = [
            'users' => ['name' => 'Users', 'count' => DB::table('users')->count(), 'description' => 'All user accounts (patients, admins, etc.)'],
            'bookings' => ['name' => 'Bookings', 'count' => DB::table('bookings')->count(), 'description' => 'All test bookings and appointments'],
            'tests' => ['name' => 'Tests', 'count' => DB::table('tests')->count(), 'description' => 'All diagnostic tests'],
            'results' => ['name' => 'Results', 'count' => DB::table('results')->count(), 'description' => 'All test results'],
            'services' => ['name' => 'Services', 'count' => DB::table('services')->count(), 'description' => 'All services'],
            'blogs' => ['name' => 'Blogs', 'count' => DB::table('blogs')->count(), 'description' => 'All blog posts'],
            'extras' => ['name' => 'Extras', 'count' => DB::table('extras')->count(), 'description' => 'Extra content'],
            'failed_jobs' => ['name' => 'Failed Jobs', 'count' => DB::table('failed_jobs')->count(), 'description' => 'Failed queue jobs'],
            'personal_access_tokens' => ['name' => 'Personal Access Tokens', 'count' => DB::table('personal_access_tokens')->count(), 'description' => 'API access tokens'],
        ];
        
        return view('admin.danger-zone', compact('tables'));
    }

    public function purgeData(Request $request){
        // Double confirmation
        if($request->confirm !== 'DELETE') {
            Session::flash('error', 'Confirmation text does not match. Type "DELETE" to confirm.');
            return Redirect::back();
        }

        $tablesToPurge = $request->tables ?? [];
        $purgedTables = [];
        $errors = [];

        foreach($tablesToPurge as $table) {
            try {
                // Skip system tables
                if(in_array($table, ['migrations', 'password_resets', 'password_reset_tokens'])) {
                    continue;
                }

                // Get count before deletion
                $count = DB::table($table)->count();
                
                // Truncate table (faster than delete and resets auto-increment)
                DB::table($table)->truncate();
                
                $purgedTables[] = [
                    'table' => $table,
                    'count' => $count
                ];
            } catch (\Exception $e) {
                $errors[] = [
                    'table' => $table,
                    'error' => $e->getMessage()
                ];
            }
        }

        if(count($purgedTables) > 0) {
            Session::flash('success', 'Successfully purged ' . count($purgedTables) . ' table(s).');
            Session::flash('purged_tables', $purgedTables);
        }

        if(count($errors) > 0) {
            Session::flash('error', 'Some tables could not be purged. Check errors below.');
            Session::flash('errors', $errors);
        }

        return Redirect::back();
    }

}

