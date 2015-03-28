<?php
include ("controlador/conexion.php");
class mtipoingreso
{
	var $arr;
	function mtipoingreso(){}
	
	function instip($tiping){
		$sql = "INSERT INTO tbtipoingreso(tipoingreso) VALUES ('".$tiping."');";
		$this->cons($sql);
	}
	function deltip($idtip){
		$sql = "DELETE FROM tbtipoingreso WHERE idtipoingreso ='".$idtip."';";
		$this->cons($sql);
	}
	function updtip($idtip, $tiping){
		$sql = "UPDATE tbtipoingreso SET tipoingreso='".$tiping."' WHERE idtipoingreso='".$idtip."';";
		$this->cons($sql);
	}
	function cons($c){
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$conexionBD->ejeCon($c,1);
	}
	function seltip(){
		$sql = "SELECT idtipoingreso, tipoingreso FROM tbtipoingreso;";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
	function seltip1($idtip){
		$sql = "SELECT idtipoingreso, tipoingreso FROM tbtipoingreso WHERE idtipoingreso='".$idtip."';";
		$conexionBD = new conexion();
		$conexionBD->conectarBD();
		$data = $conexionBD->ejeCon($sql,0);
		return $data;
	}
}
?>