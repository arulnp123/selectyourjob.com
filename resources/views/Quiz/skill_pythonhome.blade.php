@extends('Quiz/layouts.app')
@section('content')
@include('Quiz/layouts.sidebar_Python')

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
     <div>

    <h2>Php Quiz Test</h2>
    <p>'Learn by taking a quiz!tis quiz will give you a signal of how much you know,about php.</p>
    
    
    </div>

    <div class="container mt-5">
    <div class="card bg-light rounded">
        <div class="card-body">
            <h2 class="card-title">PHP Quiz Test</h2>
            <p class="card-text">Learn by taking a quiz! This quiz will give you a signal of how much you know about PHP which stands for Hypertext Preprocessor</p>
            <h6>1.What is PHP?:</h6>
        <ol>
            <li>PHP is an acronym for "PHP: Hypertext Preprocessor"</li>
            <li>PHP is a widely-used, open source scripting language
            <li>PHP scripts are executed on the server
            <li>PHP is free to download and use</li>
        </ol>

            <h6>2.What is a PHP File?</h6>
            <ol>
                <li>PHP files can contain text, HTML, CSS, JavaScript, and PHP code</li>
                <li>PHP code is executed on the server, and the result is returned to the browser as plain HTML</li>
                <li>PHP files have extension </li>
            </ol>

            <h6>3.What Can PHP Do?</h6>
        <ol>
                <li>PHP can generate dynamic page content</li>
                <li>PHP can create, open, read, write, delete, and close files on the server</li>
                <li>PHP can collect form data<li>
                <li>PHP can send and receive cookies</li>
                <li>PHP can add, delete, modify data in your database</li>
                <li>PHP can be used to control user-access</li>
                <li>PHP can encrypt data</li>
        </ol>

            <a href="{{ url('skill_pythonquiz') }}" class="btn btn-primary">Start Php Quiz</a>
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
