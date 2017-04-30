<?php
 class FileAttenteLibelle
{
	private $id_service;
	private $id_client;
	private $nom;
	private $token;
	private $temps_entre;
	private $temps_sortie;
	private $sexe;	

    public function getId_service(){
		return $this->id_service;
	}

	public function setId_service($id_service){
		$this->id_service=$id_service;
	}

	public function getId_client(){
		return $this->id_client;
	}

	public function setId_client($id_client){
		$this->id_client=$id_client;
	}
	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom=$nom;
	}

	public function getToken(){
		return $this->token;
	}

	public function setToken($token){
		$this->token=$token;
	}

	public function getTemps_entre(){
		return $this->temps_entre;
	}

	public function setTemps_entre($temps_entre){
		$this->temps_entre=$temps_entre;
	}
		public function getTemps_sortie(){
		return $this->temps_sortie;
	}

	public function setTemps_sortie($temps_sortie){
		$this->temps_sortie=$temps_sortie;
	}

	public function getSexe(){
		return $this->sexe;
	}

	public function setSexe($sexe){
		$this->sexe=$sexe;
	}
}

?>