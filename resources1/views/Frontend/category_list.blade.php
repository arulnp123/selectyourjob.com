@extends('Frontend.layouts.app')
@section('content')


    <!--Page Title-->
    <section class="page-title style-two">
      <div class="auto-container">
        <!-- <div class="title-outer">
                <h1>Find Jobs</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Jobs</li>
                </ul> 
            </div> -->

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

          <!-- Filters Column -->
          <div class="filters-column col-lg-4 col-md-12 col-sm-12">
            <div class="inner-column">
              <div class="filters-outer">
                <button type="button" class="theme-btn close-filters">X</button>

                <!-- Switchbox Outer -->
                <div class="switchbox-outer">
                  <h4>Job type</h4>
                  <ul class="switchbox">
                    <li>
                      <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                        <span class="title">Freelance</span>
                      </label>
                    </li>
                    <li>
                      <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                        <span class="title">Full Time</span>
                      </label>
                    </li>
                    <li>
                      <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                        <span class="title">Internship</span>
                      </label>
                    </li>
                    <li>
                      <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                        <span class="title">Part Time</span>
                      </label>
                    </li>
                    <li>
                      <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                        <span class="title">Temporary</span>
                      </label>
                    </li>
                  </ul>
                </div>

                <!-- Checkboxes Ouer -->
                <div class="checkbox-outer">
                  <h4>Date Posted</h4>
                  <ul class="checkboxes">
                    <li>
                      <input id="check-f" type="checkbox" name="check">
                      <label for="check-f">All</label>
                    </li>
                    <li>
                      <input id="check-a" type="checkbox" name="check">
                      <label for="check-a">Last Hour</label>
                    </li>
                    <li>
                      <input id="check-b" type="checkbox" name="check">
                      <label for="check-b">Last 24 Hours</label>
                    </li>
                    <li>
                      <input id="check-c" type="checkbox" name="check">
                      <label for="check-c">Last 7 Days</label>
                    </li>
                    <li>
                      <input id="check-d" type="checkbox" name="check">
                      <label for="check-d">Last 14 Days</label>
                    </li>
                    <li>
                      <input id="check-e" type="checkbox" name="check">
                      <label for="check-e">Last 30 Days</label>
                    </li>
                  </ul>
                </div>

                <!-- Checkboxes Ouer -->
                <div class="checkbox-outer">
                  <h4>Experience Level</h4>
                  <ul class="checkboxes square">
                    <li>
                      <input id="check-ba" type="checkbox" name="check">
                      <label for="check-ba">All</label>
                    </li>
                    <li>
                      <input id="check-bb" type="checkbox" name="check">
                      <label for="check-bb">Internship</label>
                    </li>
                    <li>
                      <input id="check-bc" type="checkbox" name="check">
                      <label for="check-bc">Entry level</label>
                    </li>
                    <li>
                      <input id="check-bd" type="checkbox" name="check">
                      <label for="check-bd">Associate</label>
                    </li>
                    <li>
                      <input id="check-be" type="checkbox" name="check">
                      <label for="check-be">Mid-Senior level4</label>
                    </li>
                    <li>
                      <button class="view-more"><span class="icon flaticon-plus"></span> View More</button>
                    </li>
                  </ul>
                </div>

                <!-- Filter Block -->
                <div class="filter-block">
                  <h4>Salary</h4>

                  <div class="range-slider-one salary-range">
                    <div class="salary-range-slider"></div>
                    <div class="input-outer">
                      <div class="amount-outer">
                        <span class="amount salary-amount">
                          $<span class="min">0</span>
                          $<span class="max">0</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Filter Block -->
                <div class="filter-block">
                  <h4>Tags</h4>
                  <ul class="tags-style-one">
                    <li><a href="#">app</a></li>
                    <li><a href="#">administrative</a></li>
                    <li><a href="#">android</a></li>
                    <li><a href="#">wordpress</a></li>
                    <li><a href="#">design</a></li>
                    <li><a href="#">react</a></li>
                  </ul>
                </div>
              </div>

              <!-- Call To Action -->
              <div class="call-to-action-four">
                <h5>Recruiting?</h5>
                <p>Advertise your jobs to millions of monthly users and search 15.8 million CVs in our database.</p>
                <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Start Recruiting Now</span></a>
                <div class="image" style="background-image: url(images/resource/ads-bg-4.png);"></div>
              </div>
              <!-- End Call To Action -->
            </div>
          </div>

          <!-- Content Column -->
          <div class="content-column col-lg-8 col-md-12 col-sm-12">
            <div class="ls-outer">
              <button type="button" class="theme-btn btn-style-two toggle-filters">Show Filters</button>

              <!-- ls Switcher -->
              <div class="ls-switcher">
                <div class="showing-result">
                  <div class="text">Showing <strong>41-60</strong> of <strong>944</strong> jobs</div>
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

              <h3 style="text-align: center">  {{ $name }} </h3>
              <!-- Job Block -->
              <div class="row wow fadeInUp">
                @foreach($category as $cat)
                <div class="job-block ">
                   <div class="inner-box">
                      <div class="content">
                         <span class="company-logo"><img src="{{ URL::to('/') }}/assets/images/resource/company-logo/1-2.png" alt=""></span>
                         <h4><a href="{{ url('job_detail' ,$cat->id) }}">{{ $cat->job_tittle }}</a></h4>
                         <ul class="job-info">
                            <li><span class="icon flaticon-briefcase"></span>{{ $cat->experience }}</li>
                            <li><span class="icon flaticon-map-locator"></span>{{ $cat->job_location }}</li>
                            <li><span class="icon flaticon-clock-3"></span>{{ $cat->status }}</li>
                            <li><span class="icon flaticon-money"></span>{{ $cat->salary }}</li>
                         </ul>
                         <ul class="job-other-info">
                            <li class="time">{{ $cat->Job_type }}</li>
                            <li class="privacy">{{ $cat->job_sector }}</li>
                            <li class="required">Urgent</li>
                         </ul>
                         <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                      </div>
                   </div>
                </div>
                 @endforeach
               </div>

              <!-- Job Block -->
             


              <!-- Pagination -->
              <nav class="ls-pagination">
                <ul>
                  <li class="prev"><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li><a href="#" class="current-page">2</a></li>
                  <li><a href="#">3</a></li>
                  <li class="next"><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Listing Page Section -->


@endsection