<?php
	include("controlador/conexion.php");
	class mexplaboral {
		function mexplaboral() {}
		function insexpper($labexp, $desexp, $ingexp, $per) {
			$sql = "INSERT INTO tbexplaboral (numdocper, labexp, desexp, ingexp) VALUES ('".$per."','".$labexp."','".$desexp."','".$ingexp."');";
			$this -> cons($sql);
		}
		function updexpper($codexp, $labexp, $desexp, $ingexp) {
			$sql = "UPDATE tbexplaboral SET labexp = '".$labexp."', desexp = '".$desexp."', ingexp = '".$ingexp."' WHERE codexplab = '".$codexp."';";
			$this -> cons($sql);
		}
		function delexpper($codexp) {
			$sql = "DELETE FROM tbexplaboral WHERE codexplab = '".$codexp."';";
			$this -> cons($sql);
		}
		function cons ($c) {
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$conexionBD -> ejeCon($c, 1);
		}
		function selexpper() {
			$sql = "SELECT * FROM tbexplaboral;";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function selexpper1($codexp) {
			$sql = "SELECT * FROM tbexplaboral WHERE codexplab= '".$codexp."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function selexpper2($numdoc) {
			$sql = "SELECT * FROM tbexplaboral WHERE numdocper= '".$numdoc."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
	}
?>