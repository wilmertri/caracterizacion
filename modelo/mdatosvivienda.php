<?php
	/*
		@author: Wilmer Fabian Triana
		@Version: V1
	*/
	include ("controlador/conexion.php");
	include ("functions.php");
	class Mdatosvivienda {
		
		function Mdatosvivienda()
		{

		}


		
		function get_tipo_vivienda()
		{
			return seleccionar_valores_de_parametro(5);
		}
		
		function get_tipo_pisos()
		{
			return seleccionar_valores_de_parametro(17);
		}

		/*
			Función para la actualización de los datos de la vivienda de la persona
		*/
		function actu_datos_vivienda($tipovivienda, $tipoparedes, $tipopisos, $tipotechos, $zonariesgo, $idpersona)
		{
			$sql = "UPDATE tbdatospersona SET tipvivper='$tipovivienda', tipparviv='$tipoparedes', tippisviv='$tipopisos', tiptecviv='$tipotechos', zonrieviv='$zonariesgo' WHERE idpersona = '$idpersona'";
			$this->cons($sql);
		}

		function ver_datos_vivienda($idpersona)
		{
			$sql = "SELECT tipvivper, tipparviv, tippisviv, tiptecviv, zonrieviv FROM tbdatospersona WHERE idpersona = $idpersona";
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