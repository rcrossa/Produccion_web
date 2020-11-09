<?php
//incluye la clase Usuario y CrudUsuario
	require_once ('crud_tiporoles.php');
	require_once ('roles.php');
	$crud= new CrudTiporol();
	$roles=new Roles();
	//busca el usuario utilizando el id, que es enviado por GET desde la vista mostrar.php
	$roles=$crud->obternerTiporol($_GET['idrol']);
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Actualizar Roles</title>
</head>
<body>
		<form method='post' action='administrar_roles.php' >
			<div class="table-responsive">
				<table class="table tablaingresar ">
					<tr>
						<input type='hidden' name='idrol' value='<?php echo $roles->getIdrol()?>'>
						<td class="table-dark" scope="row">Rol:</td>
						<td class="bg-info"> <input type='text' name='idrol' value='<?php echo $roles->getIdrol()?>'></td>
					</tr>
					<input type='hidden' name='actualizar' value='actualizar'>
				</table>
			</div>
			<!-- <button type="submit" value="actualizar" >actualizar</button> -->
			<input type='submit' value='Guardar'/>
			<button type="button" class="back-button"><a href="usuarios.php">Volver</a></button>
			<!-- <input type='submit'> <a href="usuarios.php">Volver</a> -->
		</form>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>
</html>