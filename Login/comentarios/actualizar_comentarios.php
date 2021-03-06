<?php
//incluye la clase Comentario y CrudComentario
	require_once ('crud_comentario.php');
	require_once ('comentario.php');
	$crud= new CrudComentario();
	$comentario=new Comentario();
	//busca el comentarios utilizando el idproducto, que es enviado por GET desde la vista mostrar.php
	$comentario=$crud->obtenerComentario($_GET['idproducto']);
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Actualizar Comentario</title>
</head>
<body>
		<form method='post' action='administrar_comentarios.php' >
			<div class="table-responsive">
				<table class="table tablaingresar ">
					<tr>
						<input type='hidden' name='idcomentarios' value='<?php echo $comentario->getIdproducto()?>'>
						<td class="table-dark" scope="row">ID:</td>
						<td class="bg-info"> <input type='number' name='idproducto' value='<?php echo $comentario->getIdproducto()?>'></td>
					</tr>
					<tr>
						<td class="table-dark" scope="row">IP:</td>
						<td class="bg-info"><input type='text' name='ip' value='<?php echo $comentario->getIp()?>' ></td>
					</tr>
					<tr>
						<td class="table-dark" scope="row">Fecha:</td>
						<td class="bg-info"><input type='date' name='fecha' value='<?php echo $comentario->getFecha()?>' ></td>
					</tr>
					<tr>
						<td class="table-dark" scope="row">Comentario:</td>
						<td class="bg-info"><input type='text' name='comentario' value='<?php echo $comentario->getComentario() ?>'></td>
					</tr>
					<tr>
						<td class="table-dark" scope="row">Estrellas:</td>
						<td class="bg-info"><input type='text' name='estrellas' value='<?php echo $comentario->getEstrellas() ?>'></td>
					</tr>
					<tr>
						<td class="table-dark" scope="row">Activo:</td>
						<td class="bg-info"><input type='number' name='activo' value='<?php  echo $comentario->getActivo()?>' ></td>
					</tr>
					<tr>
						<td class="table-dark" scope="row">Email:</td>
						<td class="bg-info"><input type='text' name='email' value='<?php echo $comentario->getEmail() ?>'></td>
					</tr>
					<input type='hidden' name='actualizar' value='actualizar'>
				</table>
			</div>
			<input type='submit' value='Guardar'/>
			<button type="button" class="back-button"><a href="../index.php">Volver</a></button>
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