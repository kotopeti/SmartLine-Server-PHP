<?php
session_start();
if(isset($_SESSION["us"])){
	$u=$_SESSION["us"];
	echo $u." est connecte";
}
?>