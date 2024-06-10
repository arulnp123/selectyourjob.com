<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Hash;
use Session;


class CandidateController extends Controller
{
 public function candidatelogin(){
     
  return view( 'Frontend/candidate_login');
}  
public function Candidate_register(){
     
    return view( 'Frontend/Candidate_register');
  }  
 

  public function addcandidates( Request $request ) {
    $adduser = DB::table( 'candidate_registerd_details' )->insert( [
        'name' => $request->name,
        'last_name' => $request->laname,
        'email' => $request->email,
        'password' => Hash::Make($request->pass),
        'retype_password' => Hash::Make($request->passs),
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

 $message = "";
        $email = trim($request->email);
        $password = $request->password;
        $sql = "select * from candidate_registerd_details where email='$email'";
        $result = DB::select($sql);
        if (count($result) > 0) {
			$db_password = $result[0]->password;
			if (Hash::check($password, $db_password)){
                Session::put("name", $result[0]->name);
                session::put("id",$result[0]->id);
				Session::put("email", $result[0]->email);
				return redirect("candidate_dashboard");
			}else{
				$message = "Invalid Password";
				return redirect('/candidatelogin')->with('message', $message);
			}
        } else {
            $message = "Invalid Email";
            return redirect('/candidatelogin')->with('message', $message);
        }
		
}



    public function checkcandidatelogin(Request $request)
    {
		
        $message = "";
        $email = trim($request->email);
        $password = $request->password;
        $sql = "select * from candidate_registerd_details where email='$email'";
        $result = DB::select($sql);
        if (count($result) > 0) {
			$db_password = $result[0]->password;
			if (Hash::check($password, $db_password)){
				Session::put("id", $result[0]->id);
				Session::put("type",1);
				return redirect("/candidate_dashboard");
			}else{
				$message = "Invalid Password";
				return redirect('/candidatelogin')->with('message', $message);
			}
        } else {
            $message = "Invalid Email";
            return redirect('/candidatelogin')->with('message', $message);
        }
    }
	 
	
	 public function candidate_dashboard(){
     
      return view( 'Candidate/candidate_dashboard');
     }  

 }
 
 