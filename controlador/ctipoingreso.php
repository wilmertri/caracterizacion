<?php
	include ("modelo/mtipoingreso.php"); 
	$ins = new mtipoingreso();
	
	$pr 		= isset($_GET["pr"]) ? $_GET["pr"]:NULL;
	$del 		= isset($_GET["del"]) ? $_GET["del"]:NULL;
	$idtip 		= isset($_POST["idtip"]) ? $_POST["idtip"]:NULL;
	$tipoing 	= isset($_POST["tipoing"]) ? $_POST["tipoing"]:NULL;
	$actu 		= isset($_POST["actu"]) ? $_POST["actu"]:NULL;

	$datotiping 	= $ins->seltip1($pr);
	$datostiping2 	= $ins->seltip();

	if ($del)
	{
		$ins->deltip($del);
	}
	
	//Actualizar
	if ($idtip && $tipoing && $actu){
		$ins->updtip($idtip,$tipoing);
	}
	
	//Insertar
	if ($tipoing  && !$actu){
		$ins->instip($tipoing);
	}
	
	
?>