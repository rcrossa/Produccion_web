<?php
//incluye la clase Usuario y CrudUsuario
	require_once ('crud_usuario.php');
	require_once ('usuario.php');
	$crud= new CrudUsuario();
	$usuario=new Usuario();
	//busca el usuario utilizando el id, que es enviado por GET desde la vista mostrar.php
	$usuario=$crud->obtenerUsuario($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Usuario</title>
</head>
<body>
	<form action='administrar_usuario.php' method='post'>
	<div class="table-responsive">
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $usuario->getId()?>'>
			<td>Nombre:</td>
			<td> <input type='text' name='nombre' value='<?php echo $usuario->getNombre()?>'></td>
		</tr>
		<tr>
			<td>Apellido:</td>
			<td><input type='text' name='apellido' value='<?php echo $usuario->getApellido()?>' ></td>
		</tr>
		<tr>
			<td>Edad:</td>
			<td><input type='text' name='edad' value='<?php echo $usuario->getEdad()?>' ></td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type='text' name='email' value='<?php echo $usuario->getEmail() ?>'></td>
		</tr>
		<tr>
			<td>Pass:</td>
			<td><input type='text' name='password' value='<?php echo $usuario->getPassword()?>' ></td>
		</tr>
		<tr>
			<td>Perfil:</td>
			<td><input type='text' name='perfil' value='<?php echo $usuario->getPerfil()?>' ></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	</div>
	<input type='submit' value='Guardar'>
	<a href="usuarios.php">Volver</a>
</form>
</body>
</html>