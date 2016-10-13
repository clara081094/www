<?php
    include_once '/home/confAMI.php';
    include_once '/var/www/html/participante.php';
    $conferencia = new Confami(); 
    header("refresh: 3; url=../sala");
?>
<html>
    <head>
	<meta charset="utf-8">
	<title>CONFERENCIA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../www/html/bootstrap/css/bootstrap.min.css" type="text/css">
    	<link rel="stylesheet" href="../../www/html/bootstrap/font-awesome/css/font-awesome.min.css" type="text/css">
    	<link rel="stylesheet" href="../../www/html/bootstrap/css/animate.min.css" type="text/css">
    	<link rel="stylesheet" href="../../www/html/bootstrap/css/creative.css" type="text/css">
    </head>
    <body>
	<div id="principal" class="container">
	   <div class="row">
	   <?php if($conferencia->conferenciaHay()){
       		$usuarios=$conferencia->obtenerUsuarios(); ?>
		<div class="col-sm-9">
		 <h3>MIEMBROS ACTUALES DE LA CONFERENCIA</h3>
		 <br>
		 <table class="table">
		    <thead><tr>
			 <th>ID</th><th>CHANNEL</th><th>NUMERO</th>
			 <th></th><th></th><th>VOLUMEN</th>
		    </tr></thead>
		    <tbody>
			<?php for($i=0;$i<sizeof($usuarios);$i++){ ?>
			<tr><form action='salaconf' method='post'>
			 <td><?php echo $i+1; ?></td>
			 <td><?php echo $usuarios[$i]->getChannel(); ?></td>
			 <input type="hidden" name="channel" value=<?php echo $usuarios[$i]->getChannel(); ?>>
			 <td><?php echo $usuarios[$i]->getNumero(); ?></td>
			 <td> <input class="btn btn-primary" type="submit" name="btnkick" value="KICK" onclick="return confirm('Desea colgar al invitado?');return false;" /></td>
			 <?php  $mut=$usuarios[$i]->getMuted(); $mu="No";
		         if(strcmp($mu,$mut)==0){ ?>
			 <td><input type="submit" class="btn btn-default" name="btnmute" value="MUTE" /></td>
			 <?php }else{ ?>
			 <td><input type="submit" class="btn btn-danger" name="btnunmute" value="UNMUTE" /></td>
			 <?php } ?>
			 <td><button type="button" class="btn btn-default" aria-label="Left Align">
			     <span class="glyphicon glyphicon-triangle-top" aria-hidden="true"></span></button>
			     <button type="button" class="btn btn-default" aria-label="Left Align">
                             <span class="glyphicon glyphicon-triangle-bottom" aria-hidden="true"></span></button></td>
		        </form>
			</tr><?php } ?>
		    </tbody>
		 </table>
		</div>
	<?php }else { ?>
	<br>
	<h1>NADIE EN CONFERENCIA</h1>
	<?php } ?>
   	</div>

      </div>
      </div>


    </body>
	
    <script src="../www/html/bootstrap/js/jquery.js"></script>
    <script src="../www/html/bootstrap/js/bootstrap.min.js"></script>
    <script src="../www/html/bootstrap/js/jquery.easing.min.js"></script>
    <script src="../www/html/bootstrap/js/jquery.fittext.js"></script>
    <script src="../www/html/bootstrap/js/wow.min.js"></script>

</html>
<?php ?>
