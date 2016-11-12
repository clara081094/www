<?php

//$user=$_POST['usuario'];
$user="";
$archivo="";
$pass="";
//$npass="angel";

if(isset($_POST["btngra"]))
{
	$user="grabador";
	$archivo=".htgrabador";
	$pass=$_POST["passw_gra"];
}
if(isset($_POST["btnope"]))
{
	$user="operador";
	$archivo=".htoperador";
	$pass=$_POST["passw_ope"];
}

if(isset($_POST["btnadm"]))
{
        $user="administrador";
	$archivo="special/.htpasswd";
	$pass=$_POST["passw_adm"];
}

//comandos para cambiar el password 
echo shell_exec("htpasswd -b /etc/apache2/".$archivo." ".$user." ".$pass);
$msm="El password se modifico";
//echo shell_exec("sleep 2");

//echo "htpasswd -b /etc/apache2/".$archivo." ".$user." ".$pass;
header('Location: '."../seguridad?msm=".$msm);

?>
