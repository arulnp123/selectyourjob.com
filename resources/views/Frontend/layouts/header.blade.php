  <!-- Main Header-->
  <header class="main-header">
   <div class="main-box">
      <div class="nav-outer">
         <div class="logo-box">
            <div class="logo"><a href="{{ url('/home') }}"><img src="{{ asset('assets/images/logo.png') }}" alt="" title="logo"></a></div>
         </div>
         <nav class="nav main-menu">
            <ul class="navigation" id="navbar">
               <li class="current ">
                  <span>Home</span>
               </li>
               <li class="dropdown has-mega-menu" id="has-mega-menu">
                  <span>Skill Test</span>
                  <div class="mega-menu">
                    <div class="mega-menu-bar row">
                     <div class="column col-lg-3 col-md-3 col-sm-12">
                        <h3>Program Languages</h3>
                        <ul>
                           <li><a href="{{ url('/skill_javahome') }}">Java</a></li>
                           <li><a href="{{ url('/skill_phphome') }}">php</a></li>
                           <li><a href="{{ url('/skill_pythonhome') }}">Python</a></li>
                           <li><a href="{{ url('/skill_pyspokehome') }}">Pyspoke </a></li>
                        </ul>
                      </div>

                      <div class="column col-lg-3 col-md-3 col-sm-12">
                        <h3>Database Management</h3>
                        <ul>
                          <li><a href="{{ url('/skill_Sqlhome') }}">Sql</a></li>
                          <li><a href="{{ url('/skill_Oraclehome') }}">Oracle</a></li>
                          <li><a href="{{ url('/skill_Snowflexhome') }}">snowflex</a></li>
                          <li><a href="{{ url('/skill_NoSqlhome') }}">NoSQL</a></li>
                        </ul>
                      </div>

                      <div class="column col-lg-3 col-md-3 col-sm-12">
                        <h3>UI/UX Design</h3>
                        <ul>
                          <li><a href="{{ url('/skill_Htmlhome') }}">Html</a></li>
                          <li><a href="{{ url('/skill_Csshome') }}">Css</a></li>
                          <li><a href="{{ url('/skill_Angularhome') }}">Angular</a></li>
                          <li><a href="{{ url('/skill_Reacthome') }}">React</a></li>
                        </ul>
                      </div>

                      <div class="column col-lg-3 col-md-3 col-sm-12">
                        <h3>App Development</h3>
                        <ul>
                          <li><a href="{{ url('/skill_Androidhome') }}">Android</a></li>
                          <li><a href="{{ url('/skill_Flutterhome') }}">Flutter</a></li>
                          <li><a href="{{ url('/skill_Framework7home') }}">Framework7</a></li>
                          <li><a href="{{ url('/skill_Xamarinhome') }}">Xamarin</a></li>
                          
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="dropdown has-mega-menu" id="has-mega-menu">
                  <span>interview questions</span>
                  <div class="mega-menu">
                    <div class="mega-menu-bar row">
                     <div class="column col-lg-3 col-md-3 col-sm-12">
                        <h3>Programe Languages</h3>
                        <ul>
                          <li><a href="{{ url('/java_ques') }}">Java</a></li>
                          <li><a href="{{ url('/php_ques') }}">PHP</a></li>
                          <li><a href="{{ url('/python_ques') }}">Python</a></li>
                          <li><a href="{{ url('/pyspoke_ques') }}">Pyspoke </a></li>
                        </ul>
                      </div>

                      <div class="column col-lg-3 col-md-3 col-sm-12">
                        <h3>Database Management</h3>
                        <ul>
                          <li><a href="{{ url('/sql_ques') }}">Sql</a></li>
                          <li><a href="{{ url('/oracle_ques') }}">Oracle</a></li>
                          <li><a href="{{ url('/snowflex_ques') }}">snowflex</a></li>
                          <li><a href="{{ url('/nosql_ques') }}">NoSQL</a></li>
                        </ul>
                      </div>

                      <div class="column col-lg-3 col-md-3 col-sm-12">
                        <h3>UI/UX Design</h3>
                        <ul>
                          <li><a href="{{ url('/html_ques') }}">Html</a></li>
                          <li><a href="{{ url('/css_ques') }}">Css</a></li>
                          <li><a href="{{ url('/angular_ques') }}">Angular</a></li>
                          <li><a href="{{ url('/react_ques') }}">React</a></li>
                        </ul>
                      </div>

                      <div class="column col-lg-3 col-md-3 col-sm-12">
                        <h3>App Development</h3>
                        <ul>
                          <li><a href="{{ url('/android_ques') }}">Android</a></li>
                          <li><a href="{{ url('/flutter_ques') }}">Flutter</a></li>
                          <li><a href="{{ url('/framework7_ques') }}">Framework7</a></li>
                          <li><a href="{{ url('/xamarin_ques') }}">Xamarin</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                {{-- <li class="has-mega-menu" id="has-mega-menu">
                  <span><a href="{{ url('/interview_questions') }}">Interview Questions 2</span>
                </li> --}}
              
               
               <li class="mm-add-listing">
                @if(session()->has('id'))
                  <a href="{{ url('employer_post_job') }}" class="theme-btn btn-style-one">Job Post</a>&nbsp
                  @else
                  <a href="{{ url('employerlogin') }}" class="theme-btn btn-style-one">Job Post</a>&nbsp
                  @endif
                  <a href="{{ url('/employerlogin') }}" class="theme-btn btn-style-one"> Employer Login </a>&nbsp
                  <a href="{{ url('/candidatelogin') }}" class="theme-btn btn-style-one "> Candidates login </a>
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
      @if(Session::get('type') == 1)
      <div class="btn-box">
            <a href="{{ url('/candidate_dashboard') }}" class="theme-btn btn-style-one">Dashboard</a>
         </div>
         @else
         <div class="btn-box">
            <a href="{{ url('/employer_dashboard') }}" class="theme-btn btn-style-one">Dashboard</a>
         </div>
         @endif
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
