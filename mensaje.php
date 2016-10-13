<?php
class Mensaje {
	private $texto="";
	private $numero="";
	private $fecha="";

function setMensaje($txt,$tel,$fecha){ 
 $this->texto=$txt;
 $this->numero=$tel;
 $this->fecha=$fecha;
}
function setTexto($txt){
 $this->texto=$txt;
}
function setNumero($tel){
 $this->numero=$tel;
}
function setFecha($fecha){
 $this->fecha=$fecha;
}
function getTexto(){
 return $this->texto;
}
function getNumero(){
 return $this->numero;
}
function getFecha(){
 return $this->fecha;
}


}
?>

