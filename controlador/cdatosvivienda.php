<?php
	include("modelo/mdatosvivienda.php");
	$ins = new Mdatosvivienda();
	

	$tipovivienda 	= isset($_POST['tipviv']) ? $_POST['tipviv']:NULL;
	$matpar 		= isset($_POST['matpar']) ? $_POST['matpar']:NULL;
	$matpis 		= isset($_POST['matpis']) ? $_POST['matpis']:NULL;
	$mattec 		= isset($_POST['mattec']) ? $_POST['mattec']:NULL;  
	$zonrie			= isset($_POST['zonrie']) ? $_POST['zonrie']:NULL;
	$relviv			= isset($_POST['relviv']) ? $_POST['relviv']:NULL;
	$id				= isset($_GET['id']) ? $_GET['id']:NULL;


	$tipovivienda1 	= $ins->get_tipo_vivienda();
	$tipopisos		= $ins->get_tipo_pisos();
	$tipoparedes	= $ins->get_tipo_paredes();
	$tipotechos 	= $ins->get_tipo_techos();
	$tiporiesgos	= $ins->get_tipo_riesgos();
	$tiporelacion	= $ins->get_tipo_relacion_viv();

	$datosvivienda 	= $ins->ver_datos_vivienda($id);
	$verTipoVivienda    = $ins->get_valor($datosvivienda[0]['tipvivper']);
	$verTipoPisos		= $ins->get_valor($datosvivienda[0]['tippisviv']);
	$verTipoParedes		= $ins->get_valor($datosvivienda[0]['tipparviv']);
	$verTipoTechos		= $ins->get_valor($datosvivienda[0]['tiptecviv']);
	
	if ($tipovivienda) 
	{
		$ins->actu_datos_vivienda($tipovivienda,$matpar,$matpis,$mattec,$zonrie, $relviv,$id);
	}

 ?>