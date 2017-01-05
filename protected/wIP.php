<?php

$myFile="/etc/dhcpcd.conf";
$myfile2="/etc/dhcpcd.conf";
$fh = fopen($myFile,'r+');
$buscar="interface eth0";
$texto="";

$ip=$_POST['ip'];
$masc=$_POST['mascara'];
$gate=$_POST['gateway'];
if(($ip!=null)&&($masc!=null)&&($gate!=null)){

while(!feof($fh)) {
	$lines = fgets($fh);
	//echo "1.".substr($lines,0,-1)."\n\n\n";
	$texto.= $lines;
        if (strcmp(substr((string)$lines,0,-1),$buscar)==0) {
	    $lines = fgets($fh);
	    $texto.= "static ip_address=".$ip."/".$masc."\n";
            $lines = fgets($fh);
	    $texto.= "static routers=".$gate."\n";
        }
}


fclose($fh);

$myfile = fopen($myfile2, "w");
fwrite($myfile, $texto);
fclose($myfile);
$msm="Reinicie la maquina para aplicar la nueva configuracion";
}
header('Location: '."../ip?msm=".$msm);

?>
