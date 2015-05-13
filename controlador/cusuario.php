<?php

		/*  
        *   @author: Luis M Morales B
        *   @Version: V2 12/05/15
        pte de pruebas
        */

	include("modelo/musuario.php");

		$ins= new mtbusuario(); 
		
		$documento 	= isset($_POST["Documento"]) ? $_POST["Documento"]:null; 
		$Usuario		= isset($_POST["Usuario"]) ? $_POST["Usuario"]:null;
		$password	= isset($_POST["Clave"]) ? $_POST["Clave"]:null;
		$email		= isset($_POST["Email"]) ? $_POST["Email"]:null; // estase cambian nombres de doc, usua, pass y mail por los vigentes
		$actu= 	isset($_POST["actu"]) ? $_POST["actu"]:null; // esta variable es para que me llame actualizar datos si no esta me llama insertar
		$pr= isset($_GET["pr"]) ? $_GET["pr"]:null;
		
		$datousuario = $ins->selusu1($pr);

		if($documento && $Usuario && $password && $email && $actu) // && es un Y  
		{
			$ins->updusu($documento,$Usuario,$password,$email);  // actualizar datos
		}	
		if($documento && $Usuario && $password && $email && !$actu) // insertar datos // cuando es ! es para negar  
		{
			$ins->insusu($documento, $Usuario,sha1($password),$email); 
		}
?>			