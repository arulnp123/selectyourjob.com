<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'users:admin'])->group(function () {
    Route::get('/admin_dashboard',[App\Http\Controllers\Frontend\AdminController::class, 'admin_dashboard'])->name('admin_dashboard');
    // Add other admin routes here
});

// Routes accessible only to employers
Route::middleware(['auth', 'users:employer'])->group(function () {
    Route::get('/employer_dashboard',[App\Http\Controllers\Frontend\EmployerController::class, 'employer_dashboard'])->name('employer_dashboard');
    // Add other employer routes here
});

// Routes accessible only to candidates
Route::middleware(['auth', 'users:candidate'])->group(function () {
    Route::get('/candidate_dashboard',[App\Http\Controllers\Frontend\CandidateController::class, 'candidate_dashboard'])->name('candidate_dashboard');
    // Add other candidate routes here
});


Route::get('/home', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');

Route::get('/interview_questions', [App\Http\Controllers\Frontend\HomeController::class, 'interview_questions'])->name('interview_questions');

Route::get('/android_ques', [App\Http\Controllers\Frontend\HomeController::class, 'android_ques'])->name('android_ques');

Route::get('/php_ques', [App\Http\Controllers\Frontend\HomeController::class, 'php_ques'])->name('php_ques');

Route::get('/python_ques', [App\Http\Controllers\Frontend\HomeController::class, 'python_ques'])->name('python_ques');

Route::get('/pyspoke_ques', [App\Http\Controllers\Frontend\HomeController::class, 'pyspoke_ques'])->name('pyspoke_ques');

Route::get('/sql_ques', [App\Http\Controllers\Frontend\HomeController::class, 'sql_ques'])->name('sql_ques');

Route::get('/java_ques', [App\Http\Controllers\Frontend\HomeController::class, 'java_ques'])->name('java_ques');

Route::get('/angular_ques', [App\Http\Controllers\Frontend\HomeController::class, 'angular_ques'])->name('angular_ques');

Route::get('/oracle_ques', [App\Http\Controllers\Frontend\HomeController::class, 'oracle_ques'])->name('oracle_ques');

Route::get('/snowflex_ques', [App\Http\Controllers\Frontend\HomeController::class, 'snowflex_ques'])->name('snowflex_ques');

Route::get('/nosql_ques', [App\Http\Controllers\Frontend\HomeController::class, 'nosql_ques'])->name('nosql_ques');

Route::get('/html_ques', [App\Http\Controllers\Frontend\HomeController::class, 'html_ques'])->name('html_ques');

Route::get('/css_ques', [App\Http\Controllers\Frontend\HomeController::class, 'css_ques'])->name('css_ques');

Route::get('/react_ques', [App\Http\Controllers\Frontend\HomeController::class, 'react_ques'])->name('react_ques');

Route::get('/flutter_ques', [App\Http\Controllers\Frontend\HomeController::class, 'flutter_ques'])->name('flutter_ques');

Route::get('/framework7_ques', [App\Http\Controllers\Frontend\HomeController::class, 'framework7_ques'])->name('framework7_ques');

Route::get('/xamarin_ques', [App\Http\Controllers\Frontend\HomeController::class, 'xamarin_ques'])->name('xamarin_ques');
Route::get('/category/{id}', [App\Http\Controllers\Frontend\HomeController::class, 'category_list'])->name('category');

Route::get('/job_search_list', [App\Http\Controllers\Frontend\HomeController::class, 'job_search_list'])->name('job_search_list');

Route::post('/jobsearch', [App\Http\Controllers\Frontend\HomeController::class, 'jobsearch'])->name('jobsearch');

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');

Route::get('/android_ques', [App\Http\Controllers\Frontend\HomeController::class, 'android_ques'])->name('android_ques');



Route::get('/employerlogin', [App\Http\Controllers\Frontend\EmployerController::class, 'employerlogin'])->name('employerlogin');

Route::get('/employers_register', [App\Http\Controllers\Frontend\EmployerController::class, 'employers_register'])->name('employers_register');

Route::get('/employerprofile', [App\Http\Controllers\Employer\EmployerController::class, 'employerprofile'])->name('employerprofile');

Route::get('/employer_change_password', [App\Http\Controllers\Employer\EmployerController::class, 'employer_change_password'])->name('employer_change_password');

Route::get('/edit_job_post/{id}', [App\Http\Controllers\Employer\EmployerController::class, 'edit_job_post'])->name('edit_job_post');

Route::post('/updatejob_post', [App\Http\Controllers\Employer\EmployerController::class, 'updatejob_post'])->name('updatejob_post');

Route::post('/editemployer', [App\Http\Controllers\Employer\EmployerController::class, 'editemployer'])->name('editemployer');

Route::post('/edit_candidate', [App\Http\Controllers\Candidate\candidateController::class, 'edit_candidate'])->name('edit_candidate');

Route::post('/checkemployerlogin', [App\Http\Controllers\Frontend\EmployerController::class, 'checkemployerlogin'])->name('checkemployerlogin');

Route::get('/candidate_register', [App\Http\Controllers\Frontend\CandidateController::class, 'candidate_register'])->name('candidate_register');



Route::get('/candidatelogin', [App\Http\Controllers\Frontend\CandidateController::class, 'candidatelogin'])->name('candidatelogin');

Route::post('/checkcandidatelogin', [App\Http\Controllers\Frontend\CandidateController::class, 'checkcandidatelogin'])->name('checkcandidatelogin');

Route::get('/candidate_dashboard', [App\Http\Controllers\Frontend\CandidateController::class, 'candidate_dashboard'])->name('candidate_dashboard');

Route::get('/logout', [App\Http\Controllers\Frontend\EmployerController::class, 'logout'])->name('logout');


Route::post('/addemployers', [App\Http\Controllers\Frontend\EmployerController::class, 'addemployers'])->name('addemployers');

Route::post('/employer_post_jobs', [App\Http\Controllers\Employer\EmployerController::class, 'employer_post_jobs'])->name('employer_post_jobs');

Route::post('/addcandidates', [App\Http\Controllers\Frontend\CandidateController::class, 'addcandidates'])->name('addcandidates');




Route::get('/employers', [App\Http\Controllers\Frontend\EmployerController::class, 'employers'])->name('employers');

Route::get('/candidates', [App\Http\Controllers\Frontend\CandidateController::class, 'candidates'])->name('candidates');


Route::get('/job_list', [App\Http\Controllers\Frontend\joblistController::class, 'job_list'])->name('job_list');

Route::get('/job_detail/{id}', [App\Http\Controllers\Frontend\joblistController::class, 'job_detail'])->name('job_detail');




Route::get('/delete/{id}', [App\Http\Controllers\Employer\EmployerController::class, 'delete'])->name('employer_manage_job');







Route::get('/admin_company_view/{id}', [App\Http\Controllers\Admin\AdminController::class, 'admin_company_view'])->name('admin_company_view');


Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'admin'])->name('admin');
Route::get('/dashboard_admin', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_admin'])->name('dashboard_admin');
Route::get('/adminlogout', [App\Http\Controllers\Admin\AdminController::class, 'adminlogout'])->name('adminlogout');

Route::get('/admin_manage_job', [App\Http\Controllers\Admin\AdminController::class, 'admin_manage_job'])->name('admin_manage_job');
Route::get('/approvejob/{id}', [App\Http\Controllers\Admin\AdminController::class, 'approvejob'])->name('approvejob');

Route::get('/approve_employer/{id}', [App\Http\Controllers\Admin\AdminController::class, 'approve_employer'])->name('approve_employer');

Route::get('/view_companies', [App\Http\Controllers\Admin\AdminController::class, 'view_companies'])->name('view_companies');

Route::get('/rejectjob/{id}', [App\Http\Controllers\Admin\AdminController::class, 'rejectjob'])->name('rejectjob');

Route::get('/dashboard_post_job', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_post_job'])->name('dashboard_post_job');

Route::get('/dashboard_packages', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_packages'])->name('dashboard_packages');

Route::get('/dashboard_applicants', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_applicants'])->name('dashboard_applicants');

Route::get('/dashboard_messages', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_messages'])->name('dashboard_messages');

Route::get('/dashboard_resume_alerts', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_resume_alerts'])->name('dashboard_resume_alerts');

Route::get('/dashboard_change_password', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_change_password'])->name('dashboard_change_password');

Route::get('/dashboard_view_profile', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_view_profile'])->name('dashboard_view_profile');

Route::get('/dashboard_company_profile', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_company_profile'])->name('dashboard_company_profile');

Route::get('/adminlogin', [App\Http\Controllers\Admin\AdminController::class, 'adminlogin'])->name('adminlogin');

Route::post('/checkadminlogin', [App\Http\Controllers\Admin\AdminController::class, 'checkadminlogin'])->name('checkadminlogin');

Route::post('/useradmin', [App\Http\Controllers\Admin\AdminController::class, 'useradmin'])->name('useradmin');
Route::get('/admin_register', [App\Http\Controllers\Admin\AdminController::class, 'admin_register'])->name('admin_register');

Route::post('/admin_post_jobs', [App\Http\Controllers\Admin\AdminController::class, 'admin_post_jobs'])->name('admin_post_jobs');


Route::get('/dashboard_education', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_education'])->name('dashboard_education');

Route::get('/dashboard_industries', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_industries'])->name('dashboard_industries');

Route::get('/dashboard_category', [App\Http\Controllers\Admin\AdminController::class, 'dashboard_category'])->name('dashboard_category');

Route::get('/addcategory', [App\Http\Controllers\Admin\AdminController::class, 'addcategory'])->name('addcategory');

Route::get('/addindustries', [App\Http\Controllers\Admin\AdminController::class, 'addindustries'])->name('addindustries');

Route::get('/addeducation', [App\Http\Controllers\Admin\AdminController::class, 'addeducation'])->name('addeducation');

Route::post('/add_category', [App\Http\Controllers\Admin\AdminController::class, 'add_category'])->name('add_category');

Route::post('/add_education', [App\Http\Controllers\Admin\AdminController::class, 'add_industries'])->name('add_industries');

Route::post('/add_industries', [App\Http\Controllers\Admin\AdminController::class, 'add_education'])->name('add_education');

Route::post('/adminlogin', [App\Http\Controllers\Frontend\AdminController::class, 'adminlogin'])->name('adminlogin');

Route::get('/admin_profile', [App\Http\Controllers\Admin\AdminController::class, 'admin_profile'])->name('admin_profile');

Route::get('/admin_button', [App\Http\Controllers\Admin\AdminController::class, 'admin_button'])->name('admin_button');

Route::get('/add_admin_button', [App\Http\Controllers\Admin\AdminController::class, 'add_admin_button'])->name('add_admin_button');

Route::get('/edit_admin/{id}', [App\Http\Controllers\Admin\AdminController::class, 'edit_admin'])->name('edit_admin');

Route::get('/admin_edit_job/{id}', [App\Http\Controllers\Admin\AdminController::class, 'admin_edit_job'])->name('admin_edit_job');

Route::post('/admin_updatejob_post', [App\Http\Controllers\Admin\AdminController::class, 'admin_updatejob_post'])->name('admin_updatejob_post');

Route::get('/admin_job_lists', [App\Http\Controllers\Admin\AdminController::class, 'admin_job_lists'])->name('admin_job_lists');

Route::get('/companyApproval', [App\Http\Controllers\Admin\AdminController::class, 'companyApproval'])->name('companyApproval');

Route::get('/add_location', [App\Http\Controllers\Admin\AdminController::class, 'add_location'])->name('add_location');

Route::get('/job_location', [App\Http\Controllers\Admin\AdminController::class, 'job_location'])->name('job_location');

Route::get('/addlocation', [App\Http\Controllers\Admin\AdminController::class, 'addlocation'])->name('addlocation');





Route::get('/employer_dashboard', [App\Http\Controllers\Frontend\EmployerController::class, 'employer_dashboard'])->name('employer_dashboard');

Route::get('/employer_dashboard', [App\Http\Controllers\Employer\EmployerController::class, 'employer_dashboard'])->name('employer_dashboard');

Route::get('/dashboard', [App\Http\Controllers\Employer\EmployerController::class, 'admin'])->name('dashboard');

Route::get('/emplogout', [App\Http\Controllers\Employer\EmployerController::class, 'emplogout'])->name('emplogout');

Route::get('/employer_company_profile', [App\Http\Controllers\Employer\EmployerController::class, 'employer_company_profile'])->name('dashboard');

Route::get('/employer_post_job', [App\Http\Controllers\Employer\EmployerController::class, 'employer_post_job'])->name('dashboard');

Route::get('/employer_bulck_post_job', [App\Http\Controllers\Employer\EmployerController::class, 'employer_bulck_post_job'])->name('dashboard');

Route::get('/employer_manage_job', [App\Http\Controllers\Employer\EmployerController::class, 'employer_manage_job'])->name('dashboard');

Route::get('/employer_applicants', [App\Http\Controllers\Employer\EmployerController::class, 'employer_applicants'])->name('dashboard');

Route::get('/employer_resumes_shortlisted', [App\Http\Controllers\Employer\EmployerController::class, 'employer_resumes_shortlisted'])->name('dashboard');

Route::get('/employer_packages', [App\Http\Controllers\Employer\EmployerController::class, 'employer_packages'])->name('dashboard');

Route::get('/employer_messages', [App\Http\Controllers\Employer\EmployerController::class, 'employer_messages'])->name('dashboard');

Route::get('/employer_resume', [App\Http\Controllers\Employer\EmployerController::class, 'employer_resume'])->name('dashboard');

Route::get('/employer_change_password', [App\Http\Controllers\Employer\EmployerController::class, 'employer_change_password'])->name('dashboard');

Route::get('/employer_view_profile', [App\Http\Controllers\Employer\EmployerController::class, 'employer_view_profile'])->name('dashboard');

Route::get('/edit_job_post', [App\Http\Controllers\Employer\EmployerController::class, 'edit_job_post'])->name('dashboard');

Route::post('/bulkjobpost', [App\Http\Controllers\Employer\EmployerController::class, 'jobimport'])->name('bulkjobpost');







Route::get('/candidate_dashboard', [App\Http\Controllers\Candidate\CandidateController::class, 'candidate_dashboard'])->name('candidate_dashboard');

Route::get('/dashboard', [App\Http\Controllers\Candidate\CandidateController::class, 'admin'])->name('dashboard');

Route::get('/candidate_company_profile', [App\Http\Controllers\Candidate\CandidateController::class, 'candidate_company_profile'])->name('candidate_company_profile');


Route::get('/candidate_post_job', [App\Http\Controllers\Candidate\CandidateController::class, 'candidate_post_job'])->name('dashboard');

Route::get('/candidate_manage_job', [App\Http\Controllers\Candidate\CandidateController::class, 'candidate_manage_job'])->name('dashboard');

Route::get('/candidate_applicants', [App\Http\Controllers\Candidate\CandidateController::class, 'candidate_applicants'])->name('dashboard');

Route::get('/candidate_resumes_shortlisted', [App\Http\Controllers\Candidate\CandidateController::class, 'candidate_resumes_shortlisted'])->name('dashboard');

Route::get('/candidate_packages', [App\Http\Controllers\Candidate\CandidateController::class, 'candidate_packages'])->name('dashboard');

Route::get('/candidate_messages', [App\Http\Controllers\Candidate\CandidateController::class, 'candidate_messages'])->name('dashboard');

Route::get('/candidate_resume', [App\Http\Controllers\Candidate\CandidateController::class, 'candidate_resume'])->name('dashboard');

Route::post('/saveapplication', [App\Http\Controllers\Frontend\joblistController::class, 'saveapplication'])->name('saveapplication');



Route::get('/candidate_view_profile', [App\Http\Controllers\Candidate\CandidateController::class, 'candidate_view_profile'])->name('dashboard');






Route::get('/java_skill', [App\Http\Controllers\Frontend\HomeController::class, 'java_skill'])->name('java_skill');

Route::get('/php_skill', [App\Http\Controllers\Frontend\HomeController::class, 'php_skill'])->name('php_skill');

