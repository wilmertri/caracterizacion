<?php
	/*
		@author: Andrea liliana Socha 
		@version: V1
	*/
	include ("controlador/conexion.php");
	include ("functions.php");
	class Mdespyaban extends Funciones_generales {
		
		
		function Mdespyaban()
		{

		}
		
		
		function get_valor($codval)
		{
			return $this->mostrar_nombre_valores($codval);
		}
		
		function get_respuesta_cerrada()
		{
			return $this->seleccionar_valores_de_parametro(24);
		}
		
		function get_respuesta_cerrada_dos()
		{
			return $this->seleccionar_valores_de_parametro(25);
		}
		
		function get_factores_permanencia()
		{
			$sql = "SELECT * FROM tbfactvive;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$datos = $conexionBD->ejeCon($sql,0);
			return $datos;
		}
		
		function get_solicitud()
		{
			return $this->seleccionar_valores_de_parametro(22);
		}
		
		function get_razon_inclusion()
		{
			return $this->seleccionar_valores_de_parametro(22);
		}
		
		
	}