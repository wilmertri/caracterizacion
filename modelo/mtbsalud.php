<?php
	/*
		@author: Rubiel Sánches Torres
		@Version: V1.0
	*/
	include ("controlador/conexion.php");
	include ("functions.php");
	class Mdatossalud extends Funciones_generales {
		
		function Mdatossalud()
		{

		}

		function get_valor($codval)
		{
			return mostrar_nombre_valores($codval);
		}
				
		/*
			6: Si, No, No Sabe
		*/

		function get_sistema_salud()
		{
			return $this->seleccionar_valores_de_parametro(23);
		}

		function get_seleccionar_eps()        
		{
            $sql = "SELECT * FROM tbeps";
            return $this->SeleccionDatos($sql);
        }
		
		function get_negar_servicio()
		{
			return $this->seleccionar_valores_de_parametro(25);
		}

		function get_atencion_salud()
		{
			return $this->seleccionar_valores_de_parametro(25);
		}

		function get_esquema_vacunacion()
		{
			return $this->seleccionar_valores_de_parametro(25);
		}

		function get_control_odontologico()
		{
			return $this->seleccionar_valores_de_parametro(24);
		}

		function get_alimentos_dia()
		{
			return $this->seleccionar_valores_de_parametro(26);
		}


		/*
			Función para la actualización de los datos Salud
		*/
		function actu_datos_salud($sissal ,$eps, $negser, $atevicper, $esqvacper, $conodoper, $dsc1, $dsc2, $disconfarm, $reh1, $reh2, $comdiaper)
		{
			$sql = "UPDATE tbdatospersona SET tipvivper='$tipovivienda', tipparviv='$tipoparedes', tippisviv='$tipopisos', tiptecviv='$tipotechos', zonrieviv='$zonariesgo', tiprelviv='$tiporelacion' WHERE idpersona = '$idpersona'";
			$this->cons($sql);
		}

		function ver_datos_salud($idpersona)
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
		function seleccionar_eps()        {
            $sql = "SELECT * FROM tbeps";
            return $this->SeleccionDatos($sql);
        }
	} 
 ?>,