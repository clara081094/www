<?php

//$user=$_POST['usuario'];
$npass=$_POST['new_password'];

$user="user";
//$npass="angel";

$msm= shell_exec("htpasswd -b /etc/apache2/.htpasswd ".$user." ".$npass);
$msm="El password se modifico";

header('Location: '."../configuracion?msm=".$msm);

?>