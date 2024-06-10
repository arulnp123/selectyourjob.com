<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
       $jobs_post_new = DB::table( 'jobs_post_new')->select('jobs_post_new.*','cities.cities')
       ->join('cities','cities.id','=','jobs_post_new.job_location')->limit(10)->where( 'status', 'Active' )->orderBy( 'id', 'Asc' )->get();

       $cities = DB::table( 'cities')->orderBy( 'id', 'Asc' )->get();

 
      return view( 'Frontend/home', compact('jobs_post_new','cities'));
 }  
 

 public function job_search_list(){
 
   return view('Frontend/job_search_list');
}  


public function interview_questions(){

  return view('Frontend/interview_questions');

}
public function android_ques(){

  return view('Frontend/android_ques');

}
public function java_ques(){

  return view('Frontend/java_ques');

}

public function angular_ques(){

  return view('Frontend/angular_ques');

}
public function php_ques(){

  return view('Frontend/php_ques');

}
public function python_ques(){

  return view('Frontend/python_ques');

}
public function pyspoke_ques(){

  return view('Frontend/pyspoke_ques');

}
public function sql_ques(){

  return view('Frontend/sql_ques');

}
public function oracle_ques(){

  return view('Frontend/oracle_ques');

}
public function snowflex_ques(){

  return view('Frontend/snowflex_ques');

}
public function nosql_ques(){

  return view('Frontend/nosql_ques');

}
public function html_ques(){

  return view('Frontend/html_ques');

}
public function css_ques(){

  return view('Frontend/css_ques');

}

public function react_ques(){

  return view('Frontend/react_ques');

}
public function flutter_ques(){

  return view('Frontend/flutter_ques');

}
public function framework7_ques(){

  return view('Frontend/framework7_ques');

}
public function xamarin_ques(){

  return view('Frontend/xamarin_ques');

}



public function category_list($id){
  $category = DB::table( 'jobs_post_new')->where( 'status' , '=' , 'Active' )->where( 'job_category' , '=' , $id )->orderBy( 'id', 'Asc' )->get();
  $name = DB::table( 'categories')->select('name')->where( 'id', $id )->get();
  $name = $name[0]->name;
  $cities = DB::table( 'cities')->orderBy( 'id', 'Asc' )->get();
 //return $category;

  return view('Frontend/category_list',compact('category','name','cities'));
}

public function jobsearch(Request $request){
  $title = $request->field_name;
  $location = $request->job_location;

  if($location != 0){
  $searchjobs = DB::table( 'jobs_post_new')->select('jobs_post_new.*','cities.cities')
  ->join('cities','cities.id','=','jobs_post_new.job_location')->where('job_tittle', 'LIKE', '%'.$title.'%')
  ->Where('job_location', '=', $location)->Where('status', '=', 'Active')->get();
  }else {
      $searchjobs = DB::table( 'jobs_post_new')->select('jobs_post_new.*','cities.cities')
      ->join('cities','cities.id','=','jobs_post_new.job_location')->where('job_tittle', 'LIKE', '%'.$title.'%')->Where('status', '=', 'Active')
  ->get();

  }
  return view('Frontend/job_search_list',compact('searchjobs'));
}  

 }