<?php
	include ("modelo/mdatospersona.php");
	$ins = new mdatospersona();
	
	$idpersona = isset($_POST["idpersona"]) ? $_POST["idpersona"]:NULL;
	$numficha = isset($_POST["numficha"]) ? $_POST["numficha"]:NULL;
	$docper = isset($_POST["docper"]) ? $_POST["docper"]:NULL;
	$tipdoc1 = isset($_POST["tipdoc"]) ? $_POST["tipdoc"]:NULL;
	$lugexpdoc = isset($_POST["depto"]) ? $_POST["depto"]:NULL;
	$lugexpdoc1 = isset($_POST["codubi"]) ? $_POST["codubi"]:NULL;
	$pnom = isset($_POST["pnom"]) ? $_POST["pnom"]:NULL;
	$snom = isset($_POST["snom"]) ? $_POST["snom"]:NULL;
	$pape = isset($_POST["pape"]) ? $_POST["pape"]:NULL;
	$sape = isset($_POST["sape"]) ? $_POST["sape"]:NULL;
	$gen = isset($_POST["gen"]) ? $_POST["gen"]:NULL;
	$dir = isset($_POST["dir"]) ? $_POST["dir"]:NULL;
	$zon = isset($_POST["zon"]) ? $_POST["zon"]:NULL;
	$ver = isset($_POST["ver"]) ? $_POST["ver"]:NULL;
	$sec = isset($_POST["sec"]) ? $_POST["sec"]:NULL;
	$barfin = isset($_POST["barfin"]) ? $_POST["barfin"]:NULL;
	$tel = isset($_POST["tel"]) ? $_POST["tel"]:NULL;
	$telseg = isset($_POST["telseg"]) ? $_POST["telseg"]:NULL;
	$lugnac = isset($_POST["deptonac"]) ? $_POST["deptonac"]:NULL;
	$lugnac1 = isset($_POST["codubinac"]) ? $_POST["codubinac"]:NULL;
	$fecnac = isset($_POST["fecnac"]) ? $_POST["fecnac"]:NULL;
	$estciv = isset($_POST["estciv"]) ? $_POST["estciv"]:NULL;
	$etnia1 = isset($_POST["etnia"]) ? $_POST["etnia"]:NULL;
	$ges = isset($_POST["ges"]) ? $_POST["ges"]:NULL;
	$hijosacargo = isset($_POST["hijosacargo"]) ? $_POST["hijosacargo"]:NULL;
	$relsexper = isset($_POST["relsexper"]) ? $_POST["relsexper"]:NULL;
	$actu = isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$pr = isset($_GET["pr"]) ? $_GET["pr"]:NULL;
	
	$dato = $ins->selper();
	$dato1 = $ins->selper1($pr);
	
	$ver1 = $ins->selver();
	$zona = $ins->selzona();
	$tipdoc 	= $ins->get_documento();
	//$tipdoc = $ins->valor(1);
	$genper = $ins->valor(2);
	$estcivper = $ins->valor(3);
	$etnia = $ins->valor(10);
	$gestlact = $ins->valor(11);
	$hijosacargo1 = $ins->valor(17);
	$relsexper1 = $ins->valor(18);
	
	/*echo $docper." ".$tipdoc1." ".$lugexpdoc." ".$lugexpdoc1." ".$pnom." ".$snom." ".$pape." ".$sape." ".$gen." ".$dir." ".$zon;
	echo " ";
	echo $ver." ".$sec." ".$barfin." ".$tel." ".$telseg." ".$lugnac." ".$lugnac1." ".$fecnac." ";
	echo " ";
	echo $estciv;
	echo " ";
	echo $etnia1." ".$ges;
	echo " ";
	*/

	//$tipdocinfo = $ins -> seldoc();
	
	// Actualizar datos
	
	if($docper && $tipdoc1 && $lugexpdoc1 && $pnom && $pape && $gen && $dir && $zon && $barfin && $ver && $sec  && $tel && $lugnac1 && $fecnac && $estciv && $etnia1 &&$hijosacargo && $relsexper && $actu) 
	{
		$ins -> updper($docper, $tipdoc1, $lugexpdoc1, $pnom, $snom, $pape, $sape, $gen, $dir, $zon, $ver, $sec, $barfin, $tel, $telseg, $lugnac1, $fecnac, $estciv, $etnia1, $ges, $hijosacargo, $relsexper);
	}
	
	// Insertar datos
	if($numficha &&$docper  && $tipdoc1 && $lugexpdoc1 && $pnom && $pape && $gen && $dir && $zon && $barfin || $ver || $sec &&  $tel && $lugnac1 && $fecnac && $estciv && $etnia1 && $hijosacargo && $relsexper && !$actu) 
	{
		$idpersona = $idpersona;
		$ins -> insper($numficha, $docper, $tipdoc1, $lugexpdoc1, $pnom, $snom, $pape, $sape, $gen, $dir, $zon, $ver, $sec, $barfin, $tel, $telseg, $lugnac1, $fecnac, $estciv, $etnia1, $ges, $hijosacargo, $relsexper);
	}
?>
