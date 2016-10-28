<?php
include_once '/home/confAMI.php';
$sip = new Confami(); 
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
		<div class="col-sm-4">
		<h1>USUARIOS-SIP</h1>
		<table class="table">
		<thead>
			
		</thead>
		<tbody>
			<?php $usuarios=$sip->userSip(); ?>
			<?php for($i=0;$i<sizeof($usuarios);$i++){ ?>
			<tr>
			<td><?php echo "USER: ".$usuarios[$i]; ?></td>
			<td><a data-toggle="modal" data-id="<?php echo $usuarios[$i];?>" class="open btn btn-danger" href="#confirm-change">CAMBIAR PASSWORD</a></td>
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
                    <h4 class="modal-title">CAMBIO PASSWORD</h4>
                </div>
                <div class="modal-body">
                    <form id='login' action='archivo' method='post' accept-charset='UTF-8'>
			<input type="hidden" name="showId" id="showId" value=""/>
                        <label for='password' >Ingrese el nuevo Password de user:</label></br>
                        <input type='password' name='new_password' id='password' maxlength="20" /></br></br>

                        <button type="submit" class="btn btn-default" name="paraCliente">CAMBIAR</button></br>
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

    <script type="text/javascript">
	$(document).on("click", ".open", function () {
     	var userId = $(this).data('id');
   	$("#showId").val( userId );
     });

    </script>
</html>
