<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Change Management KPIs</title>

        <!-- CSS -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="controller/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="controller/css/form-elements.css">
        <link rel="stylesheet" href="controller/css/style.css">
        <link rel="stylesheet" href="controller/css/myStyle.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="controller/images/ico/favicon.png">
    </head>
    <body onload="updateSemaphores();">
        <!-- Content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">

                            <a class="logo" href="http://www.movistar.co/" target="_blank"></a>

                            <h1><strong>Change Management</strong> KPIs</h1>

                            <div class="description">
                                <p>Current state of performance indicators. Technological Change Management Process.</p>
                            </div>

                            <div id="semaphores" class="row" >
                                <div class="col-lg-4">
                                    <img id="rs" src="controller/images/semaphores/semaphoreOff.PNG" alt="..." class="img-circle">
                                    <div id="percentageRS"></div>
                                </div>

                                <div class="col-lg-4">
                                    <img id="es" src="controller/images/semaphores/semaphoreOff.PNG" alt="..." class="img-circle">
                                    <div id="percentageES"></div>
                                </div>

                                <div class="col-lg-4">
                                    <img id="eri" src="controller/images/semaphores/semaphoreOff.PNG" alt="..." class="img-circle">
                                    <div id="percentageERI"></div>
                                </div>
                            </div>

                            <div class="top-big-link">
                                <a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-register">Register change</a>
                                <a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-rud">Consult change</a>
                                <a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-rud">Detail changes</a>
                            </div>

                            <div id="foot">
                                <p>Developed for<a href="http://www.telefonica.co/" target="_blank"> Telefonica</a>, By Cristian David Franco Garcia.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL CREATE-->
        <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h3 class="modal-title" id="modal-register-label">Fill all camps</h3>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="controller/php/createChange.php" method="post" class="registration-form">

                            <div class="form-group">
                                <input type="text" name="changeId" placeholder="Change Id..." class="form-control" id="changeId" pattern="^C[0-9]{5,}$">
                            </div>

                            <div class="form-group">
                                <select id="type" type="text" name="type" placeholder="Type..." class="form-control">
                                    <option>Emergency</option>
                                    <option  >Urgency</option>
                                    <option >Standard</option>
                                    <option >Normal</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <textarea name="shortDescription" placeholder="Short description..."  id="shortDescription" class="form-control" ></textarea>
                            </div>

                            <div class="form-group">
                                <select type="text" name="impact" placeholder="Impact..."  id="impact" class="form-control">
                                    <option  class="form-control" >High</option>
                                    <option  class="form-control">Medium</option>
                                    <option class="form-control">Low</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select type="text" name="affectation" placeholder="Affectation..."  id="affectation" class="form-control">
                                    <option>Loss of function</option>
                                    <option>Total affectation</option>
                                    <option>Degradation</option>
                                    <option>Unaffected</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input id="scheduledStartDate"  type="text"  name="scheduledStartDate" placeholder="Scheduled start date..." class="form-control half">
                                <input id="scheduledStartTime"  type="time"  name="scheduledStartTime" placeholder="Scheduled start time..." class="form-control half" required>
                            </div>

                            <div class="form-group">
                                <input id="rollbackStartDate"  type="text"  name="rollbackStartDate" placeholder="Rollback start date..." class="form-control half">
                                <input id="rollbackStartTime"  type="time"  name="rollbackStartTime" placeholder="Rollback start time HH:MM:SS..." class="form-control half" required>
                            </div>

                            <div class="form-group">
                                <input id="rollbackEndDate"  type="text"  name="rollbackEndDate" placeholder="Rollback end date..." class="form-control half">
                                <input id="rollbackEndTime"  type="time"  name="rollbackEndTime" placeholder="Rollback end time HH:MM:SS..." class="form-control half" required>
                            </div>

                            <div class="form-group">
                                <input id="scheduledEndDate"  type="text"  name="scheduledEndDate" placeholder="Scheduled end date..." class="form-control half">
                                <input id="scheduledEndTime"  type="time"  name="scheduledEndTime" placeholder="Scheduled end time HH:MM:SS..." class="form-control half" required>
                            </div>

                            <div class="form-group">
                                <select type="text" name="stateExecution" placeholder="Change state..."  id="stateExecution" class="form-control">
                                    <option>Successful</option>
                                    <option>Rollback</option>
                                    <option>Canceled</option>
                                    <option>Incident</option>
                                    <option>Postponed</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <?php
                                include 'model/generated/include_dao.php';

                                $appList = DAOFactory::getApplicationorinfrastructureDAO()->queryAll();
                                $contentApps = <<<CF
                            <select type='text' name='applicationOrInfrastructure' placeholder='Application or infrastructure...' id='applicationOrInfrastructure' class='form-control'>       
