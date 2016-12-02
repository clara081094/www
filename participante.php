<?php
class Participante{
	private $id;
	private $channel;
	private $numero;
	private $muted;
	private $kick;

function setParticipante($id,$channel,$numero,$muted){
 $this->id = $id;
 $this->channel = $channel;
 $this->numero = $numero;
 $this->muted = $muted;
}

function setId($id){
 $this->id = $id;
}
function getId(){
 return $this->id;
}
function setChannel($channel){
 $this->channel = $channel;
}
function getChannel(){
 return $this->channel;
}
function setNumero($numero){
 $this->numero = $numero;
}
function getNumero(){
 return $this->numero; 
}
function setMuted($muted){
 $this->muted = $muted;
}
function getMuted(){
 return $this->muted;
}
function setKick($kick){
 $this->kick = $kick;
}
function getKick(){
 return $this->kick;
}


}

?>
