<?php
	include("modelo/musuario.php");

		$ins= new mtbusuario(); 
		
		$documento 	= isset($_POST["Numero de documento"]) ? $_POST["Numero de documento"]:null; 
		$nombre		= isset($_POST["Nombre del usuario"]) ? $_POST["Nombre del usuario"]:null;
		$password	= isset($_POST["Contraseña"]) ? $_POST["Contraseña"]:null;
		$email		= isset($_POST["Correo electronico"]) ? $_POST["Correo electronico"]:null;

// estase cambian nombres de doc, usua, pass y mail por los vigentes
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