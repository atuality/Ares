<?php 
	include_once 'conexao.php';

	

    $solicitacao = 33; 

	$data = $_POST['data'];
	$registro = $_POST['registro'];
	$dotacao = $_POST['dotacao'];
	$elemento_despesa = $_POST['elemento_despesa'];
	$subelemento = $_POST['subelemento'];
	$tipo = $_POST['tipo'];
	$objeto = $_POST['objeto'];

	$inserir = mysqli_query ("INSERT INTO solicitacao_despesa(solicitacao, data, registro, dotacao, elemento_despesa, subelemento, tipo, objeto) values ('$solicitacao', '$data', '$registro', '$dotacao', '$elemento_despesa', '$subelemento', '$tipo', '$objeto')");
?>