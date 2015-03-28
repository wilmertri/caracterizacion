<?php
	include("controlador/conexion.php");
	class mingresoext {
		function mingresoext() {}
		function insingext($tipingext, $ingext, $desingext, $per) {
			$sql = "INSERT INTO tbingresoext (numdocper, tipingext, ingext, desingext) VALUES ('".$per."','".$tipingext."','".$ingext."','".$desingext."');";
			$this -> cons($sql);
		}
		function updingext($codingext, $ingext, $desingext) {
			$sql = "UPDATE tbingresoext SET ingext ='".$ingext."',desingext='".$desingext."' WHERE codingext = '".$codingext."';";
			$this -> cons($sql);
		}
		function delingext($doc) {
			$sql = "DELETE FROM tbingresoext WHERE codingext = '".$codingext."';";
			$this -> cons($sql);
		}
		function cons ($c) {
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$conexionBD -> ejeCon($c, 1);
		}
		function selingext() {
			$sql = "SELECT codingext, tipingext, ingext, desingext FROM tbingresoext;";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function selingext1($codingext) {
			$sql = "SELECT * FROM tbingresoext WHERE codingext='".$codingext."' ;";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function selingext2($numdoc) {
			$sql = "SELECT * FROM tbingresoext WHERE numdocper='".$numdoc."' ;";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function seltip(){
			$sql = "SELECT idtipoingreso, tipoingreso FROM tbtipoingreso;";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$datos = $conexionBD->ejeCon($sql,0);
			return $datos;
		}
		function seltip1($val){
			$sql = "SELECT idtipoingreso, tipoingreso FROM tbtipoingreso WHERE idtipoingreso='".$val."';";
			$conexionBD = new conexion();
			$conexionBD->conectarBD();
			$datos = $conexionBD->ejeCon($sql,0);
			return $datos;
		}
	}
?>