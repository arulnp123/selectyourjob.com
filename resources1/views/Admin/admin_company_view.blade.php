@extends('admin/layouts.app')
@section('content')

 <!-- Dashboard -->
 <section class="user-dashboard">
      <div class="dashboard-outer">
        <div class="upper-title-box">
          <h3>Company Profile!</h3>
          <div class="text">Ready to jump back in?</div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>My Profile</h4>
                	@foreach($admin_company_view as $empprofile)
        <div class="auto-container">
          <!-- Candidate block Five -->
          <div class="candidate-block-five">
            <div class="inner-box">
              <div class="content">
                <figure class="image"><img src="{{ asset('assets/images/resource/candidate-4.png') }}  " alt=""></figure>
                <h4 class="name"><a href="#">{{ $empprofile->firts_name }}&nbsp{{ $empprofile->last_name }}</a></h4>
                <ul class="candidate-info">
                  <li class="designation">{{ $empprofile->what_describes_you_the_best }}</li>
                  <li><span class="icon flaticon-map-locator"></span>{{ $empprofile->location }}</li>
                  {{-- <li><span class="icon flaticon-money"></span> $99 / hour</li>
                  <li><span class="icon flaticon-clock"></span> Member Since,Aug 19, 2020</li> --}}
                </ul>
                {{-- <ul class="post-tags">
                  <li><a href="#">App</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Digital</a></li>
                </ul> --}}
              </div>

              {{-- <div class="btn-box">
                <a href="#" class="theme-btn btn-style-one">Download CV</a>
                <button class="bookmark-btn"><i class="flaticon-bookmark"></i></button>
              </div> --}}
            </div>
          </div>
        </div>
      
                </div>

                <div class="widget-content">

                  <div class="uploading-outer">
                  

                  <div class="uploading-outer">
                  

                  <form action="{{ url('/editemployer') }}" method="post" class="default-form">
                  {{ csrf_field() }}
                      <div class="row">
				            
                      <!-- Input -->
                 
                      <div class="form-group col-lg-6 col-md-12">
                        <label>First Name</label>
                        <input type="text" name="name" value="{{ $empprofile->firts_name }}">
                      </div>
					
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Last Name</label>
                        <input type="text" name="laname" value="{{ $empprofile->last_name }}">
                      </div>
                   
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Email</label>
                        <input type="text" name="email" value="{{ $empprofile->email }}">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Desigination</label>
                        <input type="text" name="desig" value="{{ $empprofile->desigination }}">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                      <label>How did u hear about us</label>
                      <select class="chosen-select" type="text" name="hear" value="{{ $empprofile->reference }}">
                        <option {{ $empprofile->reference == 'None' ? 'selected' : '' }}
                          value="None">None</option>
                       <option {{ $empprofile->reference == 'News' ? 'selected' : '' }}
                                value="News">News</option>
                            <option {{ $empprofile->reference == 'Socila Media' ? 'selected' : '' }}
                                value="Socila Media">Socila Media</option>
                        </select>
                      </div>

                     <!-- Input -->
                     <div class="form-group col-lg-6 col-md-12">
                        <label>Name Of The Company</label>
                        <input type="text" name="nameof" value="{{ $empprofile->name_of_the_company }}">
                      </div>

                      <!-- About Company -->
                      <div class="form-group col-lg-12 col-md-12">
                        <label>Company Description</label>
                        <input type="text" name="comdes" value="{{ $empprofile->company_description }}">
                      </div>
                      <!-- Input -->
                     
                      <div class="form-group col-lg-6 col-md-12">
                        <label>What Describes You The Best</label>
                          <select class="chosen-select" name="describes" type="text" value="{{ $empprofile->what_describes_you_the_best }}">		
						    <option {{ $empprofile->what_describes_you_the_best == 'Corporate Employer' ? 'selected' : '' }}
                                value="Corporate Employer">Corporate Employer</option>
                            <option {{ $empprofile->what_describes_you_the_best == 'Placement Agency / Recruiter' ? 'selected' : '' }}
                                value="Placement Agency / Recruiter">Placement Agency / Recruiter</option>
                        </select>
                      </div>
                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Website</label>
                        <input type="text" name="webs" value="{{ $empprofile->website }}">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Phone</label>
                        <input type="text" name="pho" value="{{ $empprofile->phone }}">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Location</label>
                        <select class="chosen-select" type="text" name="loct" value="{{ $empprofile->location }}">
                                <option {{ $empprofile->location == 'India' ? 'selected' : '' }}
                                value="India"> India</option>
                                <option {{ $empprofile->location == 'USA' ? 'selected' : '' }}
                                value="USA">USA</option>
                                <option {{ $empprofile->location == 'Russia' ? 'selected' : '' }}
                                value="Russia">Russia</option>
                                <option {{ $empprofile->location == 'New York' ? 'selected' : '' }}
                                value="New York">New York</option>
                        </select>
                      </div>
                          <!-- Input -->
                          <div class="form-group col-lg-6 col-md-12">
                        <label>Address</label>
                        <input type="text" name="adres" type="text" value="{{ $empprofile->address }}">
                      </div>
                         <!-- Input -->
                         <div class="form-group col-lg-6 col-md-12">
                        <label>Industry</label>
                        <select class="chosen-select" name="indusry" type="text" >
                                <option {{ $empprofile->industry == 'Accountant' ? 'selected' : '' }}
                                value="Accountant">Accountant</option>
                                <option {{ $empprofile->industry == 'Bank Office' ? 'selected' : '' }}
                                value="Bank Office">Bank Office</option>
                                <option {{ $empprofile->industry == 'Bpo / Kpo' ? 'selected' : '' }}
                                value="Bpo / Kpo">Bpo / Kpo</option>
                                <option {{ $empprofile->industry == 'Construction/Cement/Metal/Steel/Iron' ? 'selected' : '' }}
                                value="Construction/Cement/Metal/Steel/Iron">Construction/Cement/Metal/Steel/Iron</option>
                                <option {{ $empprofile->industry == 'Educational/Training' ? 'selected' : '' }}
                                value="Educational/Training">Educational/Training</option>
                                <option {{ $empprofile->industry == 'Entertainment/Media' ? 'selected' : '' }}
                                value="Entertainment/Media">Entertainment/Media</option>
                                <option {{ $empprofile->industry == 'Fashion/Modelling' ? 'selected' : '' }}
                                value="Fashion/Modelling">Fashion/Modelling</option>
                                <option {{ $empprofile->industry == 'Front Office' ? 'selected' : '' }}
                                value="Front Office">Front Office</option>
                                <option {{ $empprofile->industry == 'Gems & Jewellery' ? 'selected' : '' }}
                                value="Gems & Jewellery">Gems & Jewellery</option>
                                <option {{ $empprofile->industry == 'Healthcare' ? 'selected' : '' }}
                                value="Healthcare">Healthcare</option>
                                <option {{ $empprofile->industry == 'Insurance' ? 'selected' : '' }}
                                value="Insurance">Insurance</option>
                                <option {{ $empprofile->industry == 'It Hardware' ? 'selected' : '' }}
                                value="It Hardware">It Hardware</option>


                        
                        </select>

                        
                      </div>

                         <!-- Input -->
                         <div class="form-group col-lg-6 col-md-12">
                        <label>Company Business</label>
                        <input type="text" name="compass"  value="{{ $empprofile->company_business }}" >
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Job Posting</label>
                        <select class="chosen-select" name="jobpo" type="text">
                                <option {{ $empprofile->job_posting == 'Paid' ? 'selected' : '' }}
                                value="Paid">Paid</option>
                                <option {{ $empprofile->job_posting == 'Free' ? 'selected' : '' }}
                                value="Free">Free</option>
                        </select>
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Resume Database Access</label>
                        <select class="chosen-select" name="resudata" type="text" value="{{ $empprofile->resume_database_access }}">
                        <option {{ $empprofile->resume_database_access == 'Paid' ? 'selected' : '' }}
                                value="Paid">Paid</option>
                                <option {{ $empprofile->resume_database_access == 'Free' ? 'selected' : '' }}
                                value="Free">Free</option>
                        </select>
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Premium Profile Display</label>
                        <select class="chosen-select" name="premipro" type="text" value="{{ $empprofile->premium_profile_display }}">
                        <option {{ $empprofile->premium_profile_display == 'Paid' ? 'selected' : '' }}
                                value="Paid">Paid</option>
                                <option {{ $empprofile->premium_profile_display == 'Free' ? 'selected' : '' }}
                                value="Free">Free</option>
                        </select>
                      </div>

                      <!-- Input -->
                      {{-- <div class="form-group col-lg-12 col-md-12">
                        <button class="theme-btn btn-style-one">Save</button>
                      </div> --}}
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