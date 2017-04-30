<?php
 class Utilisateur
{
	private $id;
	private $login;
	private $motdepasse;

	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id=$id;
	}

	public function getLogin(){
		return $this->login;
	}

	public function setLogin($login){
		$this->login=$login;
	}

	public function getMotdepasse(){
		return $this->motdepasse;
	}

	public function setMotdepasse($motdepasse){
		$this->motdepasse=$motdepasse;
	}
}

?>