<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Detail Changes</title>
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
    <body>
        <!-- Content -->
        <div class="top-content">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <a class="logo" href="http://www.movistar.co/" target="_blank"></a>
                    <h1><strong>Detail</strong> changes</h1>   
                    <div class="table-responsive">          
                        <table id ="detailChanges" class="table table-hover table-condensed table-striped">
                            <thead>
                                <tr class="info">
                            <th><center>Change Id</center></th>
                            <th><center>Type</center></th>
                            <th><center>Short description</center></th>
                            <th><center>Impact</center></th>
                            <th><center>Affectation</center></th>
                            <th><center>Scheduled start</center></th>
                            <th><center>Rollback start</center></th>
                            <th><center>Rollback End</center></th>
                            <th><center>Scheduled End</center></th>
                            <th><center>Execution state</center></th>   
                            <th><center>Application or infrastructure</center></th>
                            <th><center>Coordinator</center></th>
                            <th><center>Boss</center></th>
                            <th><center>Headship IT</center></th>
                            <th><center>Management IT</center></th>
                            <th><center>Direction IT</center></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'model/generated/include_dao.php';
                                $changeList = DAOFactory::getAlterationDAO()->queryAll();
                                $managementitList = DAOFactory::getManagementitDAO()->queryAll();
                                $directionList = DAOFactory::getDirectionitDAO()->queryAll();
                                foreach ($changeList as $change) {
                                    echo '<tr class="success">'
                                    . '<td>' . $change->getChangeIdSM() . '</td>'
                                    . '<td>' . $change->getChangeType() . '</td>'
                                    . '<td>' . $change->getShortDescription() . '</td>'
                                    . '<td>' . $change->getImpact() . '</td>'
                                    . '<td>' . $change->getAffectation() . '</td>'
                                    . '<td>' . $change->getScheduledStart() . '</td>'
                                    . '<td>' . $change->getRollbackStart() . '</td>'
                                    . '<td>' . $change->getRollbackEnd() . '</td>'
                                    . '<td>' . $change->getScheduledEnd() . '</td>'
                                    . '<td>' . $change->getStateExecution() . '</td>';
                                    $appList = DAOFactory::getApplicationorinfrastructureDAO()->load($change->getApplicationOrInfrastructureApplicationOrInfrastructureId());
                                    $coordinatorList = DAOFactory::getCoordinatorDAO()->load($change->getCoordinatorCoordinatorId());
                                    $bossList = DAOFactory::getBossDAO()->load($change->getBossBossId());
                                    $headshipList = DAOFactory::getHeadshipitDAO()->load($change->getHeadshipITHeadshipITId());
                                    $managementList = DAOFactory::getManagementitDAO()->load($change->getManagementITManagementITId());
                                    $directionList=  DAOFactory::getDirectionitDAO()->load($change->getDirectionITDirectionITId());
                                    echo '<td>' . $appList->getApplicationOrInfrastructureName() . '</td>'
                                    . '<td>' . $coordinatorList->getCoordinatorName() . '</td>'
                                    . '<td>' . $bossList->getBossName() . '</td>'
                                    . '<td>' . $headshipList->getHeadshipITName() . '</td>'
                                    . '<td>' . $managementList->getManagementITName() . '</td>'
                                    . '<td>' . $directionList->getDirectionITName(). '</td>'
                                    . '</tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="top-big-link">
                        <a class="btn btn-link-1" href="index.php" data-modal-id="modal-register"> <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>
                    </div>
                    <div id="foot">
                        <p>Developed for<a href="http://www.telefonica.co/" target="_blank"> Telefonica</a>, By Cristian David Franco Garcia.
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