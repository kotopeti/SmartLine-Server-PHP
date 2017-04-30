	<?php
	include('../Domain/Rate_vue.php');
   // include('RateDAL.php');
    include('GlobalDAL.php');
	

	class RateDAL extends GlobalDAL{

		function getAllRate(){
			$link=parent::Connect();
			$sql = "SELECT * FROM rate_view ";
			$val = mysqli_query($link, $sql);
			$results = array();
			$i=0;
			while($row = mysqli_fetch_array($val,MYSQLI_ASSOC))
			{
				$rate=new Rate_vue();
    			$rate->setNom($row['nom']);
        		$rate->setValeur($row['valeur']);
        		$rate->setRates($row['rate']);
        		$results[$i]=$rate;
        		$i++;
    		}
    		return $results;
    		mysqli_close($link);
		}
	}
	
	?>