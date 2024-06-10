@extends('Frontend.layouts.app')
@section('content')
<!-- Dashboard --><br><br><br><br><br>
<div class="container">
<section class="user-dashboard">
      <div class="dashboard-outer">
        <div class="row">
          <div class="col-lg-12">
            <!-- Ls widget -->
            <div class="sec-title text-center">
          <h2>Register for Free unlimited Job Ad Posting.</h2>
          <h1>  FREE Resume Database Access* Limited Period Offer</h1>
          <div class="text">IMPORTANT: Please fill all the information correctly for your registration to be approved.</div>
        </div>
        <div class="sec-title text-center">
              <h1>Company information</h1>
              </div>
        <form class="default-form" action="{{ url('/addemployers') }}" method="post">
        {{ csrf_field() }}
                  <form class="default-form">
                    <div class="row">
                      <!-- Input -->

                      <div class="form-group col-lg-3 col-md-12">
                        <label>First Name</label>
                        <input type="text" name="name" placeholder="First Name" @required(true)>
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-3 col-md-12">
                        <label>Last Name</label>
                        <input type="text" name="laname" placeholder="Last Name"@required(true)>
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Email"@required(true)>
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Password</label>
                        <input type="text" name="password" placeholder="Password"@required(true)>
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Designation</label>
                        <input type="text" name="desig" placeholder="Designation"@required(true)>
                      </div>


                      <div class="form-group col-lg-3 col-md-12">
                        <label>How did u hear about us</label>
                        <select class="chosen-select" name="hear"@required(true)>
                        <option>Select</option>
                          <option value="News">News</option>
                          <option value="Socila Media">Socila Media</option>
                        </select>
                      </div> 
                      
                      <div class="form-group col-lg-3 col-md-12">
                        <label>What Describes you best</label>
                        <select class="chosen-select" name="describes"@required(true)>
                        <option>Select</option>
                          <option value="Corporate Employer">Corporate Employer </option>
                          <option value="Placement Agency / Recruiter">Placement Agency / Recruiter</option>
                        </select>
                      </div>

                       <!-- Input -->
                       <div class="form-group col-lg-3 col-md-12">
                        <label>Name of the Company</label>
                        <input type="text" name="nameof" placeholder="Name of the Company"@required(true)>
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Company Description</label>
                        <input type="text" name="comdes" placeholder="Company Description"@required(true)>
                      </div>


                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Website</label>
                        <input type="text" name="webs" placeholder="(Do not specify under construction website)">
                      </div>

                      <!-- Search Select -->
                      <div class="form-group col-lg-3 col-md-12">
                        <label>Phone</label>
                        <input type="text" name="pho" placeholder="Phone"@required(true)>
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Location</label>
                        <select class="chosen-select" name="loct"@required(true)>
                        <option>Select</option>
                          <option value="India">India</option>
                          <option value="USA">USA</option>
                          <option value="Russia">Russia</option>
                          <option value="New York">New York</option>
                        </select>
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Address</label>
                        <input type="text" name="adres" placeholder="Address"@required(true)>
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Industry</label>
                        <select class="chosen-select" name="indusry"@required(true)>
                        <option>Select</option>
                          <option value="Accountant">Accountant</option>
                          <option value="Bank Office">Bank Office</option>
                          <option value="Bpo / Kpo">Bpo / Kpo</option>
                          <option value="Construction/Cement/Metal/Steel/Iron">Construction/Cement/Metal/Steel/Iron</option>
                          <option value="Educational/Training">Educational/Training</option>
                          <option value="Entertainment/Media">Entertainment/Media</option>
                          <option value="Fashion/Modelling">Fashion/Modelling</option>
                          <option value="Front Office">Front Office</option>
                          <option value="Gems & Jewellery">Gems & Jewellery</option>
                          <option value="Healthcare">Healthcare</option>
                          <option value="Insurance">Insurance</option>
                          <option value="It Hardware">It Hardware</option>
                        </select>
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Company Business</label>
                        <input type="text" name="compass" placeholder="Company Business"@required(true)>
                        <input type="hidden" name="status"  VALUE="Inactive">

                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Job Posting</label>
                        <select class="chosen-select" name="jobpo"@required(true)>
                        <option>Select</option>
                          <option value="Paid">Paid</option>
                          <option value="Free">Free</option>
                        </select>
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Resume Database Access</label>
                        <select class="chosen-select" name="resudata"@required(true)>
                        <option>Select</option>
                          <option value="Paid">Paid</option>
                          <option value="Free">Free</option>
                        </select>
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Premium Profile Display</label>
                        <select class="chosen-select" name="premipro"@required(true)>
                        <option>Select</option>
                          <option value="Paid">Paid</option>
                          <option value="Free">Free</option>
                        </select>
                      </div>

                     
                      
                      <div class="form-group">
     
                      <div class="col-sm-12 d-in" style="text-align:center;">
                          <input type="checkbox" id="agree" name="agree" value="agree" required> I have read and agree to the jobkingindia.com Terms of Service and Privacy Policy.                         
                      </div>
                    </div>
                      <div class="center ">
                      <button class="theme-btn btn-style-one">Register</button>
                      </div>
                      <!-- Input -->
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </section>
    </div>
    <style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;

}
</style>
@endsection