<?php
defined('BASEPATH') OR exit('');
?>

<style href="<?=base_url(CMP_domain.'public/ext/datetimepicker/bootstrap-datepicker.min.css')?>" rel="stylesheet"></style>

<div class="pwell hidden-print">   
    <div class="row">
        <div class="col-sm-12">
            <!--- Row to create new loading-->
            <div class="row">
                <div class="col-sm-3">
                    <span class="pointer text-primary">
                        <button class='btn btn-primary btn-sm' id='showLdgForm'><i class="fa fa-plus"></i> New Delivery Slip </button>
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
            <!--- End of row to create new loading-->
            
            <!---form to create new loadings--->
            <div class="row collapse" id="newLdgDiv">
                <!---div to display loading form--->
                <div class="col-sm-12" id="salesLdgFormDiv">
                    <div class="well">
                        <form name="salesLdgForm" id="salesLdgForm" role="form">
                            <div class="text-center errMsg" id='newLdgErrMsg'></div>
                             <div class="row">
                                <div class="col-sm-5">
                                    <label for="txtPkgName">Project Name</label>
                                    <select class="projName form-control" width="100px;"  name="projName"></select>
                                 </div>  
                            </div>
                           <br>
                            <div class="row">   
                                <div class="col-sm-5">
                                    <label for="txtLdgName">Customer Name</label>
                                    <input type="text" id="txtLdgName" class="form-control" placeholder="Customer Name" autofocus>
                                           
                                </div>  
                                 <div class="col-sm-5">
                                    <label for="txtLdgAddress">Customer Address</label>
                                    <input type="text" id="txtLdgAddress" class="form-control" placeholder="Customer Address" autofocus>
                                           
                                </div>                                      
                            </div>
                             <div class="row">
                                <div class="col-sm-5">
                                    <label for="txtLdgCity">City</label>
                                    <input type="text" id="txtLdgCity" class="form-control" placeholder="City" autofocus>
                                           
                                </div>  
                                 <div class="col-sm-5">
                                    <label for="txtLdgContact">Contact Nos</label>
                                    <input type="text" id="txtLdgContact" class="form-control" placeholder="Contact Nos" autofocus>
                                           
                                </div>                                      
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!--Cloned div comes here--->
                                    <div id="appendClonedDivHere"></div>
                                    <!--End of cloned div here--->
                                    
                                    <!--- Text to click to add another item to loading-->
                                    <div class="row">
                                        <div class="col-sm-2 text-primary pointer">
                                            <button class="btn btn-primary btn-sm" id="clickToClone"><i class="fa fa-plus"></i> Add Packing Slip</button>
                                        </div>
                                        
                                        <br class="visible-xs">
                                        
                                        <div class="col-sm-2 form-group-sm">
                                            <input type="text" id="barcodeText" class="form-control" placeholder="Packing code" autofocus>
                                            <span class="help-block errMsg" id="itemCodeNotFoundMsg"></span>
                                        </div>
                                    </div>
                                    <!--- End of text to click to add another item to loading-->
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
                                    <button type="button" class="btn btn-primary btn-sm" id="confirmLdgSlip">Confirm</button>
                                    <button type="button" class="btn btn-danger btn-sm" id="cancelSaleOrder">Clear</button>
                                    <button type="button" class="btn btn-danger btn-sm" id="hideLdgForm">Close</button>
                                </div>
                            </div>
                        </form><!-- end of form-->
                    </div>
                </div>
                <!-- end of div to display loading form-->
            </div>
            <!--end of form-->

                        <br><br>
            <!-- sort and co row-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-3 form-inline form-group-sm">
                        <label for="ldgListPerPage">Per Page</label>
                        <select id="ldgListPerPage" class="form-control">
                            <option value="1">1</option>
                            <option value="5">5</option>
                            <option value="10" selected>10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                            <option value="30">30</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>

                    <div class="col-sm-5 form-group-sm form-inline">
                        <label for="ldgListSortBy">Sort by</label>
                        <select id="ldgListSortBy" class="form-control">
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
    
    <!-- loading list table-->
    <div class="row">
        <!-- loading list div-->
        <div class="col-sm-12" id="ldgListTable"></div>
        <!-- End of loadings div-->
    </div>
    <!-- End of loadings list table-->
</div>


<div class="row hidden" id="divToClone">
    <div class="col-sm-4 form-group-sm">
        <label>Packing Slip ID</label>
        <select class="form-control selectedItemDefault" name="packingId" onchange="selectedItem(this)"></select>
    </div>

    <!-- <div class="col-sm-2 form-group-sm itemCbtNameDiv">
        <label>Cabinet Name</label>
        <span class="form-control itemCbtName"></span>
    </div>
    <div class="col-sm-2 form-group-sm itemPartNameDiv">
        <label>Part Name</label>
        <span class="form-control itemPartName"></span>
    </div> -->

    <div class="col-sm-2 form-group-sm itemAvailQtyDiv">
        <label>Quantity</label>
        <span class="form-control itemAvailQty">0</span>
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
            </div>
            
            <div class="modal-footer">
                <button class="btn btn-success" id='clickToGen'>Generate</button>
                <button class="btn btn-danger" data-dismiss='modal'>Close</button>
            </div>
        </div>
    </div>
</div>

<!---End of copy of div to clone when adding more products to sales loading---->
<!-- <script src="<?=base_url()?>public/js/ximports.js"></script> -->
<script src="<?=base_url().CMP_domain?>public/js/loadings.js?v=<?php echo time(); ?>"></script>
<script src="<?=base_url(CMP_domain.'public/ext/datetimepicker/bootstrap-datepicker.min.js')?>"></script>
<script src="<?=base_url(CMP_domain.'public/ext/datetimepicker/jquery.timepicker.min.js')?>"></script>
<script src="<?=base_url().CMP_domain?>public/ext/datetimepicker/datepair.min.js"></script>
<script src="<?=base_url().CMP_domain?>public/ext/datetimepicker/jquery.datepair.min.js"></script>

