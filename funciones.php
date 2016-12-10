<?php
include '/var/www/html/mensaje.php';
include '/var/www/html/operador/contacto.php';
include '/var/www/html/bd.php';

class Funciones {

private $datos;

function Funciones(){
 $this->datos=new Bd();
}

//retorna los mensajes for orden de fecha los mas recientes primero
function retornarMensajes(){
    $mensajes=array();
    $mensaje=new Mensaje();
    $contador=0;
    $query="select * from Mensajes order by fecha desc";
    $conjunto = $this->datos->consultaFila($query);
    while($contador<count($conjunto)){
        $mensaje->setMensaje($conjunto[$contador]['texto'],$conjunto[$contador]['numero'],$conjunto[$contador]['fecha']);
	array_push($mensajes, $mensaje);
	$contador++;
        $mensaje=new Mensaje();
    }
    return $mensajes;
}

function ingresarMensajes($mensaje,$numero,$fecha){
    $sql="insert into Mensajes (texto,numero,fecha) values ('".$mensaje."','".$numero."','".$fecha."')"; 
    $this->datos->ingresarLinea($sql);
}

function compararPassword($usr,$contra){
   $sql="select password from Usuarios where usuario like '".$usr."'";
   $conjunto = $this->datos->consultaFila($sql);
   $password = $conjunto[0]['password'];
   if($password!=NULL)
    {
	if(strcmp($contra,$password)==0)
	return true;
	else
	return false;
    }
    else
	return false;	
}

function verCuenta($usr)
{
    $sql="select * from Usuarios where usuario ='".$usr."' AND perfil='"."2"."'";
    $valor=$this->datos->consultaFila($sql);
    if($valor==NULL)
	return true;
    else
	return false;
}

function registrarUsuario($usr,$pass,$per)
{
    if($this->verCuenta($usr))
    {
      $sql="insert into Usuarios (usuario,password,perfil) values ('".$usr."','".$pass."','".$per."')";
      $this->datos->ingresarLinea($sql);  
      return "Se creo usuario correctamente";
    }else
      return "El usuario ya existe";
}

function cambiarUsuarioPassword($usr,$ppass,$npass)
{
 
     if(!$this->verCuenta($usr))
     {
	return $this->cambiarPassword($usr,$ppass,$npass);
     }
     else
	return "Error de usuario";
}

function cambiarPassword($usr,$ppass,$npass)
{
     if($this->compararPassword($usr,$ppass))
     {
       $sql="update Usuarios set password='".$npass."' where usuario='".$usr."'";
       $this->datos->ingresarLinea($sql);  
       return "Se cambio el password correctamente ";
     }
     else
       return "Error de password";
}

function borrarMensajes()
{
    $sql="delete from Mensajes";
    $this->datos->ingresarLinea($sql);  
}

function versiNombres($tlf)
{
    $sql="select nombres from Pbook where tlf='".$tlf."'";
    $valor=$this->datos->consultaFila($sql);
    //echo "lo que salio en la con: "."sql:".$sql." ".$valor;

    if($valor==NULL)
        return false; //retorna false porque no existe contacto con ese numero
    else
        return true;
}

function verNombre($tlf)
{
    $sql="select nombres from Pbook where tlf='".$tlf."'";
    $valor=$this->datos->consultaFila($sql);
    return $valor;
}

function retornarCont()
{
    $contactos=array();
    $contacto=new Contacto();
    $contador=0;
    $query="select * from Pbook";
    $conjunto = $this->datos->consultaFila($query);
    while($contador<count($conjunto)){
        $contacto->setContacto($conjunto[$contador]['id'],$conjunto[$contador]['nombres'],$conjunto[$contador]['tlf'],$conjunto[$contador]['referencia']);
        array_push($contactos, $contacto);
        $contador++;
        $contacto=new Contacto();
    }
    return $contactos;

}

function ingresarContact($nombre,$tlf,$ref){
    $sql="insert into Pbook (nombres,tlf,referencia) values ('".$nombre."','".$tlf."','".$ref."')"; 
    $this->datos->ingresarLinea($sql);
}

function editarContact($id,$nombre,$tlf,$ref){
    $sql="update Pbook set nombres='".$nombre."',tlf='".$tlf."',referencia='".$ref."' where id=".$id."";
    $this->datos->ingresarLinea($sql);
}

function deleteContact($id){
    $sql="delete from Pbook where id=".$id;
    $this->datos->ingresarLinea($sql);
}

}
?>

