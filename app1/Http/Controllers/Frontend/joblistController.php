<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class joblistController extends Controller
{
    public function job_list(){
       $job_post =  DB::table( 'jobs_post_new')->select('jobs_post_new.*','cities.cities')
       ->join('cities','cities.id','=','jobs_post_new.job_location')->where( 'status', 'Active' )->orderBy( 'id', 'Asc' )->get();
       $cities = DB::table( 'cities')->orderBy( 'id', 'Asc' )->get();
      return view( 'Frontend/job_list', compact('job_post','cities'));
 }  
 
 public function job_detail($id)
 {
     $jobdetail = DB::table( 'jobs_post_new')->select('jobs_post_new.*','cities.cities')
     ->join('cities','cities.id','=','jobs_post_new.job_location')
     ->where('jobs_post_new.id','=',$id)->orderBy( 'jobs_post_new.id', 'Asc' )->get();
     return view('Frontend/job_detail', compact('jobdetail','id'));
 }



 public function saveapplication(Request $request ){
    $userid = Session::get('id'); 
    // dd ($request->all());
     DB::table( 'send_application' )->insert([

        'candidate_id' => $userid,
        'job_id' => $request->job_id,
        'name' => $request->username,
        'email' => $request->email,
        'message' => $request->message,
               
        ] );
        
    return redirect( 'candidate_manage_job');
  } 
 }