@extends('Frontend.layouts.app')
@section('content')


   <!--Page Title-->
   <section class="page-title">
      <div class="auto-container">
        <div class="title-outer">
          <h1>Find Jobs</h1>
          <ul class="page-breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Jobs</li>
          </ul>
        </div>
      </div>
    </section>
    <!--End Page Title-->

    <!-- Listing Section -->
    <section class="ls-section">
      <div class="auto-container">
        <div class="filters-backdrop"></div>

        <div class="row">
          <!-- Filters Column -->


          <!-- Content Column -->
          <div class="content-column col-lg-12">
            <div class="ls-outer">
              <!-- ls Switcher -->
              @if(count($searchjobs) > 0)
              <div class="row">
                <!-- Job Block -->
                @foreach($searchjobs as $search)
                <div class="job-block col-lg-6 col-md-12 col-sm-12">
                  <div class="inner-box">
                    <div class="content">
                      <span class="company-logo"><img src="images/resource/company-logo/1-1.png" alt=""></span>
                      <h4><a href="{{ url('job_detail' ,$search->id) }}">{{ $search->job_tittle }}</a></h4>
                      <ul class="job-info">
                        <li><span class="icon flaticon-briefcase"></span> {{ $search->job_category }}</li>
                        <li><span class="icon flaticon-map-locator"></span> {{ $search->cities }}</li>
                        <li><span class="icon flaticon-clock-3"></span></li>
                        <li><span class="icon flaticon-money"></span> {{ $search->salary }}</li>
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
                @else
                <h4 style="text-align:center;color:red">Not Found</h4>
                <div class="style-two text-center">
                <a href="{{ url('/') }}" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Back</span></a>
                </div>
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Listing Page Section -->



@endsection