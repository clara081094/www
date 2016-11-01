<?php
$myFile="/etc/asterisk/sip.conf";
$fh = fopen($myFile,'r+');
$username="username=".$_POST['showId']."\n";
$passw=$_POST['new_password'];
echo "username: ".$username." password:".$passw;
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
	    //fwrite($fh,$users);
	    $texto.=$users."\n";
        }
}

fclose($fh);

$myfile = fopen($myFile, "w");
fwrite($myfile, $texto);
fclose($myfile);

$msm="El password del usuario ".$_POST['showId']." se modifico correctamente";

echo $msm;
}
header('Location: '."../sip?msm=".$msm);
?>
