<?php

        /*  
        *   @author: Luis M Morales B
        *   @Version: V2 16/05/15
        */

	include("controlador/conexion.php");
	include("functions.php");
	class mtbusuario extends Funciones_generales
		{
	 	function mtbusuario(){} // CRUD - ESTO ES LA C= CREAR

		function insusu($documento,$usuario,$dependencia,$cargo,$password,$telefono) // Datos de cada campo
		{			//insper insertar persona y el orden si afecta
			$sql =  "INSERT INTO tbusuario (documento,usuario,dependencia,cargo,password,telefono) values ('".$documento."' , '".$usuario."','".$dependencia."' , '".$cargo."' , '".$password."' , '".$telefono."');"; 
			$this -> cons($sql);
		}
			
		function updusu ($documento,$usuario,$dependencia,$cargo,$password,$telefono) // CRUD - ESTO ES LA U= actualizar
		{
			$sql= "UPDATE tbusuario SET documento='".$documento."' , usuario='".$usuario."', dependencia='".$dependencia."', cargo='".$cargo."', telefono='".$telefono."' where documento='".$documento."' ;";	
			$this-> cons($sql); // aca es importante que este ordenado, para que se guarde en el mismo orden y con el this es la funcion con la que le ordeno que haga o cite lo que nobre antes
		}
		
		function selusu() 
		{
			$sql= "SELECT * FROM tbusuario;"; // para seleccionar todos los datos de la consulta sql se utiliza * , si quiero algo especifico llamo solo los datos ej: nombre etc
			return $this -> SeleccionDatos($sql);
				
		}
		function selusu1($documento) 
		{
			$sql= "SELECT * FROM tbusuario WHERE documento='".$documento."' ;"; 
			return $this -> SeleccionDatos($sql);
		}				
	}		
?>				
			
			