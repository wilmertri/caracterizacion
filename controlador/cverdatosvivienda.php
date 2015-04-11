<?php
	include("modelo/mdatosvivienda.php");
	$ins = new Mdatosvivienda();
	
	$id				= isset($_GET['id']) ? $_GET['id']:NULL;

	$datosvivienda 	= $ins->ver_datos_vivienda($id);


	if ($datosvivienda[0]['tipvivper']) 
	{
		$verTipoVivienda    = $ins->get_valor($datosvivienda[0]['tipvivper']);
		$TipoVivienda		= $verTipoVivienda[0]['nomval'];
	}
	else
	{
		$TipoVivienda	= "Sin registro";
	}

	if ($datosvivienda[0]['tippisviv']) 
	{
		$verTipoPisos		= $ins->get_valor($datosvivienda[0]['tippisviv']);
		$TipoPisos 			= $verTipoPisos[0]['nomval'];
	}
	else
	{
		$TipoPisos	= "Sin registro";
	}

	if ($datosvivienda[0]['tipparviv']) 
	{
		$verTipoParedes		= $ins->get_valor($datosvivienda[0]['tipparviv']);
		$TipoParedes 		= $verTipoParedes[0]['nomval'];
	}
	else
	{
		$TipoParedes = "Sin registro";
	}

	if ($datosvivienda[0]['tiptecviv']) 
	{
		$verTipoTechos		= $ins->get_valor($datosvivienda[0]['tiptecviv']);
		$TipoTechos 		= $verTipoTechos[0]['nomval'];	
	}
	else
	{
		$TipoTechos = "Sin registro";
	}
	
	

 