<?php
include('../DAL/UtilisateurDAL.php');
$dalUtilisateur= new UtilisateurDAL();
if(isset($_POST['nom'])){
   $nom=$_POST['nom'];
}

if(isset($_POST['motdepasse'])){
   $motdepasse=$_POST['motdepasse'];
}

$res=$dalUtilisateur->isUser($nom,$motdepasse);


if($res){
   session_start();	
   $_SESSION["us"]=$nom;
   header('location:acceuil.php');
  exit();
}
else{
   header('location:login.php');
   exit();
}

  
?>
