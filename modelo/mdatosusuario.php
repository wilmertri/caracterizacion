<?php
	/*
		@author: Luis M Morales B
		@Version: V1 07/04/15
	*/
	include ("controlador/conexion.php");
	include ("functions.php");
	class Mdatosusuario {
		
		function Mdatosusuario()
		{

		}
// duda.  
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
		function actu_datos_vivienda($tipovivienda, $tipoparedes, $tipopisos, $tipotechos, $zonariesgo, $tiporelacion, $idpersona)
		{
			$sql = "UPDATE tbdatospersona SET tipvivper='$tipovivienda', tipparviv='$tipoparedes', tippisviv='$tipopisos', tiptecviv='$tipotechos', zonrieviv='$zonariesgo', tiprelviv='$tiporelacion' WHERE idpersona = '$idpersona'";
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