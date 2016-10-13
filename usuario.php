<?php
class Usuario {
	private $usuario="";
	private $password="";
	private $perfil;

function setUsuario($usr,$pass,$per){
	$this->usuario=$usr;
	$this->password=$pass;
	$this->perfil=$per;
} 

function setUser($usr){
	$this->usuario=$usr;
}

function setPassword($pass){
	$this->password=$pass;
}

function setPerfil($per){
	$this->perfil=$per;
}

function getUser(){
	return $this->usuario;
}

function getPassword(){
	return $this->password;
}

function getPerfil(){
	return $this->perfil;
}

}
?>
