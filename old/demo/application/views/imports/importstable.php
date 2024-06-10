<?php defined('BASEPATH') OR exit('') ?>

<?= isset($range) && !empty($range) ? $range : ""; ?>
<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading">Projects (imported) Data</div>
    <?php if($allImports): ?>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Project Name</th>
                    <th>Cabinet Name</th>
                    <th>Part Name</th>
                    <th>File 1</th>
                    <th>File 2</th>
                    <th>Length</th>
                    <th>Width</th>
                    <th>Part Rotation</th>
                    <th>Quantity</th>
                    <th>Material</th>
                    <th>Thickness</th>
                    <th>Edge 1</th>
                    <th>Edge 2</th>
                    <th>Edge 3</th>
                    <th>Edge 4</th>
                    <th>Imported On</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach($allImports as $get): ?>
                <tr>
                    <th><?= $sn ?>.</th>
                    <td><?= $get->projectName ?></td>
                    <td><?= $get->cabinetName ?></td>
                    <td><?= $get->partName ?></td>
                    <td><?= $get->file_1 ?></td>
                    <td><?= $get->file_2 ?></td>
                   
                    <td>&#8358;<?= number_format($get->length, 2) ?></td>
                    <td>&#8358;<?= number_format($get->width, 2) ?></td>
                   
                    <td><?=$get->isPartRotation?></td>
                    <td>&#8358;<?= number_format($get->quantity) ?></td>
                    <td><?= $get->material ?></td>
                    <td>&#8358;<?= number_format($get->thickness) ?></td>
                    <td><?= $get->edge_1 ?></td>
                    <td><?= $get->edge_2 ?></td>
                    <td><?= $get->edge_3 ?></td>
                    <td><?= $get->edge_4 ?></td>
    
                      <td><?= date('jS M, Y h:ia', strtotime($get->createdOn)) ?></td>
                </tr>
                <?php $sn++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<!-- table div end-->
    <?php else: ?>
        <ul><li>No Imported data</li></ul>
    <?php endif; ?>
    
    <!--Pagination div-->
    <div class="col-sm-12 text-center">
        <ul class="pagination">
            <?= isset($links) ? $links : "" ?>
        </ul>
    </div>
</div>
<!-- panel end-->