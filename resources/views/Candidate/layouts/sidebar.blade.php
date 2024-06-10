 <!-- Sidebar Backdrop -->
 <div class="sidebar-backdrop"></div>

<!-- User Sidebar -->
<div class="user-sidebar">

  <div class="sidebar-inner">
    <ul class="navigation">
      <li class="active"><a href="{{ url('candidate_dashboard') }}"> <i class="la la-home"></i> Dashboard</a></li>
      <li><a href="{{ url('candidate_company_profile') }}"><i class="la la-user-tie"></i>Candidate Profile</a></li>
      <li><a href="{{ url('candidate_manage_job') }}"><i class="la la-briefcase"></i> Applied Jobs </a></li>
      <li><a href="{{ url('candidate_change_password') }}"><i class="la la-lock"></i>Change Password</a></li>
      <li><a href="{{ url('candidate_view_profile') }}"><i class="la la-user-alt"></i>View Profile</a></li>
      <li><a href="{{ url('') }}"><i class="la la-sign-out"></i>Logout</a></li>
      <li><a href="{{ url('') }}"><i class="la la-trash"></i>Delete Profile</a></li>
    </ul>
  </div>
</div>
<!-- End User Sidebar -->
