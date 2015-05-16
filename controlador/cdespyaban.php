<?php
	include ("modelo/mdespyaban.php");
	$ins = new Mdespyaban();
	
	$lugexpul 		= isset($_POST["depto"]) ? $_POST["depto"]:NULL;
	$munucipio 		= isset($_POST["codubi"]) ? $_POST["codubi"]:NULL;
	$fechexpul 		= isset($_POST["fechadeexpulsion"]) ? $_POST["fechadeexpulsion"]:NULL;
	$actorarmado 	= isset($_POST["actorarmado"]) ? $_POST["actorarmado"]:NULL;
	$ingaliment 	= isset($_POST["ingresoalimentos"]) ? $_POST["ingresoalimentos"]:NULL;
	$tpermanencia 	= isset($_POST["tieper"]) ? $_POST["tieper"]:NULL;
	$fpermanencia 	= isset($_POST["factpermanencia"]) ? $_POST["factpermanencia"]:NULL;
	$solicitud 		= isset($_POST["solicitud"]) ? $_POST["solicitud"]:NULL;
	$rinclusion 	= isset($_POST["razoninclusion"]) ? $_POST["razoninclusion"]:NULL;
	$usopredio 		= isset($_POST["usoprediodespues"]) ? $_POST["usoprediodespues"]:NULL;
	$perbienes 		= isset($_POST["perdidadebienes"]) ? $_POST["perdidadebienes"]:NULL;
	$tipobi 		= isset($_POST["tipodebien"]) ? $_POST["tipodebien"]:NULL;
	$relabien	 	= isset($_POST["relacionconelbien"]) ? $_POST["relacionconelbien"]:NULL;
	$tipofam 		= isset($_POST["tipodefamilia"]) ? $_POST["tipodefamilia"]:NULL;
	$ideal 			= isset($_POST["ideal"]) ? $_POST["ideal"]:NULL;
	$ubicacion	 	= isset($_POST["ubicacionreubicacion"]) ? $_POST["ubicacionreubicacion"]:NULL;
	$retorno 		= isset($_POST["razonderetorno"]) ? $_POST["razonderetorno"]:NULL;
	$medproteccion 	= isset($_POST["medidasdeproteccion"]) ? $_POST["medidasdeproteccion"]:NULL;
	$reciproteccion	= isset($_POST["recibiomedidasdeproteccion"]) ? $_POST["recibiomedidasdeproteccion"]:NULL;
	$indemnizacion 	= isset($_POST["harecibidoindemnizacion"]) ? $_POST["harecibidoindemnizacion"]:NULL;
	$observacion 	= isset($_POST["observaciones"]) ? $_POST["observaciones"]:NULL;
	$actu 			= isset($_POST["actu"]) ? $_POST["actu"]:NULL;
	$pr 			= isset($_GET["pr"]) ? $_GET["pr"]:NULL;

	
	$factores_permanencia = $ins -> get_factores_permanencia();
	
	$respuesta_cerrada		= $ins -> get_respuesta_cerrada();
	$respuesta_cerrada_dos	= $ins -> get_respuesta_cerrada_dos();
	$solicitud_ 			= $ins -> get_solicitud();
	$razon_inclusion		= $ins -> get_razon_inclusion();
	$predio_perdido_por     = $ins -> get_predio_perdido_por();
	$tipo_inmueble			= $ins -> get_tipo_inmueble();
	$relacion_con_el_bien	= $ins -> get_relacion_con_el_bien(); 
	$tipo_de_familia		= $ins -> get_tipo_de_familia();
	$ideal_rupd				= $ins -> get_ideal_rupd();
	$razon_retorno			= $ins -> get_razon_retorno();

	
	
	if ($actu) {
		if ($actorarmado ==0) {
			$actorarmado = $dato1[0][''];
		}
		if ($ingaliment ==0) {
			$ingaliment  = $dato1[0][''];
		}
		if ($fpermanencia ==0) {
			$fpermanencia = $dato1[0][''];
		}
		if ($solicitud ==0) {
			$solicitud  = $dato1[0][''];
		}
		if ($rinclusion ==0) {
			$rinclusion  = $dato1[0][''];
		}
		if ($usopredio ==0) {
			$usopredio = $dato1[0][''];
		}
		if ($tipobi ==0) {
			$tipobi = $dato1[0][''];
		}
		if ($relabien ==0) {
			$relabien = $dato1[0][''];
		}
		if ($tipofam ==0) {
			$tipofam = $dato1[0][''];
		}
		if ($ideal ==0) {
			$ideal = $dato1[0][''];
		}
		if ($ubicacion ==0) {
			$ubicacion = $dato1[0][''];
		}
		if ($retorno ==0) {
			$retorno = $dato1[0][''];
		}
		if ($medproteccion ==0) {
			$medproteccion = $dato1[0][''];
		}
		if ($reciproteccion ==0) {
			$reciproteccion = $dato1[0][''];
		}
		if ($indemnizacion=0) {
			$indemnizacion = $dato1[0][''];
		}
	}
	
	// Actualizar datos
	if($lugexpul && $munucipio && $fechexpul && $actorarmado && $ingaliment && $tpermanencia && $fpermanencia  && $solicitud && $rinclusion  && $usopredio && $perbienes && $tipobi && $relabien && $tipofam && $ideal && $ubicacion && $retorno && $medproteccion && $reciproteccion && $indemnizacion && $observacion &&  $actu) {
		$ins -> updper($lugexpul , $munucipio , $fechexpul , $actorarmado , $ingaliment , $tpermanencia , $fpermanencia , $solicitud , $rinclusion , $usopredio , $perbienes , $tipobi , $relabien , $tipofam , $ideal , $ubicacion , $retorno , $medproteccion , $reciproteccion , $indemnizacion , $observacion);
	}
	// Insertar datos
	if($lugexpul && $munucipio && $fechexpul && $actorarmado && $ingaliment && $tpermanencia && $fpermanencia  && $solicitud && $rinclusion  && $usopredio && $perbienes && $tipobi && $relabien && $tipofam && $ideal && $ubicacion && $retorno && $medproteccion && $reciproteccion && $indemnizacion && $observacion && $pr && !$actu)
	{ 
		$ins-> insper($lugexpul , $munucipio , $fechexpul , $actorarmado , $ingaliment , $tpermanencia , $fpermanencia , $solicitud , $rinclusion , $usopredio , $perbienes , $tipobi , $relabien , $tipofam , $ideal , $ubicacion , $retorno , $medproteccion , $reciproteccion , $indemnizacion , $observacion , $pr);
	}
?>
