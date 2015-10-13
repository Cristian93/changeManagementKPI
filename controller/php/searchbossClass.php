<?php

class searchbossClass {
    public function searchBoss($val1) {
        include '../../model/generated/include_dao.php';
        $coordinatorList = DAOFactory::getCoordinatorDAO()->queryByCoordinatorName($val1);
        foreach ($coordinatorList as $coordinator) {
        }
        $bossList = DAOFactory::getBossDAO()->load($coordinator->getBossBossId());
        $headshipList=  DAOFactory::getHeadshipitDAO()->load($coordinator->getBossBossId());
        $managememtList= DAOFactory::getManagementitDAO()->load($headshipList->getManagementITManagementITId());
        $directionList= DAOFactory::getDirectionitDAO()->load($managememtList->getDirectionITDirectionITId());
        echo json_encode(array("boss" => $bossList->getBossName(), "headship"=>$headshipList->getHeadshipITName(), "management"=>$managememtList->getManagementITName(), "direction"=>$directionList->getDirectionITName()));
    }
}
