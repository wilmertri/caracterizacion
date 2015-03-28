<?php
 	include ("controlador/cparametro.php");
?>
<h1>Insertar Parametro</h1>
<div class="forms">
    <form name="form1" action="" method="post">
        <div class="row">
            <div class="form-group">
                <label for="Nombre de Parametro">Nombre de Parametro</label>
                <input name="nompar" type="text" class="form-control">
            </div>
			<div class="form-group">
                <input type="submit" class="btn btn-primary" value="Insertar">
            </div>
        </div>
    </form>
</div>
<div class="tbcenter">
	<table id="example" class="display" cellspacing="0" width="100%">
		<thead>
	        <tr>
				<th>Cod. Parametro </th>
	            <th>Nombre del Parametro </th>
	            <th>Editar</th>
	        </tr>			
		</thead>
		<tfoot>
	        <tr>
				<th>Cod. Parametro </th>
	            <th>Nombre del Parametro </th>
	            <th>Editar</th>
	        </tr>			
		</tfoot>
		<tbody>
	<?php
		$dato = $ins->selpar();
		for($i=0;$i<count($dato);$i++)
			{
	?>
		<tr>
			<td><?php echo $dato[$i]['codpar']?></td>
		    <td><?php echo $dato[$i]['nompar']?></td>
            <td><a href="home.php?pr=<?php echo $dato[$i]['codpar'] ?>&var=41" class="btn btn-primary">Editar</a></td>
        </tr>
		
	<?php } ?>
		</tbody>		
	</table>
</div>
<h1> Insertar valores </h1>
<div class="forms">
	<form name="form3" action="" method="post">
		<div class="row">
			<div class="form-group">
				<label for="Nombre del valor" class="label-control">Nombre del valor:</label>
				<input type="text" name="nomval" size="30" maxlength="30" required="required" class="form-control"/>
			</div>
		</div>
        <div class="row">
            <div class="form-group">
				<label for="Nombre del valor" class="label-control">Parametro:</label>
				<select name="codpar" class="form-control">
				<?php 
					$dat1 = $ins->selpar();
					for ($i=0; $i < count($dat1); $i++)
					{
				?>
			        <option value="<?php echo $dat1[$i]['codpar'] ?>" ><?php echo $dat1[$i]['nompar'] ?></option>    
		        <?php } ?>
            	</select>
			</div>
        </div>
        <div class="row">
        	<div class="form-group">
        		<input type="submit" class="btn btn-primary" value="Insertar">
        	</div>
        </div>
    </form>    
</div>
<div class="tbcenter">
	<table class="table">
		<thead>
			<tr>
				<th>Cod. valor</th>
				<th>Nombre del valor</th>
				<th>Editar</th>
			</tr>
		</thead>
		<tfoot>
			<tr>
				<th>Cod. valor</th>
				<th>Nombre del valor</th>
				<th>Editar</th>
			</tr>
		</tfoot>
		<tbody>
		<?php
			$valor = $ins->selval();
			for($i=0;$i<count($valor);$i++)
			{
		?>
		<tr>
			<td><?php echo $valor[$i]['codval']?></td>
		    <td><?php echo $valor[$i]['nomval']?></td>
            <td><a href="home.php?pr=<?php echo $valor[$i]['codval'] ?>&var=42" class="btn btn-primary">Editar</a></td>
        </tr>
		<?php } ?>
		</tbody>	
    </table>
</div>
      