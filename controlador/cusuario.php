<?php

		/*  
        *   @author: Luis M Morales B
        *   @Version: V1 07/04/15
        */

	include("modelo/musuario.php");

		$ins= new mtbusuario(); 
		
		$documento 	= isset($_POST["Documento"]) ? $_POST["Documento"]:null; 
		$nombre		= isset($_POST["Usuario"]) ? $_POST["Usuario"]:null;
		$password	= isset($_POST["Clave"]) ? $_POST["Clave"]:null;
		$email		= isset($_POST["Email"]) ? $_POST["Email"]:null; // estase cambian nombres de doc, usua, pass y mail por los vigentes
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