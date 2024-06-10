<?php
defined('BASEPATH') OR exit('');

$current_items = [];

if(isset($items) && !empty($items)){    
    foreach($items as $get){
        $current_items[$get->code] = $get->name;
    }
}
?>

<style href="<?=base_url(CMP_domain.'public/ext/datetimepicker/bootstrap-datepicker.min.css')?>" rel="stylesheet"></style>

<script>
    var currentItems = <?=json_encode($current_items)?>;
</script>

<div class="pwell hidden-print">   
    <div class="row">
        <div class="col-sm-12">
            <!--- Row to create new Imports-->
            <div class="row">
                <div class="col-sm-3">
                    <span class="pointer text-primary">
                        <button class='btn btn-primary btn-sm' id='showImpsForm'><i class="fa fa-plus"></i> Import Projects </button>
                    </span>
                </div>
                
            </div>
            <br>
            <!--- End of row to create new Imports-->
            <!---form to create new Imports--->
            <div class="row collapse" id="newImpsDiv">
                <!---div to display Imports form--->
                <div class="col-sm-12" id="salesImpsFormDiv">
                    <div class="well">
                        <form action="imports/ExcelDataAdd" method="post"  role="form" enctype="multipart/form-data">
                            <div class="row">            
                            <input type="file"  class='btn btn-primary' name="userfile" style="float: left;" />				                   
                            <input type="submit"  class='btn btn-primary' value="upload" name="upload" style="float: right;" />
                           
                            </div>
                        </form>	
                    </div>
                </div>
                <!-- end of div to display Imports form-->
            </div>
            <!--end of form-->
    
            <br><br>
            <!-- sort and co row-->
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-3 form-inline form-group-sm">
                        <label for="impsListPerPage">Per Page</label>
                        <select id="impsListPerPage" class="form-control">
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
                        <label for="impsListSortBy">Sort by</label>
                        <select id="impsListSortBy" class="form-control">
                            <option value="id-DESC">date(Latest First)</option>
                            <option value="id-ASC">date(Oldest First)</option>
                         </select>
                    </div>
                </div>
            </div>
            <!-- end of sort and co div-->
        </div>
    </div>
    
    <hr>
    
    <!-- Imports list table-->
    <div class="row">
        <!-- Imports list div-->
        <div class="col-sm-12" id="importedListTable"></div>
        <!-- End of Imports div-->
    </div>
    <!-- End of Imports list table-->
</div>

<!---End of copy of div to clone when adding more items to sales Imports---->
<script src="<?=base_url().CMP_domain?>public/js/imports.js"></script>
<script src="<?=base_url(CMP_domain.'public/ext/datetimepicker/bootstrap-datepicker.min.js')?>"></script>
<script src="<?=base_url(CMP_domain.'public/ext/datetimepicker/jquery.timepicker.min.js')?>"></script>
<script src="<?=base_url().CMP_domain?>public/ext/datetimepicker/datepair.min.js"></script>
<script src="<?=base_url().CMP_domain?>public/ext/datetimepicker/jquery.datepair.min.js"></script>