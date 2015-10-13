<?php

class updatesemaphoresClass {

    public function updateSemaphores() {
        include '../../model/generated/include_dao.php';
        $ce = count(DAOFactory::getAlterationDAO()->queryAll());
        $cs = count(DAOFactory::getAlterationDAO()->queryByStateExecution("Successful"));
        $cr = count(DAOFactory::getAlterationDAO()->queryByStateExecution("Rollback"));
        $ci = count(DAOFactory::getAlterationDAO()->queryByStateExecution("Incident"));
        $rs=  round((1-(($cr+$ci)/$cs))*100);
        $es= round(($cs/$ce)*100);
        $eri=  round((($cr+$ci)/$ce)*100);
        echo json_encode(array("ce" => $ce, "cs" => $cs,"cr" => $cr,"ci" => $ci,"rs" => $rs,"es" => $es,"eri" => $eri));
    }
}
