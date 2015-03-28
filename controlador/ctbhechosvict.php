<?php
	include ("/modelo/mtbhechosvict.php");
	$ins = new mtbhechosvict();
	$codhec = isset($_POST["codhec"]) ? $_POST["codhec"]:NULL;
	$nomhec = isset($_POST["nomhec"]) ? $_POST["nomhec"]:NULL;
	$deshec = isset($_POST["deshec"]) ? $_POST["deshec"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$pr =  isset($_GET["pr"]) ? $_GET["pr"]:NULL;
	
	$dato1 = $ins -> selhec1($pr);
	
	// Actualizar datos
	if($codhec && $nomhec && $deshec && $actu) 
	{
		$ins -> updhec($codhec ,$nomhec, $deshec);
	}
	// Insertar datos
	if($nomhec && $deshec && !$actu) {
		$ins -> inshec($nomhec, $deshec);
	}
?>