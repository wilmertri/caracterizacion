<?php
	include("modelo/mdatosvivienda.php");
	$ins = new Mdatosvivienda();
	

	$tipovivienda 	= isset($_POST['tipviv']) ? $_POST['tipviv']:NULL;
	$matpar 		= isset($_POST['matpar']) ? $_POST['matpar']:NULL;
	$matpis 		= isset($_POST['matpis']) ? $_POST['matpis']:NULL;
	$mattec 		= isset($_POST['mattec']) ? $_POST['mattec']:NULL;  
	$zonrie			= isset($_POST['zonrie']) ? $_POST['zonrie']:NULL;
	$id				= isset($_GET['id']) ? $_GET['id']:NULL;

	$tipovivienda1 	= $ins->get_tipo_vivienda();
	$tipopisos		= $ins->get_tipo_pisos();

	if ($tipovivienda) 
	{
		$ins->actu_datos_vivienda($tipovivienda,$matpar,$matpis,$mattec,$zonrie,$id);
	}

 ?>