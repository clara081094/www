<?php
include '/var/www/html/bd.php';
include '/var/www/html/conferencia.php';

class Funconf {

private $datos;

function Funconf(){
 $this->datos=new Bd();
}

function conferenciaActiva()
{
    $sql="select count(id) from Conferencia where estado=0";
    $valor=$this->datos->consultaFila($sql);
    if($valor==NULL)
	return "0";
    else
	return $valor[0]['count(id)'];
}

function insertarConferencia($conf)
{
    $sql="insert into Conferencia (hora_inicio, fecha, estado) values ('".$conf->getHoraI()."','".$conf->getFecha()."','0');";
    $this->datos->ingresarLinea($sql);
}

function terminarConferencia($conf)
{
    $sql="update Conferencia set hora_salida='".$conf->getHoraF()."', estado='1' where id=".$conf->getId()."";
    $this->datos->ingresarLinea($sql);
}


}
?>
