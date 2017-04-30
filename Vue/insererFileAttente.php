<?php
include('../DAL/FileAttenteDAL.php');
$fileAttenteDAL= new FileAttenteDAL();
if(isset($_POST['client'])){
   $client=$_POST['client'];
}

if(isset($_POST['services'])){
   $services=$_POST['services'];
}

$res=$fileAttenteDAL->insertInFilAtt($client,$services);
if($res){
   session_start();	
   $_SESSION["us"]=$nom;
   header('location:acceuil.php');
  exit();
}
else{
   header('location:FileAttenteForm.php');
   exit();
}
?>
