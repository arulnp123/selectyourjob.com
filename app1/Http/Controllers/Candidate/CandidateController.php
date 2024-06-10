<?php

namespace App\Http\Controllers\Candidate;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Session;

class CandidateController extends Controller
{
    public function candidate_dashboard(){
 
      return view( 'candidate/candidate_dashboard');
 }  
 

public function candidate_post_job(){
 
  return view( 'candidate/candidate_post_job');
}  

public function candidate_manage_job(){


  
 
  return view( 'candidate/candidate_manage_job');
}  

public function candidate_applicants(){
 
  return view( 'candidate/candidate_applicants');
}  

public function candidate_resumes_shortlisted(){
 
  return view( 'candidate/candidate_resumes_shortlisted');
}  

public function candidate_packages(){
 
  return view( 'candidate/candidate_packages');
}  

public function candidate_messages(){
 
  return view( 'candidate/candidate_messages');
}  

public function candidate_company_profile(){
  $userid = Session::get('id'); 

  $candidate_profile = DB::table('candidate_registerd_details')->where('id', '=', $userid)->get();

  return view( 'candidate/candidate_company_profile', compact('candidate_profile'));
  }



public function edit_candidate(Request $request ){
  $userid = Session::get('id'); 
  $updateuser = DB::table( 'candidate_registerd_details' )->where('id',$userid)->update([
      'name' => $request->name,
      'last_name' => $request->laname,
      'email' => $request->email,
      'password' => $request->pass,
      'retype_password' => $request->passs,
      'job_alert_keywords' => $request->jalert,
      'job_alert_location' => $request->jalertl,
      'industry' => $request->indusry,
      'haer_about_us' => $request->hear,
      'gender' => $request->gender,
      'date_of_birth' => $request->date_of_birth,
      'mobile' => $request->mnumber,
      'whatsapp_number' => $request->wnumber,
      'address' => $request->address,
      'pastol_code' => $request->pastl,
      'resume_title' => $request->rtitle,
      'current_employment' => $request->cemploy,
      'current_desigination' => $request->cdesig,
      'current_employer' => $request->cemployer,
      'country' => $request->cntry,
      'state' => $request->stte,
      'city' => $request->cty,
      'experience_summary' => $request->esumm,
      'total_experience_years' => $request->tey,
      'relevant_experience' => $request->reve,
      'annual_salary_lakhs' => $request->asl,
      'functional_area' => $request->farea,
      'functional_role' => $request->furole,
      'skill_name' => $request->sknmae,
      'upload_resume' => $request->upers,
      'qualification' => $request->qulaific,
      'education' => $request->educate,
      'institute' => $request->institu,

      ] );
      
  return redirect( 'candidate_company_profile');
} 

public function candidate_resume(){
 
  return view( 'candidate/candidate_resume');
}  

public function candidate_change_password(){
 
  return view( 'candidate/candidate_change_password');
}



 }