CF;
                                echo $contentApps;
                                foreach ($appList as $applicationOrInfrastructure) {
                                    echo "<option>" . $applicationOrInfrastructure->getApplicationOrInfrastructureName() . "</option>";
                                }
                                $contentApps = <<<CF
                            </select>
                            </div>
                            <div class='form-group'>
CF;
                                echo $contentApps;
                                $coordinatorList = DAOFactory::getCoordinatorDAO()->queryAll();
                                $contentCoordinator = <<<CF
                            <select type='text' name='coordinator' placeholder='Coordinator...'  id='coordinator' class='form-control'>
CF;
                                echo $contentCoordinator;
                                foreach ($coordinatorList as $coordinator) {
                                    echo "<option>" . $coordinator->getCoordinatorName() . "</option>";
                                }
                                $contentCoordinator = <<<CF
                            </select>
                            </div>
CF;
                                echo $contentCoordinator;
                                ?>
                                <div class="form-group">
                                    <input id="boss" type="text" name="boss" placeholder="Boss..." class="form-control half" readonly>
                                    <input id="headship" type="text" name="headship" placeholder="Headship I.T...." class="form-control half"   readonly>
                                </div>

                                <div class="form-group">
                                    <input id="management" type="text" name="management" placeholder="Management I.T...." class="form-control half" readonly>
                                    <input id="direction" type="text" name="direction" placeholder="Direction I.T...." class="form-control half" readonly>
                                </div>
                                <button type="submit" class="btn">Register!</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL READ, UPDATE, DELETE-->
        <div class="modal fade" id="modal-rud" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                        </button>
                        <h3 class="modal-title" id="modal-register-label">About change</h3>
                    </div>
                    <div class="modal-body">
                        <form id ="form1" role="form"  method="post" class="registration-form">

                            <div class="form-group">

                                <?php
                                include 'model/generated/include_dao.php';

                                $alterationList = DAOFactory::getAlterationDAO()->queryAll();
                                $contentAlteration = <<<CF
                            <select type='text' name='changeId' placeholder='Change Id...' id='changeIdRUD' class='form-control'>       
CF;
                                echo $contentAlteration;
                                foreach ($alterationList as $alteration) {
                                    echo "<option>" . $alteration->getChangeIdSM() . "</option>";
                                }
                                $contentAlteration = <<<CF
                            </select>
                         
