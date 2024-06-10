<?php
defined('BASEPATH') OR exit('');
//$dailyTransactions = json_decode($dailyTransactions, true);
?>

<div class="row latestStuffs">
    <div class="col-sm-4">
        <div class="panel panel-info">
            <div class="panel-body latestStuffsBody" style="background-color: #5cb85c">
                <div class="pull-left"><i class="fa fa-exchange"></i></div>
                <div class="pull-right">
                    <div><?=$dailyImports?></div>
                   
                    <div class="latestStuffsText">Total Imported Data</div>
                </div>
            </div>
            <div class="panel-footer text-center" style="color:#5cb85c">Number of Items Imported Today</div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-info">
            <div class="panel-body latestStuffsBody" style="background-color: #f0ad4e">
                <div class="pull-left"><i class="fa fa-tasks"></i></div>
                <div class="pull-right">
                    <div><?=$dailyPackings?></div>
                    <div class="latestStuffsText pull-right">Total Packings</div>
                </div>
            </div>
            <div class="panel-footer text-center" style="color:#f0ad4e">Total Packings Today</div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel panel-info">
            <div class="panel-body latestStuffsBody" style="background-color: #337ab7">
                <div class="pull-left"><i class="fa fa-shopping-cart"></i></div>
                <div class="pull-right">
                    <div><?=$dailyLoadings?></div>
                    <div class="latestStuffsText pull-right">Today Loadings</div>
                </div>
            </div>
            <div class="panel-footer text-center" style="color:#337ab7">Total Loadings Today</div>
        </div>
    </div>
</div>


<script src="<?=base_url(CMP_domain.'public/js/chart.js'); ?>"></script>
<script src="<?=base_url(CMP_domain.'public/js/dashboard.js')?>"></script>