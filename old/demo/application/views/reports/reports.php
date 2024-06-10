<?php
defined('BASEPATH') OR exit('');

$current_projects = [];
if(isset($projects) && !empty($projects)){    
    foreach($projects as $get){
        $current_projects[$get->projectName] = $get->projectName;
     //   $current_items[$get->id] = $get->partName;
 
    }
}
?>

<style href="<?=base_url('public/ext/datetimepicker/bootstrap-datepicker.min.css')?>" rel="stylesheet"></style>


<div class="pwell hidden-print">   
    <div class="row">
        <div class="col-sm-12">
            <!--- Row to create new packing-->
            <div class="row">
                <div class="col-sm-3">
                    <span class="pointer text-primary">
                        <button class='btn btn-primary btn-sm' id='showPkgForm'> Packing Report </button>
                    </span>
                </div>
                <div class="col-sm-3">
                    <span class="pointer text-primary">
                        <button class='btn btn-primary btn-sm' id='showLdgForm'> Loading Report </button>
                    </span>
                </div>

                 <div class="col-sm-3">
                    <span class="pointer text-primary">
                        <button class="btn btn-success" id='showStkForm'> Current Stock Report </button>
                    </span>
                </div>
            </div>
            <br>
            <!--- End of row to create new packing-->
            <!--- End of row to create new packing-->
            <!---form to create new packings--->
            <div class="row collapse" id="newPkgDiv">
                <!---div to display packing form--->
                <div class="col-sm-12" id="salesPkgFormDiv">
                    <div class="well">
                        <form name="salesPkgForm" id="salesPkgForm" role="form">
       
                            <h2>Packing Report</h2>
                            
                            <div class="row" id="datePair">
                                <div class="col-sm-6 form-group-sm">
                                    <label class="control-label">From Date</label>                                    
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" id='pkgFrom' class="form-control date start" placeholder="YYYY-MM-DD">
                                    </div>
                                    <span class="help-block errMsg" id='ldgFromErr'></span>
                                </div>

                                <div class="col-sm-6 form-group-sm">
                                    <label class="control-label">To Date</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" id='pkgTo' class="form-control date end" placeholder="YYYY-MM-DD">
                                    </div>
                                    <span class="help-block errMsg" id='ldgToErr'></span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" id='clickToGenPkg'>Generate</button>
                                <button class="btn btn-danger" data-dismiss='modal'>Close</button>
                            </div>
      
                        </form><!-- end of form-->
                    </div>
                </div>
                <!-- end of div to display packing form-->
            </div>

            <div class="row collapse" id="newLdgDiv">
                <!---div to display packing form--->
                <div class="col-sm-12" id="salesLdgFormDiv">
                    <div class="well">
                        <form name="salesLdgForm" id="salesPkgForm" role="form">
       
                            <h2>Loading Report</h2>
                            
                            <div class="row" id="datePair">
                                <div class="col-sm-6 form-group-sm">
                                    <label class="control-label">From Date</label>                                    
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" id='ldgFrom' class="form-control date start" placeholder="YYYY-MM-DD">
                                    </div>
                                    <span class="help-block errMsg" id='ldgFromErr'></span>
                                </div>

                                <div class="col-sm-6 form-group-sm">
                                    <label class="control-label">To Date</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <span><i class="fa fa-calendar"></i></span>
                                        </div>
                                        <input type="text" id='ldgTo' class="form-control date end" placeholder="YYYY-MM-DD">
                                    </div>
                                    <span class="help-block errMsg" id='ldgToErr'></span>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" id='clickToGenLdg'>Generate</button>
                                <button class="btn btn-danger" data-dismiss='modal'>Close</button>
                            </div>
      
                        </form><!-- end of form-->
                    </div>
                </div>
                <!-- end of div to display packing form-->
            </div>

             <div class="row collapse" id="currStock">
                <!---div to display packing form--->
                <div class="col-sm-12" id="currStockFormDiv">
                    <div class="well">
                        <form name="currStockForm" id="currStockForm" role="form">
       
                            <h2>Current Stock Report</h2>
                              <div class="row" id="datePair">
                                <div class="col-sm-6 form-group-sm">
                                    <label class="control-label">Project</label>                                    
                                    <select class="projName form-control"  name="projName"></select>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" id='getCurrentStock'>Generate</button>
                                <button class="btn btn-danger" data-dismiss='modal'>Close</button>
                            </div>
      
                        </form><!-- end of form-->
                    </div>
                </div>
                <!-- end of div to display packing form-->
            </div>
            <!--end of form-->
        </div>
    </div>
    
    <hr>
    
    <!-- packing list table-->
    <div class="row">
        <!-- packing list div-->
        <div class="col-sm-12" id="listTable"></div>
        <!-- End of packings div-->
    </div>
    <!-- End of packings list table-->
