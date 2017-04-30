<?php
 class FileAttente
{
	private $id;
	private $description;
	private $id_client;
	private $id_type;
	private $rang_type;
	private $temps_entree;
	private $temps_sortie;
	private $valeur;	

	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id=$id;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description=$description;
	}

	public function getId_client(){
		return $this->id_client;
	}

	public function setId_client($id_client){
		$this->id_client=$id_client;
	}
	public function getId_type(){
		return $this->id_type;
	}

	public function setId_type($id_type){
		$this->id_type=$id_type;
	}

	public function getRang_type(){
		return $this->rang_type;
	}

	public function setRang_type($rang_type){
		$this->rang_type=$rang_type;
	}

	public function getTemps_entree(){
		return $this->temps_entree;
	}

	public function setTemps_entree($temps_entree){
		$this->temps_entree=$temps_entree;
	}
		public function getTemps_sortie(){
		return $this->temps_sortie;
	}

	public function setTemps_sortie($temps_sortie){
		$this->temps_sortie=$temps_sortie;
	}

	public function getValeur(){
		return $this->valeur;
	}

	public function setvaleur($valeur){
		$this->valeur=$valeur;
	}
}

?>