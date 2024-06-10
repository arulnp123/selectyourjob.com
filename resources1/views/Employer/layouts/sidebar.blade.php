 <!-- Sidebar Backdrop -->
 <div class="sidebar-backdrop"></div>

<!-- User Sidebar -->
<div class="user-sidebar">

  <div class="sidebar-inner">
    <ul class="navigation">
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
<!-- End User Sidebar -->
<i class=""></i>