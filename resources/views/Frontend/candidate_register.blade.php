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
          <h2>Create an account (It's 100% free)</h2>
          <div class="text">IMPORTANT: Please fill all the information correctly for your registration to be approved.</div>
        </div>

        <form class="default-form" action="{{ url('/addcandidates') }}" method="post">
        {{ csrf_field() }}
                  <form class="default-form">
                    <div class="row">
                      <!-- Input -->
                       <!-- Input -->
                       <div class="form-group col-lg-3 col-md-12">
                        <label>First Name</label>
                        <input type="text" name="name" placeholder="First Name">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-3 col-md-12">
                        <label>Last Name</label>
                        <input type="text" name="laname" placeholder="Last Name">
                      </div>

                      <!-- Input -->
                      <div class="form-group col-lg-6 col-md-12">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Email Address">
                      </div>

                      <!-- Search Select -->
                      <div class="form-group col-lg-3 col-md-12">
                        <label>Password</label>
                        <input type="text" name="pass" placeholder="User Id">
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Retype Password</label>
                        <input type="text" name="passs" placeholder="Enter Password">
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Job Alert Keywords</label>
                        <input type="text" name="jalert" placeholder="Job Alert Keywords">
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Job Alert Location</label>
                        <input type="text" name="jalertl" placeholder="Job Alert Location">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Industry</label>
                        <select class="chosen-select" name="indusry">
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
                        <label>How did u hear about us</label>
                        <select class="chosen-select" name="hear">
                        <option>Select</option>
                          <option value="News">News</option>
                          <option value="Socila Media">Socila Media</option>
                        </select>
                      </div> 

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Gender</label>
                        <select class="chosen-select" name="gender">
                        <option>Select</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Date Of Birth</label>
                        <input type="text" name="date_of_birth" placeholder= "dd/mm/yyyy">
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Mobile Number</label>
                        <input type="text" name="mnumber" placeholder="Enter Number">
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Whatsapp _Number</label>
                        <input type="text" name="wnumber" placeholder="Enter Number">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Address</label>
                        <input type="text" name="address" placeholder="Address">
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Pastol Code</label>
                        <input type="text" name="pastl" placeholder="Pastol Code">
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>Country</label>
                        <input type="text" name="cntry" placeholder="Country">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Resume Tittle</label>
                        <input type="text" name="rtitle" placeholder="Resume Tittle">
                      </div>


                      <div class="form-group col-lg-6 col-md-12">
                        <label>Current Employment</label>
                        <input type="text" name="cemploy" placeholder="Current Employment">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Current Desigination</label>
                        <input type="text" name="cdesig" placeholder="Current Desigination">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Current Employer</label>
                        <input type="text" name="cemployer" placeholder="Current Employer">
                      </div>


                      <div class="form-group col-lg-3 col-md-12">
                        <label>State</label>
                        <input type="text" name="stte" placeholder="State">
                      </div>

                      <div class="form-group col-lg-3 col-md-12">
                        <label>City</label>
                        <input type="text" name="cty" placeholder="City">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Experience Summary</label>
                        <input type="text" name="esumm" placeholder="Experience Summary">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Total Experience Years</label>
                        <input type="text" name="tey" placeholder="Experience">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Relevant Experience</label>
                        <input type="text" name="reve" placeholder="Relevant Experience">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Annual Salary Lakhs</label>
                        <input type="text" name="asl" placeholder="Annual Salary Lakhs">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Functional Area</label>
                        <input type="text" name="farea" placeholder="Functional Area">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Functional Role</label>
                        <input type="text" name="furole" placeholder="Functional Role">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Skill Name</label>
                        <input type="text" name="sknmae" placeholder="Skill Name">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Upload Resume</label>
                        <input type="text" name="upers" placeholder="Upload Resume">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Qualification</label>
                        <input type="text" name="qulaific" placeholder="Qualification">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Education</label>
                        <input type="text" name="educate" placeholder="Education">
                      </div>

                      <div class="form-group col-lg-6 col-md-12">
                        <label>Institute</label>
                        <input type="text" name="institu" placeholder="Institute">
                      </div>
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