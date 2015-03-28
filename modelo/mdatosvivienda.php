<?php
	include ("controlador/conexion.php");
	class Mdatosvivienda {
		function Mdatosvivienda()
		{

		}
		
		function actu_datos_vivienda($tipovivienda, $tipoparedes, $tipopisos, $tipotechos, $zonariesgo, $idpersona)
		{
			$sql = "UPDATE tbdatospersona SET tipvivper=$tipovivienda, tipparviv=$tipoparedes, tippisviv=$tipopisos, tiptecviv=$tipotechos, zonrieviv=$zonariesgo WHERE idpersona = $idpersona";
			$this->cons($sql);
		}

		function cons ($sentencia_sql) 
		{
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$conexionBD -> ejeCon($sentencia_sql, 1);
		}
	} 
 ?>,