<?php
//incluye la clase Comentario y CrudComentario
require_once ('crud_comentario_dinamico_data.php');
require_once ('comentario_dinamico_data.php');
$crud= new CrudComentarioDinamicoData();
$comentariosdinamicosdata= new ComentarioDinamicoData();
	//busca el comentarios utilizando el idproducto, que es enviado por GET desde la vista mostrar.php
	$comentariosdinamicosdata=$crud->obtenerComentarioDinamicoData($_GET['id']);
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Actualizar Comentario Dinamico Data</title>
</head>
<body>
		<form method='post' action='administrar_comentarios_dinamico_data.php' >
			<div class="table-responsive">
				<table class="table tablaingresar ">
					<tr>
						<input type='hidden' name='id' value='<?php echo $comentariosdinamicosdata->getId()?>'>
						<td class="table-dark" scope="row">ID Comentario:</td>
						<td class="bg-info"> <input type='number' name='id_comentario' value='<?php echo $comentariosdinamicosdata->getId_comentario()?>'></td>
					</tr>
					<tr>
						<td class="table-dark" scope="row">Email:</td>
						<td class="bg-info"><input type='text' name='label' value='<?php echo $comentariosdinamicosdata->getEmail()?>' ></td>
					</tr>
					<tr>
						<td class="table-dark" scope="row">Detalle:</td>
						<td class="bg-info"><input type='text' name='label' value='<?php echo $comentariosdinamicosdata->getDetalle()?>' ></td>
					</tr>
					<tr>
						<td class="table-dark" scope="row">Activo:</td>
						<td class="bg-info"><input type='number' name='activo' value='<?php  echo $comentariosdinamicosdata->getActivo()?>' ></td>
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