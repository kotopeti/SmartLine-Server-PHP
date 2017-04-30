	<?php
	include('../Domain/FileAttente.php');
    include('ClientDAL.php');
	include('../Domain/FileAttenteLibelle.php');

	class FileAttenteDAL  extends GlobalDAL{

		function insertInFilAtt($token,$id_type){
			//Recheche du client qui correspond au token
			$clientDal= new ClientDAL();
			$c=new Client();
			$c=$clientDal->getClientByToken($token);
			$id_client=$c->getId();
			$link=parent::Connect();
			$sql="INSERT INTO `fil_attente` (id,id_client,id_type,temps_entre) VALUES (null,'".$id_client."','".$id_type."', NOW())";
			
			if ($link->query($sql) === TRUE) {
    			return $c;
			} else {
    			echo "Error: " . $sql . "<br>" . $link->error;
			}
			mysqli_close($link);
		}

		function getAllFilAtt($service){
			$link=parent::Connect();
			
			if($service==null){
				$sql = "select * from vue_fil_attente_libelle order by temps_entre asc";
				echo $sql;
			}
			else{
				$sql = "select * from vue_fil_attente_libelle where id_service = '".$service."' order by temps_entre asc";
			}
			$result = mysqli_query($link, $sql);
	    	$row_cnt = mysqli_num_rows($result);
			
			$listfilAte=array();
			if($row_cnt>0) {
				$i=0;
				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					//$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
					$filAte =new FileAttente();
					$filAte->setId($row['id']);
					$filAte->setDescription($row['description']);
					$filAte->setId_client($row['id_client']);
					$filAte->setId_type($row['id_type']);
					$filAte->setRang_type($row['rang_client']);
					$filAte->setTemps_entree($row['temps_entre']);
					$filAte->setTemps_sortie($row['temps_sortie']);
					$filAte->setvaleur($row['valeur']);
					array_push($listfilAte,$filAte);
					$i++;
				}
			}
			mysqli_close($link);
			return $listfilAte;
		}


		function getMyAllFilAtt($service){
			$link=parent::Connect();
			
			if($service==null){
				$sql = "select * from vue_fil_attente_libelle order by temps_entre asc";
				}
			else{
				$sql = "select * from vue_fil_attente_libelle where id_service = '".$service."' order by temps_entre asc";
			}
			$result = mysqli_query($link, $sql);
	    	$row_cnt = mysqli_num_rows($result);
			
			$listfilAte=array();
			if($row_cnt>0) {
				$i=0;
				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
					//$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
					$filAte =new FileAttente();
					$filAte->setDescription($row['id_service']);
					$filAte->setId_client($row['id_client']);
					$filAte->setId_type($row['temps_entre']);
					$filAte->setRang_type($row['nom']);
					$filAte->setTemps_entree($row['token']);
					$filAte->setTemps_sortie($row['sexe']);
					array_push($listfilAte,$filAte);
					$i++;
				}
			}
			mysqli_close($link);
			return $listfilAte;
		}
		function updateFileAttente($token){
			$link=parent::Connect();
			//Recheche du client qui correspond au token
			$clientDal= new ClientDAL();
			$c=new Client();
			$c=$clientDal->getClientByToken($token);
			$id_client=$c->getId();
			$sql="update fil_attente set temps_sortie = NOW() where id_client='".$id_client."'";
			if ($link->query($sql) === TRUE) {
    			//echo "Mise a jour avec succes";
    			return $c;
			} else {
    			echo "Error: " . $sql . "<br>" . $link->error;
			}
			mysqli_close($link);
		}

		function getAllFileAttenteLibelleByService($service){
			$link=parent::Connect();
			$sql = "select * from vue_fil_attente_libelle where id_service = '".$service."' order by temps_entre asc";
			$val = mysqli_query($link, $sql);
			$results = array();
			$i=0;
			while($row = mysqli_fetch_array($val,MYSQLI_ASSOC))
			{
				$ftlib=new FileAttenteLibelle();
    			$ftlib->setId_service($row['id_service']);
        		$ftlib->setTemps_entre($row['temps_entre']);
        		$ftlib->setId_client($row['id_client']);
        		$ftlib->setNom($row['nom']);
        		$ftlib->setToken($row['token']);
        		$ftlib->setSexe($row['sexe']);
        		$results[$i]=$ftlib;
        		$i++;
    		}
    		return $results;
    		mysqli_close($link);
		}

			function getAllFileAttenteLibelle(){
			$link=parent::Connect();
			$sql = "select * from vue_fil_attente_libelle order by temps_entre asc";
			$val = mysqli_query($link, $sql);
			$results = array();
			$i=0;
			while($row = mysqli_fetch_array($val,MYSQLI_ASSOC))
			{
				$ftlib=new FileAttenteLibelle();
    			$ftlib->setId_service($row['id_service']);
        		$ftlib->setTemps_entre($row['temps_entre']);
        		$ftlib->setId_client($row['id_client']);
        		$ftlib->setNom($row['nom']);
        		$ftlib->setToken($row['token']);
        		$ftlib->setSexe($row['sexe']);
        		$results[$i]=$ftlib;
        		$i++;
    		}
    		return $results;
    		mysqli_close($link);
		}
	}
	
	?>