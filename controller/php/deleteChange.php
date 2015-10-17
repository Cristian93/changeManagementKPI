<?php

include '../../model/generated/include_dao.php';


DAOFactory::getAlterationDAO()->delete($_POST["changeId"]);

echo  "<script>alert ('".$_POST["changeId"]." change was deleted successfully .'); window.location='../../index.php';</script>";
