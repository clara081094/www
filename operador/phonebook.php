<?php
    include_once '/var/www/html/funciones.php';
    include_once '/var/www/html/operador/contacto.php';
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
	<link rel="stylesheet" href="../../www/html/bootstrap/css/dataTables.bootstrap.min.css" type="text/css">

    </head>
    <body>
	<ul class="list-inline">
                <li><a href="../inicio"><img src="/www/html/bootstrap/img/phonestudio.png"></a></li>
                <li><div style="background-color:a6af0a; height:1px; width:1400;"></div></li>
                </ul>

	<div id="principal" class="container">
	   <div class="row">
		 <div class="col-sm-6">
		 <h2>PHONEBOOK</h2><br>
		 <a data-toggle="modal" href="#confirm-change" type="button" class="btn btn-primary">AGREGAR NUEVO</a>
		 <br><br>
		 <table id="mytable" class="table table-bordered table-striped sortable">
		    <thead><tr>
			 <th style="display:none;">ID</th>
			 <th>NOMBRE</th>
			 <th>TELEFONO</th>
			 <th>REFERENCIA</th>
			 <th style="display:none;"></th>
			 <th style="display:none;"></th>
		    </tr></thead>
		    <tbody>
			<?php for($i=0;$i<sizeof($contactos);$i++){ ?>
			<tr>
			 <td style="display:none;"><?php echo $contactos[$i]->getId(); ?></td>
			 <td><?php echo $contactos[$i]->getNombres();?></td>
			 <td><?php echo $contactos[$i]->getTelefono();?></td>
			 <td><?php echo $contactos[$i]->getReferencia();?></td>
			 <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">EDITAR</button></td>
			 <form action='phoneb' method='post'>
			 <input type="hidden" name="hdi" value="<?php echo $contactos[$i]->getId()?>" />
			 <td><input type="submit" onclick="return confirm('Desea eliminar al contacto?');return false;" name="btndel" class="btn btn-primary" value="ELIMINAR"/></td>
			 </form>
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
        <label for='cont' >Nombre del contacto:</label></br>
        <input name="cont" id="cont" maxlenght="30"/></br></br>
	<label for='fono' >Telefono del contacto:</label></br>
        <input name="fono" id="fono" maxlength="12" /></br></br>
	<label for='ref' >Referencia:</label></br>
	<textarea name="ref" id="ref" rows="3" cols="20"></textarea> <br><br>
        <input type="submit" name="btnadd" class="btn btn-primary" value="AGREGAR"/></br>
         </form>
      </div>

      </div>
      </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true" class="">×   </span><span class="sr-only">Close</span>
                </button>
                 <h4 class="modal-title" id="myModalLabel">Editar contacto</h4>
            </div>
            <div class="modal-body" id="bodyModal"></div>
            <div class="modal-footer">
                <input type="submit" name="btnedit" class="btn btn-primary" value="EDITAR"/>
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
    <script src="../www/html/bootstrap/js/jquery.dataTables.min.js"></script>
    <script src="../www/html/bootstrap/js/dataTables.bootstrap.min.js"></script>

    <script type="text/javascript">

    $(".btn[data-target='#myModal']").click(function() {

       var columnHeadings = $("thead th").map(function() {
                 return $(this).text();
              }).get();
       columnHeadings.pop();
       
	var columnValues = $(this).parent().siblings().map(function() {
                 return $(this).text();
       }).get();

  	var modalBody = $('<div id="modalContent"></div>');
  	var modalForm = $('<form role="form" name="modalForm" action="phoneb" method="post"></form>');
      
      $.each(columnHeadings, function(i, columnHeader) {
       if (i<4){
       var formGroup = $('<div class="form-group"></div>');
       if (i<=0){
       formGroup.append('<input type="hidden" class="form-control" name="ID" id="ID" value="'+columnValues[i]+'" />');
       }else{
       formGroup.append('<label for="'+columnHeader+'">'+columnHeader+'</label>');
       formGroup.append('<input class="form-control" name="'+columnHeader+'" id="'+columnHeader+i+'" value="'+columnValues[i]+'" />');
       }
       modalForm.append(formGroup);}
      });

      modalBody.append(modalForm);
      $('#bodyModal').html(modalBody);
      });

      $('.modal-footer .btn-primary').click(function() {
      $('form[name="modalForm"]').submit();
    });
    
    $(document).ready(function() {
    $('#mytable').DataTable();
    });
    </script>

</html>
<?php ?>
