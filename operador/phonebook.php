<?php
    include_once '/var/www/html/funciones.php';
    $bd = new Funciones();
    $contactos = $bd->retornarCont();
?>
<html>
    <head>
	<meta charset="utf-8">
	<title>PHONEBOOK</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../www/html/bootstrap/css/bootstrap.min.css" type="text/css">
    	<link rel="stylesheet" href="../../www/html/bootstrap/font-awesome/css/font-awesome.min.css" type="text/css">
    	<link rel="stylesheet" href="../../www/html/bootstrap/css/animate.min.css" type="text/css">
    	<link rel="stylesheet" href="../../www/html/bootstrap/css/creative.css" type="text/css">
    </head>
    <body>
	<div id="principal" class="container">
	   <div class="row">
		 <br>
		 <h1>PHONEBOOK</h1><br>
		 <a data-toggle="modal" href="#confirm-change" type="button" class="btn btn-primary">AGREGAR NUEVO</a>
		 <br><br>
		 <div class="col-sm-6">
		 <table class="table table-bordered">
		    <thead><tr>
			 <th>NOMBRE</th><th>TELEFONO</th>
		    </tr></thead>
		    <tbody>
			<?php for($i=0;$i<sizeof($contactos);$i++){ ?>
			 <td><?php echo $contactos[$i][0]?></td>
			 <td><?php echo $contactos[$i][1]?></td>
			 <td><input type="submit" class="btn btn-default" name="btnedit" class="btn btn-primary" value="EDITAR"/></td>
                        </tr>
			<?php } ?>
		    </tbody>
		 </table>
		 </div>
         </div>
      </div>

    <div class="modal fade" id="confirm-change" role="dialog">
      <div class="modal-dialog">
      <div class="modal-content">

      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">AGREGAR CONTACTO</h4>
      </div>

      <div class="modal-body">
        <form id='addc' action='phoneb' method='post' accept-charset='UTF-8'>
        <label for='nombre' >Nombre del contacto:</label></br>
        <input type='nombre' name="nombre" id="nombre" maxlenght="30"/></br></br>
	<label for='tlf' >Telefono del contacto:</label></br>
        <input type='tlf' name='tlf' id='tlf' maxlength="12" /></br></br>
        <input type="submit" class="btn btn-default" name="btnadd" class="btn btn-primary" value="AGREGAR"/></td></br>
         </form>
      </div>

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
