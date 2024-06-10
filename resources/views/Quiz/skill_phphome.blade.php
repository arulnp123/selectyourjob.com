@extends('Quiz/layouts.app')
@section('content')
@include('Quiz/layouts.sidebar_php')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phpscript Quiz</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
</head>
<body>
     
    <div class="container mt-5">
    <div class="card bg-light rounded">
        <div class="card-body">
            <h2 class="card-title">PHP Quiz </h2>
                <p>The test contains 25 questions and there is no time limit.</p>
                <p>The test is not official, it's just a nice way to see how much you know, or don't know, about PHP.</p>
            <h2>Count Your Score</h2>
                <p>You will get 1 point for each correct answer. At the end of the Quiz,your total score will be displayed. Maximum score is 25 points.</p>
        <div class="ws-grey w3-round w3-padding w3-margin-top">
            <h2>Start the Quiz</h2>
                <p>Good luck!</p>
            </div>
            <a href="{{ url('skill_phpquiz') }}" class="btn btn-primary">Start Php Quiz</a>
        </div>
    </div>
</div>

</body>
<style>
     .btn-success {
        color: #fff;
        background-color: #1967d2;
        border-color: #000;
    }
    </style>
</html>


@endsection
