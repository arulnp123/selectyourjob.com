@extends('Candidate/layouts.app')
@section('content')


   <!-- Dashboard -->
   <section class="user-dashboard">
      <div class="dashboard-outer">
        <div class="upper-title-box">
          <h3>Candidate Profile!</h3>
          <div class="text">Ready to jump back in?</div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>My Profile</h4>
                	@foreach($candidate_profile as $candprofile)
        <div class="auto-container">
          <!-- Candidate block Five -->
          <div class="candidate-block-five">
            <div class="inner-box">
              <div class="content">
                <figure class="image"><img src="{{ asset('assets/images/resource/candidate-4.png') }}  " alt=""></figure>
                <h4 class="name"><a href="#">{{ $candprofile->name }}&nbsp{{ $candprofile->last_name }}</a></h4>
                <ul class="candidate-info">
                  <li class="icon flaticon-map-locator">{{ $candprofile->state }}</li>
                  <li><span class="designation"></span>{{ $candprofile->skill_name }}</li>
                  {{-- <li><span class="icon flaticon-money"></span> $99 / hour</li>
                  <li><span class="icon flaticon-clock"></span> Member Since,Aug 19, 2020</li> --}}
                </ul>
                {{-- <ul class="post-tags">
                  <li><a href="#">App</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Digital</a></li>
                </ul> --}}
              </div>
              
              <div class="btn-box">
                <a href="#" class="theme-btn btn-style-one">Download CV</a>
                <button class="bookmark-btn"><i class="flaticon-bookmark"></i></button>
              </div>
            </div>
          </div>
        </div>
                </div>

                <div class="widget-content">
                <form action="{{ url('/edit_candidate') }}" method="post" class="default-form">
                  {{ csrf_field() }}
                      <div class="row">
				            	
                      <!-- Input -->
                      <!-- Input -->
                       <!-- Input -->
                       <div class="form-group col-lg-3 col-md-12">
                        <label>First Name</label>
                        <input type="text" name="name" placeholder="First Name" value="{{ $candprofile->name }}">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-3 col-md-12">
                        <label>Last Name</label>
                        <input type="text" name="laname" placeholder="Last Name" value="{{ $candprofile->last_name }}">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Email Address" value="{{ $candprofile->email }}">
                      </div>

                      <!-- Search Select -->
                      <div class="form-group col-lg-3 col-md-12">
                        <label>Job Alert Keywords</label>
                        <input type="text" name="jalert" placeholder="Job Alert Keywords" value="{{ $candprofile->job_alert_keywords }}">
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Job Alert Location</label>
                        <input type="text" name="jalertl" placeholder="Job Alert Location" value="{{ $candprofile->job_alert_location }}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Industry</label>
                        <select class="chosen-select" name="indusry" value="{{ $candprofile->industry }}">
                        <option>Select</option>
                          
                          <option {{ $candprofile->industry == 'Accountant' ? 'selected' : '' }}
                                value="Accountant">Accountant</option> 
                          <option value="Bank Office">Bank Office</option>
                          <option {{ $candprofile->industry == 'Accountant' ? 'selected' : '' }}
                                value="Accountant">Accountant</option> 
                          <option value="Bpo / Kpo">Bpo / Kpo</option>
                          <option {{ $candprofile->industry == 'Bpo / Kpo' ? 'selected' : '' }}
                                value="Bpo / Kpo">Bpo / Kpo</option> 
                          
                          <option {{ $candprofile->industry == 'Construction/Cement/Metal/Steel/Iron' ? 'selected' : '' }}
                                value="Construction/Cement/Metal/Steel/Iron">Construction/Cement/Metal/Steel/Iron</option> 

                         
                          <option {{ $candprofile->industry == 'Educational/Training' ? 'selected' : '' }}
                                value="Educational/Training">Educational/Training</option> 
                         
                          <option {{ $candprofile->industry == 'Entertainment/Media' ? 'selected' : '' }}
                                value="Entertainment/Media">Entertainment/Media</option> 
                          
                          <option {{ $candprofile->industry == 'Fashion/Modelling' ? 'selected' : '' }}
                                value="Fashion/Modelling">Fashion/Modelling</option> 
                          
                          <option {{ $candprofile->industry == 'Front Office' ? 'selected' : '' }}
                                value="Front Office">Front Office</option> 
                          
                          <option {{ $candprofile->industry == 'Gems & Jewellery' ? 'selected' : '' }}
                                value="Gems & Jewellery">Gems & Jewellery</option> 
                         
                          <option {{ $candprofile->industry == 'Healthcare' ? 'selected' : '' }}
                                value="Healthcare">Healthcare</option> 
                       
                          <option {{ $candprofile->industry == 'Insurance' ? 'selected' : '' }}
                                value="Insurance">Insurance</option> 
                          <option value="It Hardware">It Hardware</option>
                          <option {{ $candprofile->industry == 'It Hardware' ? 'selected' : '' }}
                                value="It Hardware">It Hardware</option> 
                        </select>
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>How did u hear about us</label>
                        <select class="chosen-select" name="hear" value="{{ $candprofile->haer_about_us }}">
                        <option>Select</option>
                        
                          <option {{ $candprofile->haer_about_us == 'News' ? 'selected' : '' }}
                                value="News">News</option>    

                                <option {{ $candprofile->haer_about_us == 'Socila Media' ? 'selected' : '' }}
                                value="Socila Media">Socila Media</option> 
                         >
                        </select>
                      </div> 

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Gender</label>
                        <select class="chosen-select" name="gender" value="{{ $candprofile->gender }}">
                          <option {{ $candprofile->gender == 'Male' ? 'selected' : '' }}
                                value="Male">Male</option>
                        <option {{ $candprofile->gender == 'Female' ? 'selected' : '' }}
                                value="Female">Female</option>
                        </select>
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Date Of Birth</label>
                        <input type="text" name="date_of_birth" placeholder= "dd/mm/yyyy" value="{{ $candprofile->date_of_birth }}">
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Mobile Number</label>
                        <input type="text" name="mnumber" placeholder="Enter Number" value="{{ $candprofile->mobile }}">
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Whatsapp _Number</label>
                        <input type="text" name="wnumber" placeholder="Enter Number" value="{{ $candprofile->whatsapp_number }}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Address</label>
                        <input type="text" name="address" placeholder="Address" value="{{ $candprofile->address }}">
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Pastol Code</label>
                        <input type="text" name="pastl" placeholder="Pastol Code" value="{{ $candprofile->pastol_code }}">
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Country</label>
                        <input type="text" name="cntry" placeholder="Country" value="{{ $candprofile->country }}"> 
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Resume Tittle</label>
                        <input type="text" name="rtitle" placeholder="Resume Tittle" value="{{ $candprofile->resume_title }}">
                      </div>


                      <div class="form-group col-lg-6 col-md-12">
                        <label>Current Employment</label>
                        <input type="text" name="cemploy" placeholder="Current Employment" value="{{ $candprofile->current_employment }}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Current Desigination</label>
                        <input type="text" name="cdesig" placeholder="Current Desigination" value="{{ $candprofile->current_desigination }}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Current Employer</label>
                        <input type="text" name="cemployer" placeholder="Current Employer" value="{{ $candprofile->current_employer }}">
                      </div>


                      <div class="form-group col-lg-3 col-md-12">
                        <label>State</label>
                        <input type="text" name="stte" placeholder="State" value="{{ $candprofile->state }}"> 
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>City</label>
                        <input type="text" name="cty" placeholder="City" value="{{ $candprofile->city }}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Experience Summary</label>
                        <input type="text" name="esumm" placeholder="Experience Summary" value="{{ $candprofile->experience_summary }}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Total Experience Years</label>
                        <input type="text" name="tey" placeholder="Experience" value="{{ $candprofile->total_experience_years }}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Relevant Experience</label>
                        <input type="text" name="reve" placeholder="Relevant Experience" value="{{ $candprofile->relevant_experience }}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Annual Salary Lakhs</label>
                        <input type="text" name="asl" placeholder="Annual Salary Lakhs" value="{{ $candprofile->annual_salary_lakhs }}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Functional Area</label>
                        <input type="text" name="farea" placeholder="Functional Area" value="{{ $candprofile->functional_area }}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Functional Role</label>
                        <input type="text" name="furole" placeholder="Functional Role" value="{{ $candprofile->functional_role }}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Skill Name</label>
                        <input type="text" name="sknmae" placeholder="Skill Name" value="{{ $candprofile->skill_name }}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Upload Resume</label>
                        <input type="text" name="upers" placeholder="Upload Resume" value="{{ $candprofile->upload_resume }}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Qualification</label>
                        <input type="text" name="qulaific" placeholder="Qualification" value="{{ $candprofile->qualification }}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Education</label>
                        <input type="text" name="educate" placeholder="Education" value="{{ $candprofile->education }}">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Institute</label>
                        <input type="text" name="institu" placeholder="Institute" value="{{ $candprofile->institute }}">
                      </div>
                    </div>
                    <div class="center ">
                      <button class="theme-btn btn-style-one">Edit</button>
                      </div>
                      <!-- Input -->
                    </div>
                    @endforeach
                    @forelse($candidate_profile as $candprofile)
    <!-- Your code to display individual candidate profiles here -->
@empty
    <!-- Handle the case when there are no candidate profiles -->
@endforelse

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