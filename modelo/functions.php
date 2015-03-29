<?php
	require "controlador/conexion.php";
	class Functions {
		function functions()
		{

		}
		function seleccionar_valores_de_parametro($codpar)
		{
			$sql = "SELECT * FROM tbvalor WHERE codpar = $codpar";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$datos = $conexionBD->ejeCon($sql,0);
			return $datos;
		}
	} 
 ?>