    <!-- Main Header-->
    <header class="main-header header-shaddow">
      <div class="container-fluid">
        <!-- Main box -->
        <div class="main-box">
          <!--Nav Outer -->
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
			   <a href="{{ url('/logout') }}" class="theme-btn "> Logout </a>
			   @else
               <a href="{{ url('/employerlogin') }}" class="theme-btn"> Employer Login /</a>&nbsp
               <a href="{{ url('/candidatelogin') }}" class="theme-btn "> Candidates login </a>
               @endif
            
               <div class="btn-box">
                  <a href="{{ url('employer_post_job') }}" class="theme-btn btn-style-one">Job Post</a>
               </div>
            <!-- Dashboard Option -->
            <div class="dropdown dashboard-option">
              <a class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('assets/images/resource/candidate-4.png') }}" alt="avatar" class="thumb">
                <span class="name">{{session::get('firts_name')}}</span>
              </a>
              <ul class="dropdown-menu">
               <li class="{{ request()->is('employer_dashboard') ? 'active' : ''}}"><a href="{{ url('employer_dashboard') }}"> <i class="la la-home"></i> Dashboard</a></li>
               <li class="{{ request()->is('employerprofile') ? 'active' : ''}}"><a href="{{ url('employerprofile') }}"><i class="la la-user-tie"></i>Company Profile</a></li>
               <li class="{{ request()->is('employer_post_job') ? 'active' : ''}}"><a href="{{ url('employer_post_job') }}"><i class="la la-paper-plane"></i>Post a New Job</a></li>
               <li class="{{ request()->is('employer_bulck_post_job') ? 'active' : ''}}"><a href="{{ url('employer_bulck_post_job') }}"><i class="las la-file-import "></i>Bulk Job Post</a></li>
               <li class="{{ request()->is('employer_manage_job') ? 'active' : ''}}"><a href="{{ url('employer_manage_job') }}"><i class="la la-briefcase"></i> Manage Jobs </a></li>
               <li class="{{ request()->is('employer_change_password') ? 'active' : ''}}"><a href="{{ url('employer_change_password') }}"><i class="la la-lock"></i>Change Password</a></li>
               <li class="{{ request()->is('emplogout') ? 'active' : ''}}"><a href="{{ url('emplogout') }}"><i class="la la-sign-out"></i>Logout</a></li>
               <li class="{{ request()->is('employerprofile') ? 'active' : ''}}"><a href="{{ url('') }}"><i class="la la-trash"></i>Delete Profile</a></li>
            </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Header -->
      <div class="mobile-header">
        <div class="logo"><a href="index.html"><img src="{{ asset('assets/images/logo.svg') }}" alt="" title=""></a></div>

        <!--Nav Box-->
        <div class="nav-outer clearfix">

          <div class="outer-box">
            <!-- Login/Register -->
            <div class="login-box">
              <a href="login-popup.html" class="call-modal"><span class="icon-user"></span></a>
            </div>

            <button id="toggle-user-sidebar"><img src="{{ asset('assets/images/resource/candidate-4.png') }}" alt="avatar" class="thumb"></button>
            <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><span class="flaticon-menu-1"></span></a>
          </div>
        </div>

      </div>

      <!-- Mobile Nav -->
      <div id="nav-mobile"></div>
    </header>
    <!--End Main Header -->