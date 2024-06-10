@extends('Employer/layouts.app')
@section('content')

<!-- Dashboard -->
<section class="user-dashboard">
      <div class="dashboard-outer">
        @if(Session::get('status') == 'Inactive')
        <h1 style="text-align: center">Please wait for approval</h1>
        @else
        <div class="upper-title-box">
          <h3> Bulk Post Job</h3>
          <div class="text">Ready to jump back in?</div>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <!-- CV Manager Widget -->
            <div class="cv-manager-widget ls-widget">
              <div class="widget-title">
                <h4>Bulk job post</h4>
              </div>
              <div class="widget-content">
                <div class="uploading-resume">
                  <div class="uploadButton">
                    <form action="{{ route('bulkjobpost') }}" method="POST" enctype="multipart/form-data">
                      @csrf
                    <input  type="file" name="job" />
                    <input class="theme-btn btn-style-one" type="submit" value="Upload">
                  </form>
                    <span class="uploadButton-file-name"></span>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          @endif
        </div>
      </div>
    </section>
    <!-- End Dashboard -->

    @endsection