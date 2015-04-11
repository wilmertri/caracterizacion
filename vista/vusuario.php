
<?php
        /*  
        *   @author: Luis M Morales B
        *   @Version: V2 10/04/15
        */

	include("controlador/cusuario.php");
?>
<h1>Insertar Usuario </h1>
<div class="forms1">
    <form name="form1" action="" method="post">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="documento">documento</label>
                <input name="documento" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-6">
                <label for="usuario">usuario</label>
                <input name="nombre" type="text" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="email">email</label>
                <input name="email" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-6">
                <label for="password">password</label>
                <input name="password" type="password" class="form-control">
            </div>
        </div>
        <div class="row">    
            <div class="form-group col-lg-6">
                <input type="submit" class="btn btn-primary" value="Insertar">
            </div>
        </div>
    </form>
	</div>
    <div class="tbcenter">
	<form id="form2" name="form2" method="GET" action="" onSubmit="return confirm('¿Desea eliminar?')">
		<table width="700px" class="table">
        <tr>

            <th>Documento de identificación</th>
            <th>Nombre de usuario</th>
            <th>Correo electronico</th>
        </tr>
	<?php
		$dato = $ins->selusu();
		for($i=0;$i<count($dato);$i++)
			{
	?>
		<tr>
			<td><?php echo $dato[$i]["Numero de documento"]; ?></td> 
		    <td><?php echo $dato[$i]['Nombre del usuario']?></td>
            <td><?php echo $dato[$i]['Correo electronico'] ?></td>
        </tr>
	<?php } ?>		
		</table>
	</form>
</div>
	<!--se cambian doc por num doc, usu por nom usua por y mail por corr elec