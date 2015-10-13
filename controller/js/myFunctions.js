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

function updateSemaphores() {
    $.ajax({
        url: "controller/php/request.php",
        dataType: "json",
        type: "POST",
        data: {
            tipo: "updateSemaphores"
        },
        beforeSend: function (xhr) {
        },
        success: function (json) {
            stateRSandES("rs", json.rs);
            $("#percentageRS").html("<h1><strong>" + json.rs + " %</strong></h1>");
            
            stateRSandES("es", json.es);
            $("#percentageES").html("<h1><strong>" + json.es + " %</strong></h1>");
            
            stateERI("eri",json.eri);
            $("#percentageERI").html("<h1><strong>" + json.eri + " %</strong></h1>");

        
 
        },
        
        error: function (jqXHR, textStatus, errorThrown) {
        },
        
        complete: function (jqXHR, textStatus) {
        }
    });
}

function stateRSandES(id, percentage) {
    if (percentage >= 95) {
        $("#"+id).attr("src", "controller/images/semaphores/semaphoreOnGreen.PNG");
    }
    if (percentage >= 80 && percentage <= 94) {
        $("#"+id).attr("src", "controller/images/semaphores/semaphoreOnYellow.PNG");
    }
    if (percentage < 80) {
        $("#"+id).attr("src", "controller/images/semaphores/semaphoreOnRed.PNG");
    }
}



function stateERI(id, percentage) {
    if (percentage <= 5) {
        $("#"+id).attr("src", "controller/images/semaphores/semaphoreOnGreen.PNG");
    }
    if (percentage >= 6 && percentage <= 15) {
        $("#"+id).attr("src", "controller/images/semaphores/semaphoreOnYellow.PNG");
    }
    if (percentage > 15) {
        $("#"+id).attr("src", "controller/images/semaphores/semaphoreOnRed.PNG");
    }
}


