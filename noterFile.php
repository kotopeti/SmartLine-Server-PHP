<?php
require_once('config/connexion.php');
$service = $_GET['service'];
$id_client = $_GET['id_client'];
$rate = $_GET['rate'];
$comm = $_GET['comm'];
$link = Connexion::getConn();
$sqlinsert = "insert into rate_service VALUES (null,".$service.",".$rate.",'".$comm."',".$id_client.")";
$res=mysqli_query($link, $sqlinsert);
mysqli_close($link);