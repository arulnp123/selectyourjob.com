<?php defined('BASEPATH') OR exit('') ?>

<?= isset($range) && !empty($range) ? $range : ""; ?>
<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading">PACKINGS</div>
    <?php if($allPackings): ?>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Bar Code</th>
                   
                    <th>Packaged On</th>
                    <th>Project Name</th>
                    <th>Cabinet name</th>
                    <th>Part name</th>
                    <th>Quantity</th>
                    <th>D.C</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($allPackings as $get): ?>
                <tr>
                    <th><?= $sn ?>.</th>
                                 
        <td><a class="pointer vtr" title="Click to view packing Slip"><?= 'VK'.substr(sprintf('%04d', $get->id),0,10) ?></a></td>
                            </td>
                   
                      <td><?= date('jS M, Y h:ia', strtotime($get->packingOn)) ?></td>
                     <td><?= $get->projectName ?></td>
                    <td><?= $get->cabinetName ?></td>
                    <td><?= $get->partName ?></td>
                    <td><?= $get->quantity ?></td>
                    <td><?= $get->loading_id ?></td>
                   
                </tr>
                <?php $sn++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<!-- table div end-->
    <?php else: ?>
        <ul><li>No Packings</li></ul>
    <?php endif; ?>
    
    <!--Pagination div-->
    <div class="col-sm-12 text-center">
        <ul class="pagination">
            <?= isset($links) ? $links : "" ?>
        </ul>
    </div>
</div>
<!-- panel end-->