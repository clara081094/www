<?php 
$mensaje=$_GET['msm'];
?>

<html>
    <head>
	<meta charset="utf-8">
	<title>SEGURIDAD</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../www/html/bootstrap/css/bootstrap.min.css" type="text/css">
    	<link rel="stylesheet" href="../www/html/bootstrap/font-awesome/css/font-awesome.min.css" type="text/css">
    	<link rel="stylesheet" href="../www/html/bootstrap/css/animate.min.css" type="text/css"

    </head>
    <body>

	<div id="myModal" class="modal fade" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
		<?php if ($mensaje){ ?>

		<div class="modal-body">
                    <?php echo $mensaje; ?>
                </div>

		<?php 
		header("refresh: 3; url=../seguridad");
	   	}else{ 
		header("refresh: 5; url=../reinicio"); ?>
		<div class="modal-header">
                    <h4 class="modal-title">CAMBIO PASSWORD</h4>
                </div>
                <div class="modal-body">
                    <form id='login' action='opciones' method='post' accept-charset='UTF-8'>

			<label for='passope' >Ingrese el nuevo password del usuario operador:</label></br>
			<input type='password' name="passw_ope" id='passope' maxlength="20" />
                        <button type="submit" class="btn btn-default" name="btnope">CAMBIAR</button></br></br>

			<label for='passgra' >Ingrese el nuevo password del usuario grabador:</label></br>
                        <input type='password' name="passw_gra" id='passgra' maxlength="20" />
			<button type="submit" class="btn btn-default" name="btngra">CAMBIAR</button></br></br>

			<label for='admin' >Ingrese el nuevo password del administrador:</label></br>
                        <input type='password' name="passw_adm" id='admin' maxlength="20" />
                        <button type="submit" class="btn btn-default" name="btnadm">CAMBIAR</button></br></br>
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
