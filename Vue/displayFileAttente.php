<?php
include('../DAL/FileAttenteDAL.php');
$dalFileAttente= new FileAttenteDAL();
$listfilAte=$dalFileAttente->getMyAllFilAtt(null);
var_dump($listfilAte)
?>