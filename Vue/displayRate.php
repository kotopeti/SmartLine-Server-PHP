<?php
include('../DAL/RateDAL.php');
$dalRate= new RateDAL();
$listRate=$dalRate->getAllRate(null);
var_dump($listRate);
?>