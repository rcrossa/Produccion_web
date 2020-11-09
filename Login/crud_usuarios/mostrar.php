<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="style1.css ">
	<title>Mostrar Usuarios</title>
</head>
<body>
<?php
//incluye la clase Libro y CrudLibro
require_once ('crud_usuario.php');
require_once ('usuario.php');
require_once ('crud_permisos.php');
require_once ('permiso.php');
require_once ('crud_tiporoles.php');
require_once ('roles.php');

$crud = new CrudUsuario();
$usuario= new Usuario();

$crud1= new CrudPermiso();
$permiso= new Permiso();

$crud2= new CrudTiporol();
$roles= new Roles();
//obtiene todos los usuarios con el método mostrar de la clase crud
$listarUsuarios=$crud->mostrar();
$listarPermisos=$crud1->mostrar();
$listarTiporol =$crud2->mostrar();
?>
<div class="table1" style="width:auto; height:220px; overflow:auto;">
<table class="table table-bordered tablamostrar1 "  cellspacing="0" cellpadding="1">
		<thead class="table-dark">
			<th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Password</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
		</thead>
		<tbody>
			<?php foreach ($listarUsuarios as $usuario) {?>
			<tr class="table-info">
                <td><?php echo $usuario->getNombre() ?></td>
                <td><?php echo $usuario->getApellido() ?></td>
                <td><?php echo $usuario->getEdad() ?></td>
                <td><?php echo $usuario->getEmail() ?></td>
                <td><?php echo $usuario->getPassword() ?></td>
				<td><a href="actualizar.php?email=<?php echo $usuario->getEmail()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_usuario.php?email=<?php echo $usuario->getEmail()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</tbody>
	</table>
</div>
<div class="table1" style="width:auto; height:220px; overflow:auto;">
    <table class="table table-bordered tablamostrar1 " cellspacing="0" cellpadding="1">
		<thead class="table-dark">
			<th>Email</th>
            <th>Rol</th>
            <th>Accion</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
		</thead>
		<tbody>
			<?php foreach ($listarPermisos as $permiso) {?>
			<tr class="table-info">
                <td><?php echo $permiso->getEmail() ?></td>
                <td><?php echo $permiso->getTipo_rol() ?></td>
                <td><?php echo $permiso->getAccion() ?></td>
				<td><a href="actualizarpermisos.php?email=<?php echo $permiso->getEmail()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_permisos.php?email=<?php echo $permiso->getEmail()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</tbody>
	</table>
</div>
<div class="table1" style="width:auto; height:220px; overflow:auto;">
    <table class="table table-bordered tablamostrar1 "  cellspacing="0" cellpadding="1">
		<thead class="table-dark fixed">
			<th>Roles</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
		</thead>
		<tbody>
			<?php foreach ($listarTiporol as $roles) {?>
			<tr class="table-info">
                <td><?php echo $roles->getIdrol() ?></td>
				<td><a href="actualizarroles.php?idrol=<?php echo $roles->getIdrol()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_roles.php?idrol=<?php echo $roles->getIdrol()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</tbody>
	</table>
</div>
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
