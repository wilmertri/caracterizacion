<?php
	/*
		@author: Andrea liliana Socha 
		@version: V1
	*/
	include ("controlador/conexion.php");
	include ("functions.php");
	class Mdespyaban {
		
		
		function Mdespyaban()
		{

		}
		
		
		function get_valor($codval)
		{
			return mostrar_nombre_valores($codval);
		}
		
		function get_respuesta_cerrada()
		{
			return seleccionar_valores_de_parametro(22);
		}
		
		function get_respuesta_cerrada_dos()
		{
			return seleccionar_valores_de_parametro(23);
		}
		
		function get_factores_permanencia()
		{
			$sql = "SELECT * FROM tbfactvive;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$datos = $conexionBD->ejeCon($sql,0);
			return $datos;
		}
	}