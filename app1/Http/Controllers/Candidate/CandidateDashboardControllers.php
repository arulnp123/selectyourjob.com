<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function applicants(){
 
      return view( 'Admin/dashboard-applicants');
 }  
 

 public function company_profile(){
 
    return view( 'Admin/dashboard-applicants');
} 



 }