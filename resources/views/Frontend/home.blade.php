 @extends('Frontend.layouts.app')
 @section('content')
     @include('Frontend.layouts.banner')
     <section class="job-categories">
         <div class="auto-container">
             <div class="sec-title text-center">
                 <h2>Popular Job Categories</h2>
                 <div class="text">2020 jobs live - 293 added today.</div>
             </div>



             <div class="row wow fadeInUp category-row">
                 <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/3') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-cv-80.png"
                                     alt="IT Professional Jobs">
                                 Information Technology 
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/34') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-name-tag-80.png"
                                     alt="IT Professional Jobs">
                                 Freshers jobs
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/36') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-workspace-80.png"
                                     alt="IT Professional Jobs">
                                 Walkin 
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/2') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-valet-80.png"
                                     alt="IT Professional Jobs">
                                 Human Resource
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/37') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-send-job-list-80.png"
                                     alt="IT Professional Jobs">
                                 Freelancer 
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/39') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-work-80.png"
                                     alt="IT Professional Jobs">
                                 Internship Training
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/40') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-new-job-80 (1).png"
                                     alt="IT Professional Jobs">
                                 Inplant Training
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/44') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-applicant-80.png"
                                     alt="IT Professional Jobs">
                                 Online Training 
                             </a>
                         </div>
                     </div>
                 </div>

                 <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/47') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-job-seeker-80.png"
                                     alt="IT Professional Jobs">
                                 Professor jobs
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/45') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-name-tag-80.png"
                                     alt="IT Professional Jobs">
                                 Teacher jobs
                             </a>
                         </div>
                     </div>
                 </div>
                 {{-- <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/1') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-resume-80.png"
                                     alt="IT Professional Jobs">
                                 Accounting
                             </a>
                         </div>
                     </div>
                 </div> --}}
                 <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/15') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-workstation-80.png"
                                     alt="IT Professional Jobs">
                                 Hardware
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/42') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-postcard-with-barcode-80.png"
                                     alt="IT Professional Jobs">
                                 Digital Marketing
                             </a>
                         </div>
                     </div>
                 </div>
                 {{-- <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/1') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-briefcase-80.png"
                                     alt="IT Professional Jobs">
                                 Engineering
                             </a>
                         </div>
                     </div>
                 </div> --}}
                 {{-- <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/1') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-office-80.png"
                                     alt="IT Professional Jobs">
                                 Civil Engineering
                             </a>
                         </div>
                     </div>
                 </div> --}}
                 <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/14') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-doctor-80.png"
                                     alt="IT Professional Jobs">
                                 Nurse Jobs
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/4') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-administrator-male-80.png"
                                     alt="IT Professional Jobs">
                                     Engineering
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/7') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-windows-client-80.png"
                                     alt="IT Professional Jobs">
                                 Computer Operator
                             </a>
                         </div>
                     </div>
                 </div>
                 {{-- <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/1') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-merchant-account-80.png"
                                     alt="IT Professional Jobs">
                                 Buisness Development
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="category-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="content">
                             <a href="{{ URL('/category/1') }}">
                                 <img src="{{ URL::to('/') }}/assets/images/resource/png/icons8-land-sales-80.png"
                                     alt="IT Professional Jobs">
                                 Drivers/Sales
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div> --}}

     </section>
     <section class="job-section">
         <div class="auto-container">
             <div class="sec-title text-center">
                 <h2>Featured Jobs</h2>
                 <div class="text">Know your worth and find the job that qualify your life</div>
             </div>
             <div class="row wow fadeInUp">
                 @foreach ($jobs_post_new as $job)
                     <div class="job-block col-lg-6 col-md-12 col-sm-12">
                         <div class="inner-box">
                             <div class="content">
                                 <span class="company-logo"><img
                                         src="{{ URL::to('/') }}/assets/images/resource/company-logo/1-2.png"
                                         alt=""></span>
                                 <h4><a href="{{ url('job_detail', $job->id) }}">{{ $job->job_tittle }}</a></h4>
                                 <ul class="job-info">
                                     <li><span class="icon flaticon-briefcase"></span>{{ $job->experience }}years</li>
                                     <li><span class="icon flaticon-map-locator"></span>{{ $job->cities }}</li>
                                     <li><span class="icon flaticon-clock-3"></span>{{ $job->status }}</li>
                                     <li><span class="icon flaticon-money"></span>{{ $job->salary }}</li>
                                 </ul>
                                 <ul class="job-other-info">
                                     <li class="time">{{ $job->Job_type }}</li>
                                     <li class="privacy">{{ $job->job_sector }}</li>
                                     <li class="required">Urgent</li>
                                 </ul>
                                 <button class="bookmark-btn"><span class="flaticon-bookmark"></span></button>
                             </div>
                         </div>
                     </div>
                 @endforeach
             </div>
             <div class="btn-box">
                 <a href="{{ url('/job_list') }}" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Load
                         More Listing</span></a>
             </div>
         </div>
     </section>
     <section class="testimonial-section">
         <div class="container-fluid">
             <!-- Sec Title -->
             <div class="sec-title text-center">
                 <h2>Testimonials From Our Customers</h2>
                 <div class="text">Lorem ipsum dolor sit amet elit, sed do eiusmod tempor</div>
             </div>
             <div class="carousel-outer wow fadeInUp">
                 <div class="testimonial-carousel owl-carousel owl-theme">
                     <div class="testimonial-block">
                         <div class="inner-box">
                             <h4 class="title">Good theme</h4>
                             <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out
                                 quickly with everything! Can’t quite… The Mitech team works really hard to ensure high
                                 level of quality</div>
                             <div class="info-box">
                                 <div class="thumb"><img
                                         src="{{ URL::to('/') }}/assets/images/resource/testi-thumb-1.png"
                                         alt=""></div>
                                 <h4 class="name">Nicole Wells</h4>
                                 <span class="designation">Web Developer</span>
                             </div>
                         </div>
                     </div>
                     <div class="testimonial-block">
                         <div class="inner-box">
                             <h4 class="title">Great quality!</h4>
                             <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out
                                 quickly with everything! Can’t quite… The Mitech team works really hard to ensure high
                                 level of quality</div>
                             <div class="info-box">
                                 <div class="thumb"><img
                                         src="{{ URL::to('/') }}/assets/images/resource/testi-thumb-2.png"
                                         alt=""></div>
                                 <h4 class="name">Gabriel Nolan</h4>
                                 <span class="designation">Consultant</span>
                             </div>
                         </div>
                     </div>
                     <div class="testimonial-block">
                         <div class="inner-box">
                             <h4 class="title">Awesome Design </h4>
                             <div class="text">Without JobHunt i’d be homeless, they found me a job and got me sorted out
                                 quickly with everything! Can’t quite… The Mitech team works really hard to ensure high
                                 level of quality</div>
                             <div class="info-box">
                                 <div class="thumb"><img
                                         src="{{ URL::to('/') }}/assets/images/resource/testi-thumb-3.png"
                                         alt=""></div>
                                 <h4 class="name">Ashley Jenkins</h4>
                                 <span class="designation">Designer</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="clients-section">
         <div class="sponsors-outer wow fadeInUp">
             <ul class="sponsors-carousel owl-carousel owl-theme">
                 <li class="slide-item">
                     <figure class="image-box"><a href="#"><img
                                 src="{{ URL::to('/') }}/assets/images/clients/1-1.png" alt=""></a></figure>
                 </li>
                 <li class="slide-item">
                     <figure class="image-box"><a href="#"><img
                                 src="{{ URL::to('/') }}/assets/images/clients/1-2.png" alt=""></a></figure>
                 </li>
                 <li class="slide-item">
                     <figure class="image-box"><a href="#"><img
                                 src="{{ URL::to('/') }}/assets/images/clients/1-3.png" alt=""></a></figure>
                 </li>
                 <li class="slide-item">
                     <figure class="image-box"><a href="#"><img
                                 src="{{ URL::to('/') }}/assets/images/clients/1-4.png" alt=""></a></figure>
                 </li>
                 <li class="slide-item">
                     <figure class="image-box"><a href="#"><img
                                 src="{{ URL::to('/') }}/assets/images/clients/1-5.png" alt=""></a></figure>
                 </li>
                 <li class="slide-item">
                     <figure class="image-box"><a href="#"><img
                                 src="{{ URL::to('/') }}/assets/images/clients/1-6.png" alt=""></a></figure>
                 </li>
                 <li class="slide-item">
                     <figure class="image-box"><a href="#"><img
                                 src="{{ URL::to('/') }}/assets/images/clients/1-7.png" alt=""></a></figure>
                 </li>
             </ul>
         </div>
     </section>
     <section class="about-section">
         <div class="auto-container">
             <div class="row">
                 <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                     <div class="inner-column wow fadeInUp">
                         <div class="sec-title">
                             <h2>Millions of Jobs. Find the one that suits you.</h2>
                             <div class="text">Search all the open positions on the web. Get your own personalized salary
                                 estimate. Read reviews on over 600,000 companies worldwide.</div>
                         </div>
                         <ul class="list-style-one">
                             <li>Bring to the table win-win survival</li>
                             <li>Capitalize on low hanging fruit to identify</li>
                             <li>But I must explain to you how all this</li>
                         </ul>
                         <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Get
                                 Started</span></a>
                     </div>
                 </div>
                 <div class="image-column col-lg-6 col-md-12 col-sm-12">
                     <figure class="image wow fadeInLeft"><img
                             src="{{ URL::to('/') }}/assets/images/resource/image-2.jpg" alt=""></figure>
                     <div class="count-employers wow fadeInUp">
                         <div class="check-box"><span class="flaticon-tick"></span></div>
                         <span class="title">300k+ Employers</span>
                         <figure class="image"><img src="{{ URL::to('/') }}/assets/images/resource/multi-logo.png"
                                 alt=""></figure>
                     </div>
                 </div>
             </div>
             <div class="fun-fact-section">
                 <div class="row">
                     <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                         <div class="count-box"><span class="count-text" data-speed="3000" data-stop="4">0</span>M
                         </div>
                         <h4 class="counter-title">4 million daily active users</h4>
                     </div>
                     <!--Column-->
                     <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                         <div class="count-box"><span class="count-text" data-speed="3000" data-stop="12">0</span>k
                         </div>
                         <h4 class="counter-title">Over 12k open job positions</h4>
                     </div>
                     <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                         <div class="count-box"><span class="count-text" data-speed="3000" data-stop="20">0</span>M
                         </div>
                         <h4 class="counter-title">Over 20 million stories shared</h4>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="news-section">
         <div class="auto-container">
             <div class="sec-title text-center">
                 <h2>Recent News Articles</h2>
                 <div class="text">Fresh job related news content posted each day.</div>
             </div>
             <div class="row wow fadeInUp">
                 <div class="news-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="image-box">
                             <figure class="image"><img src="{{ URL::to('/') }}/assets/images/resource/news-1.jpg"
                                     alt="" /></figure>
                         </div>
                         <div class="lower-content">
                             <ul class="post-meta">
                                 <li><a href="#">August 31, 2021</a></li>
                                 <li><a href="#">12 Comment</a></li>
                             </ul>
                             <h3><a href="blog-single.html">Attract Sales And Profits</a></h3>
                             <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                             <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="news-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="image-box">
                             <figure class="image"><img src="{{ URL::to('/') }}/assets/images/resource/news-2.jpg"
                                     alt="" /></figure>
                         </div>
                         <div class="lower-content">
                             <ul class="post-meta">
                                 <li><a href="#">August 31, 2021</a></li>
                                 <li><a href="#">12 Comment</a></li>
                             </ul>
                             <h3><a href="blog-single.html">5 Tips For Your Job Interviews</a></h3>
                             <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                             <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                         </div>
                     </div>
                 </div>
                 <div class="news-block col-lg-4 col-md-6 col-sm-12">
                     <div class="inner-box">
                         <div class="image-box">
                             <figure class="image"><img src="{{ URL::to('/') }}/assets/images/resource/news-3.jpg"
                                     alt="" /></figure>
                         </div>
                         <div class="lower-content">
                             <ul class="post-meta">
                                 <li><a href="#">August 31, 2021</a></li>
                                 <li><a href="#">12 Comment</a></li>
                             </ul>
                             <h3><a href="blog-single.html">An Overworked Newspaper Editor</a></h3>
                             <p class="text">A job ravenously while Far much that one rank beheld after outside....</p>
                             <a href="#" class="read-more">Read More <i class="fa fa-angle-right"></i></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="app-section">
         <div class="auto-container">
             <div class="row">
                 <div class="image-column col-lg-6 col-md-12 col-sm-12">
                     <div class="bg-shape"></div>
                     <figure class="image wow fadeInLeft"><img
                             src="{{ URL::to('/') }}/assets/images/resource/mobile-app.png" alt=""></figure>
                 </div>
                 <div class="content-column col-lg-6 col-md-12 col-sm-12">
                     <div class="inner-column wow fadeInRight">
                         <div class="sec-title">
                             <span class="sub-title">DOWNLOAD & ENJOY</span>
                             <h2>Get the Superio Job<br> Search App</h2>
                             <div class="text">Search through millions of jobs and find the right fit. Simply<br> swipe
                                 right to apply.</div>
                         </div>
                         <div class="download-btn">
                             <a href="#"><img src="{{ URL::to('/') }}/assets/images/icons/apple.png"
                                     alt=""></a>
                             <a href="#"><img src="{{ URL::to('/') }}/assets/images/icons/google.png"
                                     alt=""></a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="call-to-action">
         <div class="auto-container">
             <div class="outer-box wow fadeInUp">
                 <div class="content-column">
                     <div class="sec-title">
                         <h2>Recruiting?</h2>
                         <div class="text">Advertise your jobs to millions of monthly users and search 15.8 million<br>
                             CVs in our database.</div>
                         <a href="#" class="theme-btn btn-style-one bg-blue"><span class="btn-title">Start
                                 Recruiting Now</span></a>
                     </div>
                 </div>
                 <div class="image-column" style="background-image: url(images/resource/image-1.png);">
                     <figure class="image"><img src="{{ URL::to('/') }}/assets/images/resource/image-1.png"
                             alt=""></figure>
                 </div>
             </div>
         </div>
     </section>
 @endsection
