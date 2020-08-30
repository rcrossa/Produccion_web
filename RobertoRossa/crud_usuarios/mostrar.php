<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Mostrar Usuarios</title>
</head>
<body>
<?php
//incluye la clase Libro y CrudLibro
require_once ('crud_usuario.php');
require_once ('usuario.php');
$crud=new CrudUsuario();
$usuario= new Usuario();
//obtiene todos los usuarios con el método mostrar de la clase crud
$listarUsuarios=$crud->mostrar();
?>
<div class="table-responsive ">
<table class="table table-bordered tablamostrar1 ">
		<thead class="table-dark">
			<th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Email</th>
			<th>Usuario</th>
            <th>Password</th>
            <th>Perfil</th>
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
                <td><?php echo $usuario->getUser_id() ?></td>
                <td><?php echo $usuario->getPassword() ?></td>
                <td><?php echo $usuario->getPerfil() ?></td>
				<td><a href="actualizar.php?id=<?php echo $usuario->getId()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_usuario.php?id=<?php echo $usuario->getId()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</tbody>
	</table>
</div>
	<!-- <button onclick="window.location.href='index.php'" type="button"
                        class="btn btn-primary btn-sm">Volver</button></p> -->
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
