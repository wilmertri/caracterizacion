<?php
	include ("modelo/mingresoext.php");
	$ins = new mingresoext();
	$codingext = isset($_POST["codingext"]) ? $_POST["codingext"]:NULL;
	$tipingext = isset($_POST["tipodeingreso"]) ? $_POST["tipodeingreso"]:NULL;
	$ingext = isset($_POST["ingresoendinero"]) ? $_POST["ingresoendinero"]:NULL;
	$desingext = isset($_POST["descdeldinero"]) ? $_POST["descdeldinero"]:NULL;
	$numdoc	= isset($_POST["numdoc"]) ? $_POST["numdoc"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
    $pr = isset($_GET["pr"]) ? $_GET["pr"]:NULL;
	$cod = isset($_GET["cod"]) ? $_GET["cod"]:NULL;
	//$dato = $ins->selingext();
	$dato1 = $ins->selingext2($pr);
	$dato2 = $ins->selingext1($cod);
	$tipoingreso = $ins->seltip();
	
	// Actualizar datos
	if($codingext && $ingext && $desingext && $actu) {
		$ins -> updingext($codingext,$ingext,$desingext);
	}
	// Insertar datos
	if($tipingext && $ingext && $desingext && $pr && !$actu) {
		$ins -> insingext($tipingext, $ingext, $desingext, $pr);
	}
?>
