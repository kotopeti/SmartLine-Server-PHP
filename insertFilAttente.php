<?php
ob_start();
require_once('DAL/ClientDAL.php');
include('FileAttente.php');


$dalCli= new ClientDAL();
$service = $_GET['service'];
$token = $_GET['token'];
$link = Connexion::getConn();

$client = $dalCli->getClientByTokenWithCon($token,$link);


if($client!=null){
    $result = array();
    if(ClientDAL::isOnLine($token,$service,$link)){
        header('Content-Type: application/json');
        $json = getListJsonByService($service,$link);
        echo $json;
        return;
    }else{
        $sqlinsert = "insert into fil_attente VALUES (null,null,".$service.",null,now(),null,null,".$client->getId().")";
        $res=mysqli_query($link, $sqlinsert);
        if (!$res)
        {
            $results[] = array(
                'Erreur' => 'requette'
            );
            header('Content-Type: application/json');
            $err = json_encode($results);
            echo $err;
            return;
        }else{
            $results[] = array(
                'Erreur' => 'requette'
            );
            header('Content-Type: application/json');
            $json = getListJsonByService($service,$link);
            echo $json;
        }
    }
}
ob_end_flush();
?>