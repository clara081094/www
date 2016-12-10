<?php
include_once '/var/www/html/funciones.php';
$bd = new Funciones();

if($_POST){

}

if(isset($_POST["btnadd"]))
{
  //echo "btnadd";
  $bd->ingresarContact($_POST['cont'],$_POST['fono'],$_POST['ref']);	
}
else if (isset($_POST["btndel"]))
{
  $bd->deleteContact($_POST['hdi']);
} 
else
{
  //echo "btnedit";
  $bd->editarContact($_POST['ID'],$_POST['NOMBRE'],$_POST['TELEFONO'],$_POST['REFERENCIA']); 
}
header('Location: '."../phonebook");
?>
