@extends('Frontend.layouts.app')
@section('content')
<br>&nbsp<br>
    <!-- Job Detail Section -->
    <section class="job-detail-section">
      <div class="job-detail-outer">
        <div class="auto-container">
        @foreach($jobdetail as $detail)
          <div class="row">
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
              <div class="job-block-outer">
                <!-- Job Block -->
                 <!-- Job Block -->
                 <div class="job-block-seven">
                  <div class="inner-box">
                    <div class="content">
                      <span class="company-logo"><img src="{{ URL::to('/') }}/assets/images/resource/company-logo/1-2.png" alt=""></span>
                      <h4><a href="#">{{ $detail->job_tittle }}</a></h4>
                      <ul class="job-info">
                           <li><span class="icon flaticon-briefcase"></span>{{ $detail->experience }}</li>
                           <li><span class="icon flaticon-map-locator"></span>{{ $detail->cities }}</li>
                           <li><span class="icon flaticon-clock-3"></span>{{ $detail->status }}</li>
                           <li><span class="icon flaticon-money"></span>{{ $detail->salary }}</li>
                        </ul>
                        <ul class="job-other-info">
                           <li class="time">{{ $detail->Job_type }}</li>
                           <li class="privacy">{{ $detail->job_sector }}</li>
                           <li class="required">Urgent</li>
                        </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="job-overview-two">
                <h4>Job Description</h4>
                <ul>
                  <li>
                    <i class="icon icon-calendar"></i>
                    <h5>Date Posted:</h5>
                    <span>{{ $detail->created_at}}</span>
                  </li>
                  <li>
                    <i class="icon icon-expiry"></i>
                    <h5>Expiration date:</h5>
                    <span>{{ $detail->deadline_date }}</span>
                  </li>
                  <li>
                    <i class="icon icon-location"></i>
                    <h5>Location:</h5>
                    <span>{{ $detail->cities }}</span>
                  </li>
                  <li>
                    <i class="icon icon-user-2"></i>
                    <h5>Job Title:</h5>
                    <span>{{ $detail->job_tittle }}</span>
                  </li>
                  <li>
                    <i class="icon icon-clock"></i>
                    <h5>Experience:</h5>
                    <span>{{ $detail->experience }}</span>
                  </li>
                  <li>
                    <i class="icon icon-rate"></i>
                    <h5>Industry:</h5>
                    <span>{{ $detail->industry }}</span>
                  </li>
                  <li>
                    <i class="icon icon-salary"></i>
                    <h5>Salary:</h5>
                    <span>{{ $detail->salary }}</span>
                  </li>
                </ul>
              </div>

              <div class="job-detail">

                <h4>Job Description</h4>
                <p> {{ $detail->Job_description }}</p>


                <h4>Key Responsibilities</h4>
              <p> {{ $detail->Key_responsibilities }}</p>

                <h4>Skill & Experience</h4>
               <p> {{ $detail->Skill_experience }}</p>

              </div>

              <!-- Other Options -->
              <div class="other-options">
                <div class="social-share">
                  <h5>Share this job</h5>
                  <a href="#" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                  <a href="#" class="twitter"><i class="fab fa-twitter"></i> Twitter</a>
                  <a href="#" class="google"><i class="fab fa-google"></i> Google+</a>
                </div>
              </div>
            </div>

            <div class="sidebar-column col-lg-4 col-md-12 col-sm-12">
              <aside class="sidebar">
                @if(session()->has('id'))
                <div class="btn-box">
                  <a href="#send" class="theme-btn btn-style-one">Apply For Job</a>
                  <button class="bookmark-btn"><i class="flaticon-bookmark"></i></button>
                </div>
                @else
                <div class="btn-box">
                  <a href="{{ route('candidatelogin') }}" class="theme-btn btn-style-one">Apply For Job</a>
                  <button class="bookmark-btn"><i class="flaticon-bookmark"></i></button>
                </div>
                @endif

                <div class="sidebar-widget company-widget">
                  <div class="widget-content">
                    <div class="company-title">
                      <div class="company-logo"><img src="images/resource/company-7.png" alt=""></div>
                      <h5 class="company-name">{{ $detail->company_name }}</h5>
                      
                    </div>

                    <ul class="company-info">
                      <li>Primary industry: <span>{{ $detail->industry }}</span></li>
                      <li>skills need: <span>{{ $detail->skills_needed }}</span></li>
                      <li>Position available: <span>{{ $detail->position_available }}</span></li>
                      <li>Application ends in: <span>{{ $detail->deadline_date }}</span></li>
                      <li>Email: <span>{{ $detail->email }}</span></li>
                      <li>Qualification: <span>{{ $detail->qualification }}</span></li>
                    </ul>

                    <div class="btn-box"><a href="#" class="theme-btn btn-style-three">{{ $detail->websites }}</a></div>
                  </div>
                </div>
                @endforeach
                <div id="send" class="sidebar-widget contact-widget">
                  <h4 class="widget-title">Contact Us</h4>
                  <div class="widget-content">
                    <!-- Comment Form -->
                    <div class="default-form">
                      <!--Comment Form-->
                      <form action="{{ route('saveapplication') }}" method="post">
                        @csrf
                        <input type="hidden" name="job_id" value="{{ $id }}">
                        <div class="row clearfix">
                          <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <input type="text" name="username" placeholder="Your Name" required>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <input type="email" name="email" placeholder="Email Address" required>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea class="darma" name="message" placeholder="Message"></textarea>
                          </div>
                          <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <button class="theme-btn btn-style-one" type="submit"  name="submit-form">Send Message</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
          </div>

          <!-- Related Jobs -->
          <div class="related-jobs">
            <div class="title-box">
              <h3>Related Jobs</h3>
              <div class="text">2020 jobs live - 293 added today.</div>
            </div>
            <div class="row">
              <!-- Job Block -->
              <div class="job-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <ul class="job-other-info">
                    <li class="time">Full Time</li>
                    <li class="privacy">Private</li>
                    <li class="required">Urgent</li>
                  </ul>
                  <span class="company-logo"><img src="images/resource/company-logo/3-1.png" alt=""></span>
                  <span class="company-name">Catalyst</span>
                  <h4><a href="#">Software Engineer (Android), Libraries</a></h4>
                  <div class="location"><span class="icon flaticon-map-locator"></span> London, UK</div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <ul class="job-other-info">
                    <li class="time">Full Time</li>
                  </ul>
                  <span class="company-logo"><img src="images/resource/company-logo/3-2.png" alt=""></span>
                  <span class="company-name">Catalyst</span>
                  <h4><a href="#">Software Engineer (Android), Libraries</a></h4>
                  <div class="location"><span class="icon flaticon-map-locator"></span> London, UK</div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <ul class="job-other-info">
                    <li class="time">Full Time</li>
                  </ul>
                  <span class="company-logo"><img src="images/resource/company-logo/3-3.png" alt=""></span>
                  <span class="company-name">Upwork</span>
                  <h4><a href="#">Software Engineer (Android), Libraries</a></h4>
                  <div class="location"><span class="icon flaticon-map-locator"></span> London, UK</div>
                </div>
              </div>

              <!-- Job Block -->
              <div class="job-block-four col-xl-3 col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                  <ul class="job-other-info">
                    <li class="time">Full Time</li>
                  </ul>
                  <span class="company-logo"><img src="images/resource/company-logo/3-4.png" alt=""></span>
                  <span class="company-name">invision</span>
                  <h4><a href="#">Software Engineer (Android), Libraries</a></h4>
                  <div class="location"><span class="icon flaticon-map-locator"></span> London, UK</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Job Detail Section -->


    @endsection