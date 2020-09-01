<?php
//incluye la clase Usuario y CrudUsuario
	require_once ('crud_producto.php');
	require_once ('producto.php');
	$crud= new CrudProducto();
	$producto=new Producto();
	//busca el producto utilizando el id, que es enviado por GET desde la vista mostrar.php
	$producto=$crud->obtenerProducto($_GET['id']);
?>
<html>
<head>
	<title>Actualizar Producto</title>
</head>
<body>
	<form action='administrar_producto.php' method='post'>
	<div class="table-responsive">
	<table>
		<tr>
			<input type='hidden' name='id' value='<?php echo $producto->getId()?>'>
			<td>Continente:</td>
			<td> <input type='text' name='Continente' value='<?php echo $producto->getContinente()?>'></td>
		</tr>
		<tr>
			<td>Pais:</td>
			<td><input type='text' name='pais' value='<?php echo $producto->getPais()?>' ></td>
		</tr>
		<tr>
			<td>Precio:</td>
			<td><input type='text' name='precio' value='<?php echo $producto->getPrecio()?>' ></td>
		</tr>
		<tr>
			<td>Descripcion:</td>
			<td><input type='text' name='descripcion' value='<?php echo $producto->getDescripcion() ?>'></td>
		</tr>
		<tr>
			<td>Des/Detail:</td>
			<td><input type='text' name='descripcion_details' value='<?php echo $producto->getDescripcion_details()?>' ></td>
		</tr>
		<tr>
			<td>URL Image:</td>
			<td><input type='text' name='url' value='<?php echo $producto->getUrl()?>' ></td>
		</tr>
		<tr>
			<td>Destacado:</td>
			<td><input type='text' name='destacado' value='<?php echo $producto->getDestacado()?>' ></td>
		</tr>
		<tr>
			<td>Activo:</td>
			<td><input type='text' name='activo' value='<?php echo $producto->getActivo()?>' ></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	</div>
	<input type='submit' value='Guardar'>
	<a href="productos.php">Volver</a>
</form>
</body>
</html>