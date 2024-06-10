  <!-- Main Header-->
  <header class="main-header">
         <div class="main-box">
            <div class="nav-outer">
               <div class="logo-box">
                  <div class="logo"><a href="{{ url('/home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="" title="logo"></a></div>
               </div>
               <nav class="nav main-menu">
                  <ul class="navigation" id="navbar">
                     <li class="current dropdown">
                        <span>Home</span>
                        <div class="mega-menu">
                           <div class="mega-menu-bar row pt-0">
                              <div class="column col-lg-4 col-md-4 col-sm-12">
                                 <ul>
                                    <li class="current"><a href="{{ url('/home') }}">Jobs</a></li>
                                    <li><a href="#">Jobs 02</a></li>
                                    <li><a href="#">Jobs 03</a></li>
                                    <li><a href="#">Jobs 04</a></li>
                                    <li><a href="#">Jobs 05</a></li>
                                 </ul>
                              </div>
                              <div class="column col-lg-4 col-md-4 col-sm-12">
                                 <ul>
                                    <li><a href="#">Jobs 06</a></li>
                                    <li><a href="#">Jobs 07</a></li>
                                    <li><a href="#">Jobs 08</a></li>
                                    <li><a href="#">Jobs 09</a></li>
                                    <li><a href="#">Jobs 10</a></li>
                                 </ul>
                              </div>
                              <div class="column col-lg-4 col-md-4 col-sm-12">
                                 <ul>
                                    <li><a href="#">Jobs 11</a></li>
                                    <li><a href="#">Jobs 12</a></li>
                                    <li><a href="#">Jobs 13</a></li>
                                    <li><a href="#">Jobs 14</a></li>
                                    <li><a href="#">Jobs 15</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="dropdown">
                        <span>Employers</span>
                        <ul>
                           <li class="dropdown">
                              <span>Employers List</span>
                              <ul>
                                 <li><a href="employers-list-v1.html">Employers LIst v1</a></li>
                                 <li><a href="employers-list-v2.html">Employers LIst v2</a></li>
                                 <li><a href="employers-list-v3.html">Employers LIst v3</a></li>
                                 <li><a href="employers-list-v4.html">Employers LIst v4</a></li>
                              </ul>
                           </li>
                           <li class="dropdown">
                              <span>Employers Single</span>
                              <ul>
                                 <li><a href="employers-single-v1.html">Employers Single v1</a></li>
                                 <li><a href="employers-single-v2.html">Employers Single v2</a></li>
                                 <li><a href="employers-single-v3.html">Employers Single v3</a></li>
                              </ul>
                           </li>
                        </ul>
                     </li>
                     <li><a href="candidate-dashboard.html">Interview Questions</a></li>
                     <li class="mm-add-listing">
                        <a href="add-listing.html" class="theme-btn btn-style-one">Job Post</a>&nbsp
                        <a href="{{ url('/employers_login') }}" class="theme-btn  btn-style-one">Employer Login</a>&nbsp
                        <a href="{{ url('/candidates_login') }}" class="theme-btn  btn-style-one">Candidates login</a>
                      
                        <span>
                        <span class="contact-info">
                        <span class="phone-num"><span>Call us</span><a href="tel:1234567890">123 456 7890</a></span>
                        <span class="address">329 Queensberry Street, North Melbourne VIC <br>3051, Australia.</span>
                        <a href="mailto:support@superio.com" class="email">support@superio.com</a>
                        </span>
                        <span class="social-links">
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-linkedin-in"></span></a>
                        </span>
                        </span>
                     </li>
                  </ul>
               </nav>
            </div>
            <div class="outer-box">

			@if(Session::get('id'))
			
         <div class="dropdown dashboard-option">
         
              <img src="{{ asset('assets/images/resource/candidate-4.png') }}" alt="avatar" class="thumb">
              <span class="name">{{session::get('name')}}</span>
            </a>
         </div>
         <a href="{{ url('/logout') }}" class="theme-btn btn-style-one "> Logout </a>
			   @else
               <a href="{{ url('/employerlogin') }}" class="theme-btn"> Employer Login /</a>&nbsp
               <a href="{{ url('/candidatelogin') }}" class="theme-btn "> Candidates login </a>
               @endif
            </div>

            
         </div>

           
         <div class="mobile-header">
            <div class="logo"><a href="{{ url('/home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo" title=""></a></div>
            <div class="nav-outer clearfix">
               <div class="outer-box">
                  <div class="login-box">
                     <a href="login-popup.html" class="call-modal"><span class="icon-user"></span></a>
                  </div>
                  <a href="#nav-mobile" class="mobile-nav-toggler"><span class="flaticon-menu-1"></span></a>
               </div>
            </div>
         </div>
         <div id="nav-mobile"></div>
      </header>
      
    <!--End Main Header -->
