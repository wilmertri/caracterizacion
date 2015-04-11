<?php
		/*  
        *   @author: Luis M Morales B
        *   @Version: V1 10/04/15
        check: 30, 33
        */

	include("modelo/mdatosusuario.php");
	$ins = new Mdatosusuario();
	

	$docusu		 	= isset($_POST['docusu']) ? $_POST['docusu']:NULL;
	$usuusu 		= isset($_POST['usuusu']) ? $_POST['usuusu']:NULL;
	$emausu 		= isset($_POST['emausu']) ? $_POST['emausu']:NULL;
	$pasusu 		= isset($_POST['pasusu']) ? $_POST['pasusu']:NULL;
	$id				= isset($_GET['id']) ? $_GET['id']:NULL;


	$documento	 	= $ins->get_usuario();
	$usuario		= $ins->get_usuario();
	$email			= $ins->get_email();
	$password		= $ins->get_password();

$datosusuario 	= $ins->ver_datos_usuario($id);
	
	$verdocumento	    = $ins->get_valor($datosusuario[0]['docusu']);
	$verusuario			= $ins->get_valor($datosusuario[0]['usuusu']);
	$veremail			= $ins->get_valor($datosusuario[0]['emausu']);
	$verpassword		= $ins->get_valor($datosusuario[0]['pasusu']);
	
	if ($verdocumento) 
	{
		$ins->actu_datos_usuario ($docusu,$usuusu,$emausu,$pasusu,$id);
	}

 ?>