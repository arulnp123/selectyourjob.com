'use strict';

var barCodeTextTimeOut;
  var projectID;
 
$(document).ready(function(){
    $("#selItemDefault").select2();
  
      
    checkDocumentVisibility(checkLogin);//check document visibility in order to confirm user's log in status
	
    //load all packings on page load
    lapkg_();
    

});


function lapkg_(url){
   
    var orderBy = $("#pkgListSortBy").val().split("-")[0];
    var orderFormat = $("#pkgListSortBy").val().split("-")[1];
    var limit = $("#pkgListPerPage").val();
    
    $.ajax({
        type:'get',
        url: url ? url : appRoot+"packings/lapkg_/",
        data: {orderBy:orderBy, orderFormat:orderFormat, limit:limit},
        
        success: function(returnedData){
            hideFlashMsg();
			
            $("#pkgListTable").html(returnedData.pkgTable);
        },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                alert("Status: 11" + textStatus); alert("Error:22 " + errorThrown); 
            }   
    });
    
    return false;
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function changeSelectedItemWithBarcodeText(barcodeTextElem, selectedItem){
    $(".selectedItem").last().val(selectedItem).change();
            
    //then remove the value from the input
    $(barcodeTextElem).val("");
}


