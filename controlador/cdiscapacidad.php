<?php
	include ("modelo/mdiscapacidad.php");
	$ins = new mdiscapacidad();
	
	$idtipodis = isset($_POST["idtipodis"]) ? $_POST["idtipodis"]:NULL;
	$tipodis = isset($_POST["tipodis"]) ? $_POST["tipodis"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$pr =  isset($_GET["pr"]) ? $_GET["pr"]:NULL;

	
	$dato1 = $ins -> seldisper($pr);
    //$tipo = $ins->valor(12);
	//$clase = $ins->valor(13);
	
	// Actualizar datos
	if($idtipodis && $tipodis && $actu) {
		$ins -> upddisper($idtipodis ,$tipodis);
	}
	// Insertar datos
	if($tipodis && !$actu) {
		$ins -> insdisper($tipodis);
	}
?>