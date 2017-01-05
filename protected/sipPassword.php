<?php
include_once '/home/confAMI.php';
$sip = new Confami(); 
$msm = $_GET['msm'];
?>
<html>
 <head>
        <meta charset="utf-8">
        <title>EXTENSIONES SIP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../www/html/bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../../www/html/bootstrap/font-awesome/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="../../www/html/bootstrap/css/animate.min.css" type="text/css">
 </head>
 <body>
		<ul class="list-inline">
		<li><a href="../inicio"><img src="/www/html/bootstrap/img/phonestudio.png"></a></li>
		<li><div style="background-color:a6af0a; height:1px; width:1400;"></div></li>
		</ul>


	<?php if($msm!=null){ ?>
	<div id="myMod" class="modal" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog">
                <div class="modal-content">
		<div class="modal-body">	
		<h5 class="text-center"><?php echo $msm;?></h5>
		</div></div>
	</div>
	</div><?php 
		header("refresh: 2; url=../extensiones");
	}?> 
	
	<div class="container">	
        <div class="row">
		<div class="col-xs-6 col-md-4 ">
		<h2>EXTENSIONES-SIP</h2>
		<table class="table">
		<thead>
			
		</thead>
		<tbody>
			<?php $usuarios=$sip->userSip(); ?>
			<?php for($i=0;$i<sizeof($usuarios);$i++){ ?>
			<tr>
			<td><?php echo "EXTENSION ".$usuarios[$i]; ?></td>
			<td><a data-toggle="modal" data-id="<?php echo $usuarios[$i];?>" class="open btn btn-primary" href="#confirm-change">CAMBIAR PASSWORD</a></td>
			</tr>
			<?php	} ?>
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
                    <h4 class="modal-title">CAMBIO PASSWORD DE LA EXTENSION <span id="demo"></span></h4>
                </div>
                <div class="modal-body">
                    <form id='login' action='archivo' method='post' accept-charset='UTF-8'>
			<input type="hidden" name="showId" id="showId" value=""/>
                        <label for='password' >Ingrese el nuevo Password de la extension:</label></br>
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
	//parametros para pasar informacion al modal 
	$(document).on("click", ".open", function () {
     	var userId = $(this).data('id');
   	$("#showId").val( userId );
	$("#usuario").text( userId );
 	document.getElementById("demo").innerHTML = userId;
	});

	$(document).ready(function(){
                $("#myMod").modal('show');
        });

    </script>

</html>
