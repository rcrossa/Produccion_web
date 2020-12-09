<?php
//incluye la clase Comentario y CrudComentario
require_once ('crud_comentario_dinamico.php');
require_once ('comentario_dinamico.php');
$crud= new CrudComentarioDinamico();
$comentariosdinamicos= new ComentarioDinamico();
	//busca el comentarios utilizando el idproducto, que es enviado por GET desde la vista mostrar.php
	$comentariosdinamicos=$crud->obtenerComentarioDinamico($_GET['id']);
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Actualizar Comentario Dinamico</title>
</head>
<body>
		<form method='post' action='administrar_comentarios_dinamico.php' >
			<div class="table-responsive">
				<table class="table tablaingresar ">
					<tr>
						<input type='hidden' name='id' value='<?php echo $comentariosdinamicos->getId()?>'>
						<td class="table-dark" scope="row">ID Producto:</td>
						<td class="bg-info"> <input type='number' name='producto_id' value='<?php echo $comentariosdinamicos->getProducto_id()?>'></td>
					</tr>
					<tr>
						<td class="table-dark" scope="row">Label:</td>
						<td class="bg-info"><input type='text' name='label' value='<?php echo $comentariosdinamicos->getLabel()?>' ></td>
					</tr>
					<tr>
						<td class="table-dark" scope="row">Activo:</td>
						<td class="bg-info"><input type='number' name='activo' value='<?php  echo $comentariosdinamicos->getActivo()?>' ></td>
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