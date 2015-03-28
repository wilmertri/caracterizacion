<?php
	include("controlador/conexion.php");
	class mtbusuario
	{
	 	function mtbusuario(){} // CRUD - ESTO ES LA C= CREAR

		function insusu($documento,$nombre,$password,$email) // Datos de cada campo
		{			//insper insertar persona
			$sql =  "INSERT INTO tbusuario (documento,nombre,password,email) values ('".$documento."' , '".$nombre."','".$password."' , '".$email."');"; // es una sola linea
			$this -> cons($sql);
		}
			
		function updusu ($documento,$nombre,$password,$email) // CRUD - ESTO ES LA U= actualizar
		{
			$sql= "UPDATE tbusuario SET nombre='".$nombre."' , password='".$password."', email='".$email."' where documento='".$documento."' ;";	
			$this-> cons($sql);
		}
		function delusu($documento) // CRUD - ESTO ES LA D= eliminar
		{
			$sql= "DELETE FROM tbusuario WHERE documento='".$documento."';";
			$this-> cons($sql);
		}	
		function cons($c)
		{
			$conexionBD= new conexion();   // llama toda la clase llamada conexion de conexion.php
			$conexionBD-> conectarBD(); // asi llame la clase debo especificar lo que deseo llamar en este caso conectarBD y ejecon
			$conexionBD-> ejecon($c,1); 
		}	
		function selusu() 
		{
			$sql= "SELECT * FROM tbusuario;"; // para seleccionar todos los datos de la consulta sql se utiliza * , si quiero algo especifico llamo solo los datos ej: nombre etc
			$conexionBD= new conexion();
			$conexionBD-> conectarBD();
			$datos=$conexionBD-> ejecon($sql,0);
			return $datos;
		}
		function selusu1($documento) 
		{
			$sql= "SELECT * FROM tbusuario WHERE documento='".$documento."' ;"; 
			$conexionBD= new conexion();
			$conexionBD-> conectarBD()	;
			$datos=$conexionBD-> ejecon($sql,0);
			return $datos;
		}				
	}		
?>				
			
			