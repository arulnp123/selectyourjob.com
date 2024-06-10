'use strict';

var barCodeTextTimeOut;

$(document).ready(function () {
    $("#selItemDefault").select2();

    var projectID;
var currentItems;
    checkDocumentVisibility(checkLogin);//check document visibility in order to confirm user's log in status

    //load all packings on page load
    lapkg_();
    ///////////////////////////
    $('.projName').select2({
        placeholder: 'Select Project',
        ajax: {
            url: appRoot + '/packings/projectNameList',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                var results = [];

                $.each(data, function (index, item) {
                    results.push({
                        id: item.projectName,
                        text: item.projectName
                    });
                });
                return {
                    results: results
                };
            },
            cache: true
        }
    });
    //////////////////////////
    $('select[name="projName"]').on('change', function () {
        
        projectID = $(this).val();
        if (projectID) {
            //////////////////////////////

            // $('.products').select2({
            //     placeholder: 'Select Product',
            //     ajax: {
            //         url: appRoot + '/packings/partNamesById/'+ projectID,
            //         dataType: 'json',
            //         delay: 250,
            //         processResults: function (data) {
            //             var results = [];
            //             currentItems = data;
            //             $.each(data, function (index, item) {
                          
            //                 results.push({
            //                     id: item.id,
            //                     text: item.file_1
            //                 });
            //             });
            //             return {
            //                 results: results
            //             };
            //         },
            //         cache: true
            //     }
            // });

            //////////////////////////////
            $.ajax({
                // url: appRoot+'/packingForm/ajax/'+projectID,
                url: appRoot + '/Packings/partNamesById/'+projectID,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    currentItems = data;
                    $('select[name="products"]').empty();
                    $.each(data, function (key, value) {
                        $('select[name="products"]').append('<option value="' + value.file_1 + '">' + value.file_1 + '</option>');
                    });
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert("Status: " + textStatus); alert("Error: " + errorThrown);
                }
            });
        } else {
            $('select[name="products"]').empty();
        }
    });
    /////////////////////////////


    //when text/btn ("Add item") to clone the div to add an item is clicked
    $("#clickToClone").on('click', function (e) {
        e.preventDefault();
        
        var cloned = $("#divToClone").clone();

        //remove the id 'divToClone' from the cloned div
        cloned.addClass('pkgItemList').removeClass('hidden').attr('id', '');
        cloned.find(".selectedItemDefault").addClass("selectedItem").val("");

        //loop through the currentItems variable to add the items to the select input
        return new Promise((resolve, reject) => {
            //if an item has been selected (i.e. added to the current packing), do not add it to the list. This way, an item will appear just once.
            //We start by forming an array of all selected items, then skip that item in the loop appending items to select dropdown
            var selectedItemsArr = [];

            return new Promise((res, rej) => {
                $(".selectedItem").each(function () {
                    //push the selected value (which is the item code [a key in currentItems object]) to the array
                    $(this).val() ? selectedItemsArr.push($(this).val()) : "";
                });

                res();
            }).then(() => {
                for (let key in currentItems) {
                    //if the current key in the loop is in our 'selectedItemsArr' array
                    if (!inArray(key, selectedItemsArr)) {
                        //if the item has not been selected, append it to the select list
                        //cloned.find(".selectedItemDefault").append("<option value='" + key + "'>" + currentItems[key] + "</option>");
                    }
                }

                //prepend 'select item' to the select option
                cloned.find(".selectedItemDefault").prepend("<option value='' selected>Select Item</option>");

                resolve(selectedItemsArr);
            });
        }).then((selectedItemsArray) => {
            //If the input is from the barcode scanner, we need to check if the item has already been added to the list and just increment the qty instead of 
            //re-adding it to the list, thus duplicating the item.
            if ($("#barcodeText").val()) {
                //This means our clickToClone btn was triggered after an item was scanned by the barcode scanner
                //Check the gotten selected items array if the item scanned has already been selected
                if (inArray($("#barcodeText").val().trim(), selectedItemsArray)) {
                    //increment it
                    $(".selectedItem").each(function () {
                        if ($(this).val() === $("#barcodeText").val()) {
                            var newVal = parseInt($(this).closest('div').siblings('.itemPkgQtyDiv').find('.itemPkgQty').val()) + 1;

                            $(this).closest('div').siblings('.itemPkgQtyDiv').find('.itemPkgQty').val(newVal);

                            //unset value in barcode input
                            $("#barcodeText").val('');

                            return false;
                        }
                    });
                }

                else {
                    //if it has not been selected previously, append it to the list and set it as the selected item
                    //then append our cloned div to div with id 'appendClonedDivHere'
                    cloned.appendTo("#appendClonedDivHere");

                    //add select2 to the 'select input'
                    cloned.find('.selectedItemDefault').select2();

                    //set it as the selected item
                    changeSelectedItemWithBarcodeText($("#barcodeText"), $("#barcodeText").val());
                }
            }

            else {//i.e. clickToClone clicked manually by user
                //do not append if no item is selected in the last select list
                if ($(".selectedItem").length > 0 && (!$(".selectedItem").last().val())) {
                    //do nothing
                }

                else {
                    //then append our cloned div to div with id 'appendClonedDivHere'
                    cloned.appendTo("#appendClonedDivHere");

                    //add select2 to the 'select input'
                    cloned.find('.selectedItemDefault').select2();
                }
            }
        }).catch(() => {
            console.log('outer promise err');
        });

        return false;
    });

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //WHEN USER CLICKS BTN TO REMOVE AN ITEM FROM THE TRANSACTION LIST
    $("#appendClonedDivHere").on('click', '.retrit', function (e) {
        e.preventDefault();

        $(this).closest(".pkgItemList").remove();
    });

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //reload packings table when events occur
    $("#pkgListPerPage, #pkgListSortBy").change(function () {
        displayFlashMsg("Please wait...", spinnerClass, "", "");
        lapkg_();
    });


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /*
     * unset mode of payment each time ".itemPkgQty" changes
     * This will allow the user to be able to reselect the mode of payment, 
     * thus enabling us to recalculate change due based on amount tendered
     */
    $("#appendClonedDivHere").on("change", ".itemPkgQty", function (e) {
        e.preventDefault();

        return new Promise((resolve, reject) => {
            $("#modeOfPayment").val("");

            resolve();
        }).then(() => {
            ceipacp();
        }).catch();

        //recalculate
        ceipacp();

        $("#modeOfPayment").val("");
    });

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //handles the submission of a new sales order
    $("#confirmPkgSlip").click(function () {
        
        var arrToSend = [];

        {
            //remove error messages if any
            //now get details of all items to be sold (itemCode, qty, unitPrice, totPrice)
            var selectedItemNode = document.getElementsByClassName("selectedItem");//get all elem with class "selectedItem"
            var selectedItemNodeLength = selectedItemNode.length;//get the number of elements with the class name

            var verifyCumAmount = 0;

            for (var i = 0; i < selectedItemNodeLength; i++) {
                var itemCode = selectedItemNode[i].value;

                var qtyNeededElem = selectedItemNode[i].parentNode.parentNode.children[4].children[1];
                var pkgCbtName = selectedItemNode[i].parentNode.parentNode.children[2].children[1];
                var pkgPartName = selectedItemNode[i].parentNode.parentNode.children[3].children[1];
                var pkgSlipName = $("#txtPkgName").val();
              
                var pkgSlipPrjName = projectID;

                //validate data
                if (qtyNeededElem.value == 0) {
                    qtyNeededElem.style.backgroundColor = (qty === 0) || (itemAvailQtyElem < qty) ? "red" : "";
                    return;
                }
                // else if (pkgSlipName == "") {
                //     $("#txtPkgName").style.backgroundColor = "red";
                //     return;
                // }
                else {
                    //if all is well, remove all error bg color
                    qtyNeededElem.style.backgroundColor = "";

                    //then prepare data to add to array of items' info
                    var itemInfo = { _iC: itemCode, _pkgName: pkgSlipName, _pkgPrjName: pkgSlipPrjName,  _pkgCbtName: pkgCbtName, _pkgPrtName: pkgPartName, qty: qtyNeededElem.value };

                    arrToSend.push(itemInfo);//add data to array

                }
            }


            return new Promise(function (resolve, reject) {
                resolve();
            }).then(function () {

                var aoi = JSON.stringify(arrToSend);//aoi = "All orders info"

                displayFlashMsg("Processing packing...", spinnerClass, "", "");

                //send details to server
                $.ajax({
                    url: appRoot + "packings/nps_",
                    method: "post",
                    data: { _aoi: aoi },

                    success: function (returnedData) {
                        if (returnedData.status === 1) {
                            hideFlashMsg();

                            //reset the form
                            resetPkgForm();

                            //display receipt
                            $("#pkgReceipt").html(returnedData.pkgReceipt);//paste receipt
                            $("#pkgSlipModal").modal('show');//show modal

                            //refresh the packing list table
                            lapkg_();

                            //remove all items list in packing and leave just one
                            resetPkgList();
                        }

                        else {
                            changeFlashMsgContent(returnedData.msg, "", "red", "");
                        }
                    },

                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        checkBrowserOnline(true);
                    }
                });
            }).catch(function () {
                console.log("Err");
            });
        }
    });

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //handles the submission of a new sales packing
    $("#cancelSaleOrder").click(function (e) {
        e.preventDefault();

        resetPkgForm();
    });

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //WHEN THE "USE SCANNER" BTN IS CLICKED
    $("#useScanner").click(function (e) {
        e.preventDefault();

        //focus on the barcode text input
        $("#barcodeText").focus();
    });

    function resetPkgForm() {
        $('#newPkgDiv').trigger("reset");
        $('#salesPkgFormDiv').trigger("reset");
        // document.getElementById('salesPkgFormDiv').reset();

        // $(".itemUnitPrice, .itemTotalPrice, #cumAmount, #changeDue").html("0.00");

        $('#projects').prop('selectedIndex', 0);
        $("#txtPkgName").val("");

        // $("#amountTendered").prop('disabled', false);

        // //remove error messages
        // $("#itemCodeNotFoundMsg").html("");

        // //remove all appended lists
        $("#appendClonedDivHere").html("");
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //WHEN THE BARCODE TEXT INPUT VALUE CHANGED
    $("#barcodeText").keyup(function (e) {
        e.preventDefault();

        clearTimeout(barCodeTextTimeOut);

        var bText = $(this).val();
        var allItems = [];

        barCodeTextTimeOut = setTimeout(function () {
            if (bText) {
                for (let i in currentItems) {
                    if (bText === currentItems[i].file_1) {
                        //remove any message that might have been previously displayed
                        $("#itemCodeNotFoundMsg").html("");

                        //if no select input has been added or the last select input has a value (i.e. an item has been selected)
                        if (!$(".selectedItem").length || $(".selectedItem").last().val()) {
                            //add a new item by triggering the clickToClone btn. This will handle everything from 'appending a list of items' to 'auto-selecting
                            //the corresponding item to the value detected by the scanner'
                            $("#clickToClone").click();
                        }

                        //else if the last select input doesn't have a value
                        else {
                            //just change the selected item to the corresponding code in var bText
                            changeSelectedItemWithBarcodeText($(this), bText);
                        }

                        break;
                    }

                    //if the value doesn't match the code of any item
                    else {
                        //display message telling user item not found
                        $("#itemCodeNotFoundMsg").css('color', 'red').html("Item not found. Item may not be registered.");
                    }
                }
            }
        }, 1500);
    });



    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //TO SHOW/HIDE THE TRANSACTION FORM
    $("#showPkgForm").click(function () {
     
        $("#newPkgDiv").toggleClass('collapse');

        if ($("#newPkgDiv").hasClass('collapse')) {
            $(this).html("<i class='fa fa-plus'></i> New Packing Slip");
        }

        else {
            $(this).html("<i class='fa fa-minus'></i> New Packing Slip");

            //remove error messages
            $("#itemCodeNotFoundMsg").html("");
        }
    });


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //TO HIDE THE TRANSACTION FORM FROM THE TRANSACTION FORM
    $("#hidePkgForm").click(function () {
        $("#newPkgDiv").toggleClass('collapse');

        //remove error messages
        $("#itemCodeNotFoundMsg").html("");

        //change main "new packing" button back to default
        $("#showPkgForm").html("<i class='fa fa-plus'></i> New Packing Slip");
    });


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //PREVENT AUTO-SUBMISSION BY THE BARCODE SCANNER (this shouldn't matter but just to be on the safe side)
    $("#barcodeText").keypress(function (e) {
        if (e.which === 13) {
            e.preventDefault();
        }
    });

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //INITIALISE datepicker on the "From date" and "To date" fields
    $('#datePair .date').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        assumeNearbyYear: true,
        todayBtn: 'linked',
        todayHighlight: true,
        endDate: 'today'
    });

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //INITIALISE datepair on the "From date" and "To date" fields
    $("#datePair").datepair();

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //WHEN "GENERATE REPORT" BUTTON IS CLICKED FROM THE MODAL
    $("#clickToGen").click(function (e) {
        e.preventDefault();

        var fromDate = $("#pkgFrom").val();
        var toDate = $("#pkgTo").val();

        if (!fromDate) {
            $("#pkgFromErr").html("Select date to start from");

            return;
        }

        /*
         * remove any error msg, hide modal, launch window to display the report in
         */

        $("#pkgFromErr").html("");
        $("#reportModal").modal('hide');

        var strWindowFeatures = "width=1000,height=500,scrollbars=yes,resizable=yes";

        window.open(appRoot + "packings/report/" + fromDate + "/" + toDate, 'Print', strWindowFeatures);
    });
});


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * gti_ = "Get Packing Info"
 * @param {type} pkgId
 * @returns {Boolean}
 */
