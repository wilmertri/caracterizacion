<?php
	include ("modelo/mtbnegocio.php");
	$ins = new mtbnegocio();
	$codnegper = isset($_POST["codnegper"]) ? $_POST["codnegper"]:NULL;
	$labneg = isset($_POST["labneg"]) ? $_POST["labneg"]:NULL;
	$tipneg = isset($_POST["tipneg"]) ? $_POST["tipneg"]:NULL;
	$durneg = isset($_POST["durneg"]) ? $_POST["durneg"]:NULL;
	$dirneg = isset($_POST["dirneg"]) ? $_POST["dirneg"]:NULL;
	$numdoc	= isset($_POST["numdoc"]) ? $_POST["numdoc"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$cod = isset($_GET["cod"]) ? $_GET["cod"]:NULL;
	$pr = isset($_GET["pr"]) ? $_GET["pr"]:NULL;
	$dato1 = $ins -> selneg1($pr);
	$dato2 = $ins -> selneg2($cod);
	
	// Actualizar datos
	if($codnegper && $labneg && $tipneg && $durneg && $dirneg && $actu) 
	{
		$ins -> updneg($codnegper ,$labneg, $tipneg, $durneg, $dirneg);
	}
	// Insertar datos
	if($labneg && $tipneg && $durneg && $dirneg && $pr && !$actu) {
		$ins -> insneg($labneg, $tipneg, $durneg, $dirneg, $pr);
	}
?>