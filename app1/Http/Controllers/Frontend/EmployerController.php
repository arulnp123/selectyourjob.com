<?php
namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Hash;
use Session;


class EmployerController extends Controller
{



	public function employers_register(){
		 
	  return view( 'Frontend/employers_register');
	}  
	  public function employerlogin(){

	  return view( 'Frontend/employer_login');
	}  
    public function checkemployerlogin(Request $request)
    {
		
        $message = "";
        $email = trim($request->email);
        $password = $request->password;
        $sql = "select * from employer_registerd_details where email='$email'";
        $result = DB::select($sql);
        if (count($result) > 0) {
			$db_password = $result[0]->password;
			if (Hash::check($password, $db_password)){
                Session::put("firts_name", $result[0]->firts_name);
				Session::put("id", $result[0]->id);
                Session::put("status", $result[0]->status);
				return redirect("employer_dashboard");
			}else{
				$message = "Invalid Password";
				return redirect('/employerlogin')->with('message', $message);
			}
        } else {
            $message = "Invalid Email";
            return redirect('/employerlogin')->with('message', $message);
        }
    }
	
	
  

    public function addemployers( Request $request ) {
        $adduser = DB::table( 'employer_registerd_details' )->insert( [
            'firts_name' => $request->name,
            'last_name' => $request->laname,
            'email' => $request->email,
            'status' => $request->status,
            'password' => Hash::Make($request->password),
            'desigination' => $request->desig,
            'reference' => $request->hear,
            'name_of_the_company' => $request->nameof,
            'company_description' => $request->comdes,
            'what_describes_you_the_best' => $request->describes,
            'website' => $request->webs,
            'phone' => $request->pho,
            'location' => $request->loct,
            'address' => $request->adres,
            'industry' => $request->indusry,
            'company_business' => $request->compass,
            'job_posting' => $request->jobpo,
            'resume_database_access' => $request->resudata,
            'premium_profile_display' => $request->premipro,
           
        ] );
		
        $message = "";
        $email = trim($request->email);
        $password = $request->password;
        $sql = "select * from employer_registerd_details where email='$email'";
        $result = DB::select($sql);
        if (count($result) > 0) {
			$db_password = $result[0]->password;
			if (Hash::check($password, $db_password)){
				Session::put("id", $result[0]->id);
				Session::put("email", $result[0]->email);
				Session::put("status", $result[0]->status);
				return redirect("employer_dashboard");
			}else{
				$message = "Invalid Password";
				return redirect('/employerlogin')->with('message', $message);
			}
        } else {
            $message = "Invalid Email";
            return redirect('/employerlogin')->with('message', $message);
        }
		
    }

// 	 public function employerprofile()
//  {
//   $userid = Session::get('id'); 
//   $employerprofile = DB::table('employer_registerd_details')->where('id', '=', $userid)->get();
//   //print_r($employerprofile);die;
//   return view( 'Employer/employer', compact('employerprofile'));
//   }

	//  public function editemployer( Request $request ) {
    //     $userid = Session::get('id'); 
    //     $updateuser = DB::table( 'employer_registerd_details' )->where('id',$userid)->update([
    //         'firts_name' => $request->name,
    //         'last_name' => $request->laname,
    //         'email' => $request->email,
    //         'desigination' => $request->desig,
    //         'reference' => $request->hear,
    //         'name_of_the_company' => $request->nameof,
    //         'company_description' => $request->comdes,
    //         'what_describes_you_the_best' => $request->describes,
    //         'website' => $request->webs,
    //         'phone' => $request->pho,
    //         'location' => $request->loct,
    //         'address' => $request->adres,
    //         'industry' => $request->indusry,
    //         'company_business' => $request->compass,
    //         'job_posting' => $request->jobpo,
    //         'resume_database_access' => $request->resudata,
    //         'premium_profile_display' => $request->premipro,
           
    //     ] );
	// 	   return redirect('employerprofile')->with('success', 'Edit User Successfully ... !');
    // }

    

    public function logout()
    {
        Session::flush();
        return redirect("/");
    }
 }
 
 
 