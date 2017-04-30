<?php
 class Client
{
	private $id;
	private $nom;
	private $sexe;
	private $token;	

	public function getId(){
		return $this->id;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom=$nom;
	}

	 public function setId($idm){
		 $this->id=$idm;
	 }

	public function getSexe(){
		return $this->sexe;
	}

	public function setSexe($sexe){
		$this->sexe=$sexe;
	}
	public function getToken(){
		return $this->token;
	}

	public function setToken($token){
		$this->token=$token;
	}

}

?>