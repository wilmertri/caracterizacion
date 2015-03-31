<?php
		/*
		*	@author: Wilmer Fabian Triana
		*	@Version: V1
		*/		
		function functions()
		{

		}

		/*
		*	Función para seleccionar los valores de un determinado parametro
		*/

		function seleccionar_valores_de_parametro($codpar)
		{
			$sql = "SELECT * FROM tbvalor WHERE codpar = $codpar";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$datos = $conexionBD->ejeCon($sql,0);
			return $datos;
		}

		/*
		*	Función para mostrar los nombres de determinado valor
		*/

		function mostrar_nombre_valores($codval)
		{
			$sql = "SELECT nomval FROM tbvalor WHERE codval = $codval";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$datos = $conexionBD->ejeCon($sql,0);
			return $datos;
		}

		/*
		*	Función para calcular la edad según la fecha de nacimiento
		*/

		function calcular_edad($fecha)
		{
			$dias = explode("-", $fecha, 3);
			$dias = mktime(0,0,0,$dias[1],$dias[2],$dias[0]);
			echo "Dias: " . $dias;
			$edad = (int)((time()-$dias)/31556926 );
			return $edad;
		}
 ?>