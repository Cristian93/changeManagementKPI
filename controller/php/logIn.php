<?php
session_start();

include '../../model/generated/include_dao.php';


$changeManagerList=DAOFactory::getChangemanagerDAO()->setSQL("select * from changemanager where changeManagerEmail='".$_POST["user"]."' and changeManagerPassword='".$_POST["password"]."';");


if (count($changeManagerList)==1){
$_SESSION["user"]=$_POST["user"];
header("Location: ../../index.php");
}

else{
    echo  "<script>alert ('Email address and password do not match. If you have problems, contact the DBA.'); window.location='../../index.php';</script>";
}