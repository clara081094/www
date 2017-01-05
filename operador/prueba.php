<?php 
include '../funciones.php';
$sms=new Funciones();
if ($_GET['some_path'])
{
    $sms->borrarMensajes();
    header('Location: '."../mensajes_sms");
}
//Tiempo que demora la pagina para refrescarse
header("refresh: 5;");
$mensajes=$sms->retornarMensajes();
$contador=0;
$mes="borrar";
?>
<html>
    <head>
	<meta charset="utf-8">
	<title>MENSAJES SMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../www/html/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../www/html/bootstrap/css/bootstrap-theme.min.css">
    </head>
    <body>
	<ul class="list-inline">
                <li><a href="../inicio"><img src="/www/html/bootstrap/img/phonestudio.png"></a></li>
                <li><div style="background-color:a6af0a; height:1px; width:1400;"></div></li>
                </ul>

	<div id="principal" class="container">
	   <div class="row">
		<div class="col-sm-12">
		 <h3>MENSAJES SMS </h3>
		 <a href="../mensajes_sms?some_path=<?php echo $mes; ?>" type="button" class="btn btn-primary" onclick="return confirm('Desea borrar todos los mensajes?');return false;" >BORRAR LOS MENSAJES</a>
		 <ul class="list-group">
		 <br>
		 <?php while($contador < count($mensajes)){ ?>
		 <li class="list-group-item"><?php echo $mensajes[$contador]->getFecha()."\t".$mensajes[$contador]->getNumero();?>
			<p><?php echo $mensajes[$contador]->getTexto(); ?></p>
		 </li>
		 <?php $contador++; }?>
		 </ul>
		</div>
	   </div>

	</div>

	<script src="../www/html/bootstrap/js/jquery.min.js"></script>
	<script src="../www/html/bootstrap/js/bootstrap.min.js"></script>	
    </body>
</html>
<?php ?>
