@extends('Admin/layouts.app')
@section('content')
    <style>
        /* Add CSS styles for the button */
        #addCategoryButton {
            background-color: royalblue;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>

    <!-- Dashboard -->
    <section class="user-dashboard">
        <div class="dashboard-outer">
            <div class="upper-title-box">
                <h3>Add Education</h3>

                <div class="text">Add your Education</div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <!-- Ls widget -->
                    <div class="ls-widget">
                        <div class="tabs-box">
                            <div class="widget-title">
                                <h4>Add Education</h4>
                            </div>
                            <div class="widget-content">
                                <div class="table-outer">
                                    <div class="form-container">
                                        <form action="{{ route('add_location') }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="Industry_Name">Location:</label>
                                                <input type="text" name="location" class="form-control" id="location" required>
                                                   
                                            </div>
                                            <div class="form-group">
                                                <label for="Status">city id:</label>
                                                <input type="text" name="Status" class="form-control" id="Status" required>
                                            </div>&nbsp;<br>
                                            <button type="submit" class="btn btn-primary">Add Category</button>
                                        </form>
                                    </div>
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
