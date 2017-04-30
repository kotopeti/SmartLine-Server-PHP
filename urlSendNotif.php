<?php
require_once('Notification.php');
require_once('config/connexion.php');
$notif = new Notification();
$link = Connexion::getConn();
$service = $_GET['service'];
$sql = "select * from vue_fil_attente_libelle where id_service = '".$service."' order by temps_entre asc";
$val = mysqli_query($link, $sql);
$contenuNotifVotreTour = "Un client vient de quitter la file. Vous êtes maintenant le plochain. Rejoignez votre guichet vite!";
$contenuNotif = "Un client vient de partir. Surveillez votre file d'attente.";
$i = 1;
$lesIds = array();
$nandefasana = "";
while($row = mysqli_fetch_array($val,MYSQLI_ASSOC))
{
    if($i==1){
        $notif->sendNotification($row['token'],$contenuNotifVotreTour);
        $nandefasana.=$row['token'];
    }else{
        $notif->sendNotification($row['token'],$contenuNotif);
        array_push($lesIds,$row['token']);
        $nandefasana.=" / ".$row['token'];
    }
    $i ++;
}

$insertTest = "insert into test values('Nandefa notification tany @ : '".$nandefasana.")";
mysqli_query($link, $insertTest);
mysqli_close($link);