@extends('Frontend/layouts.app')
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

        <form class="default-form" action="{{ url('/useradmin') }}" method="post">
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
                        <input type="text" name="repass" placeholder="Enter Password">
                      </div>

                      
                    

                       <div class="form-group col-lg-3 col-md-12">
                        <label>Whatsapp _Number</label>
                        <input type="text" name="wnumber" placeholder="Enter Number">
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