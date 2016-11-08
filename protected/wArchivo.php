<?php
include_once '/home/confAMI.php';

$myFile="/etc/asterisk/sip.conf";
$fh = fopen($myFile,'r+');
$username="username=".$_POST['showId']."\n";
$passw=$_POST['new_password'];
echo "username: ".$username." password:".$passw."\n";
$texto="";

if($passw!=null){
while(!feof($fh)) {
	$users = fgets($fh);
	$texto.= $users;
        if (strcmp((string)$users,$username)==0) {
	    $users = fgets($fh);
	    $users = "";
            $users = "secret=".$passw;
	    //echo $users."\n";
	    $texto.=$users."\n";
        }
}

fclose($fh);

$myfile = fopen($myFile, "w");
fwrite($myfile, $texto);
fclose($myfile);

$msm="El password de la extension ".$_POST['showId']." se modifico correctamente";
$sip = new Confami();
$sip->reloadSip();
echo shell_exec("sleep 2");
}
header('Location: '."../sip?msm=".$msm);

?>
