<?php
	include("controlador/ctbcapacitacion.php");
?>
<h1>Insertar Capacitacion </h1>
<div class="forms">
    <form name="form1" action="" method="post">
        <div class="row">
            <div class="form-group">
                <label for="Nombre de la Capacitación ">Nombre de la Capacitación </label>
                <input name="nomcap" type="text" class="form-control">
            </div>
			<div class="form-group">
                <label for="Entidad donde recibio la Capacitación ">Entidad donde recibio la Capacitación </label>
                <input name="entcap" type="text" class="form-control">
            </div>
			<div class="form-group">
                <label for="Titulo obtenido de la Capacitación ">Titulo obtenido</label>
                <input name="titcap" type="text" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Insertar">
				<a href="home.php" class="btn btn-primary" >Salir</a>
            </div>
        </div>
    </form>
	</div>
<div class="tbcenter">
	<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('¿Desea eliminar?')">
		<table width="700px" class="table table-striped">
        <tr>
			<th>Codigo</th>
            <th>Nombre de la Capacitación </th>
            <th>Entidad donde recibio la Capacitación </th>
            <th>Titulo obtenido</th>
			<th>Editar</th>
        </tr>	
	<?php
		$dato= $ins->selcap1($pr);
		for($i=0;$i<count($dato);$i++)
			{
	?>
		<tr>
			<td><?php echo $dato[$i]['codcapper']?></td>
			<td><?php echo $dato[$i]['nomcap']?></td>
		    <td><?php echo $dato[$i]['entcap']?></td>
            <td><?php echo $dato[$i]['titcap'] ?></td>
            <td><a href="home.php?var=11&pr=<?php echo $dato1[0]['numdocper'] ?>&cod=<?php echo $dato[$i]["codcapper"]; ?>" class="btn btn-primary">Editar</a></td>
        </tr>
	<?php } ?>		
		</table>
	</form>
</div>