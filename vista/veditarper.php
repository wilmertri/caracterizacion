<?php
	include ("controlador/cdatospersona.php");
?>

<h1>Editar Datos de la Persona</h1>

<div class="forms1">
    <form name="form1" action="home.php?pr=<?php echo $dato1[0]['numdocper'] ?>var=4" method="post">
        <div class="row">
			 <div class="form-group col-xs-6">
				<label for="Numero de documento">Numero de Documento: </label> 
				<input name="docper" type="text" value="<?php echo $dato1[0]['numdocper'] ?>" class="form-control" disabled>
				<input type="hidden" name="actu" value="actu" />
				<input type="hidden" name="docper" value="<?php echo $dato1[0]['numdocper'] ?>" />
			</div>
			<div class="form-group col-xs-6">
				<label for="Tipo de documento">Tipo de Documento</label> 
				<?php	
					$tipdoc2 = $ins->valor2($dato1[0]["tipdocper"]); 
				?>
				<input name="tipdoc" type="text" value="<?php echo $tipdoc2[0]['nomval'] ?>" class="form-control"disabled >
            </div>
		</div>
		<div class="row">
            <div class="form-group col-xs-6">
                <label for="Primer Nombre">Primer Nombre</label>
				<input name="pnom" type="text" value="<?php echo $dato1[0]['pnomper'] ?>" class="form-control">   
            </div>
			<div class="form-group col-xs-6">
               <label for="Segundo Nombre">Segundo Nombre</label>
               <input name="snom" type="text" value="<?php echo $dato1[0]['snomper'] ?>" class="form-control">
            </div>
		</div>
		<div class="row">
            <div class="form-group col-xs-6">
                <label for="Primer Apellido">Primer Apellido</label>
                <input name="pape" type="text" value="<?php echo $dato1[0]['papeper'] ?>" class="form-control">   
            </div>
			<div class="form-group col-xs-6">
               <label for="Segundo Apellido">Segundo Apellido</label>
               <input name="sape" type="text" value="<?php echo $dato1[0]['sapeper'] ?>" class="form-control">
            </div>
		</div>
	    <div class="row">
            <div class="form-group col-xs-6">
                <label for="Genero">Genero</label>
				<?php	
					$gen2 = $ins->valor2($dato1[0]["genper"]); 
				?>
				<input name="gen" type="text" value="<?php echo $gen2[0]['nomval'] ?>" class="form-control"disabled >
            </div>
			<div class="form-group col-xs-6">
                <label for="Estado civil">Estado Civil</label>
                <select name="estciv" class="form-control">
				<?php	
					$estciv2 = $ins->valor2($dato1[0]["tipdocper"]); 
				?>
				<value ="<?php echo $estciv2[0]['nomval'] ?>" class="form-control" >
					<?php 
						for ($i=0; $i < count($estcivper); $i++){
					?>
					<option value ="<?php echo $estcivper[$i]['codval'] ?>" ><?php echo $estcivper[$i]['nomval'] ?></option>
					<?php 
						} 
					?>
				</select>
            </div>
		</div>
		<div class="row">
			<div class="form-group col-xs-6">
				<label for="Direccion">Direccion</label>
				<input name="dir" type="text" value="<?php echo $dato1[0]['dirper'] ?>" class="form-control">
			</div>
            <div class="form-group col-xs-6">
                <label for="Vereda">Vereda</label>
				<input name="dir" type="text" value="<?php echo $dato1[0]['verper'] ?>" class="form-control">
            </div>
		</div>
		<div class="row">
			<div class="form-group col-xs-6">
                <label for="Sector">Sector</label>
                <input name="sec" type="text" value="<?php echo $dato1[0]['secper'] ?>" class="form-control">
            </div>
		
            <div class="form-group col-xs-6">
                <label for="Barrio o finca">Barrio o finca</label>
				<input name="barfin" type="text" value="<?php echo $dato1[0]['barfinper'] ?>" class="form-control">
            </div>
		</div>
		<div class="row">
            <div class="form-group col-xs-6">
                <label for="Telefono">Telefono</label>
                <input name="tel" type="text" value="<?php echo $dato1[0]['telper'] ?>" class="form-control">
            </div>
			<div class="form-group col-xs-6">
                <label for="Telefono2">Telefono2</label>
                <input name="telseg" type="text" value="<?php echo $dato1[0]['telsegper'] ?>" class="form-control">
            </div>
		</div>
		<div class="row">
			<div class="form-group col-xs-6">
				<label for="Ultimo grado cursado">Ultimo grado cursado</label>
				<input name="ultgra" type="text" class="form-control">
			</div>
		
            <div class="form-group col-xs-6">
                <label for="Lugar de nacimiento">Lugar de nacimiento</label>
				<hr>
            </div>
		</div>
		<div class="row">
           <div class="form-group col-xs-6">
                <label for="Fecha de nacimiento">Fecha de nacimiento</label>
				<input name="fecnac" type="date" value="<?php echo $dato1[0]['fecnacper'] ?>" class="form-control">
            </div>
		
			<div class="form-group col-xs-6">
                <label for="Numero de personas a cargo">Numero de personas a cargo</label>
                <input name="numpercar" type="text" value="<?php echo $dato1[0]['numpercar'] ?>" class="form-control">
            </div>
		</div>
		<div class="row">
           <div class="form-group col-xs-6">
                <label for="Opcion capacitacion">Sobre que le gustaria capacitarse</label>
                <input name="opicap" type="text" value="<?php echo $dato1[0]['opicapper'] ?>" class="form-control">
            </div>
		</div>
		<div class="row">	
			<div class="form-group col-xs-6">
                <label for="Trabajo">Trabajo</label>
                <input name="traper" type="text" value="<?php echo $dato1[0]['traper'] ?>" class="form-control">
            </div>
		</div>
		<div class="row">
            <div class="form-group col-xs-12">
                <label for="Donde trabaja">Donde trabaja</label>
                <input name="ubitra" type="text" value="<?php echo $dato1[0]['ubitraper'] ?>" class="form-control">
            </div>
		</div>
		<div class="row">	
            <div class="form-group col-xs-6">
                <label for="Ingreso mensual">Ingreso mensual</label>
				<input name="ingmenper" type="text" value="<?php echo $dato1[0]['ingmenper'] ?>" class="form-control">
            </div>
			<div class="form-group col-xs-6">
                <label for="Otras fuentes de ingreso">Otras fuentes de ingreso</label>
                <input name="otrfueing" type="text" value="<?php echo $dato1[0]['ingmenper'] ?>" class="form-control">
            </div>
		</div>
		<div class="row">
            <div class="form-group col-xs-12">
                <label for="Lugar de expulsion">Lugar de expulsion</label>
            </div>
		</div>
		<div class="row">
            <div class="form-group col-xs-6">
                <label for="Fecha de expulsion">Fecha de expulsion</label>
                <input name="fecexpul" type="date" value="<?php echo $dato1[0]['fecexpulper'] ?>" class="form-control">
            </div>
			<div class="form-group col-xs-6">
                <label for="Hechos victimizantes">Hechos victimizantes</label>
                <input name="hecvic" type="text" value="<?php echo $dato1[0]['hecvicper'] ?>" class="form-control">
            </div>
		</div>
		<div class="row">
            <div class="form-group col-xs-6">
                <label for="Factores">Factores por los que vive en el municipio</label>
                <input name="fecexpul" type="text" value="<?php echo $dato1[0]['facvivmun'] ?>" class="form-control">
            </div>
			<div class="form-group col-xs-6">
                <label for="Tiempo de permanencia">Tiempo de permanencia</label>
                <input name="tieper" type="text" value="<?php echo $dato1[0]['tiepermun'] ?>" class="form-control">
            </div>
		</div>
		<div class="row">
			<div class="form-group col-xs-12">
				<label for="Discapacidad">Discapacidad</label>
				<hr>
				<label for="Descripcion de discapacidad">Descripcion</label>
				<input name="desdis" type="text" class="form-control">
			</div>
		</div>		
			<div class="form-group">
                <input type="submit" class="btn btn-primary" value="Actualizar">
				<a href="home.php" class="btn btn-primary" >Salir</a>
            </div>
    </form>
</div>
