<?php

class searchchangeClass {

    public function searchChange($val2) {
        include '../../model/generated/include_dao.php';
        $changeList = DAOFactory::getAlterationDAO()->load($val2);


        $scheduledStartDate = substr($changeList->getScheduledStart(), 0, 10);
        $scheduledStartTime = substr($changeList->getScheduledStart(), 11, 16);
        $rollbackStartDate = substr($changeList->getRollbackStart(), 0, 10);
        $rollbackStartTime = substr($changeList->getRollbackStart(), 11, 16);
        $rollbackEndDate = substr($changeList->getRollbackEnd(), 0, 10);
        $rollbackEndTime = substr($changeList->getRollbackEnd(), 11, 16);
        $scheduledEndDate = substr($changeList->getScheduledEnd(), 0, 10);
        $scheduledEndTime = substr($changeList->getScheduledEnd(), 11, 16);

        $appList = DAOFactory::getApplicationorinfrastructureDAO()->load($changeList->getApplicationOrInfrastructureApplicationOrInfrastructureId());
        $coordinatorList = DAOFactory::getCoordinatorDAO()->load($changeList->getCoordinatorCoordinatorId());

        echo json_encode(array("type" => $changeList->getChangeType(),
            "shortDescription" => $changeList->getShortDescription(),
            "impact" => $changeList->getImpact(),
            "affectation" => $changeList->getAffectation(),
            "scheduledStartDate" => $scheduledStartDate, "scheduledStartTime" => $scheduledStartTime,
            "rollbackStartDate" => $rollbackStartDate, "rollbackStartTime" => $rollbackStartTime,
            "rollbackEndDate" => $rollbackEndDate, "rollbackEndTime" => $rollbackEndTime,
            "scheduledEndDate" => $scheduledEndDate, "scheduledEndTime" => $scheduledEndTime,
            "stateExecution" => $changeList->getStateExecution(),
            "applicationOrInfrastructure" => $appList->getApplicationOrInfrastructureName(),
            "coordinator" => $coordinatorList->getCoordinatorName()
        ));
    }
}
