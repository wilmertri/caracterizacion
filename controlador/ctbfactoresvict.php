<?php
	include ("/modelo/mtbfactoresvict.php");
	$ins = new mtbfactoresvict();
	$codfac = isset($_POST["codfac"]) ? $_POST["codfac"]:NULL;
	$nomfactor = isset($_POST["nomfactor"]) ? $_POST["nomfactor"]:NULL;
	$desfactor = isset($_POST["desfactor"]) ? $_POST["desfactor"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$pr =  isset($_GET["pr"]) ? $_GET["pr"]:NULL;
	
	$dato1 = $ins -> selfac1($pr);
	
	// Actualizar datos
	if($codfac && $nomfactor && $desfactor && $actu) 
	{
		$ins -> updfac($codfac ,$nomfactor, $desfactor);
	}
	// Insertar datos
	if($nomfactor && $desfactor && !$actu) {
		$ins -> insfac($nomfactor, $desfactor);
	}
?>