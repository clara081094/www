<?php 
$msm = $_GET['msm'];
?>
<html>
 <head>
 	<meta charset="utf-8">
        <title>CONFIGURACION IP</title>
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
		header("refresh: 6, url=../inicio"); 
        }?>

	<div class="container"> 
        <div class="row">
	   <div class="col-xs-6 col-md-4 ">
		<br><h3>CONFIGURACION IP</h3><br>
		<table class="table"><form id='cip' action='paraip' method='post'>
		 <tr>
			<th>Ingrese Direccion IP:</th>
			<th><input type='form-control' name='ip' id='ip' maxlength="15" size="15"/></th>
		 <tr>
		 <tr>
                        <th>Ingrese Mascara:</th>
                        <th><input type='form-control' name='mascara' id='mascara' maxlength="2" size="2"/></th>
                 <tr>
		 <tr>
                        <th>Ingrese Gateway:</th>
                        <th><input type='form-control' name='gateway' id='gateway' maxlength="15" size="15"/></th>
                 <tr>
		 <tr>
                        <th><button type="submit" class="btn btn-default" onclick="return confirm('Desea cambiar los datos de red?');return false;" name="paraIP">CAMBIAR</button></th>
			<th></th>
                 <tr>
		</form></table>

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
                $("#myMod").modal('show');
        });

    </script>


</html>

<?php ?>
