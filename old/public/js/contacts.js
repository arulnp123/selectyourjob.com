'use strict';


$(document).ready(function(){
    
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
     //handles the submission of a new sales order
    $("#confirmPkgSlip").click(function(){
          var arrToSend = [];
 
        {
           
            for(var i = 0; i < selectedItemNodeLength; i++){
                var itemCode = selectedItemNode[i].value;
                
                    var qtyNeededElem = selectedItemNode[i].parentNode.parentNode.children[4].children[1];
                var pkgSlipName = $("#txtPkgName").val();
                
                //validate data
                if(qtyNeededElem.value == 0) {
                    qtyNeededElem.style.backgroundColor = (qty === 0) || (itemAvailQtyElem < qty) ? "red" : "";
                    return;
                }
                else if(pkgSlipName =="") {
                    $("#txtPkgName").style.backgroundColor = "red";
                    return;
                }
                else{
                    //if all is well, remove all error bg color
                    qtyNeededElem.style.backgroundColor = "";
                    
                    //then prepare data to add to array of items' info
                    var itemInfo = {_iC:itemCode, _pkgName:pkgSlipName, qty:qtyNeededElem.value};

                    arrToSend.push(itemInfo);//add data to array

                 }
            }
            
            
            return new Promise(function(resolve, reject){
                  resolve();
            }).then(function(){
    
                var aoi = JSON.stringify(arrToSend);//aoi = "All orders info"

                displayFlashMsg("Processing packing...", spinnerClass, "", "");

                //send details to server
                $.ajax({
                    url: appRoot+"packings/nps_",
                    method: "post",
                    data: {_aoi:aoi},

                    success:function(returnedData){
                        if(returnedData.status === 1){
                            hideFlashMsg();

                            //reset the form
                            resetSalesPkgForm();

                            //display receipt
                            $("#pkgReceipt").html(returnedData.pkgReceipt);//paste receipt
                            $("#pkgReceiptModal").modal('show');//show modal

                            //refresh the packing list table
                            lapkg_();

                            //remove all items list in packing and leave just one
                            resetPkgList();
                        }

                        else{
                            changeFlashMsgContent(returnedData.msg, "", "red", "");
                        }
                    },

                    error: function(){
                        checkBrowserOnline(true);
                    }
                });
            }).catch(function(){
                console.log("Err");
            });
        }
    });
    
    
});



