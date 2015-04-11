<?php
	include("controlador/conexion.php");
	include ("functions.php");
	class mdatospersona {
		
		function mdatospersona() {}
		function get_valor($codval)
		{
			return mostrar_nombre_valores($codval);
		}
		function get_documento()
		{
			return seleccionar_valores_de_parametro(1);
		}
		function insper($numficha,$docper, $tipdoc1, $lugexpdoc1, $pnom, $snom, $pape, $sape, $gen, $dir, $zon, $ver, $sec, $barfin, $tel, $telseg, $lugnac1, $fecnac, $estciv, $etnia, $ges, $hijosacargo, $relsexper) {
			$sql = "INSERT INTO tbdatospersona ( numficha, numdocper, tipdocper, lugexpdocper, pnomper, snomper, papeper, sapeper, genper, dirper, zonper, verper, secper, barfinper, telper, telsegper, lugnacper, fecnacper, estcivper, etniaper, geslanper, hijosacargo, relsexper ) VALUES ('".$numficha."','".$docper."','".$tipdoc1."','".$lugexpdoc1."','".$pnom."', 
			'".$snom."','".$pape."','".$sape."','".$gen."','".$dir."','".$zon."','".$ver."','".$sec."','".$barfin."',
			'".$tel."','".$telseg."','".$lugnac1."','".$fecnac."','".$estciv."','".$etnia."','".$ges."','".$hijosacargo."','".$relsexper."');";
			$this -> cons($sql);
			

		}
		function updper($idpersona, $numficha, $docper, $tipdoc1, $lugexpdoc1, $pnom, $snom, $pape, $sape, $gen, $dir, $zon, $ver, $sec, $barfin, $tel, $telseg, $lugnac1, $fecnac, $estciv, $etnia, $ges, $hijosacargo, $relsexper) {
			$sql = "UPDATE tbdatospersona SET numdocper ='".$docper."',tipdocper ='".$tipdoc1."',lugexpdocper = '".$lugexpdoc1."',pnomper = '".$pnom."',
			snomper = '".$snom."',papeper = '".$pape."',sapeper = '".$sape."',genper = '".$gen."',dirper = '".$dir."',
			zonper = '".$zon."',verper = '".$ver."',secper = '".$sec."',barfinper = '".$barfin."',telper = '".$tel."',
			telsegper = '".$telseg."',lugnacper = '".$lugnac1."',fecnacper = '".$fecnac."',estcivper = '".$estciv."',etniaper = '".$etnia."',
			geslanper = '".$ges."',hijosacargo = '".$hijosacargo."', relsexper='".$relsexper."' WHERE idpersona = '".$idpersona."';";
			$this -> cons($sql);
		}
		function delper($codp) {
			$sql = "DELETE FROM tbdatospersona WHERE idpersona = '".$idpersona."';";
			$this -> cons($sql);
		}
		function cons ($c) {
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$conexionBD -> ejeCon($c, 1);
		}
		function selper() {
			$sql = "SELECT * FROM tbdatospersona;";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function selper1($idpersona) {
			$sql = "SELECT * FROM tbdatospersona WHERE idpersona = '".$idpersona."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function valor($val) {
			$sql = "SELECT codval,nomval FROM tbvalor WHERE codpar = '".$val."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function valor2($val) {
			$sql = "SELECT codval,nomval FROM tbvalor WHERE codval = '".$val."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function selver() {
			$sql= "SELECT * FROM tbvereda;";
			$conexionBD= new conexion();
			$conexionBD-> conectarBD();
			$datos=$conexionBD-> ejecon($sql,0);
			return $datos;
		}
		function selver2($val) {
			$sql = "SELECT codver,nomver FROM tbvereda WHERE codver = '".$val."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
		function selzona() {
			$sql= "SELECT * FROM tbzona;";
			$conexionBD= new conexion();
			$conexionBD-> conectarBD();
			$datos=$conexionBD-> ejecon($sql,0);
			return $datos;
		}
		function selzona2($zona) {
			$sql = "SELECT codzona,nomzona FROM tbzona WHERE codzona = '".$zona."';";
			$conexionBD = new conexion();
			$conexionBD -> conectarBD();
			$datos = $conexionBD -> ejeCon($sql, 0);
			return $datos;
		}
	}
?>