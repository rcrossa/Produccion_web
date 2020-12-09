<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="../crud_usuarios/style1.css "> -->
	<title>Mostrar Comentarios</title>
</head>
<body>
<?php
require_once ('crud_comentario_dinamico.php');
require_once ('comentario_dinamico.php');
$crud= new CrudComentarioDinamico();
$comentariosdinamicos= new ComentarioDinamico();
require_once ('crud_comentario_dinamico_data.php');
require_once ('comentario_dinamico_data.php');
$crud1= new CrudComentarioDinamicoData();
$comentariosdinamicosdata= new ComentarioDinamicoData();

//obtiene todos los usuarios con el método mostrar de la clase crud
$listarComentariosDinamicos=$crud->mostrar();
$listarComentariosDinamicosData=$crud1->mostrar();
?>

	<div class="table-responsive">
	<div class="table1" style="width:auto; height:220px; overflow:auto;">
		<table class="table table-bordered tablamostrar1 "  cellspacing="0" cellpadding="1">
			<thead class="table-dark">
				<th>id</th>
				<th>idproducto</th>
				<th>Label</th>
				<th>activo</th>
				<th>Actualizar</th>
				<th>Eliminar</th>
			</thead>
			<tbody>
				<?php foreach ($listarComentariosDinamicos as $comentariosdinamicos) {?>
					<tr class="table-info">                
							<td><?php echo $comentariosdinamicos->getId()?></td>
							<td><?php echo $comentariosdinamicos->getProducto_id()?></td>
							<td><?php echo $comentariosdinamicos->getLabel()?></td>
							<td><?php echo $comentariosdinamicos->getActivo()?></td>
						<td><a href="comentarios/actualizar_comentarios_dinamico.php?id=<?php echo $comentariosdinamicos->getId()?>&accion=a">Actualizar</a> </td>
						<td><a href="comentarios/administrar_comentarios_dinamico.php?id=<?php echo $comentariosdinamicos->getId()?>&accion=e">Eliminar</a>   </td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
	</div>
	<h2>Comentarios Campos Dinamicos Data</h2>
	<div class="table-responsive">
	<div class="table1" style="width:auto; height:220px; overflow:auto;">
		<table class="table table-bordered tablamostrar1 "  cellspacing="0" cellpadding="1">
			<thead class="table-dark">
				<th>id</th>
				<th>idComentario</th>
				<th>Email</th>
				<th>Detalle</th>
				<th>activo</th>
				<th>Actualizar</th>
				<th>Eliminar</th>
			</thead>
			<tbody>
				<?php foreach ($listarComentariosDinamicosData as $comentariosdinamicosdata) {?>
					<tr class="table-info">                
							<td><?php echo $comentariosdinamicosdata->getId()?></td>
							<td><?php echo $comentariosdinamicosdata->getId_comentario()?></td>
							<td><?php echo $comentariosdinamicosdata->getEmail()?></td>
							<td><?php echo $comentariosdinamicosdata->getDetalle()?></td>
							<td><?php echo $comentariosdinamicosdata->getActivo()?></td>
						<td><a href="comentarios/actualizar_comentarios_dinamico_data.php?id=<?php echo $comentariosdinamicosdata->getId()?>&accion=a">Actualizar</a> </td>
						<td><a href="comentarios/administrar_comentarios_dinamico_data.php?id=<?php echo $comentariosdinamicosdata->getId()?>&accion=e">Eliminar</a>   </td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
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
