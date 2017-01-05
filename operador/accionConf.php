<?php
echo "Aca esta";
include ('/home/confAMI.php');
$channel="";
$conferencia= new Confami();

if($_POST){
	$channel=$_POST['channel'];
}
if(isset($_POST["btnkick"]))
{
	echo "Entro a kick/n";
	$conferencia->kick($channel);
	sleep(3);
}
if(isset($_POST["btnmute"]))
{
	echo "Entro a mute";
	$conferencia->mute($channel);
	sleep(3);
}
if(isset($_POST["btnunmute"]))
{
	echo "Entro a unmute";
	$conferencia->unmute($channel);
	sleep(3);
}

header('Location: '."../conferencia");
?>
