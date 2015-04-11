<?php
	/*
		@author: Luis M Morales B
		@Version: V2 10/04/15
		check los (#) son para?, 56
	*/
	include ("controlador/conexion.php");
	include ("functions.php");
	class Mdatosusuario {
		
		function Mdatosusuario()
		{

		}
  
		function get_valor($codval)
		{
			return mostrar_nombre_valores($codval);
		}
		
		function get_tipo_vivienda()
		{
			return seleccionar_valores_de_parametro(5);
		}
		
		function get_tipo_pisos()
		{
			return seleccionar_valores_de_parametro(17);
		}

		function get_tipo_paredes()
		{
			return seleccionar_valores_de_parametro(18);
		}

		function get_tipo_riesgos()
		{
			return seleccionar_valores_de_parametro(19);
		}

		function get_tipo_techos()
		{
			return seleccionar_valores_de_parametro(20);
		}

		function get_tipo_relacion_viv()
		{
			return seleccionar_valores_de_parametro(21);
		}

		/*
			Función para la actualización de los datos de la vivienda de la persona
		*/
		function actu_datos_usuario($docusu, $usuusu, $emausu, $pasusu)
		{
			$sql = "UPDATE tbdatosusuario SET docusu='$documento', usuusu='$usuario', emausu='$email', pasusu='$password' WHERE idusurio = '$documento'";
			$this->cons($sql);
		}

		function ver_datos_usuario($idusuario)
		{
			$sql = "SELECT docusu, usuusu, emausu, pasusu FROM tbdatosusuario WHERE idusuario = $idusuario";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$datos = $conexionBD->ejeCon($sql,0);
			return $datos;
		}

		function cons ($sentencia_sql) 
		{
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$conexionBD -> ejeCon($sentencia_sql, 1);
		}
	} 
 ?>,