<?php
include '../../model/generated/include_dao.php';

$changeList=  DAOFactory::getAlterationDAO()->load($_POST["changeId"]);

if (count($changeList)>=1) {
echo  "<script>alert ('".$_POST["changeId"]." change is already registered.'); window.location='../../index.php'; </script>";
}

else{
$appList=  DAOFactory::getApplicationorinfrastructureDAO()->queryByApplicationOrInfrastructureName($_POST["applicationOrInfrastructure"]);
$coordinatorList=  DAOFactory::getCoordinatorDAO()->queryByCoordinatorName($_POST["coordinator"]);
$bossList=  DAOFactory::getBossDAO()->queryByBossName($_POST["boss"]);
$headshipList=  DAOFactory::getHeadshipitDAO()->queryByHeadshipITName($_POST["headship"]);
$managementList=  DAOFactory::getManagementitDAO()->queryByManagementITName($_POST["management"]);
$directionList=  DAOFactory::getDirectionitDAO()->queryByDirectionITName($_POST["direction"]);

$change = new Alteration();
$change->setChangeIdSM($_POST["changeId"]);
$change->setChangeType($_POST["type"]);
$change->setShortDescription($_POST["shortDescription"]);
$change->setImpact($_POST["impact"]);
$change->setAffectation($_POST["affectation"]);
$change->setScheduledStart($_POST["scheduledStartDate"]." ".$_POST["scheduledStartTime"].":00");
$change->setRollbackStart($_POST["rollbackStartDate"]." ".$_POST["rollbackStartTime"].":00");
$change->setRollbackEnd($_POST["rollbackEndDate"]." ".$_POST["rollbackEndTime"].":00");
$change->setScheduledEnd($_POST["scheduledEndDate"]." ".$_POST["scheduledEndTime"].":00");
$change->setStateExecution($_POST["stateExecution"]);
$change->setApplicationOrInfrastructureApplicationOrInfrastructureId($appList[0]->getApplicationOrInfrastructureId());
$change->setCoordinatorCoordinatorId($coordinatorList[0]->getCoordinatorId());
$change->setBossBossId($bossList[0]->getBossId());
$change->setHeadshipITHeadshipITId($headshipList[0]->getHeadshipITId());
$change->setManagementITManagementITId($managementList[0]->getManagementITId());
$change->setDirectionITDirectionITId($directionList[0]->getDirectionITId());
$change->setStateChange(1);
$change->setChangeManagerIdchangeManager(1);

DAOFactory::getAlterationDAO()->insertWithId($change);
unset($change);
echo  "<script>alert ('".$_POST["changeId"]." change was registered successfully.'); window.location='../../index.php';</script>";
}





    

