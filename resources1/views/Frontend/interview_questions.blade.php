@extends('Frontend.layouts.app')
@section('content')
    <!-- Faqs Section -->
    <section class="faqs-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Frequently Asked Questions</h2>
                <div class="text">Home / Faq</div>
            </div>
            <h3>Questions & Answers</h3>
            <div class="main-footer">
                <div class="auto-container">
                    <!--Widgets Section-->

                    <div class="footer-widget links-widget">
                        <h4></h4><Br>
                        <div class="widget-content">
                            <ul class="list">
                                <li><a href="{{ url('/android_ques') }}">1) Android Interview Questions & Answers:</a></li>
                                <li><a href="{{ url('/aws_ques') }}">2) AWS Interview Questions & answers:</a></li>
                                <li><a href="{{ url('/azure_ques') }}">3) Azure Interview Questions & Answers:</a></li>
                                <li><a href="{{ url('/cpgm_ques') }}">4) C Programming Interview Questions & Answers:</a></li>
                                <li><a href="{{ url('/datasci_ques') }}">5) Data science Interview Questions & Answers:</a></li>
                                <li><a href="{{ url('/datastruc_ques') }}">6) Data Structures Interview Questions & Answers:</a></li>
                                <li><a href="{{ url('/deep_ques') }}">7) Deep learning interview Questions & Answers:</a></li>
                                <li><a href="{{ url('/flutter_ques') }}">8) Flutter Interview Questions & Answers:</a></li>
                                <li><a href="{{ url('/fullstack_ques') }}">9) Full Stack Develoaer Interview Questions & Answers:</a></li>
                                <li><a href="{{ url('/iot_ques') }}">10) IoT Interview Questions & Answers:</a></li>
                                <li><a href="{{ url('/java_ques') }}">11) Java Interview Questions & Answers:</a></li>
                                <li><a href="{{ url('/main_ques') }}">12) Main Frame Interview Questions & Answers:</a></li>
                                <li><a href="{{ url('/pyspark_ques') }}">13) PySpark Interview Questions & Answers:</a></li>
                                <li><a href="{{ url('/python_ques') }}">14) Python interview Questions & Answers:</a></li>
                                <li><a href="{{ url('/sap_ques') }}">15) SAP Interview Questions & Answers:</a></li>
                                <li><a href="{{ url('/snow_ques') }}">16) Snowflake Interview Questions & Answers:</a></li>
                                <li><a href="{{ url('/sql_ques') }}">17) SQL Interview Questions & Answers:</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Faqs Section -->
@endsection
