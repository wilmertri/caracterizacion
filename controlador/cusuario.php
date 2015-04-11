<?php

		/*  
        *   @author: Luis M Morales B
        *   @Version: V1 07/04/15
        */

	include("modelo/musuario.php");

		$ins= new mtbusuario(); 
		
		$documento 	= isset($_POST["documento"]) ? $_POST["documento"]:null; 
		$nombre		= isset($_POST["usuario"]) ? $_POST["usuario"]:null;
		$password	= isset($_POST["password"]) ? $_POST["password"]:null;
		$email		= isset($_POST["email"]) ? $_POST["email"]:null; // estase cambian nombres de doc, usua, pass y mail por los vigentes
		$actu= 	isset($_POST["actu"]) ? $_POST["actu"]:null; // esta variable es para que me llame actualizar datos si no esta me llama insertar
		$pr= isset($_GET["pr"]) ? $_GET["pr"]:null;
		
		$datousuario = $ins->selusu1($pr);

		if($documento && $nombre && $password && $email && $actu) // && es un Y  
		{
			$ins->updusu($documento,$nombre,$password,$email);  // actualizar datos
		}	
		if($documento && $nombre && $password && $email && !$actu) // insertar datos // cuando es ! es para negar  
		{
			$ins->insusu($documento, $nombre,sha1($password),$email); 
		}
?>			