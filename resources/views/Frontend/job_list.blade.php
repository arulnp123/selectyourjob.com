@extends('Frontend.layouts.app')
@section('content')

    
    <!--Page Title-->
    <section class="page-title style-two">
      <div class="auto-container">
        <!-- Job Search Form -->
        <div class="job-search-form">
                        
          <form method="post" action="{{ route('jobsearch') }}">
             @csrf
             <div class="row">
                <div class="form-group col-lg-5 col-md-12 col-sm-12">
                   <span class="icon flaticon-search-1"></span>
                   <input type="text" name="field_name" placeholder="Job title, keywords, or company">
                </div>
                <div class="form-group col-lg-4 col-md-12 col-sm-12 location">
                  
                   <span class="icon flaticon-map-locator"></span>
                   <select name="job_location">
                      <option value="0">Select City</option>
                      @foreach($cities as $city)
                       <option value="{{ $city->id }}">{{ $city->cities }}</option>
                      
                       @endforeach
                   </select>
                  
               </div>
                <div class="form-group col-lg-3 col-md-12 col-sm-12 btn-box">
                   <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Find Jobs</span></button>
                </div>
             </div>      
          </form>
         
       </div>
        <!-- Job Search Form -->
      </div>
    </section>
    <!--End Page Title-->

    <!-- Listing Section -->
    <section class="ls-section">
      <div class="auto-container">
        <div class="filters-backdrop"></div>

        <div class="row">
          <!-- Content Column -->
          <div class="content-column col-lg-12">
            <div class="ls-outer">
              <!-- ls Switcher -->
              <div class="ls-switcher">
                <div class="showing-result">
                  <div class="top-filters">
                    <div class="form-group">
                      <select class="chosen-select">
                        <option>Job Type</option>
                        <option>New Jobs</option>
                        <option>Freelance</option>
                        <option>Full Time</option>
                        <option>Internship</option>
                        <option>Part Time</option>
                        <option>Temporary</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <select class="chosen-select">
                        <option>Date Posted</option>
                        <option>New Jobs</option>
                        <option>Freelance</option>
                        <option>Full Time</option>
                        <option>Internship</option>
                        <option>Part Time</option>
                        <option>Temporary</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <select class="chosen-select">
                        <option>Experience Level</option>
                        <option>New Jobs</option>
                        <option>Freelance</option>
                        <option>Full Time</option>
                        <option>Internship</option>
                        <option>Part Time</option>
                        <option>Temporary</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <select class="chosen-select">
                        <option>Salary estimate</option>
                        <option>New Jobs</option>
                        <option>Freelance</option>
                        <option>Full Time</option>
                        <option>Internship</option>
                        <option>Part Time</option>
                        <option>Temporary</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="sort-by">
                  <select class="chosen-select">
                    <option>New Jobs</option>
                    <option>Freelance</option>
                    <option>Full Time</option>
                    <option>Internship</option>
                    <option>Part Time</option>
                    <option>Temporary</option>
                  </select>

                  <select class="chosen-select">
                    <option>Show 10</option>
                    <option>Show 20</option>
                    <option>Show 30</option>
                    <option>Show 40</option>
                    <option>Show 50</option>
                    <option>Show 60</option>
                  </select>
                </div>
              </div>

              <div class="row wow fadeInUp">
               @foreach($job_post as $job)
               <div class="job-block col-lg-6 col-md-12 col-sm-12">
                  <div class="inner-box">
                     <div class="content">
                        <span class="company-logo"><img src="{{ URL::to('/') }}/assets/images/resource/company-logo/1-2.png" alt=""></span>
                        <h4><a href="{{ url('job_detail' ,$job->id) }}">{{ $job->job_tittle }}</a></h4>
                        <ul class="job-info">
                          <li><span class="icon flaticon-briefcase"></span>{{ $job->experience }}years</li>
                          <li><span class="icon flaticon-map-locator"></span>{{ $job->cities }}</li>
                          <li><span class="icon flaticon-clock-3"></span>{{ $job->status }}</li>
                          <li><span class="icon flaticon-money"></span>{{ $job->salary }}</li>
                      </ul>
                        <ul class="job-other-info">
                           <li class="time">Full Time</li>
                           <li class="privacy">Private</li>
                           <li class="required">Urgent</li>
                        </ul>
                        <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                     </div>
                  </div>
               </div>
                @endforeach
              </div>
              <!-- Pagination -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Listing Page Section -->
@endsection