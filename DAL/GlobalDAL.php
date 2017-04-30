	<?php
	
	class GlobalDAL{
		function Connect(){

			$link = new mysqli("localhost", "root", "", "smartline");
			if (mysqli_connect_errno()) {
	   			printf("Échec de la connexion : %s\n", mysqli_connect_error());
	   		exit();
				}
			$link->select_db("smartline");
			return $link;
		}
		
	 }
	
	?>