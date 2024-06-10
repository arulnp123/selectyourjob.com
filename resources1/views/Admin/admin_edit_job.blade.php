@extends('Admin/layouts.app')
@section('content')



    <!-- Dashboard -->
    <section class="user-dashboard">
      <div class="dashboard-outer">
        <div class="upper-title-box">
          <h3>Edit Job!</h3>
          <div class="text">Ready to jump back in?</div>
        </div>
                    
        <div class="row">
          <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>Edit Job</h4>
                </div>

                <div class="widget-content">

                  <div class="post-job-steps">
                    <div class="step">
                      <span class="icon flaticon-briefcase"></span>
                      <h5>Job Detail</h5>
                    </div>

                    <div class="step">
                      <span class="icon flaticon-money"></span>
                      <h5>Package & Payments</h5>
                    </div>

                    <div class="step">
                      <span class="icon flaticon-checked"></span>
                      <h5>Confirmation</h5>
                    </div>
                  </div>


                 
                 
                  <form action="{{ url('/admin_updatejob_post') }}" method="post" class="default-form" enctype="multi" > 
                  {{ csrf_field() }}
                  @foreach($admin_edit_job as $editjob)
                    <div class="row">
                        <input type="hidden" name="id" value="{{$editjob->id}}">
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Company  Name</label>
                        <input type="text" value="{{ $editjob->company_name }}" name="cname" placeholder="company name">
                      </div>
                      
                      
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Job Tittle</label>
                        <input type="text" value="{{ $editjob->job_tittle }}" name="jtittle" placeholder="Job tittle">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Company Location</label>
                        <input type="text" value="{{ $editjob->company_location }}" name="clocat" placeholder="company location">
                      </div>

                      <!-- About Company -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Job Location</label>
                        <input type="text" value="{{ $editjob->job_location }}" name="jlocat" placeholder="Job location">
                      </div>


                       <!-- Input -->
                       <div class="form-group col-lg-6 col-md-12">
                        <label>Phone</label>
                        <input type="text" value="{{ $editjob->phone }}" name="phone" placeholder="phone number">
                      </div>

                       <!-- Input -->
                       <div class="form-group col-lg-6 col-md-12">
                        <label>Email</label>
                        <input type="text" value="{{ $editjob->email }}" name="email" placeholder="email">
                      </div>

                       <!-- About Company -->
                       <div class="form-group col-lg-12 col-md-12">
                        <label>Job Description</label>
                        <textarea type="text" value="{{ $editjob->Job_description }}" name="jobdesc" placeholder="job description"></textarea>
                      </div>

                        <!-- About Company -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Key Responsibilities</label>
                        <textarea type="text" value="{{ $editjob->Key_responsibilities }}" name="keyres" placeholder="Key Responsibilities"></textarea>
                      </div>

                       <!-- Input -->
                       <div class="form-group col-lg-6 col-md-12">
                        <label>Skill & Experience</label>
                        <textarea type="text" name="skillres" placeholder="Skill & Experience">{{ $editjob->Skill_experience }}</textarea>
                      </div>
                    
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Job Type</label>
                        <select class="chosen-select"name="jtype" type="text" value="{{ $editjob->Job_type }}"  placeholder="job type">
                          <option value="Full Time">Full Time</option>
                          <option value="Part Time">Part Time</option>
                          <option value="Temporary">Temporary</option>
                        </select>
                      </div>

                      <!-- Search Select -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Job Category </label>
                        <select class="chosen-select"name="jcateg" type="text" value="{{ $editjob->job_category }}"  placeholder="job category">
                          <option value="Banking">Banking</option>
                          <option value="Digital&Creative">Digital & Creative</option>
                          <option value="Retail">Retail</option>
                          <option value="Human Resources">Human Resources</option>
                          <option value="Management">Management</option>
                        </select>
                      </div>

                     

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Skills Needed</label>
                        <input type="text" value="{{ $editjob->skills_needed }}" name="skillneed" placeholder="php,java,html,.................">
                      </div>

                        <!-- About Company -->
                        <div class="form-group col-lg-6 col-md-12">
                        <label>Experience</label>
                        <input type="text" value="{{ $editjob->experience }}" name="expere" placeholder="0-0">
                      </div>

                      <div class="form-group col-lg-4 col-md-12">
                        <label>Gender</label>
                        <select class="chosen-select"name="gend" type="text" value="{{ $editjob->gender }}"  placeholder="gender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                          <option value="Other">Other</option>
                        </select>
                      </div>

                      <!-- About Company -->
                      <div class="form-group col-lg-4 col-md-12">
                        <label>Posistion Available</label>
                        <input type="text" value="{{ $editjob->position_available }}" name="posavail" placeholder="number of candidates needed ">
                      </div>

                       <!-- Input -->
                       <div class="form-group col-lg-6 col-md-12">
                        <label>Application Deadline Date</label>
                        <input type="text" value="{{ $editjob->deadline_date }}" name="deadline" placeholder="DD.MM.YYYY">
                      </div>

                       <!-- Input -->
                       <div class="form-group col-lg-6 col-md-12">
                        <label>Salary</label>
                        <input type="text" value="{{ $editjob->salary }}" name="salary" placeholder="1k-2k">
                      </div>

                       <!-- Input -->
                       <div class="form-group col-lg-6 col-md-12">
                        <label>Company Websites (optional)</label>
                        <input type="text" value="{{ $editjob->websites }}" name="webs" placeholder="Websites name">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Job Sector</label>
                        <select class="chosen-select"name="jobsec" type="text" value="{{ $editjob->job_sector }}"  placeholder="job category">
                          <option value="Private">Private</option>
                          <option value="Government">Government</option>
                        </select>
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Industry</label>
                        <select class="chosen-select"name="induistr" type="text" value="{{ $editjob->industry }}"  placeholder="job category">
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>
                          <option value="Banking">Banking</option>

                         
                        </select>
                      </div>
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Qualification</label>
                        <select class="chosen-select"name="qualif" type="text" value="{{ $editjob->qualification }}"  placeholder="Qualification">
                          <option value="Banking">B.E</option>
                          <option value="Digital & Creative">Any Degeree</option>
                          <option value="Retail">B.E Civil</option>
                          <option value="Human Resources">B.E Mechanical</option>
                          <option value="Management">Diplamo Electronics</option>
                        </select>
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Country</label>
                        <select class="chosen-select"name="count" type="text" value="{{ $editjob->country }}"  placeholder="Country">
                          <option value="India">India</option>
                          <option value="Australia">Australia</option>
                          <option value="Pakistan">Pakistan</option>
                          <option value="Chaina">Chaina</option>
                          <option value="Japan">Japan</option>
                        </select>
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-12 col-md-12">
                        <label>Complete Address</label>
                        <input type="text" value="{{ $editjob->complete_address }}" name="caddres" placeholder="Address">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-12 col-md-12 text-right">
                        <button class="theme-btn btn-style-one">Submit</button>
                      </div>
                    </div>
                    @endforeach
                  </form>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
    <!-- End Dashboard -->




@endsection