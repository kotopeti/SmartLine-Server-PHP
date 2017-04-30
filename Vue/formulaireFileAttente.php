
<?php
$dalClient= new ClientDAL();
$listCli=$dalClient->getAllClient();
echo sizeof($listCli);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Insertion file attente</title>
  </head>
	<body> 
		<form method="post" action="insererFileAttente.php"> 
			<select name="services">
			<?php
              	for($i=0; $i<sizeof($listCli); $i++){
             		echo "<option value=".$listCli[$i]->getToken().">".$listCli[$i]->getNom()."</option>";
             		$i++;
             	}

			?> 
			</select>
			Client :

			Services : 
			<select name="services">
				<option value="1">Retrait</option>
				<option value="2">Versement esp&egrave;ce</option>
				<option value="3">Versement ch&egrave ;que</option>
				<option value="4">Autre information</option>
			</select>
			<input type="submit" value="INSERER"> 
		</form>
	</body>
</html>