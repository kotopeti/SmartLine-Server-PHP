<?php
require_once('DAL/ClientDAL.php');

$dalCli= new ClientDAL();
if(isset($_GET['token'])&&isset($_GET['nom'])&&isset($_GET['sexe'])){
	$isExi=$dalCli->isExist($_GET['token']);
    $res= $_GET['nom'].";".$_GET['token'].";".$_GET['sexe'];
    if($isExi==null){
		 	$dalCli->insertClient($_GET['nom'],$_GET['token'],$_GET['sexe']);
		echo $res;
    }else{
		echo $isExi;
	}

}
else {
	echo 'false';
}
?>


