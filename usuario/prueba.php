<?php 
include '../funciones.php';
//Tiempo que demora la pagina para refrescarse
header("refresh: 5;");
$sms=new Funciones();
$mensajes=$sms->retornarMensajes();
$contador=0;
?>
<html>
    <head>
	<meta charset="utf-8">
	<title>Mensajes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../www/html/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../www/html/bootstrap/css/bootstrap-theme.min.css">
    </head>
    <body>
	<div id="principal" class="container">
	   <div class="row">
		<div class="col-sm-12">
		 <h3>MENSAJES</h3>
		 <ul class="list-group">
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
