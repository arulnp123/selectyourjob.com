'use strict';

var barCodeTextTimeOut;

$(document).ready(function () {
    $("#selItemDefault").select2();
    var projectID;
    var currentItems;

    checkDocumentVisibility(checkLogin);//check document visibility in order to confirm user's log in status

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

    //load all loadings on page load
    laldg_();

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
                url: appRoot + '/Packings/aplbp/'+projectID,
                type: "GET",
                dataType: "json",
                success: function (data) {
                    currentItems = data;
                    $('select[name="packingId"]').empty();
                    $('select[name="packingId"]').append('<option value="" selected>Select Item</option>');
        
                    $.each(data, function (key, value) {
                        $('select[name="packingId"]').append('<option value="' + value.id + '">' + 'VK' + pad(value.id, 4) + '</option>');
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
        cloned.addClass('ldgItemList').removeClass('hidden').attr('id', '');
        cloned.find(".selectedItemDefault").addClass("selectedItem").val("");

        //loop through the currentItems variable to add the items to the select input
        return new Promise((resolve, reject) => {
            //if an item has been selected (i.e. added to the current loading), do not add it to the list. This way, an item will appear just once.
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
                        //cloned.find(".selectedItemDefault").append("<option value='"+key+"'>"+currentItems[key]+"</option>");
                        //cloned.find(".selectedItemDefault").append("<option value='"+currentItems[key]+"'>"+currentItems[key]+"</option>");
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
                            var newVal = parseInt($(this).closest('div').siblings('.itemLdgQtyDiv').find('.itemLdgQty').val()) + 1;

                            $(this).closest('div').siblings('.itemLdgQtyDiv').find('.itemLdgQty').val(newVal);

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
                    var barcodeTextValue = parseInt($("#barcodeText").val().substring(3));
                    //changeSelectedItemWithBarcodeText($("#barcodeText"), $("#barcodeText").val());
                    changeSelectedItemWithBarcodeText($("#barcodeText"), barcodeTextValue);
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

        $(this).closest(".ldgItemList").remove();
    });

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //reload loadings table when events occur
    $("#ldgListPerPage, #ldgListSortBy").change(function () {
        displayFlashMsg("Please wait...", spinnerClass, "", "");
        laldg_();
    });




    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //handles the submission of a new sales order
    $("#confirmLdgSlip").click(function () {
        var arrToSend = [];

        {
            //remove error messages if any
            //now get details of all items to be sold (itemCode, qty, unitPrice, totPrice)
            var selectedItemNode = document.getElementsByClassName("selectedItem");//get all elem with class "selectedItem"
            var selectedItemNodeLength = selectedItemNode.length;//get the number of elements with the class name

            var verifyCumAmount = 0;

            for (var i = 0; i < selectedItemNodeLength; i++) {
                var itemCode = selectedItemNode[i].value;
                // var itemPrjNameElem = selectedItemNode[i].parentNode.parentNode.children[1].children[1];
                // var itemAvailQtyElem = selectedNode.parentNode.parentNode.children[2].children[1];

                //var qtyNeededElem = selectedItemNode[i].parentNode.parentNode.children[4].children[1];
                var ldgContName = $("#txtLdgName").val();
                var ldgAddress = $("#txtLdgAddress").val();
                var ldgCity = $("#txtLdgCity").val();
                var ldgContacts = $("#txtLdgContact").val();
                //var ldgSlipPrjName = projectID;



                //then prepare data to add to array of items' info
                var itemInfo = { _iC: itemCode, _ldgDesc: ldgContName , _ldgAddress: ldgAddress, _ldgCity: ldgCity, _ldgContactNos: ldgContacts};

                arrToSend.push(itemInfo);//add data to array


            }


            return new Promise(function (resolve, reject) {
                resolve();
            }).then(function () {

                var aoi = JSON.stringify(arrToSend);//aoi = "All orders info"

                displayFlashMsg("Processing loading...", spinnerClass, "", "");

                //send details to server
                $.ajax({
                    url: appRoot + "loadings/nls_",
                    method: "post",
                    data: { _aoi: aoi },

                    success: function (returnedData) {
                        if (returnedData.status === 1) {
                            hideFlashMsg();

                            //reset the form
                            resetLdgForm();

                            //display receipt
                            $("#ldgReceipt").html(returnedData.ldgReceipt);//paste receipt
                            $("#ldgReceiptModal").modal('show');//show modal

                            //refresh the loading list table
                            laldg_();

                            //remove all items list in loading and leave just one
                            resetLdgList();
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
    //handles the submission of a new sales loading
    $("#cancelSaleOrder").click(function (e) {
        e.preventDefault();

        resetLdgForm();
    });

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //WHEN THE "USE SCANNER" BTN IS CLICKED
    $("#useScanner").click(function (e) {
        e.preventDefault();

        //focus on the barcode text input
        $("#barcodeText").focus();
    });

    function resetLdgForm() {
        $('#newLdgDiv').trigger("reset");
        $('#salesLdgFormDiv').trigger("reset");
        // document.getElementById('salesLdgFormDiv').reset();

        // $(".itemUnitPrice, .itemTotalPrice, #cumAmount, #changeDue").html("0.00");

        $('#projects').prop('selectedIndex', 0);
        $("#txtLdgName").val("");

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
        var currText = "";
        barCodeTextTimeOut = setTimeout(function () {
            if (bText) {
                for (let i in currentItems) {
                    currText = 'PKG' + pad(i, 10);
                    if (bText === currText) {
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
                            //changeSelectedItemWithBarcodeText($(this), bText);
                            changeSelectedItemWithBarcodeText($(this), i);
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
    $("#showLdgForm").click(function () {
        
        $("#newLdgDiv").toggleClass('collapse');

        if ($("#newLdgDiv").hasClass('collapse')) {
            $(this).html("<i class='fa fa-plus'></i> New Loading Slip");
        }

        else {
            $(this).html("<i class='fa fa-minus'></i> New Loading Slip");

            //remove error messages
            $("#itemCodeNotFoundMsg").html("");
        }
    });


    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //TO HIDE THE TRANSACTION FORM FROM THE TRANSACTION FORM
    $("#hideLdgForm").click(function () {
        $("#newLdgDiv").toggleClass('collapse');

        //remove error messages
        $("#itemCodeNotFoundMsg").html("");

        //change main "new loading" button back to default
        $("#showLdgForm").html("<i class='fa fa-plus'></i> New Loading Slip");
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

        var fromDate = $("#ldgFrom").val();
        var toDate = $("#ldgTo").val();

        if (!fromDate) {
            $("#ldgFromErr").html("Select date to start from");

            return;
        }

        /*
         * remove any error msg, hide modal, launch window to display the report in
         */

        $("#ldgFromErr").html("");
        $("#reportModal").modal('hide');

        var strWindowFeatures = "width=1000,height=500,scrollbars=yes,resizable=yes";

        window.open(appRoot + "loadings/report/" + fromDate + "/" + toDate, 'Print', strWindowFeatures);
    });
});

// function pad(num, size) {
//     var s = "000000000" + num;
//     return s.substr(s.length-size);
// }
function pad(num, size) {
    var s = num + "";
    while (s.length < size) s = "0" + s;
    return s;
}
function sprintf(str) {
    
    var args = arguments, i = 1;

    return str.replace(/%(s|d|0\d+d)/g, function (x, type) {
        var value = args[i++];
        switch (type) {
            case 's': return value;
            case 'd': return parseInt(value, 10);
            default:
                value = String(parseInt(value, 10));
                var n = Number(type.slice(1, -1));
                return '0'.repeat(n).slice(value.length) + value;
        }
    });
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * gti_ = "Get Loading Info"
 * @param {type} ldgId
 * @returns {Boolean}
 */
function gti_(ldgId) {
    if (ldgId) {
        $("#ldgReceipt").html("<i class='fa fa-spinner faa-spin animated'></i> Loading...");

        //make server request to get information about loading
        $.ajax({
            type: "POST",
            url: appRoot + "loadings/loadingReceipt",
            data: { ldgId: ldgId },
            success: function (returnedData) {
                if (returnedData.status === 1) {
                    $("#ldgReceipt").html(returnedData.ldgReceipt);
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

//to update loading
function uptr_(ldgId) {
    //alert(ldgId);
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


/**
 * Populates the available quantity and unit price of selected item to be sold
 * Auto set the quantity needed to 1
 * @param {type} selectedNode
 * @returns {undefined}
 */
function selectedItem(selectedNode) {
    
    if (selectedNode) {
        //get the elements of the selected item's avail qty and unit price
        // var itemCbtNameElem = selectedNode.parentNode.parentNode.children[1].children[1];
        // var itemPartNameElem = selectedNode.parentNode.parentNode.children[2].children[1];
        var itemAvailQtyElem = selectedNode.parentNode.parentNode.children[1].children[1];
        // var qtyNeededElem = selectedNode.parentNode.parentNode.children[4].children[1];

        var itemCode = selectedNode.value;
        
        //displayFlashMsg("Getting item info...", spinnerClass, "", "");

        //get item's available quantity and unitPrice
        $.ajax({
            url: appRoot + "packings/gcoandqty",
            type: "get",
            data: { _iC: itemCode },
            success: function (returnedData) {
                if (returnedData.status === 1) {
                    itemAvailQtyElem.innerHTML = returnedData.qty;
                   // itemPrjNameElem.innerHTML = returnedData.projectName;
                    // itemCbtNameElem.innerHTML = returnedData.cabinetName;
                    // itemPartNameElem.innerHTML = returnedData.partName;


                    //return focus to the hidden barcode input
                    $("#useScanner").click();
                }

                else {
                    itemAvailQtyElem.innerHTML = "0";
                    itemPrjNameElem.innerHTML = "";

                    changeFlashMsgContent("Item not found", "", "red", "");
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert("Status: 11" + textStatus); alert("Error:22 " + errorThrown);
            }
        });
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function resetLdgList() {
    var tot = $(".ldgItemList").length;

    $(".ldgItemList").each(function () {
        if ($(".ldgItemList").length > 1) {
            $(this).remove();
        }

        else {
            return "";
        }
    });
}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * laldg_ = "Load all loadings"
 * @param {type} url
 * @returns {Boolean}
 */
function laldg_(url) {
    var orderBy = $("#ldgListSortBy").val().split("-")[0];
    var orderFormat = $("#ldgListSortBy").val().split("-")[1];
    var limit = $("#ldgListPerPage").val();

    $.ajax({
        type: 'get',
        url: url ? url : appRoot + "loadings/laldg_/",
        data: { orderBy: orderBy, orderFormat: orderFormat, limit: limit },

        success: function (returnedData) {
            hideFlashMsg();

            $("#ldgListTable").html(returnedData.ldgTable);
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert("Status: " + textStatus); alert("Error: " + errorThrown);
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


