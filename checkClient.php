<?php
require_once('config/connexion.php');
$token = $_GET['token'];
$link = Connexion::getConn();//new mysqli("localhost", "root", "root", "smartline");
if (mysqli_connect_errno()) {
      printf("Échec de la connexion : %s\n", mysqli_connect_error());
    exit();
}
$sqlcli  = "select * from client where token = '".$token."'";
$result = mysqli_query($link, $sqlcli);
$row_cnt = mysqli_num_rows($result);
if($row_cnt>0) {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo $row['nom']. ';' .$row['sexe'];
}else{
    echo 'false';
}

mysqli_close($link);


