<?php defined('BASEPATH') OR exit('') ?>

<?= isset($range) && !empty($range) ? $range : ""; ?>
<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading">Loadings</div>
    <?php if($allLoadings): ?>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Delivery ID</th>
                    <th>Loaded On</th>
                    <!--<th>Packing Slip</th>-->
                    <th>Project Name</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($allLoadings as $get): ?>
                <tr>
                    <th><?= $sn ?>.</th>
                                 
                        <td><a class="pointer vltr" title="Click to view delivery Slip"><?= 'LDG'.substr(sprintf('%09d', $get->id),0,10) ?></a></td>
                            </td>
                   
                      <td><?= date('jS M, Y h:ia', strtotime($get->loadingOn)) ?></td>
                    <!--<td><?= 'PKG'.substr(sprintf('%09d', $get->pkg_id ),0,10)?></td> -->
                     <td><?= $get->projectName ?></td>
                    <td><?= $get->tot_quantity ?></td>
                   
                </tr>
                <?php $sn++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<!-- table div end-->
    <?php else: ?>
        <ul><li>No Loading Data available</li></ul>
    <?php endif; ?>
    
    <!--Pagination div-->
    <div class="col-sm-12 text-center">
        <ul class="pagination">
            <?= isset($links) ? $links : "" ?>
        </ul>
    </div>
</div>
<!-- panel end-->