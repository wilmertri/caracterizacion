<?php
	include("modelo/mdatosvivienda.php");
	include("modelo/functions.php");
	$ins = new Mdatosvivienda();
	$functions = new Functions();

	$tipovivienda 	= isset($_POST['tipviv']) ? $_POST['tipviv']:NULL;
	$matpar 		= isset($_POST['matpar']) ? $_POST['matpar']:NULL;
	$matpis 		= isset($_POST['matpis']) ? $_POST['matpis']:NULL;
	$mattec 		= isset($_POST['mattec']) ? $_POST['mattec']:NULL;  
	$zonrie			= isset($_POST['zonrie']) ? $_POST['zonrie']:NULL;
	$id				= isset($_GET['id']) ? $_GET['id']:NULL;

	$tipovivienda1 = $functions->seleccionar_valores_de_parametro(5);

	if ($tipovivienda) 
	{
		$ins->actu_datos_vivienda($tipovivienda,$matpar,$matpis,$mattec,$zonrie,$id);
	}

 ?>