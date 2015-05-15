<?php
	include("controlador/cactividadeconomica.php");
?>
<h1>Actividad Economica</h1>
<div class="forms1">
    <form name="form1" action="" method="post">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="Cuantas personas tiene a su cargo ">Cuantas personas tiene a su cargo</label>	
                <input name="numpercar" type="number" class="form-control" pattern="[0-9]{1,3}" min="0" max="30" value="<?= $datosactividad[0]['numpercar'] ?>"> <!--esta variable viene de la tabla vdatospersona-->
            </div>
			<div class="form-group col-lg-6">
                <label for="Ocupación Actual">Ocupación Actual <span style="color:red;">*</span> </label>
				<select name="ocuperact" class="form-control" id="">
					<option value="<?= $datosactividad[0]['ocuperact'] ?>">Seleccione una opción</option>
					<?php

						for ($i=0; $i <count($ocuperact1) ; $i++) 
						{  
					?>
					<option value="<?php echo $ocuperact1[$i]['codval']; ?>"><?php echo $ocuperact1[$i]['nomval']; ?></option>
					<?php 
						} 
					?>
				</select>		
			</div>
		</div>
		<div class="row">	
			<div class="form-group col-lg-6">
                <label for="En que trabaja">En que trabaja</label>
                <input name="trabper" type="text" class="form-control" pattern="[A-z ]{2,20}" >
            </div>
			<div class="form-group col-lg-6">
                <label for="Ingresos Mensuales">Ingresos Mensuales</label>
                <input name="ingmenper" type="text" class="form-control" placeholder="ej: 680000" pattern="[0-9]{1,10}" value="<?= $datosactividad[0]['ingmenper'] ?>">
            </div>
		</div>
		<!--<div class="row">	
			<div class="form-group col-lg-6">
                <label for="Fuente de los Ingresos">Fuente de los Ingresos</label>
                <input name="ingresosn" type="text" class="form-control" min="0" max="30"> 
            </div>
			<div class="form-group col-lg-6">
                <label for="Otro Cual?">Otro Cual?</label>
                <input name="" type="text" class="form-control" min="0" max="70"> <!--falta completar para saber que se va  colocar en esta opcion
            </div>
		</div>	
		<div class="row">	
			<div class="form-group col-lg-6">
                <label for="Recibe ayuda a traves de alguno de los siguientes programas sociales?">Recibe ayuda a traves de alguno de los siguientes programas sociales?</label>
                <input name="" type="text" class="form-control" min="0" max="30"> <!--fuente ingresos externa
            </div>
			<div class="form-group col-lg-6">
                <label for="Oficios en los que tiene experiencia laboral">Oficios en los que tiene experiencia laboral</label>
                <input name="" type="text" class="form-control" min="0" max="30"> <!-- completar tb exp. lab
            </div>
		</div>
		<div class="row">	
			<div class="form-group col-lg-6">
                <label for="Ha emprendido algún Negocio?">Ha emprendido algún Negocio?</label>
                <input name="" type="text" class="form-control" min="0" max="30"> <!--comletar tbnegocio vienen los datos
            </div>
			<div class="form-group col-lg-6">
                <label for="¿Qué Tipo de Negocio es?">¿Qué Tipo de Negocio es?</label>
                <input name="" type="text" class="form-control" min="0" max="30"> <!--completar tb negocio revisar
            </div>
		</div>
		<div class="row">	
			<div class="form-group col-lg-6">
                <label for="Esta activo el negocio">Esta activo el negocio</label>
                <input name="negactper" type="text" class="form-control" min="0" max="30"> 
            </div>
			<div class="form-group col-lg-6">
                <label for="Duración del Negocio">Duración del Negocio</label>
                <input name="" type="text" class="form-control" min="0" max="30"> <!--agregar despregable
            </div>
		</div>	-->
		<div class="row">
            <div class="form-group col-lg-12 center">
                <input type="submit" class="btn btn-success" value="Enviar">
				<a href="javascript:history.back();" class="btn btn-success">Volver</a>
				<a href="home.php" class="btn btn-success" >Salir</a>
            </div>
		</div>
    </form>
</div>

	<?php
		//$dato= $ins->selcap1($pr);  // MODIFICAR
		//for($i=0;$i<count($dato);$i++)
			//{
	?>
		<!--<tr>
			<td><//?php  echo $dato[$i]['codcapper']?></td>  MODIFICAR EL TR
			<td><//?php echo $dato[$i]['nomcap']?></td>
		    <td><//?php echo $dato[$i]['entcap']?></td>
            <td><//?php echo $dato[$i]['titcap'] ?></td>
            <td><a href="home.php?var=11&pr<?php //echo $dato1[0]['numdocper'] ?>&cod=<?php //echo $dato[$i]["codcapper"]; ?>" class="btn btn-primary">Editar</a></td>
        </tr>
	<?php //} ?>		
		</table>
	</form>
</div>-->