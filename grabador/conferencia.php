<?php

if ($_GET['some_path'])
{
    $path = $_GET['some_path'];
    $pate=(string)$path;
    $pate=str_replace(" ", "\ ", $pate);
    $pate="rm -rf /var/spool/asterisk/confbridge/".$pate;
    echo $pate;
    echo shell_exec($pate);
    header('Location: '."../conferencias_telefonicas?msm="."Se elimino archivo");
}
 
header("refresh: 25; url=../conferencias_telefonicas");
$files = scandir('/var/spool/asterisk/confbridge/');
?>
<html>
    <head>
	<meta charset="utf-8">
	<title>CONFERENCIAS TELEFONICAS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../www/html/bootstrap/css/bootstrap.min.css" type="text/css">
    	<link rel="stylesheet" href="../www/html/bootstrap/font-awesome/css/font-awesome.min.css" type="text/css">
    	<link rel="stylesheet" href="../www/html/bootstrap/css/animate.min.css" type="text/css">

    </head>
    <body>
	<ul class="list-inline">
                <li><a href="../inicio"><img src="/www/html/bootstrap/img/phonestudio.png"></a></li>
                <li><div style="background-color:a6af0a; height:1px; width:1400;"></div></li>
                </ul>

	<?php echo $_GET['msm'] ?> 
	<div id="principal" class="container">
	   <div class="row">
		<div class="col-sm-4">
		 <h3>CONFERENCIAS TELEFONICAS</h3>
		 <ul class="list-group">
		 <?php foreach($files as $file){ ?>
		 <?php if(strcmp($file,".")!=0&&strcmp($file,"..")!=0){ ?>
		 <li class="list-group-item">
      <table>
	<tbody>
      <tr>
        <td><a href="../../spool/asterisk/confbridge/<?php echo $file; ?>" download><?php echo $file; ?></a></td>
	<td>&nbsp&nbsp<a href="#" data-href="../conferencias_telefonicas?some_path=<?php echo $file; ?>" type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirm-delete">DELETE</a></td>
      </tr>
       </tbody>
      </table>
		</li>
		 <?php }}?>
		 </ul>
		</div>
	</div>
	</div>

	<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Confirmar Delete</h4>
        </div>

        <div class="modal-body">
          <p>Esta seguro de eliminar el archivo?</p>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger btn-ok">Delete</a>
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

	<script>

      	$('#confirm-delete').on('show.bs.modal', function(e) {
      	$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));

      	$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
	});

	 </script>

</html>
<?php ?>

