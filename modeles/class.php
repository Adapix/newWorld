<?php

class User{
	private $idUser;
	private $nomUser;
	private $password;
	private $email;
	private $admin = false;


	public function __construct($nomUser=NULL,$password=NULL,$email=NULL){
		$this->nomUser = $nomUser;
		$this->password = $password;
		$this->email = $email;
	}

	public function getIdUser(){
		return $this->idUser;
	}

	public function getNomUser(){
		return $this->nomUser;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getAdmin(){
		return $this->admin;
	}

	public function toDb(){
		req("INSERT INTO users (nomUser,password,email,signup_date) 
		VALUES (\"".$this->nomUser."\",\"".$this->password."\",\"".$this->email."\",".date('dmY').")");
	}
}

?>