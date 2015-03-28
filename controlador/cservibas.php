<?php
	include ("modelo/mservibas.php");
	$ins = new mservibas();
	$codserv = isset($_POST["codserv"]) ? $_POST["codserv"]:NULL;
	$nomserv = isset($_POST["nomserv"]) ? $_POST["nomserv"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
    $pr = isset($_GET["pr"]) ? $_GET["pr"]:NULL;
	
	$dato1 = $ins->selper1($pr);
	
	// Actualizar datos
	if($codserv && $nomserv && $actu) {
		$ins -> updper($codserv,$nomserv);
	}
	// Insertar datos
	if($nomserv && !$actu) {
		$ins -> insper($nomserv);
	}
?>
