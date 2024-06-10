 <!-- Sidebar Backdrop -->
 <div class="sidebar-backdrop"></div>

<!-- User Sidebar -->
<div class="user-sidebar">

  <div class="sidebar-inner">
    <ul class="navigation">
      <li class="active"><a href="{{ url('dashboard_admin') }}"> <i class="la la-home"></i> Dashboard</a></li>

      <li><a href="{{ url('dashboard_company_profile') }}"><i class="la la-user-tie"></i>Company Profile</a></li>

      <li><a href="{{ url('companyApproval') }}"><i class="la la-user-tie"></i>Company Approval</a></li>

      <li><a href="{{ url('admin_profile') }}"><i class="la la-user-tie"></i>View Admin </a></li>

      <li><a href="{{ url('view_companies') }}"><i class="la la-user-tie"></i>View Companies </a></li>

      <li><a href="{{ url('admin_profile') }}"><i class="la la-user-tie"></i>View USers </a></li>

      <li><a href="{{ url('dashboard_post_job') }}"><i class="la la-paper-plane"></i>Post a New Job</a></li>

      <li><a href="{{ url('admin_manage_job') }}"><i class="la la-briefcase"></i> Manage Jobs </a></li>

      <li><a href="{{ url('admin_job_lists') }}"><i class="la la-briefcase"></i> Jobs List </a></li>

      <li><a href="{{ url('dashboard_applicants') }}"><i class="la la-file-invoice"></i> All Applicants</a></li>

      <li><a href="{{ url('dashboard_resume_alerts') }}"><i class="la la-bookmark-o"></i>Shortlisted Resumes</a></li>

      <li><a href="{{ url('dashboard_category') }}"><i class="las la-closed-captioning"></i>Categories</a></li>

      <li><a href="{{ url('dashboard_industries ') }}"><i class="las la-closed-captioning"></i>industries </a></li>

      <li><a href="{{ url('dashboard_education ') }}"><i class="las la-closed-captioning"></i>Education </a></li>

      <li><a href="{{ url('job_location ') }}"><i class="las la-closed-captioning"></i>Locations </a></li>

      <li><a href="{{ url('dashboard_packages') }}"><i class="la la-box"></i>Packages</a></li>

      <li><a href="{{ url('dashboard_messages') }}"><i class="la la-comment-o"></i>Messages</a></li>

      <li><a href="{{ url('dashboard_resume_alerts') }}"><i class="la la-bell"></i>Resume Alerts</a></li>

      <li><a href="{{ route('dashboard_change_password') }}"><i class="la la-lock"></i>Change Password</a></li>

      <li><a href="{{ route('dashboard_view_profile') }}"><i class="la la-user-alt"></i>View Profile</a></li>

      <li><a href="{{ route('adminlogout') }}"><i class="la la-sign-out"></i>Logout</a></li>

      <li><a href="index.html"><i class="la la-trash"></i>Delete Profile</a></li>
    </ul>
  </div>
</div>
<!-- End User Sidebar -->
