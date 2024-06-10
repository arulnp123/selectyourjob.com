<?php
defined('BASEPATH') OR exit('');
   $this->load->library('form_validation');
?>
<?php if($allTransInfo):?>

<?php $sn = 1; 
$tempArray =  $_SESSION['modular'];
?>
<div id="ldgSlipToPrint">

       <div class="row" style="margin-top:2px">
        <div class="col-sm-6" style="margin-top: -17px;">
            <img src="<?=base_url().CMP_domain?>public/images/logo_10.jpg" alt="logo" class="img-responsive" width="250px">
        </div>
  
        <div class="col-sm-6">
             <div class="row">
             <b><?php echo $tempArray[0]->address. ', ' ?></b>
             </div>
              <div class="row">
             <b><?php echo $tempArray[0]->city. '- '.$tempArray[0]->pin; ?></b>
             </div>
        </div>
    </div>
    <hr style='margin-top:2px; margin-bottom:0px'>  
    <div class="row text-center">
        <div class="col-sm-12">
            <b>Delivery Challan</b>
        </div>
    </div>
      <div class="row" style="margin-top:2px">
        <div class="col-sm-6">
            <label>Delivery #:</label>
            <span><?php echo  $ref; ?></span>
        </div>
  
        <div class="col-sm-6">
            <label>Delivery on:</label>
            <span><?php echo  $loadingon; ?></span>
        </div>
    </div>
    <div class="row" style="margin-top:2px">
        <div class="col-sm-12">
            <label>Project Name:</label>
            <span><?php echo  $prjName; ?></span>
		</div>
    </div>
    <hr style='margin-top:5px; margin-bottom:0px'>
     <div class="row" style="margin-top:2px">
        <div class="col-sm-12">
            <label>Customer Name:</label>
            <span><?php echo  $custName; ?></span>
        </div>
    </div> 
    <div class="row" style="margin-top:2px">
        <div class="col-sm-12">
            <label>Address:</label>
            <span><?php echo  $custAddress; ?></span>
        </div>
    </div> 
    <div class="row" style="margin-top:2px">
        <div class="col-sm-12">
            <label>Contact No:</label>
            <span><?php echo  $custContactNo; ?></span>
        </div>
    </div>
    

    <hr style='margin-top:5px; margin-bottom:0px'>
    
	<div class="row" style='font-weight:bold'>
		<div class="col-xs-8">Packing Slip</div>
		<!--<div class="col-xs-5">Cabinet Name</div>
		<div class="col-xs-5">Part Name</div>-->
		<div class="col-xs-4">Qty</div>
		
	</div>
	<hr style='margin-top:2px; margin-bottom:0px'>
    <?php
    $ldgid = "";
     foreach($allTransInfo as $get):$ldgid ='VK'.substr(sprintf('%04d', $get['pkgId']),0,5); ?>
        <div class="row">
		
            <div class="col-xs-8"><?=$ldgid;?></div> 
            <!--<div class="col-xs-5"><?=ellipsize($get['cabinetName'], 10);?></div>
            <div class="col-xs-5"><?=ellipsize($get['partName'], 10);?></div> -->
            <div class="col-xs-4"><?=$get['quantity'] ?></div>
           
        </div>
    <?php endforeach; ?>
    <hr style='margin-top:2px; margin-bottom:0px'>       
  
 
 
</div>
<br class="hidden-print">
<div class="row hidden-print">
    <div class="col-sm-12">
        <div class="text-center">
            <button type="button" class="btn btn-primary ptr">
                <i class="fa fa-print"></i> Print
            </button>
            
            <button type="button" data-dismiss='modal' class="btn btn-danger">
                <i class="fa fa-close"></i> Close
            </button>
        </div>
    </div>
</div>
<br class="hidden-print">
<?php endif;?>