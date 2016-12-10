<?php
class Contacto {
        private $id;
        private $nombres="";
        private $telefono="";
        private $referencia="";

 public function setContacto($id,$nombres,$telefono,$referencia){ 
  $this->id=$id;
  $this->nombres=$nombres;
  $this->telefono=$telefono;
  $this->referencia=$referencia;
}

 public function getId(){
  return $this->id;
 }

 public function setId($id){
  $this->id = $id;
 }

 public function getNombres(){
  return $this->nombres;
 }

 public function setNombres($nombres){
  $this->nombres = $nombres;
 }

 public function getTelefono(){
  return $this->telefono;
 }

 public function setTelefono($telefono){
  $this->telefono = $telefono;
 }

 public function getReferencia(){
  return $this->referencia;
 }

 public function setReferencia($referencia){
  $this->referencia = $referencia;
 }

}
?>
