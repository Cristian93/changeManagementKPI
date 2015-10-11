$(document).ready(function () {

});

$("#changeId").blur(function(){ 
    $("#changeId").val($("#changeId").val().toUpperCase());
});


$(function () {
    $("#scheduledStartDate").datepicker({dateFormat: 'yy-mm-dd'});
});

$(function () {
    $("#rollbackStartDate").datepicker({dateFormat: 'yy-mm-dd'});
});

$(function () {
    $("#rollbackEndDate").datepicker({dateFormat: 'yy-mm-dd'});
});

$(function () {
    $("#scheduledEndDate").datepicker({dateFormat: 'yy-mm-dd'});
});

$('#coordinator').on('change', function() {
   $.ajax({
        url: "controller/php/request.php",
        dataType: "json",
        type: "POST",
        data: {
            tipo: "searchBoss",
            val1: $("#coordinator").val()
        },
        
        beforeSend: function (xhr) {
        },
        
        success: function (json) {
          
            $("#boss").val(json.boss);
            $("#headship").val(json.headship);
            $("#management").val(json.management);
            $("#direction").val(json.direction);
            
        },
        
        error: function (jqXHR, textStatus, errorThrown) {
        },
        
        complete: function (jqXHR, textStatus) {
        }
    });
});


