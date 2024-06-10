<?php

namespace App\Http\Controllers\Employer;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Bulkjobpost;
use App\Imports\JobsImport;

class EmployerController extends Controller
{
    public function employer_dashboard(){
 
      return view( 'Employer/employer_dashboard');
 }  
 
 public function employerprofile()
 {
  $userid = Session::get('id'); 
  $employerprofile = DB::table('employer_registerd_details')->where('id', '=', $userid)->get();
  //print_r($employerprofile);die;
  return view( 'Employer/employer', compact('employerprofile'));
  }

  public function editemployer( Request $request ) {
    $userid = Session::get('id'); 
    $updateuser = DB::table( 'employer_registerd_details' )->where('id',$userid)->update([
        'firts_name' => $request->name,
        'last_name' => $request->laname,
        'email' => $request->email,
        'desigination' => $request->desig,
        'reference' => $request->hear,
        'name_of_the_company' => $request->nameof,
        'company_description' => $request->comdes,
        'what_describes_you_the_best' => $request->describes,
        'website' => $request->webs,
        'phone' => $request->pho,
        'location' => $request->loct,
        'address' => $request->adres,
        'industry' => $request->industr,
        'company_business' => $request->compass,
        'job_posting' => $request->jobpo,
        'resume_database_access' => $request->resudata,
        'premium_profile_display' => $request->premipro,
       
    ] );
   return redirect('employerprofile')->with('success', 'Edit User Successfully ... !');
}


 public function employer_company_profile(){
 
  return view( 'Employer/employer_company_profile');
}  






public function employer_post_job(){

  $categories = DB::table( 'categories')->get();

  $industries = DB::table( 'industries')->get();

  $education = DB::table( 'education')->get();

  $cities = DB::table( 'cities')->get();

  
 
  return view( 'Employer/employer_post_job',compact('categories','industries','education','cities'));
}  

public function employer_bulck_post_job(){
 
  return view( 'Employer/employer_bulck_post_job');
}  

public function jobimport(Request $request) {

  Excel::import( new JobsImport, request()->file('job') );
  return redirect('employer_manage_job')->with( 'success', 'Job List Imported  SuccessFully' );
}

public function delete( $id ) {

  $deletecart = DB::table( 'jobs_post_new' )->where( 'id', $id )->delete();

  return redirect( '/employer_manage_job' )->with( 'success', 'Job Delete Successfully' );
}




public function employer_post_jobs( Request $request){
  $userid = Session::get('id'); 
  $employer_post_job = DB::table( 'jobs_post_new' )->insert( [

    'Job_post_id' => $userid,
    'job_tittle' => $request->jtittle,
    'Job_description' => $request->jobdesc,
    'company_name' => $request->cname,
    'company_location' => $request->clocat,
    'job_location' => $request->jlocat,
    'Job_category' => $request->jcateg,
    'experience' => $request->expere,
    'status' => 'Pending',
    'phone' => $request->phone,
    'email' => $request->email,
    'salary' => $request->salary,
    'websites' => $request->webs,
    'Key_responsibilities' => $request->keyres,
    'industry' => $request->induistr,
    'Skill_experience' => $request->skillres,
    'skills_needed' => $request->skillneed,
    'urgent_need'=> $request->urgent_need,
    'deadline_date' => $request->deadline,
    'position_available' => $request->posavail,
    'Job_type' => $request->jtype,
    'job_sector' => $request->jobsec,
    'gender' => $request->gend,
    'qualification' => $request->qualif,
    'country' => $request->count,
    'complete_address' => $request->caddres,
    'created_at' =>  date('Y-m-d H:i:s'),
    
] );
 
  return redirect( '/employer_post_job');
}  


public function emplogout()
{
    Session::flush();
    return redirect("/");
}




public function employer_manage_job(){

  $userid = Session::get('id'); 
  $jobs_post_new = DB::table( 'jobs_post_new')
  ->join('cities','cities.id','=','jobs_post_new.job_location')
  ->where('job_post_id', '=', $userid)->get();

      return view( 'Employer/employer_manage_job', compact('jobs_post_new'));

}  

public function employer_applicants(){

  $jobs_post_new = DB::table( 'jobs_post_new')->limit(10)->orderBy( 'id', 'Asc' )->get();
 
  return view( 'Employer/employer_applicants', compact('jobs_post_new'));
}  

public function employer_resumes_shortlisted(){
 
  return view( 'Employer/employer_resumes_shortlisted');
}  

public function employer_packages(){
 
  return view( 'Employer/employer_packages');
}  

public function employer_messages(){
 
  return view( 'Employer/employer_messages');
}  

public function employer_resume(){
 
  return view( 'Employer/employer_resume');
}  

public function employer_change_password(){
 
  return view( 'Employer/employer_change_password');
}


public function employer_view_profile(){
 
  return view( 'Employer/employer_view_profile');
}

public function edit_job_post($id ){

  $edit_job_post = DB::table('jobs_post_new')->where('id', '=', $id)->get();
  return view( 'Employer/edit_job_post',compact('edit_job_post'));
}  

public function updatejob_post( Request $request){
  $updatejob = DB::table( 'jobs_post_new' )->where('id',$request->id)->update([
    'job_tittle' => $request->jtittle,
    'Job_description' => $request->jobdesc,
    'company_name' => $request->cname,
    'company_location' => $request->clocat,
    'job_location' => $request->jlocat,
    'experience' => $request->expere,
    'status' => $request->status,
    'phone' => $request->phone,
    'email' => $request->email,
    'salary' => $request->salary,
    'websites' => $request->webs,
    'industry' => $request->induistr,
    'job_sector' => $request->jobsec,
    'Key_responsibilities' => $request->keyres,
    'Skill_experience' => $request->skillres,
    'skills_needed' => $request->skillneed,
    'deadline_date' => $request->deadline,
    'position_available' => $request->posavail,
    'Job_type' => $request->jtype,
    'Job_category' => $request->jcateg,
    'gender' => $request->gend,
    'qualification' => $request->qualif,
    'country' => $request->count,
    'complete_address' => $request->caddres,
    'created_at' =>  date('Y-m-d H:i:s'),
     
  ] );
 
  return redirect( '/employer_manage_job')->with('success', 'Edit User Successfully ... !');
}  

 }



