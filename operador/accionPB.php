<?php
include_once '/var/www/html/funciones.php';
$bd = new Funciones();
    $contactos = $bd->retornarCont();

if($_POST){

}
if(isset($_POST["btnadd"]))
{
  $bd->ingresarContact($_POST['nombre'],$_POST['tlf']);	
	//echo "esta aca ".$_POST['nombre']." ".$_POST['tlf'];
}
header('Location: '."../phone_book");
?>
