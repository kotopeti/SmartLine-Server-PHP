	<?php
	include('../Domain/Utilisateur.php');
	include('GlobalDAL.php');
		
	class UtilisateurDAL extends GlobalDAL {
	 	function isUser($login,$mdp){
	 		$link=parent::Connect();
			$res=false;
			$sql  = "select count(id) as nbUser from utilisateur where login= '".$login."' and motdepasse='".$mdp."'";
			var_dump($sql);
			$result = mysqli_query($link, $sql);
	    	$row_cnt = mysqli_num_rows($result);
	    	$nb=0;
			if($row_cnt>0) {
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				$nb=$row['nbUser'];
			}
			if($nb==1){
				$res=true;
			}else{
				$res=false;
			}
			mysqli_close($link);
			return $res;
		}
	}
	
	?>