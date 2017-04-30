	<?php
include('../Domain/Client.php');
include('GlobalDAL.php');

	class ClientDAL extends GlobalDAL{
		
	 	function getClientByToken($token){
	 		$link=parent::Connect();
			$c= new Client();
			$sqlcli  = "select * from client where token = '".$token."'";
			$result = mysqli_query($link, $sqlcli);
	    	$row_cnt = mysqli_num_rows($result);
			if($row_cnt>0) {
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				$c->setId($row['id']);
				$c->setNom($row['nom']);
				$c->setToken($row['token']);
				$c->setSexe($row['sexe']);
			}
			mysqli_close($link);
			return $c;
		}


		function getClientByTokenWithCon($token,$con){

			if (mysqli_connect_errno()) {
				printf("Échec de la connexion : %s\n", mysqli_connect_error());
				exit();
			}
			$c= null;
			$sqlcli  = "select * from client where token = '".$token."'";
			$result = mysqli_query($con, $sqlcli);
			$row_cnt = mysqli_num_rows($result);
			if($row_cnt>0) {
				$c= new Client();
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				$c->setNom($row['nom']);
				$c->setToken($row['token']);
				$c->setSexe($row['sexe']);
				$c->setId($row['id']);
			}
			return $c;
		}

		function insertClient($nom,$token,$sexe){
			$link=parent::Connect();
			$sql="INSERT INTO `client` VALUES (null, '".$nom."', '".$token."', '".$sexe."')";
			$res=mysqli_query($link, $sql);
			
		}

		function isExist($token){
			$res=null;
			$link=parent::Connect();
		/* Vérification de la connexion */
			if (mysqli_connect_errno()) {
	   			printf("Échec de la connexion : %s\n", mysqli_connect_error());
	   		exit();
				}
			$c= new Client();
			$sqlcli  = "select * from client where token = '".$token."'";
			$result = mysqli_query($link, $sqlcli);
	    	$row_cnt = mysqli_num_rows($result);
			if($row_cnt>0) {
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				$res=$row['nom'].";".$row['token'].";".$row['sexe'];
			}
			mysqli_close($link);
			return $res;

		}

		public static function isOnLine($token,$idservice,$con){
			$sql = "select * from vue_fil_attente_libelle where token = '".$token."' and id_service = '".$idservice."'";
			$result = mysqli_query($con, $sql);
			$row_cnt = mysqli_num_rows($result);
			if($row_cnt>0) {
				return true;
			}else{
				return false;
			}
		}

		function getAllClient(){

			$link=parent::Connect();
			$c= new Client();
			$sqlcli  = "select * from client";
			$result = mysqli_query($link, $sqlcli);
	    	$row_cnt = mysqli_num_rows($result);
			$listCli=array();
			if($row_cnt>0) {
				$i=0;
				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					$c=new Client();
					$c->setId($row['id']);
					$c->setNom($row['nom']);
					$c->setToken($row['token']);
					$c->setSexe($row['sexe']);
					array_push($listCli,$c);
					$i++;
				}
			}
			mysqli_close($link);
			return $listCli;
		}

	}
	
	?>