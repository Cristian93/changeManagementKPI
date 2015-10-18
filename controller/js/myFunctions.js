$(document).ready(function () {

});


$("#changeId").blur(function () {
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

$('#coordinator').on('change', function () {
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

            stateERI("eri", json.eri);
            $("#percentageERI").html("<h1><strong>" + json.eri + " %</strong></h1>");
            
            $("#equationrs").html("$$R_s =" + "\\"+ "left(1-{"+json.cr +"+"+json.ci+ "\\"+"over"+json.cs+"}"+"\\"+"right)x100="+json.rs+ "\\%$$");
            $("#equationes").html("$$E_s =" + "\\"+ "left({"+json.cs + "\\"+"over"+json.ce+"}"+"\\"+"right)x100="+json.es+ "\\%$$");
            $("#equationeri").html("$$E_ri =" + "\\"+ "left({"+json.cr +"+"+json.ci+ "\\"+"over"+json.ce+"}"+"\\"+"right)x100="+json.eri+ "\\%$$");
        },
        error: function (jqXHR, textStatus, errorThrown) {
        },
        complete: function (jqXHR, textStatus) {
        }
    });
}

function stateRSandES(id, percentage) {
    if (percentage >= 95) {
        $("#" + id).attr("src", "controller/images/semaphores/semaphoreOnGreen.PNG");
    }
    if (percentage >= 80 && percentage <= 94) {
        $("#" + id).attr("src", "controller/images/semaphores/semaphoreOnYellow.PNG");
    }
    if (percentage < 80) {
        $("#" + id).attr("src", "controller/images/semaphores/semaphoreOnRed.PNG");
    }
}



function stateERI(id, percentage) {
    if (percentage <= 5) {
        $("#" + id).attr("src", "controller/images/semaphores/semaphoreOnGreen.PNG");
    }
    if (percentage >= 6 && percentage <= 15) {
        $("#" + id).attr("src", "controller/images/semaphores/semaphoreOnYellow.PNG");
    }
    if (percentage > 15) {
        $("#" + id).attr("src", "controller/images/semaphores/semaphoreOnRed.PNG");
    }
}



$('#changeIdRUD').on('change', function () {

    $.ajax({
        url: "controller/php/request.php",
        dataType: "json",
        type: "POST",
        data: {
            tipo: "searchChange",
            val2: $("#changeIdRUD").val()
        },
        beforeSend: function (xhr) {
        },
        success: function (json) {


            $("#typeRUD").val(json.type);
            $("#shortDescriptionRUD").val(json.shortDescription);
            $("#impactRUD").val(json.impact);
            $("#affectationRUD").val(json.affectation);
            $("#scheduledStartDateRUD").val(json.scheduledStartDate);
            $("#scheduledStartTimeRUD").val(json.scheduledStartTime);
            $("#rollbackStartDateRUD").val(json.rollbackStartDate);
            $("#rollbackStartTimeRUD").val(json.rollbackStartTime);
            $("#rollbackEndDateRUD").val(json.rollbackEndDate);
            $("#rollbackEndTimeRUD").val(json.rollbackEndTime);
            $("#scheduledEndDateRUD").val(json.scheduledEndDate);
            $("#scheduledEndTimeRUD").val(json.scheduledEndTime);
            $("#stateExecutionRUD").val(json.stateExecution);
            $("#applicationOrInfrastructureRUD").val(json.applicationOrInfrastructure);
            $("#coordinatorRUD").val(json.coordinator);
            $.ajax({
                url: "controller/php/request.php",
                dataType: "json",
                type: "POST",
                data: {
                    tipo: "searchBoss",
                    val1: $("#coordinatorRUD").val()
                },
                beforeSend: function (xhr) {
                },
                success: function (json) {

                    $("#bossRUD").val(json.boss);
                    $("#headshipRUD").val(json.headship);
                    $("#managementRUD").val(json.management);
                    $("#directionRUD").val(json.direction);

                },
                error: function (jqXHR, textStatus, errorThrown) {
                },
                complete: function (jqXHR, textStatus) {
                }
            });


        },
        error: function (jqXHR, textStatus, errorThrown) {
        },
        complete: function (jqXHR, textStatus) {
        }
    });
});

function updateOrDelete(destination) {

    document.getElementById("form1").action = destination;
    document.getElementById("form1").submit();
}




$('#coordinatorRUD').on('change', function () {
    $.ajax({
        url: "controller/php/request.php",
        dataType: "json",
        type: "POST",
        data: {
            tipo: "searchBoss",
            val1: $("#coordinatorRUD").val()
        },
        beforeSend: function (xhr) {
        },
        success: function (json) {

            $("#bossRUD").val(json.boss);
            $("#headshipRUD").val(json.headship);
            $("#managementRUD").val(json.management);
            $("#directionRUD").val(json.direction);

        },
        error: function (jqXHR, textStatus, errorThrown) {
        },
        complete: function (jqXHR, textStatus) {
        }
    });
});



$(function () {
    $("#scheduledStartDateRUD").datepicker({dateFormat: 'yy-mm-dd'});
});

$(function () {
    $("#rollbackStartDateRUD").datepicker({dateFormat: 'yy-mm-dd'});
});

$(function () {
    $("#rollbackEndDateRUD").datepicker({dateFormat: 'yy-mm-dd'});
});

$(function () {
    $("#scheduledEndDateRUD").datepicker({dateFormat: 'yy-mm-dd'});
});



        