CF;
                                echo $contentAlteration;
                                ?>    

                            </div>

                            <div class="form-group">
                                <select id="typeRUD" type="text" name="type" placeholder="Type..." class="form-control">
                                    <option>Emergency</option>
                                    <option  >Urgency</option>
                                    <option >Standard</option>
                                    <option >Normal</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <textarea name="shortDescription" placeholder="Short description..."  id="shortDescriptionRUD" class="form-control" ></textarea>
                            </div>

                            <div class="form-group">
                                <select type="text" name="impact" placeholder="Impact..."  id="impactRUD" class="form-control">
                                    <option  class="form-control" >High</option>
                                    <option  class="form-control">Medium</option>
                                    <option class="form-control">Low</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select type="text" name="affectation" placeholder="Affectation..."  id="affectationRUD" class="form-control">
                                    <option>Loss of function</option>
                                    <option>Total affectation</option>
                                    <option>Degradation</option>
                                    <option>Unaffected</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <input id="scheduledStartDateRUD"  type="text"  name="scheduledStartDate" placeholder="Scheduled start date..." class="form-control half">
                                <input id="scheduledStartTimeRUD"  type="time"  name="scheduledStartTime" placeholder="Scheduled start time..." class="form-control half" required>
                            </div>

                            <div class="form-group">
                                <input id="rollbackStartDateRUD"  type="text"  name="rollbackStartDate" placeholder="Rollback start date..." class="form-control half">
                                <input id="rollbackStartTimeRUD"  type="time"  name="rollbackStartTime" placeholder="Rollback start time HH:MM:SS..." class="form-control half" required>
                            </div>

                            <div class="form-group">
                                <input id="rollbackEndDateRUD"  type="text"  name="rollbackEndDate" placeholder="Rollback end date..." class="form-control half">
                                <input id="rollbackEndTimeRUD"  type="time"  name="rollbackEndTime" placeholder="Rollback end time HH:MM:SS..." class="form-control half" required>
                            </div>

                            <div class="form-group">
                                <input id="scheduledEndDateRUD"  type="text"  name="scheduledEndDate" placeholder="Scheduled end date..." class="form-control half">
                                <input id="scheduledEndTimeRUD"  type="time"  name="scheduledEndTime" placeholder="Scheduled end time HH:MM:SS..." class="form-control half" required>
                            </div>

                            <div class="form-group">
                                <select type="text" name="stateExecution" placeholder="Change state..."  id="stateExecutionRUD" class="form-control">
                                    <option>Successful</option>
                                    <option>Rollback</option>
                                    <option>Canceled</option>
                                    <option>Incident</option>
                                    <option>Postponed</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <?php
                                include 'model/generated/include_dao.php';

                                $appList = DAOFactory::getApplicationorinfrastructureDAO()->queryAll();
                                $contentApps = <<<CF
                            <select type='text' name='applicationOrInfrastructure' placeholder='Application or infrastructure...' id='applicationOrInfrastructureRUD' class='form-control'>       
CF;
                                echo $contentApps;
                                foreach ($appList as $applicationOrInfrastructure) {
                                    echo "<option>" . $applicationOrInfrastructure->getApplicationOrInfrastructureName() . "</option>";
                                }
                                $contentApps = <<<CF
                            </select>
                            </div>
                            <div class='form-group'>
CF;
                                echo $contentApps;
                                $coordinatorList = DAOFactory::getCoordinatorDAO()->queryAll();
                                $contentCoordinator = <<<CF
                                        
                            <select type='text' name='coordinator' placeholder='Coordinator...' id='coordinatorRUD' class='form-control' required>
CF;
                                echo $contentCoordinator;
                                foreach ($coordinatorList as $coordinator) {
                                    echo "<option>" . $coordinator->getCoordinatorName() . "</option>";
                                }
                                $contentCoordinator = <<<CF
                            </select>
                            </div>
CF;
                                echo $contentCoordinator;
                                ?>
                                <div class="form-group">
                                    <input id="bossRUD" type="text" name="boss" placeholder="Boss..." class="form-control half" readonly>
                                    <input id="headshipRUD" type="text" name="headship" placeholder="Headship I.T...." class="form-control half"   readonly>
                                </div>

                                <div class="form-group">
                                    <input id="managementRUD" type="text" name="management" placeholder="Management I.T...." class="form-control half" readonly>
                                    <input id="directionRUD" type="text" name="direction" placeholder="Direction I.T...." class="form-control half" readonly>
                                </div>

                                <div  class="row" >
                                    <div class="col-lg-4">
                                        <button id="updatebtn" class="btn" onclick="updateOrDelete('controller/php/updateChange.php');">Update!</button>

                                      
                                    </div>
                                    <div class="col-lg-4">
                                         <button  id="deletebtn" class="btn" onclick="updateOrDelete('controller/php/deleteChange.php');"> Delete!</button>
                                    </div>

                                </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- Javascript -->

        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>



        <script src="controller/bootstrap/js/bootstrap.min.js"></script>
        <script src="controller/js/jquery.backstretch.min.js"></script>
        <script src="controller/js/scripts.js"></script>
        <script src="controller/js/myFunctions.js"></script>






    </body>

</html>

