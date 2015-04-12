<?php
	include ("controlador/cdespyaban.php");
	include("vista/conexion_sqlserver.php");
?>
<script language="javascript" src="js/jquery-1.9.1.js"></script><!-- llamamos al JQuery-->
<script language="javascript">

	function RecargarCiudadesexp(value){
		var parametros = {
			"valor" : value
		};
		$.ajax({
			data: parametros,
			url: 'vista/miscript3.php',
			type: 'post',
			success: function (response) {
	 			$("#reloadMunicipioexp").html(response);
			}
 		});
 	}
	
	function RecargarCiudadesReubi(value){
		var parametros = {
			"valor" : value
		};
		$.ajax({
			data: parametros,
			url: 'vista/miscript4.php',
			type: 'post',
			success: function (response) {
	 			$("#reloadMunicipioreub").html(response);
			}
 		});
 	}
</script>
<h2>Insertar Datos de Despojo y Abandono de Tierras</h2>

<div class="forms1">
	<form name="form1" action="" method="post">
		<div class="row">
			<div class="form-group col-lg-12 center">
                <label for="Lugar de expedicion">Lugar de Expulsion</label> 
            </div> 
		</div>
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
                <label for="Departamento">Departamento <span style="color:red;">*</span></label>
                <select name="depto" onchange="javascript:RecargarCiudadesexp(this.value);" class="form-control">
 					<option value="0">Seleccione Departamento</option>
					<?php
 					
					$sql = "SELECT codubi, nomubi FROM vieubica ORDER BY nomubi";
 					echo $sql;
 					$conexionBD = new conexion_sqlserver();
 					$conexionBD->conectarBD();
 					$data = $conexionBD->ejecutarConsulta($sql,0); 
 					for($i=0;$i<count($data);$i++)
 					{	
					?>
						<option value="<?php echo $data[$i]['codubi'] ?>"><?php echo $data[$i]['nomubi'] ?></option>
					<?php }?>
 				</select>
            </div>
			<div class="form-group col-lg-6 col-md-6">
                <label for="Municipio">Municipio <span style="color:red;">*</span></label>
                <div id="reloadMunicipioexp">
 					<select name="codubi" id="id_estado" class="form-control" style="text-transform:uppercase;">
						<option value="0">Seleccione municipio</option>
 					</select>
 				</div>
            </div>
		</div> 
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
				<label for="Fecha de expulsion">Fecha de expulsion</label>
					<input name="fechadeexpulsion" type="date" class="form-control">
            </div>
			<div class="form-group col-lg-6 col-md-6">
				<label for="Actor armado">Después del hecho victimizante, ¿Algún actor armado le ha impedido salir de un territorio?</label>
				<select name="actorarmado" onchange="javascript:mostrar(this.value);" class="form-control">
						<option value=0> Seleccione una opción </option>>
						
						<?php 
						//Select
						//$gen = $ins->selpar();
						for ($i=0; $i < count($respuesta_cerrada); $i++){
						?>
				
						<option value="<?php echo $respuesta_cerrada[$i]['codval'] ?>" ><?php echo $respuesta_cerrada[$i]['nomval'] ?></option>
				
						<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
				<label for="Ingreso alimentos">Después del hecho victimizante, ¿algún actor armado ha impedido el ingreso de alimentos o bienes básicos a la zona donde ha estado habitando?</label>
				<select name="ingresoalimentos" onchange="javascript:mostrar(this.value);" class="form-control">
						<option value=0> Seleccione una opción </option>>
						
						<?php 
						//Select
						//$gen = $ins->selpar();
						for ($i=0; $i < count($respuesta_cerrada); $i++){
						?>
				
						<option value="<?php echo $respuesta_cerrada[$i]['codval'] ?>" ><?php echo $respuesta_cerrada[$i]['nomval'] ?></option>
				
						<?php } ?>
				</select>
			</div>
			<div class="form-group col-lg-6 col-md-6">
                <label for="Tiempo de permanencia">Tiempo permanencia en el municipio <span style="color:red;">*</span></label>
                <input name="tieper" type="text" class="form-control" pattern="[0-9]{1,2}" placeholder="">
            </div>
		</div>
		<div class="row">
            <div class="form-group col-lg-6 col-md-6">
                <label for="factores de permanencia">Factores de permanencia</label>
                <select name="factpermanencia" class="form-control" style="text-transform:uppercase;">
				<option value=0> Seleccione una opción </option>
					<?php 
						for ($i=0; $i < count($factores_permanencia); $i++){
					?>
					<option value ="<?php echo $factores_permanencia[$i]['idfactor'] ?>" ><?php echo $factores_permanencia[$i]['nomfact'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
			<div class="form-group col-lg-6 col-md-6">
				<label for="Solicitud RUPD/RUV">Solicitud RUPD/RUV</label>
				<select name="solicitud" onchange="javascript:mostrar(this.value);" class="form-control">
						<option value=0> Seleccione una opción </option>>
						
				   
						<?php 
						//Select
						//$gen = $ins->selpar();
						for ($i=0; $i < count($solicit); $i++){
						?>
				
						<option value="<?php echo $solicit[$i]['codval'] ?>" ><?php echo $solicit[$i]['nomval'] ?></option>
				
						<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
					<label for="Razon inclusion RUPD/RUV">Razon inclusion RUPD/RUV</label>
					<select name="razoninclusion" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
							
					   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($razinclu); $i++){
							?>
					
							<option value="<?php echo $razinclu[$i]['codval'] ?>" ><?php echo $razinclu[$i]['nomval'] ?></option>
					
							<?php } ?>
					</select>
			</div>
			<div class="form-group col-lg-6 col-md-6">
				<label for="Uso predio despues del despojo">Uso predio despues del despojo</label>
				<select name="usoprediodespues" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
							
					   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($preddesp); $i++){
							?>
					
							<option value="<?php echo $preddesp[$i]['codval'] ?>" ><?php echo $preddesp[$i]['nomval'] ?></option>
					
							<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">	
			<div class="form-group col-lg-6 col-md-6">
				<label for="Perdida de bienes">¿Cuántos bienes inmuebles han perdido?</label>
				<input name="perdidadebienes" type="number" class="form-control">
            </div>
			<div class="form-group col-lg-6 col-md-6">
				<label for="Tipo de bien">Tipo de bien</label>
				<select name="tipodebien" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
							
					   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($tipobien); $i++){
							?>
					
							<option value="<?php echo $tipobien[$i]['codval'] ?>" ><?php echo $tipobien[$i]['nomval'] ?></option>
					
							<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
				<label for="Relacion con el bien">Relacion con el bien</label>
				<select name="relacionconelbien" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
							
					   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($relbien); $i++){
							?>
					
							<option value="<?php echo $relbien[$i]['codval'] ?>" ><?php echo $relbien[$i]['nomval'] ?></option>
					
							<?php } ?>
				</select>
			</div>
			<div class="form-group col-lg-6 col-md-6">
				<label for="Tipo de familia">Tipo de familia</label>
				<select name="tipodefamilia" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
							
					   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($tipfam); $i++){
							?>
					
							<option value="<?php echo $tipfam[$i]['codval'] ?>" ><?php echo $tipfam[$i]['nomval'] ?></option>
					
							<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
					<label for="Ideal RUPD">Ideal RUPD</label>
					<select name="ideal" onchange="javascript:mostrar(this.value);" class="form-control">
								<option value=0> Seleccione una opción </option>>
								
						   
								<?php 
								//Select
								//$gen = $ins->selpar();
								for ($i=0; $i < count($irupd); $i++){
								?>
						
								<option value="<?php echo $irupd[$i]['codval'] ?>" ><?php echo $irupd[$i]['nomval'] ?></option>
						
								<?php } ?>
					</select>
				</div>
				<div class="form-group col-lg-6 col-md-6">

				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-12 center">
					<label for="Lugar de expedicion">Si seleccionó reubicación a que lugar se trasladaría</label> 
				</div> 
			</div>
			<div class="row">
				<div class="form-group col-lg-6 col-md-6">
					<label for="Departamento">Departamento <span style="color:red;">*</span></label>
					<select name="depto" onchange="javascript:RecargarCiudades(this.value);" class="form-control" style="text-transform:uppercase;">
						<option value="0">Seleccione Departamento</option>
						<?php
						
						$sql = "SELECT codubi, nomubi FROM vieubica ORDER BY nomubi";
						echo $sql;
						$conexionBD = new conexion_sqlserver();
						$conexionBD->conectarBD();
						$data = $conexionBD->ejecutarConsulta($sql,0); 
						for($i=0;$i<count($data);$i++)
						{	
						?>
							<option value="<?php echo $data[$i]['codubi'] ?>"><?php echo $data[$i]['nomubi'] ?></option>
						<?php }?>
					</select>
				</div>
				<div class="form-group col-lg-6 col-md-6">
					<label for="Municipio">Municipio <span style="color:red;">*</span></label>
					<div id="reloadMunicipioreub">
						<select name="codubi" id="id_estado" class="form-control" style="text-transform:uppercase;">
							<option value="0">Seleccione municipio</option>
						</select>
					</div>
				</div>
			</div> 
			<div class="row">
			<div class="form-group col-lg-6 col-md-6">
				<label for="Razon de retorno">Razon de retorno</label>
				<select name="razonderetorno" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
								
						   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($razre); $i++){
							?>
						
							<option value="<?php echo $razre[$i]['codval'] ?>" ><?php echo $razre[$i]['nomval'] ?></option>
						
							<?php } ?>
				</select>
			</div>
			<div class="form-group col-lg-6 col-md-6">
				<label for="Medidas de proteccion">Han solicitado medidas de protección?</label>
				<select name="medidasdeproteccion" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
							
					   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($respuesta_cerrada_dos); $i++){
							?>
					
							<option value="<?php echo $respuesta_cerrada_dos[$i]['codval'] ?>" ><?php echo $respuesta_cerrada_dos[$i]['nomval'] ?></option>
					
							<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-lg-6 col-md-6">
				<label for="Recibio medidas de proteccion">Recibio medidas de proteccion</label>
				<select name="recibiomedidasdeproteccion" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
								
						   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($respuesta_cerrada_dos); $i++){
							?>
						
							<option value="<?php echo $respuesta_cerrada_dos[$i]['codval'] ?>" ><?php echo $respuesta_cerrada_dos[$i]['nomval'] ?></option>
						
							<?php } ?>
				</select>
			</div>
			<div class="form-group col-lg-6 col-md-6">
				<label for="Ha recibido indemnizacion">Ha recibido indemnización por parte de la Unidad de Víctimas</label>
				<select name="harecibidoindemnizacion" onchange="javascript:mostrar(this.value);" class="form-control">
							<option value=0> Seleccione una opción </option>>
							
						   
							<?php 
							//Select
							//$gen = $ins->selpar();
							for ($i=0; $i < count($respuesta_cerrada_dos); $i++){
							?>
						
							<option value="<?php echo $respuesta_cerrada_dos[$i]['codval'] ?>" ><?php echo $respuesta_cerrada_dos[$i]['nomval'] ?></option>
						
							<?php } ?>
				</select>
			</div>
		</div>
		<div class="row">	
			<div class="form-group col-lg-6 col-md-6 center">
				<label for="Observaciones">Observaciones</label>
				<input name="observaciones" type="text" class="form-control">
            </div>
			<div  class="row">
			<div class="form-group col-lg-6 col-md-6 center">
				<input type="submit" class="btn btn-primary">
			</div>	
			</div>
		</div>		
</div>		
       