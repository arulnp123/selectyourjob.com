@extends('Employer/layouts.app')
@section('content')

<!-- Dashboard -->
<section class="user-dashboard">
      <div class="dashboard-outer">
        <div class="upper-title-box">
          <h3>All Applicants</h3>
          <div class="text">Ready to jump back in?</div>
        </div>
        @if (session()->has('success'))
                                <div class="alert alert-success alert-dismissable" style="margin: 15px;">
                                    <a href="#" style="color:white !important" class="close" data-dismiss="alert"
                                        aria-label="close">&times;</a>
                                    <strong> {{ session('success') }} </strong>
                                </div>
                            @endif
                            @if (session()->has('error'))
                                <div class="alert alert-danger alert-dismissable" style="margin: 15px;">
                                    <a href="#" style="color:white !important" class="close" data-dismiss="alert"
                                        aria-label="close">&times;</a>
                                    <strong> {{ session('error') }} </strong>
                                </div>
                       @endif
        <div class="row">
          <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="ls-widget">
              <div class="tabs-box">
                <div class="widget-title">
                  <h4>My Job Listings</h4>

                  <div class="chosen-outer">
                    <!--Tabs Box-->
                    <select class="chosen-select">
                      <option>Last 6 Months</option>
                      <option>Last 12 Months</option>
                      <option>Last 16 Months</option>
                      <option>Last 24 Months</option>
                      <option>Last 5 year</option>
                    </select>
                  </div>
                </div>

                <div class="widget-content">
                  <div class="table-outer">
                    <table class="default-table manage-job-table">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Applications</th>
                          <th>Created & Expired</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($jobs_post_new as $job)
                        <tr>
                          <td>
                            <h6>{{ $job->job_tittle }}</h6>
                            <span class="info"><i class="icon flaticon-map-locator"></i> {{ $job->job_location }} </span>
                          </td>
                          <td class="applied"><a href="#">3+ Applied</a></td>
                          <td>{{ $job->created_at }} <br>{{ $job->deadline_date }}</td>
                          <td class="status">{{ $job->status }}</td>
                          <td>
                            <div class="option-box">
                              <ul class="option-list">
                           
                                <li><button data-text="View Aplication"><a href="{{ url('/edit_job_post',$job->id) }}"><span class="la la-eye"></span></a></button></li>
                                <li><button data-text="Reject Aplication"><span class="la la-pencil"></span></button></li>
                                <li><button data-text="Delete Aplication"><a href="{{ url('/delete',$job->id) }}"><span class="la la-trash"></span></button></li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
    <!-- End Dashboard -->  


    @endsection