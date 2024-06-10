'use strict';

var barCodeTextTimeOut;

$(document).ready(function () {
    $("#selItemDefault").select2();


    checkDocumentVisibility(checkLogin);//check document visibility in order to confirm user's log in status

    //load all imports on page load
    laid_();

    //reload Imports table when events occur
    $("#impsListPerPage, #impsListSortBy").change(function () {
        displayFlashMsg("Please wait...", spinnerClass, "", "");
        laid_();
    });


    //TO SHOW/HIDE THE Imports FORM
    $("#showImpsForm").click(function () {
        debugger;
        $("#newImpsDiv").toggleClass('collapse');

        if ($("#newImpsDiv").hasClass('collapse')) {
            $(this).html("<i class='fa fa-plus'></i> New Imports");
        }

        else {
            $(this).html("<i class='fa fa-minus'></i> New Imports");

            //remove error messages
            $("#itemCodeNotFoundMsg").html("");
        }
    });



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

})
    /** 
     * laid_ = "Load all imported data"
     * @param {type} url
     * @returns {Boolean}
     */
    function laid_(url) {
        var orderBy = $("#impsListSortBy").val().split("-")[0];
        var orderFormat = $("#impsListSortBy").val().split("-")[1];
        var limit = $("#impsListPerPage").val();

        $.ajax({
            type: 'get',
            url: url ? url : appRoot + "imports/laid_/",
            data: { orderBy: orderBy, orderFormat: orderFormat, limit: limit },

            success: function (returnedData) {
                hideFlashMsg();

                $("#importedListTable").html(returnedData.importTable);
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                alert("Status: " + textStatus); alert("Error: " + errorThrown); 
            }   
        });

        return false;
    }


