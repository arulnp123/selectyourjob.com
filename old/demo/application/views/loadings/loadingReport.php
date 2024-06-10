<?php
defined('BASEPATH') OR exit('');

$total_earned = 0;


?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Loading Report</title>
		
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?=base_url().CMP_domain?>public/images/icon.ico">
        <!-- favicon ends --->
        
        <!--- LOAD FILES -->
        <?php if((stristr($_SERVER['HTTP_HOST'], "localhost") !== FALSE) || (stristr($_SERVER['HTTP_HOST'], "192.168.") !== FALSE)|| (stristr($_SERVER['HTTP_HOST'], "127.0.0.") !== FALSE)): ?>
        <link rel="stylesheet" href="<?=base_url().CMP_domain?>public/bootstrap/css/bootstrap.min.css">

        <?php else: ?>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <?php endif; ?>
        
        <!-- custom CSS -->
        <link rel="stylesheet" href="<?= base_url().CMP_domain ?>public/css/main.css">
    </head>

    <body>
        <div class="container margin-top-5">
            <div class="row">
                <div class="col-xs-12 text-right hidden-print">
                    <button class="btn btn-primary btn-sm" onclick="window.print()">Print Report</button>
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h4>Delivery Challan Between <?=date('jS M, Y', strtotime($from))?> and <?=date('jS M, Y', strtotime($to))?></h4>
                </div>
            </div>
            
            <div class="row margin-top-5">
                <div class="col-xs-12 table-responsive">
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading text-center">
                            Delivery Challan Between <?=date('jS M, Y', strtotime($from))?> and <?=date('jS M, Y', strtotime($to))?>
                        </div>
                        <?php if($allLoadings): ?>
                        <div class="table table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Delivery ID</th>
                                        <th>Delivered On</th>
                                        <th>Customer</th>
                                        <th>Packing ID</th>
                                        <th>Project Name</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sn = 1;?>
                                    <?php foreach($allLoadings as $get): ?>
                                    <tr>
                                        <th><?= $sn ?>.</th>
                                        <td><?= 'LDG'.substr(sprintf('%08d', $get->id),0,10) ?></td>
                                        <td><?= date('jS M, Y h:ia', strtotime($get->loadingOn)) ?></td>
                                        <td><?= $get->customerName ?></td>
                                        <td><?= 'PKG'.substr(sprintf('%09d', $get->pkg_id ),0,10)?></td>
                                        <td><?= $get->projectName ?></td>
                                        <td><?= $get->quantity ?></td>
                                    </tr>
                                    <?php $sn++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- table div end--->
                        <?php else: ?>
                            <ul><li>No Loading Found Within Specified Dates</li></ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <div class="row" style="margin-bottom: 10px">
                <div class="col-xs-6">
                    <button class="btn btn-primary btn-sm hidden-print" onclick="window.print()">Print Report</button>
                </div>
                
            </div>
        </div>
        <!--- panel end-->
    </body>
</html>