function gti_(pkgId) {
    if (pkgId) {
        $("#pkgReceipt").html("<i class='fa fa-spinner faa-spin animated'></i> Loading...");

        //make server request to get information about packing
        $.ajax({
            type: "POST",
            url: appRoot + "packings/packingReceipt",
            data: { pkgId: pkgId },
            success: function (returnedData) {
                if (returnedData.status === 1) {
                    $("#pkgReceipt").html(returnedData.pkgReceipt);
                }

                else {

                }
            },
            error: function () {
                alert("ERROR!");
            }
        });
    }

    return false;
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//to update packing
function uptr_(pkgId) {
    //alert(pkgId);
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * Populates the available quantity and unit price of selected item to be sold
 * Auto set the quantity needed to 1
 * @param {type} selectedNode
 * @returns {undefined}
 */
function selectedProject(selectedNode) {
    
    if (selectedNode) {
        //get the elements of the selected item's avail qty and unit price

        var itemCode = selectedNode.value;
        
        //displayFlashMsg("Getting item info...", spinnerClass, "", "");

        //get item's available quantity and unitPrice
        $.ajax({
            url: appRoot + "items/gcoanditem",
            type: "get",
            data: { _iC: itemCode },
            success: function (returnedData) {
                if (returnedData.status === 1) {
                    itemAvailQtyElem.innerHTML = returnedData.availQty;
                    itemPrjNameElem.innerHTML = returnedData.projectName;
                    itemCbtNameElem.innerHTML = returnedData.cabinetName;
                    itemPartNameElem.innerHTML = returnedData.partName;
//var pkgPartName = selectedItemNode[i].parentNode.parentNode.children[3].children[1];
                
                    qtyNeededElem.value = 1;

                    // ceipacp();//recalculate since item has been changed/added
                    // calchadue();//update change due as well in case amount tendered is not empty

                    //hideFlashMsg();

                    //return focus to the hidden barcode input
                    $("#useScanner").click();
                }

                else {
                    itemAvailQtyElem.innerHTML = "0";
                    itemPrjNameElem.innerHTML = "";
                    itemCbtNameElem.innerHTML = "";
                    itemPartNameElem.innerHTML = "";
                    // itemUnitPriceElem.innerHTML = "0.00";

                    // ceipacp();//recalculate since item has been changed/added
                    // calchadue();//update change due as well in case amount tendered is not empty

                    //changeFlashMsgContent("Item not found", "", "red", "");
                }
            }
        });
    }
}

/**
 * Populates the available quantity and unit price of selected item to be sold
 * Auto set the quantity needed to 1
 * @param {type} selectedNode
 * @returns {undefined}
 */
function selectedItem(selectedNode) {
    
    if (selectedNode) {
        //get the elements of the selected item's avail qty and unit price
        //var itemPrjNameElem = selectedNode.parentNode.parentNode.children[1].children[1];
        var itemCbtNameElem = selectedNode.parentNode.parentNode.children[1].children[1];
        var itemAvailQtyElem = selectedNode.parentNode.parentNode.children[3].children[1];
        var qtyNeededElem = selectedNode.parentNode.parentNode.children[4].children[1];
        var pkgPartName = selectedNode.parentNode.parentNode.children[2].children[1];
  
        //var itemCode = selectedNode.item(selectedNode.value).text;
        var itemCode = selectedNode.value;
        //var itemCode = selectedNode.text;
        
        //displayFlashMsg("Getting item info...", spinnerClass, "", "");

        //get item's available quantity and unitPrice
        $.ajax({
            url: appRoot + "items/gcoandqty",
            type: "get",
            data: { _iC: itemCode },
            success: function (returnedData) {
                if (returnedData.status === 1) {
                    itemAvailQtyElem.innerHTML = returnedData.availQty;
                    pkgPartName.innerHTML = returnedData.partName;
                    itemCbtNameElem.innerHTML = returnedData.cabinetName;

                    qtyNeededElem.value = 1;

                    // ceipacp();//recalculate since item has been changed/added
                    // calchadue();//update change due as well in case amount tendered is not empty

                    //hideFlashMsg();

                    //return focus to the hidden barcode input
                    $("#useScanner").click();
                }

                else {
                    itemAvailQtyElem.innerHTML = "0";
                    itemPartNameElem.innerHTML = "";
                    itemCbtNameElem.innerHTML = "";
                    // itemUnitPriceElem.innerHTML = "0.00";

                    // ceipacp();//recalculate since item has been changed/added
                    // calchadue();//update change due as well in case amount tendered is not empty

                    //changeFlashMsgContent("Item not found", "", "red", "");
                }
            }
        });
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function resetPkgList() {
    var tot = $(".pkgItemList").length;

    $(".pkgItemList").each(function () {
        if ($(".pkgItemList").length > 1) {
            $(this).remove();
        }

        else {
            return "";
        }
    });
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * lapkg_ = "Load all packings"
 * @param {type} url
 * @returns {Boolean}
 */
function lapkg_(url) {

    var orderBy = $("#pkgListSortBy").val().split("-")[0];
    var orderFormat = $("#pkgListSortBy").val().split("-")[1];
    var limit = $("#pkgListPerPage").val();

    $.ajax({
        type: 'get',
        url: url ? url : appRoot + "packings/lapkg_/",
        data: { orderBy: orderBy, orderFormat: orderFormat, limit: limit },

        success: function (returnedData) {
            hideFlashMsg();

            $("#pkgListTable").html(returnedData.pkgTable);
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("Status: 11" + textStatus); alert("Error:22 " + errorThrown);
        }
    });

    return false;
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function changeSelectedItemWithBarcodeText(barcodeTextElem, selectedItem) {
    $(".selectedItem").last().val(selectedItem).change();

    //then remove the value from the input
    $(barcodeTextElem).val("");
}


