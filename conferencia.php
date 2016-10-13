<?php
class Conferencia{
	private $id;
	private $hora_inicio;
	private $hora_final;
	private $fecha;
	private $estado;

function setConferencia($id,$hi,$hf,$fecha,$est){
	$this->id=$id;
	$this->hora_inicio=$hi;
        $this->hora_final=$hf;
        $this->fecha=$fecha;
	$this->estado=$est;

}

function setId($id){
 $this->id=$id;
}
function setHoraI($hi){
 $this->hora_inicio=$hi;
}
function setHoraF($hf){
 $this->hora_final=$hf;
}
function setFecha($fecha){
 $this->fecha=$fecha;
}
function setEstado($est){
 $this->estado=$est;
}
function getId(){
 return $this->id;
}
function getHoraI(){
 return $this->hora_inicio;
}
function getHoraF(){
 return $this->hora_final;
}
function getFecha(){
 return $this->fecha;
}

} 
?>
