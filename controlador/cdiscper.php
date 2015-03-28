<?php
	include ("modelo/mdiscper.php");
	$ins = new mdiscper();
	
	$iddisc 	= isset($_POST["iddisc"]) ? $_POST["iddisc"]:NULL;
	$disc	 	= isset($_POST["clasdis"]) ? $_POST["clasdis"]:NULL;
	$numdoc		= isset($_POST["numdoc"]) ? $_POST["numdoc"]:NULL;
	$desc		= isset($_POST["desc"]) ? $_POST["desc"]:NULL;
	$actu 		= isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$pr 		= isset($_GET["pr"]) ? $_GET["pr"]:NULL;
	$datfam		= isset($_GET["famper"]) ? $_GET["famper"]:NULL;

	//$dato = $ins->selcladis();
	//$dato1 = $ins->selcladis1($pr);
	$dato1 = $ins->seldisper2($pr);
	$tipodis = $ins->seltipdis();

	//$tipo = $ins->valor(12);
	//$clase = $ins->valor(13);
	
	// Actualizar datos
	if($iddisc && $disc && $numdoc && $desc && $actu) {
		$ins -> upddisper($iddisc,$disc,$numdoc,$desc);
	}
	// Insertar datos discapacidad persona
	if($disc && $pr && $desc && !$actu && !$datfam) {
		$ins -> insdiscper($disc,$pr,$desc);
	}

	// Insertar datos discapacidad familiar de persona
	if($disc && $pr && $desc && $datfam && !$actu) {
		$ins -> insdiscper2($disc,$pr,$desc);
	}
?>