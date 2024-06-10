<?php
defined('BASEPATH') OR exit('');

// $current_projects = [];
// if(isset($projects) && !empty($projects)){    
//     foreach($projects as $get){
//         $current_projects[$get->projectName] = $get->projectName;
//      //   $current_items[$get->id] = $get->partName;
 
//     }
// }

// $current_items = [];
// if(isset($items) && !empty($items)){    
//     foreach($items as $get){
//         $current_items[$get->id] = $get->file_1;
//      //   $current_items[$get->id] = $get->partName;
 
//     }
// }
?>

<style href="<?=base_url('public/ext/datetimepicker/bootstrap-datepicker.min.css')?>" rel="stylesheet"></style>

<div class="pwell hidden-print">   
    <div class="row">
        <div class="col-sm-12">
            <!--- Row to create new packing-->
            <div class="row">
                <div class="col-sm-3">
                    <span class="pointer text-primary">
                        <button class='btn btn-primary btn-sm' id='showPkgForm'><i class="fa fa-plus"></i> New Packing Slip </button>
                    </span>
                </div>
                <!-- <div class="col-sm-3">
                    <span class="pointer text-primary">
                        <button class='btn btn-primary btn-sm' data-toggle='modal' data-target='#reportModal'>
                            <i class="fa fa-newspaper-o"></i> Generate Report 
                        </button>
                    </span>
                </div> -->
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
                            <div class="text-center errMsg" id='newPkgErrMsg'></div>
                            <br>
                            <div class="row">
                                <div class="col-sm-5">
                                    <label for="txtPkgName">Project Name</label>
                                    <select class="projName form-control"  name="projName"></select>

                                    <!-- <select name="projects" id="projects" class="form-control" style="width:350px">
                                        <option value="">--- Select Project ---</option>
                                        <?php
                                     //   foreach ($projects as $key => $value) {
                                      //      echo "<option value='".$value->projectName."'>".$value->projectName."</option>";
                                      //  }
                                        ?>
                                    </select>     -->
                                </div>  
                                <!-- <div class="col-sm-5">
                                    <label for="txtPkgName">Packing Slip Code/Name</label>
                                    <input type="text" id="txtPkgName" class="form-control" placeholder="Packing Slip Bar code" autofocus>
                                           
                                </div>                                        -->
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!--Cloned div comes here--->
                                    <div id="appendClonedDivHere"></div>
                                    <!--End of cloned div here--->
                                    
                                    <!--- Text to click to add another item to packing-->
                                    <div class="row">
                                        <div class="col-sm-2 text-primary pointer">
                                            <button class="btn btn-primary btn-sm" id="clickToClone"><i class="fa fa-plus"></i> Add item</button>
                                        </div>
                                        
                                        <br class="visible-xs">
                                        
                                        <div class="col-sm-2 form-group-sm">
                                            <input type="text" id="barcodeText" class="form-control" placeholder="item code" autofocus>
                                            <span class="help-block errMsg" id="itemCodeNotFoundMsg"></span>
                                        </div>
                                    </div>
                                    <!--- End of text to click to add another item to packing-->
                                    <br>
                                    
      
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-sm-2 form-group-sm">
                                    <button class="btn btn-primary btn-sm" id='useScanner'>Use Barcode Scanner</button>
                                </div>
                                <br class="visible-xs">
                                <div class="col-sm-6"></div>
                                <br class="visible-xs">
                                <div class="col-sm-4 form-group-sm">
                                    <button type="button" class="btn btn-primary btn-sm" id="confirmPkgSlip">Confirm</button>
                                    <button type="button" class="btn btn-danger btn-sm" id="cancelSaleOrder">Clear</button>
                                    <button type="button" class="btn btn-danger btn-sm" id="hidePkgForm">Close</button>
                                </div>
                            </div>
                        </form><!-- end of form-->
                    </div>
                </div>
                <!-- end of div to display packing form-->
            </div>
            <!--end of form-->

                        <br><br>
            <!-- sort and co row-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-3 form-inline form-group-sm">
                        <label for="pkgListPerPage">Per Page</label>
                        <select id="pkgListPerPage" class="form-control">
                            <option value="1">1</option>
                            <option value="5">5</option>
                            <option value="10" selected>10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="20">25</option>
                            <option value="30">30</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>

                    <div class="col-sm-5 form-group-sm form-inline">
                        <label for="pkgListSortBy">Sort by</label>
                        <select id="pkgListSortBy" class="form-control">
                            <option value="Id-DESC">date(Latest First)</option>
                            <option value="Id-ASC">date(Oldest First)</option>
                                                 </select>
                    </div>

                </div>
            </div>
            <!-- end of sort and co div-->
    

        </div>
    </div>
    
    <hr>
    
    <!-- packing list table-->
    <div class="row">
        <!-- packing list div-->
        <div class="col-sm-12" id="pkgListTable"></div>
        <!-- End of packings div-->
    </div>
    <!-- End of packings list table-->
</div>


<div class="row hidden" id="divToClone">
    <div class="col-sm-4 form-group-sm">
        <label>Item</label>
        <select class="form-control selectedItemDefault" name="products" onchange="selectedItem(this)"></select>
    </div>

    <!-- <div class="col-sm-2 form-group-sm itemPrjNameDiv">
        <label>Project Name</label>
        <span class="form-control itemPrjName"></span>
    </div> -->

    <div class="col-sm-2 form-group-sm itemCbtNameDiv">
        <label>Cabinet Name</label>
        <span class="form-control itemCbtName"></span>
    </div>
    <div class="col-sm-2 form-group-sm itemCbtNameDiv">
        <label>Part Name</label>
        <span class="form-control itemPartName"></span>
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
<script src="<?=base_url()?>public/js/packings.1.js"></script>
<script src="<?=base_url('public/ext/datetimepicker/bootstrap-datepicker.min.js')?>"></script>
<script src="<?=base_url('public/ext/datetimepicker/jquery.timepicker.min.js')?>"></script>
<script src="<?=base_url()?>public/ext/datetimepicker/datepair.min.js"></script>
<script src="<?=base_url()?>public/ext/datetimepicker/jquery.datepair.min.js"></script>

