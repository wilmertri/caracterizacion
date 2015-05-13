<?php
        /*  
        *   @author: Luis M Morales B
        *   @Version: V3 12/05/15
        recuperada abruptamente y pte de pruebas
        */

	include("controlador/cusuario.php");
?>
<h1>Insertar Usuario </h1>
<div class="forms1">
    <form name="form1" action="" method="post">
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="documento">Documento de identificación</label>
                <input name="documento" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-6">
                <label for="usuario">Nombre de usuario</label>
                <input name="nombre" type="text" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-lg-6">
                <label for="email">Correo electronico</label>
                <input name="email" type="text" class="form-control">
            </div>
            <div class="form-group col-lg-6">
                <label for="password">Contraseña</label>
                <input name="password" type="password" class="form-control">
            </div>
        </div>
        <div class="row">    
            <div class="form-group col-lg-6">
                <input type="submit" class="btn btn-primary" value="Insertar">
            </div>
        </div>
    </form>
	<table class="table">
        <tr>
            <th>Documento de identificación</th>
            <th>Nombre de usuario</th>
            <th>Correo electronico</th>
            <th>Contraseña</th>
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
</div>    
	<!--se cambian doc por num doc, usu por nom usua por y mail por corr elec