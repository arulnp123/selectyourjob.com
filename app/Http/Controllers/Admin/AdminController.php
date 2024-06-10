<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Session;
use App\User;

class AdminController extends Controller
{

    public function Admin(){

    
 
      return view( 'Admin/admin_login');

 }  
 public function dashboard_admin(){
		 
  return view( 'Admin/dashboard_admin');
}  

public function admin_manage_job (){
  
  $jobs_post_new = DB::table('jobs_post_new')->select('jobs_post_new.*','employer_registerd_details.firts_name','employer_registerd_details.last_name')
 ->join('employer_registerd_details','employer_registerd_details.id' , '=','jobs_post_new.job_post_id')
  ->where('jobs_post_new.status','Pending')
  ->orderBy('id', 'asc')
  ->get();
// echo $jobs_post_new;die;
return view( 'Admin/admin_manage_job',compact('jobs_post_new'));

}  

public function approvejob ($id){

  DB::table('jobs_post_new')->where('id',$id)->update( [
    'status' => 'Active'
  ]);

return redirect( 'admin_job_lists');

}  

public function approve_employer ($id){

  DB::table('employer_registerd_details')->where('id',$id)->update( [
    'status' => 'Active'
  ]);

return redirect( 'admin_job_lists');

}  

public function rejectjob ($id){

  DB::table('jobs_post_new')->where('id',$id)->update( [
    'status' => 'Rejected'
  ]);

return redirect( 'admin_manage_job');

}  

public function dashboard_post_job(){
 
  $categories = DB::table( 'categories')->orderBy( 'id', 'Asc' )->get();

  $industries = DB::table( 'industries')->orderBy( 'id', 'Asc' )->get();

  $education = DB::table( 'education')->orderBy( 'id', 'Asc' )->get();


  return view( 'Admin/dashboard_post_job',compact('categories','industries','education'));
}  

public function dashboard_category(){
  
  $dashboard_category = DB::table( 'categories')->orderBy( 'id', 'Asc' )->get();

  return view( 'Admin/dashboard_category',compact('dashboard_category'));
}  


public function job_location(){
  
  $job_location = DB::table( 'cities')->orderBy( 'id', 'Asc' )->get();

  return view( 'Admin/job_location',compact('job_location'));
}  



public function dashboard_education(){
  
  $dashboard_education = DB::table( 'education')->orderBy( 'id', 'Asc' )->get();

  return view( 'Admin/dashboard_education',compact('dashboard_education'));
}  

public function companyApproval(){
  
  $jobapproval = DB::table('employer_registerd_details')
 
   ->where('employer_registerd_details.status','Inactive')
   ->orderBy('id', 'asc')
   ->get();

 return view( 'Admin/companyApproval',compact('jobapproval'));

}  


public function view_companies(){
  
  $view_companies = DB::table('employer_registerd_details')
  ->orderBy('id', 'asc')
  ->get();

 return view( 'Admin/view_companies',compact('view_companies'));

}  

public function admin_company_view($id)
{
 $admin_company_view = DB::table('employer_registerd_details')->where('id', '=', $id)->get();
//  print_r($admin_company_view);die;
 return view( 'Admin/admin_company_view', compact('admin_company_view'));
 }


public function dashboard_industries(){
 
  
  $dashboard_industries = DB::table( 'industries')->orderBy( 'id', 'Asc' )->get();

  return view( 'Admin/dashboard_industries',compact('dashboard_industries'));
}  

public function dashboard_applicants(){

  $jobs_post_new = DB::table( 'jobs_post_new')->limit(10)->orderBy( 'id', 'Asc' )->get();
 
  return view( 'Admin/dashboard_applicants', compact('jobs_post_new'));
}
public function dashboard_resume_alerts(){
 
  return view( 'Admin/dashboard_resume_alerts');
}  
 
public function dashboard_packages(){
 
  return view( 'Admin/dashboard_packages');
}  

public function dashboard_company_profile(){
 
  return view( 'Admin/dashboard_company_profile');
}  
public function dashboard_messages(){
 
  return view( 'Admin/dashboard_messages');
}  
  

  

public function dashboard_change_password(){
 
  return view( 'Admin/dashboard_change_password');
}


public function dashboard_view_profile(){
 
  return view( 'Admin/dashboard_view_profile');
}




public function admin_edit_job($id)
 {
     $admin_edit_job = DB::table( 'jobs_post_new')->where('id','=',$id)->get();
     return view('admin/admin_edit_job', compact('admin_edit_job'));
 }
 public function admin_updatejob_post( Request $request){
  $admin_updatejob_post = DB::table( 'jobs_post_new' )->where('id',$request->id)->update([
    'job_tittle' => $request->jtittle,
    'Job_description' => $request->jobdesc,
    'company_name' => $request->cname,
    'company_location' => $request->clocat,
    'job_location' => $request->jlocat,
    'experience' => $request->expere,
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
 
  return redirect( '/admin_manage_job')->with('success', 'Edit Job Successfully ... !');
}  

public function edit_admin($id)
 {
     $jobdetail = DB::table( 'users')->where('id','=',$id)->orderBy( 'id', 'Asc' )->get();
     return view('Admin/edit_admin', compact('editadmin'));
 }


public function admin_job_lists()
 {
     $admin_job_lists = DB::table( 'jobs_post_new')->orderBy( 'id', 'Asc' )->get();
     return view('Admin/admin_job_lists', compact('admin_job_lists'));
 }

public function admin_profile(){

  $users = DB::table( 'users')->limit(10)->orderBy( 'id', 'Asc' )->get();
 
 
  return view('Admin/admin_profile', ['users' => $users]);
}


public function admin_button(){
 
  return view( 'Admin/admin_button');
}

public function add_admin_button(){
 
  return view( 'Admin/add_admin_button');
}


public function adminlogin(){

  return view( 'Admin/admin_login');
}  


public function addcategory(){
  
  return view( 'Admin/addcategory');
}  

public function addindustries(){
  
  return view( 'Admin/addindustries');
}  

public function addlocation(){
  
  return view( 'Admin/addlocation');
}  

public function addeducation(){
  
  return view( 'Admin/addeducation');
}  


  public function add_category( Request $request){

    $add_category = DB::table( 'categories' )->insert( [
      'name' => $request->Category_Name,
      'status' => $request->Status,
   
  ] );
   
 return redirect( 'dashboard_category');
} 

public function add_industries( Request $request){

  $add_industries = DB::table( 'industries' )->insert( [
    'industries_name' => $request->industry_Name,
    'status' => $request->Status,
 
] );
 
return redirect( '/addindustries');
} 


public function add_location( Request $request){

  $add_location = DB::table( 'cities' )->insert( [
    'cities' => $request->location,
    'city_id' => $request->status,
   
 
] );
 
return redirect( 'Admin/add_location');
} 



public function add_education( Request $request){

  $add_education = DB::table( 'education' )->insert( [
    'name' => $request->Name,
    'status' => $request->Status,
 
] );
 
return redirect( 'Admin/dashboard_education');
} 

  public function checkadminlogin(Request $request)
  {
  
      $message = "";
      $email = trim($request->email);
      $password = $request->password;
      $sql = "select * from users where email='$email'";
      $result = DB::select($sql);
      if (count($result) > 0) {
    $db_password = $result[0]->password;
    if (Hash::check($password, $db_password)){
      Session::put("id", $result[0]->id);
      return redirect("dashboard_admin");
    }else{
      $message = "Invalid Password";
      return redirect('/adminlogin')->with('message', $message);
    }
      } else {
          $message = "Invalid Email";
          return redirect('/adminlogin')->with('message', $message);
      }
  }




  
  public function useradmin( Request $request ) {
    $adduser = DB::table( 'users' )->insert( [
        'name' => $request->name,
        'last_name' => $request->laname,
        'email' => $request->email,
        'password' => Hash::Make($request->pass),
        'retype_password' => $request->repass,
        'whatsapp_number' => $request->wnumber,
      
    ] );

    $message = "";
    $email = trim($request->email);
    $password = $request->password;
    $sql = "select * from users where email='$email'";
    $result = DB::select($sql);
    if (count($result) > 0) {
  $db_password = $result[0]->password;
  if (Hash::check($password, $db_password)){
    Session::put("email", $result[0]->email);
    return redirect("dashboard_admin");
  }else{
    $message = "Invalid Password";
    return redirect('/adminlogin')->with('message', $message);
  }
    } else {
        $message = "Invalid Email";
        return redirect('/adminlogin')->with('message', $message);
    }

}


public function admin_post_jobs( Request $request){
  $userid = Session::get('id'); 
  $admin_post_jobs = DB::table( 'jobs_post_new' )->insert( [


    'Job_post_id' => $userid,
    'job_tittle' => $request->jtittle,
    'Job_description' => $request->jobdesc,
    'company_name' => $request->cname,
    'company_location' => $request->clocat,
    'job_location' => $request->jlocat,
    'Job_category' => $request->jcateg,
    'experience' => $request->expere,
    'status' => $request->status,
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
 
 
  return redirect( '/dashboard_post_job');
}  



 public function adminlogout()
 {
     Session::flush();
     return redirect("/");
 }
 }



