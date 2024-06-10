<?php
defined('BASEPATH') OR exit('');

$total_earned = 0;


?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Current Stock Report</title>
		
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
            
          
            <div class="row margin-top-5">
                <div class="col-xs-12 table-responsive">
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                       
                        <?php if($allProducts): ?>
                        <div class="table table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Project Name</th>
                                        <th>Cabinet Name</th>
                                        <th>Part Name</th>
                                        <th>File_1</th>
                                        <th>Op.Quantity</th>
                                        <th>Packing ID</th>
                                        <th>Pkg Qty</th>
                                        <th>Loading ID</th>
                                        <th>Curr.Qty</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $sn = 1;?>
                                    <?php foreach($allProducts as $get): ?>
                                    <tr>
                                        <th><?= $sn ?>.</th>
                                        <td><?= $get->projectName ?></td>
                                        <td><?= $get->cabinetName ?></td>
                                         <td><?= $get->partName ?></td>
                                         <td><?= $get->file_1 ?></td>
                                        <td><?= $get->OpQty ?></td>
                                        <?php if ($get->PackingId > '0')
                                        { ?>
                                            <td><?= 'VK'.substr(sprintf('%04d', $get->PackingId),0,5) ?></td>
                                            <?
                                        }
                                        else
                                        {
                                            echo "<td></td>";
                                        } ?>
                                        <td><?= $get->PackingQty ?></td>
                                        <td><?= $get->LoadingId ?></td>
                                        <td><?= $get->ClosingQty ?></td>
                                    </tr>
                                    <?php $sn++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- table div end--->
                        <?php else: ?>
                            <ul><li>No Packing Found Within Specified Dates</li></ul>
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