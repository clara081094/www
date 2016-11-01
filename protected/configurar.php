<?php 
$mensaje=$_GET['msm'];
//echo $mensaje;
?>

<html>
    <head>
	<meta charset="utf-8">
	<title>Configuracion</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../www/html/bootstrap/css/bootstrap.min.css" type="text/css">
    	<link rel="stylesheet" href="../www/html/bootstrap/font-awesome/css/font-awesome.min.css" type="text/css">
    	<link rel="stylesheet" href="../www/html/bootstrap/css/animate.min.css" type="text/css"
	<link rel="stylesheet" href="../www/html/bootstrap/css/creative.css" type="text/css">

    </head>
    <body>


	<div id="myModal" class="modal fade" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
		<?php if ($mensaje){ ?>

		<div class="modal-body">
                    <?php echo $mensaje; ?>
                </div>

	   	<?php }else{ ?>
		
		<div class="modal-header">
                    <h4 class="modal-title">CAMBIO PASSWORD</h4>
                </div>
                <div class="modal-body">
                    <form id='login' action='opciones' method='post' accept-charset='UTF-8'>
                        <input type='hidden' name='tipo' value='1'>

                        <label for='password' >Ingrese el nuevo Password de user:</label></br>
                        <input type='password' name='new_password' id='password' maxlength="50" /></br></br>

                        <button type="submit" class="btn btn-default" name="paraCliente">CAMBIAR</button></br>
                    </form>
                </div>

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

	<script type="text/javascript">
        $(document).ready(function(){
                $("#myModal").modal('show');
        });

	</script>

</html>
<?php ?>
