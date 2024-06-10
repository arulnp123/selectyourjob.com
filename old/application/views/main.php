<?php
defined('BASEPATH') OR exit('');
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title><?= $pageTitle ?></title>
		
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?=base_url().CMP_domain?>public/images/icon.ico">
        <!-- favicon ends -->
        
        <!-- LOAD FILES -->
        <?php if((stristr($_SERVER['HTTP_HOST'], "localhost") !== FALSE) || (stristr($_SERVER['HTTP_HOST'], "192.168.") !== FALSE)|| (stristr($_SERVER['HTTP_HOST'], "127.0.0.") !== FALSE)): ?>
        <link rel="stylesheet" href="<?=base_url().CMP_domain?>public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?=base_url().CMP_domain?>public/bootstrap/css/bootstrap-theme.min.css" media="screen">
        <link rel="stylesheet" href="<?=base_url().CMP_domain?>public/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?=base_url().CMP_domain?>public/font-awesome/css/font-awesome-animation.min.css">
        <link rel="stylesheet" href="<?=base_url().CMP_domain?>public/ext/select2/select2.min.css">

        <script src="<?=base_url().CMP_domain?>public/js/jquery.min.js"></script>
        <script src="<?=base_url().CMP_domain?>public/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=base_url().CMP_domain?>public/ext/select2/select2.min.js"></script>

        <?php else: ?>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.8/font-awesome-animation.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

        <?php endif; ?>
        
        <!-- custom CSS -->
        <link rel="stylesheet" href="<?= base_url().CMP_domain?>public/css/main.css">

        <!-- custom JS -->
        <script src="<?= base_url().CMP_domain ?>public/js/main.js"></script>
    </head>

    <body>
        <nav class="navbar navbar-default hidden-print">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="nav navbar-nav navbar-left visible-xs">
                         <li class="<?= $pageTitle == 'Dashboard' ? 'active' : '' ?>">
                            <a href="<?= site_url('dashboard') ?>">
                                <i class="fa fa-home"></i>
                                Dashboard
                            </a>
                        </li>
                           <li class="<?= $pageTitle == 'Imports' ? 'active' : '' ?>">
                            <a href="<?= site_url('Imports') ?>">
                                <i class="fa fa-exchange"></i>
                                Import Data
                            </a>
                        </li>
                        <li class="<?= $pageTitle == 'Packings' ? 'active' : '' ?>">
                            <a href="<?= site_url('packings') ?>">
                                <i class="fa fa-exchange"></i>
                                Packing Slip
                            </a>
                        </li>
                        
                        <?php if($this->session->admin_role === "Super"):?>
                        <li class="<?= $pageTitle == 'loadings' ? 'active' : '' ?>">
                            <a href="<?= site_url('loadings') ?>">
                                <i class="fa fa-shopping-cart"></i>
                                Delivery
                            </a>
                        </li>
                        <li class="<?= $pageTitle == 'Database' ? 'active' : '' ?>">
                            <a href="<?= site_url('dbmanagement') ?>">
                                <i class="fa fa-database"></i>
                                Reports
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                           <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user navbarIcons"></i>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-menu-header text-center">
                                    <strong>Account</strong>
                                </li>
                                <li class="divider"></li>
                          
                                <li><a href="<?= site_url('logout') ?>"><i class="fa fa-sign-out"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container-fluid hidden-print">
            <div class="row content">
                <!-- Left sidebar -->
                <div class="col-sm-2 sidenav hidden-xs mySideNav">
                    <br>
                    <ul class="nav nav-pills nav-stacked pointer">
                        <li class="<?= $pageTitle == 'Dashboard' ? 'active' : '' ?>">
                            <a href="<?= site_url('dashboard') ?>">
                                <i class="fa fa-home"></i>
                                Dashboard
                            </a>
                        </li>
                           <li class="<?= $pageTitle == 'Imports' ? 'active' : '' ?>">
                            <a href="<?= site_url(CMP_domain.'Imports') ?>">
                                <i class="fa fa-exchange"></i>
                                Import Data
                            </a>
                        </li>
                        <li class="<?= $pageTitle == 'Packings' ? 'active' : '' ?>">
                            <a href="<?= site_url('packings') ?>">
                                <i class="fa fa-exchange"></i>
                                Packing Slip
                            </a>
                        </li>
                        
                        <?php if($this->session->admin_role === "Super"):?>
                        <li class="<?= $pageTitle == 'loadings' ? 'active' : '' ?>">
                            <a href="<?= site_url('loadings') ?>">
                                <i class="fa fa-shopping-cart"></i>
                                Delivery
                            </a>
                        </li>
                        <li class="<?= $pageTitle == 'reports' ? 'active' : '' ?>">
                            <a href="<?= site_url('reports') ?>">
                                <i class="fa fa-database"></i>
                                Reports
                            </a>
                        </li>
                        
                       
                        <?php endif; ?>
                    </ul>
                    <br>
                </div>
                <!-- Left sidebar ends -->
                <br>

                <!-- Main content -->
                <div class="col-sm-10">
                    <?= isset($pageContent) ? $pageContent : "" ?>
                </div>
                <!-- Main content ends -->
            </div>
        </div>

        <footer class="container-fluid text-center hidden-print">
            <p>
                <i class="fa fa-copyright"></i>
                Copyright <a href="http://www.siracits.com">Sivagnanamani</a> (2018-2019)
            </p>
        </footer>

        <!--Modal to show flash message-->
        <div id="flashMsgModal" class="modal fade" role="dialog" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" id="flashMsgHeader">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <center><i id="flashMsgIcon"></i> <font id="flashMsg"></font></center>
                    </div>
                </div>
            </div>
        </div>
        <!--Modal end-->

        <!--modal to display transaction receipt when a transaction's ref is clicked on the transaction list table -->
        <div class="modal fade" role='dialog' data-backdrop='static' id="pkgSlipModal">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header hidden-print">
                        <button class="close" data-dismiss='modal'>&times;</button>
                        <h4 class="text-center">Packing Slip</h4>
                    </div>
                    <div class="modal-body" id='pkgReceipt'></div>
                </div>
            </div>
        </div>
        <!-- End of modal-->

    <!--modal to display transaction receipt when a transaction's ref is clicked on the transaction list table -->
        <div class="modal fade" role='dialog' data-backdrop='static' id="ldgSlipModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header hidden-print">
                        <button class="close" data-dismiss='modal'>&times;</button>
                        <h4 class="text-center">Delivery Challan</h4>
                    </div>
                    <div class="modal-body" id='ldgReceipt'></div>
                </div>
            </div>
        </div>
        <!-- End of modal-->
        <!--Login Modal-->
        <div class="modal fade" role='dialog' data-backdrop='static' id='logInModal'>
            <div class="modal-dialog">
                <!-- Log in div below-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close closeLogInModal">&times;</button>
                        <h4 class="text-center">Log In</h4>
                        <div id="logInModalFMsg" class="text-center errMsg"></div>
                    </div>
                    <div class="modal-body">
                        <form name="logInModalForm">
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label for='logInModalEmail' class="control-label">E-mail</label>
                                    <input type="email" id='logInModalEmail' class="form-control checkField" placeholder="E-mail" autofocus>
                                    <span class="help-block errMsg" id="logInModalEmailErr"></span>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label for='logInPassword' class="control-label">Password</label>
                                    <input type="password" id='logInModalPassword'class="form-control checkField" placeholder="Password">
                                    <span class="help-block errMsg" id="logInModalPasswordErr"></span>
                                </div>
                            </div>
                            
                            <div class="row">
                                <!--<div class="col-sm-6 pull-left">
                                    <input type="checkbox" class="control-label" id='remMe'> Remember me
                                </div>-->
                                <div class="col-sm-4"></div>
                                <div class="col-sm-2 pull-right">
                                    <button id='loginModalSubmit' class="btn btn-primary">Log in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End of log in div-->
            </div>
        </div>
        <!---end of Login Modal-->
    </body>
</html>