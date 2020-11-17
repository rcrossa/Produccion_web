
<?php
//incluye la clase producto y CrudProducto
	require_once ('crud_producto.php');
	require_once ('producto.php');
	$crud= new CrudProducto();
	$producto=new Producto();
	//busca el producto utilizando el id, que es enviado por GET desde la vista mostrar.php
	$producto=$crud->obtenerProducto($_GET['idproducto']);
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="style1.css">
	<title>Actualizar Producto</title>
</head>
<body>
	<form method='post' action='administrar_producto.php' >
	<div class="table-responsive">
	<table class="table tablaingresar ">
		<tr>
			<input type='hidden' name='idproducto' value='<?php echo $producto->getIdproducto()?>'>
			<td class="table-dark" scope="row">Id ciudad:</td>
			<td class="bg-info"> <input type='text' name='idciudad' value='<?php echo $producto->getIdciudad()?>'></td>
		</tr>
		<tr>
			<td class="table-dark" scope="row">Precio:</td>
			<td class="bg-info"><input type='number' name='precio' value='<?php echo $producto->getPrecio()?>' ></td>
		</tr>
		<tr>
			<td class="table-dark" scope="row">Descripcion:</td>
			<td class="bg-info"><input type='text' name='descripcion' value='<?php echo $producto->getDescripcion() ?>'></td>
		</tr>
		<tr>
			<td class="table-dark" scope="row">Des/Detail:</td>
			<td class="bg-info"><input type='text' name='detalle' value='<?php echo $producto->getDetalle()?>' ></td>
		</tr>
		<tr>
			<td class="table-dark" scope="row">URL Image:</td>
			<td class="bg-info"><input type='text' name='url' value='<?php echo $producto->getUrl()?>' ></td>
		</tr>
		<tr>
			<td class="table-dark" scope="row">Destacado:</td>
			<td class="bg-info"><input type='number' name='destacado' value='<?php echo $producto->getDestacado()?>' ></td>
		</tr>
		<tr>
			<td class="table-dark" scope="row">Activo:</td>
			<td class="bg-info"><input type='number' name='activo' value='<?php echo $producto->getActivo()?>' ></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	</div>
	<input type='submit' value='Guardar'/>
	<button type="button" class="back-button"><a href="productos.php">Volver</a></button>
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