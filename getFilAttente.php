<?php
include('FileAttente.php');
include('FileAttente.php');
require_once('config/connexion.php');
$link = Connexion::getConn();
$service = $_GET['service'];
$json = getListJsonByService($service,$link);
header('Content-Type: application/json');
echo $json;
mysqli_close($link);
