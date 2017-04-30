<?php
 class FileAttente
{
	private $id;
	private $description;
	private $valeur;	

	public function getId(){
		return $this->id;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description=$description;
	}

	public function getValeur(){
		return $this->valeur;
	}

	public function setvaleur($valeur){
		$this->valeur=$valeur;
	}
	
}

?>