</div>


<div class="row hidden" id="divToClone">
    <div class="col-sm-4 form-group-sm">
        <label>Item</label>
        <select class="form-control selectedItemDefault" name="products" onchange="selectedItem(this)"></select>
    </div>

    <div class="col-sm-2 form-group-sm itemPrjNameDiv">
        <label>Project Name</label>
        <span class="form-control itemPrjName"></span>
    </div>

    <div class="col-sm-2 form-group-sm itemCbtNameDiv">
        <label>Cabinet Name</label>
        <span class="form-control itemCbtName"></span>
    </div>

    <div class="col-sm-2 form-group-sm itemAvailQtyDiv">
        <label>Available Quantity</label>
        <span class="form-control itemAvailQty">0</span>
    </div>


    <div class="col-sm-1 form-group-sm itemPkgQtyDiv">
        <label>Quantity</label>
        <input type="number" min="0" class="form-control itemPkgQty" value="0">
        <span class="help-block itemPkgQtyErr errMsg"></span>
    </div>

   
    <br class="visible-xs">
    
    <div class="col-sm-1">
        <button class="close retrit">&times;</button>
    </div>
    
    <br class="visible-xs">
</div>


<div class="modal fade" id='reportModal' data-backdrop='static' role='dialog'>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="close" data-dismiss='modal'>&times;</div>
                <h4 class="text-center">Generate Report</h4>
            </div>
            
            <div class="modal-body">
                <div class="row" id="datePair">
                    <div class="col-sm-6 form-group-sm">
                        <label class="control-label">From Date</label>                                    
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span><i class="fa fa-calendar"></i></span>
                            </div>
                            <input type="text" id='pkgFrom' class="form-control date start" placeholder="YYYY-MM-DD">
                        </div>
                        <span class="help-block errMsg" id='pkgFromErr'></span>
                    </div>

                    <div class="col-sm-6 form-group-sm">
                        <label class="control-label">To Date</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span><i class="fa fa-calendar"></i></span>
                            </div>
                            <input type="text" id='pkgTo' class="form-control date end" placeholder="YYYY-MM-DD">
                        </div>
                        <span class="help-block errMsg" id='pkgToErr'></span>
                    </div>
                </div>
            </div>
            
            <div class="modal-footer">
                <button class="btn btn-success" id='clickToGen'>Generate</button>
                <button class="btn btn-danger" data-dismiss='modal'>Close</button>
            </div>
        </div>
    </div>
</div>

<!---End of copy of div to clone when adding more products to sales packing---->
<!-- <script src="<?=base_url()?>public/js/ximports.js"></script> -->
<script src="<?=base_url()?>public/js/reports.js"></script>
<script src="<?=base_url('public/ext/datetimepicker/bootstrap-datepicker.min.js')?>"></script>
<script src="<?=base_url('public/ext/datetimepicker/jquery.timepicker.min.js')?>"></script>
<script src="<?=base_url()?>public/ext/datetimepicker/datepair.min.js"></script>
<script src="<?=base_url()?>public/ext/datetimepicker/jquery.datepair.min.js"></script>

