<?php 	
  $prefeitura = $_POST["prefeitura"];
  $ano = $_POST["ano"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ares Controle</title>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.js" type="text/javascript"></script>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="shortcut icon" href="img/logo_jr.png" type="image/x-icon">
	<style type="text/css">
		

		body{
	    	background-image: url(img/k.png);
	    	background-size: 100%;
	    	background-attachment: fixed; 
	    }

		.option{
			border: 1px solid black;
			height: 200px; 
			margin-top: 90px;
			background: #fff;
			padding: 0px;
			border-radius: 10px;
		}

		.h{
			padding: 0px;
			color: #000;
			margin-top: 0px; 
		}

		.title{
			color: #000;
			font-family: "Roboto" !important;
			font-size: 20pt;
			margin: 12px;
		}
	</style>
</head>
<body>
	<?php
	echo "
	<div class='container-fluid container col-md-12' style='padding: 0px;'>
		<div class='col-md-12' style='background: silver; height: 50px;'>
			<h1 align='center' class='title'>Prefeitura Municipal de $prefeitura - $ano</h1>
		</div>
	</div>"
	?>
	<div class="container-fluid container col-md-8 col-md-offset-2">
		<a href="elemento_despesa.php">
			<div class="option col-md-4">
				<div style="background: silver; width: 100%; height: 30px; border-radius: 10px 10px 0px 0px;">
					<h3 align="center" class="h">Compras</h3>
					<p align="center"><img src="img/car.png" width="100px" style="margin-top: 25px; "></p>
				</div>
			</div>
		</a>
		<a href="login_secretaria.php">
			<div class="option col-md-4 col-md-offset-4">
				<div style="background: silver; width: 100%; height: 30px; border-radius: 10px 10px 0px 0px;">
					<h3 align="center" class="h">Secretaria</h3>
					<p align="center"><img src="img/sec.png" width="100px" style="margin-top: 25px; "></p>
				</div>
			</div>
		</a>
	</div>
 	<div class="container-fluid container col-md-8 col-md-offset-2">
		<a href="login_controladoria.php">
			<div class="option col-md-4 col-md-offset-4">
				<div style="background: silver; width: 100%; height: 30px; border-radius: 10px 10px 0px 0px;">
					<h3 align="center" class="h">Controladoria</h3>
					<p align="center"><img src="img/controladoria.png" width="100px" style="margin-top: 25px; "></p>
				</div>
			</div>
		</a>
	</div> 
</body>
</html>