<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="style1.css ">
	<title>Mostrar Comentarios</title>
</head>
<body>
<?php

require_once ('crud_comentario.php');
require_once ('comentario.php');

$crud = new CrudComentario();
$comentario= new Comentario();

//obtiene todos los usuarios con el método mostrar de la clase crud
$listarComentarios=$crud->mostrar();
?>
<div class="container-fluid">
	<div class="table-responsive">
	<div class="table1" style="width:auto; height:220px; overflow:auto;">
		<table class="table table-bordered tablamostrar1 "  cellspacing="0" cellpadding="1">
			<thead class="table-dark">
				<th>Fecha</th>
				<th>Comentario</th>
				<th>Estrellas</th>
				<th>Email</th>
			</thead>
			<tbody>			
				<?php foreach ($listarComentarios as $comentario) {?>	
					<?php var_dump($comentario);?>
					<?php  if($comentario==$_SESSION['email']){?>
						
						<tr class="table-info">
							<td><?php echo $comentario->getFecha() ?></td>
							<td><?php echo $comentario->getComentario() ?></td>
							<td><?php echo $comentario->getEstrellas() ?></td>
							<!-- <td><a href="actualizar.php?email=<?php echo $usuario->getEmail()?>&accion=a">Actualizar</a> </td>
							<td><a href="administrar_usuario.php?email=<?php echo $usuario->getEmail()?>&accion=e">Eliminar</a>   </td> -->
						</tr>
						<?php }else {?>
					<?php echo "no hay datos"  ?>
				<?php }?>
					<?php }?>
										
				
			</tbody>
		</table>
	</div>
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
