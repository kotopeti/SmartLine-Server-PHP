<?php
	class Connexion
	{
		public static function getConn(){
			$link = new mysqli("localhost", "root", "root", "smartline");
		/* Vérification de la connexion */
			if (mysqli_connect_errno()) {
	   			printf("Échec de la connexion : %s\n", mysqli_connect_error());
	   		exit();
				}
			$link->select_db("smartline");
			return $link;
		}
	}


/*
if ($result = $link->query("SELECT DATABASE()")) {
   $row = $result->fetch_row();
   printf("La base de données courante est %s.\n", $row[0]);
   $result->close();
}*/


?>
