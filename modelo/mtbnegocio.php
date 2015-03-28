<?php
	include("controlador/conexion.php");
	class mtbnegocio {
		function mtbnegocio() {}
		function insneg($labneg, $tipneg, $durneg, $dirneg, $per) {
			$sql = "INSERT INTO tbnegocio (numdocper, labneg, tipneg, durneg, dirneg) VALUES ('".$per."','".$labneg."','".$tipneg."','".$durneg."','".$dirneg."');";
			$this -> cons($sql);
		}
		function updneg($codnegper, $labneg, $tipneg, $durneg, $dirneg) {
			$sql = "UPDATE tbnegocio SET labneg = '".$labneg."',tipneg = '".$tipneg."' , durneg = '".$durneg."', dirneg = '".$dirneg."' WHERE codnegper = '".$codnegper."';";
			$this -> cons($sql);
		}
		function delneg($codnegper) {
			$sql = "DELETE FROM tbnegocio WHERE codnegper = '".$codnegper."';";
			$this -> cons($sql);
		}
		function cons ($c) {
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$conexionBD -> ejeCon($c, 1);
		}
		function selneg() {
			$sql = "SELECT * FROM tbnegocio;";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function selneg1($numdoc) {
			$sql = "SELECT * FROM tbnegocio WHERE numdocper = '".$numdoc."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function selneg2($codneg) {
			$sql = "SELECT * FROM tbnegocio WHERE codnegper = '".$codneg."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
	}
?>