<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="style1.css">
	<title>Mostrar Usuarios</title>
</head>
<body>
<?php
//incluye la clase Producto y CrudProducto
require_once ('crud_producto.php');
require_once ('producto.php');
$crud = new CrudProducto();
$producto= new Producto();
//obtiene todos los productos con el método mostrar de la clase crud
$listarProductos=$crud->mostrar();
?>
<div class="table1" style="width:auto; height:220px; overflow:auto;">
<table class="table table-bordered tablamostrar1 " cellspacing="0" cellpadding="1">
		<thead class="table-dark">
			<th>Id Ciudad</th>
            <th>Precio</th>
            <th>Descripcion</th>
			<th>Des/Detail</th>
            <th>URL imgen</th>
            <th>Destacado</th>
            <th>Activo</th>
			<th>Actualizar</th>
			<th>Eliminar</th>
		</thead>
		<tbody>
			<?php foreach ($listarProductos as $producto) {?>
			<tr class="table-info">                
                <td><?php echo $producto->getIdciudad()   ?></td>
                <td><?php echo $producto->getPrecio() ?></td>
                <td><?php echo $producto->getDescripcion()     ?></td>
                <td><?php echo $producto->getDetalle()    ?></td>
                <td><?php echo $producto->getUrl()  ?></td>
                <td><?php echo $producto->getDestacado() ?></td>
                <td><?php echo $producto->getActivo()   ?></td>
				<td><a href="actualizar.php?idciudad=<?php echo $producto->getIdciudad()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_producto.php?idciudad=<?php echo $producto->getIdciudad()?>&accion=e">Eliminar</a>  </td>
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
