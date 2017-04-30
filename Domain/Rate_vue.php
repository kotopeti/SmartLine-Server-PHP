<?php
class Rate_vue
{
	private $nom;
	private $valeur;
	private $rates;	

	public function getValeur(){
		return $this->valeur;
	}

	public function setValeur($valeur){
		$this->valeur=$valeur;
	}


	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom=$nom;
	}

	
	public function getRates(){
		return $this->rates;
	}

	public function setRates($rates){
		$this->rates=$rates;
	}
	
}

?>