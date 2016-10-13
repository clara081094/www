<?php
include 'funciones.php';
$sesion=new Funciones();

$codigo = $_POST['codigo'];
$user = $_POST['username'];
$pass = $_POST['password'];
$archivo = $_POST['bookId'];

if($sesion->compararPassword($user,$pass))
{	echo "Existe\n";
	$path = $_GET['some_path'];
    	$pate=str_replace(" ", "\ ", $archivo);
	$pate="rm -rf ".$pate;
    	echo shell_exec($pate);

	if($codigo==2){
	$pate=str_replace("wav", "txt", $pate);
        echo shell_exec($pate);
	header("Location:../grabaciones?msm="."Se elimino archivo");}

	if($codigo==1)
	header("Location:../conferencias?msm="."Se elimino archivo");
}
else
{	echo "No existe\n";
	if($codigo==2)
        header("Location:../grabaciones?msm="."Error de autenticacion");

        if($codigo==1)
	header("Location:../conferencias?msm="."Error de autenticacion ");
}
?>
