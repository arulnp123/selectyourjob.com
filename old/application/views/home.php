<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log in</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?=base_url().CMP_domain?>public/images/icon.ico">
        <!-- favicon ends --->
        
        <!--- LOAD FILES -->
        <?php if($_SERVER['HTTP_HOST'] == "localhost" || (stristr($_SERVER['HTTP_HOST'], "192.168.") !== FALSE)|| (stristr($_SERVER['HTTP_HOST'], "127.0.0.") !== FALSE)):  $_SESSION['comp_aloc'] = $_SESSION['modular'];?>
        <link rel="stylesheet" href="<?=base_url().CMP_domain?>public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url().CMP_domain?>public/font-awesome/css/font-awesome.min.css">

        <script src="<?=base_url().CMP_domain?>public/js/jquery.min.js"></script>
        <script src="<?=base_url().CMP_domain?>public/bootstrap/js/bootstrap.min.js"></script>

        <?php else:  $_SESSION['comp_aloc'] = $_SESSION['modular'];?>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <?php endif; ?> 
        
        <!-- CSS -->
        <link rel="stylesheet" href="<?=base_url().CMP_domain?>public/css/form-elements.css">
        <link rel="stylesheet" href="<?=base_url().CMP_domain?>public/css/style.css">
        <link rel="stylesheet" href="<?=base_url().CMP_domain?>public/css/main.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <div style="font-size:100px">
                                <h1>Modular Kitchen...Kingdom</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="bg-primary text-center">
                                <span id="errMsg"></span>
                            </div>
                            <div class="form-bottom">
                                <form id="loginForm">
                                    <div class="form-group">
                                        <label class="sr-only" for="email">E-mail</label>
                                        <input type="email" placeholder="Email" class="form-control checkField" id="email" >
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="password">Password</label>
                                        <input type="password" placeholder="Password" class="form-control checkField" id="password" >
                                    </div>
                                    <button type="submit" class="btn">Log in!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12 text-center" style="color:#050556">
                            Designed and Developed by <a href="http://www.siracits.com/" target='_blank' class="text-primary">SIRACITS</a> (2018-2019)
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!-- Javascript -->
        <script src="<?=base_url().CMP_domain?>public/js/main.js"></script>
        <script src="<?=base_url().CMP_domain?>public/js/access.js"></script>
        <!-- <script src="<?=base_url()?>public/js/jquery.backstretch.min.js"></script> -->
        <!--Javascript--->

    </body>

</html>