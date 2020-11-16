
<?php
//incluye la clase continente y CrudContinente
	require_once ('crud_continente.php');
	require_once ('continente.php');
	$crud= new CrudContinente();
	$continente=new Continente();
	//busca el producto utilizando el id, que es enviado por GET desde la vista mostrar.php
	$continente=$crud->obtenerContinente($_GET['idcontinente']);
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="style1.css">
	<title>Actualizar Contiente</title>
</head>
<body>
	<form method='post' action='administrar_continente.php' >
	<div class="table-responsive">
	<table class="table tablaingresar ">
		<tr>
			<input type='hidden' name='idcontinente' value='<?php echo $continente->getIdcontinente()?>'>
			<td class="table-dark" scope="row">Id continente:</td>
			<td class="bg-info"> <input type='text' name='idcontinente' value='<?php echo $continente->getIdcontinente()?>'></td>
		</tr>
		<tr>
			<td class="table-dark" scope="row">Nombre:</td>
			<td class="bg-info"><input type='text' name='nombrecontinente' value='<?php echo $continente->getNombrecontinente()?>' ></td>
		</tr>
		<tr>
			<td class="table-dark" scope="row">Activo:</td>
			<td class="bg-info"><input type='number' name='activo' value='<?php echo $continente->getActivo() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	</div>
	<input type='submit' value='Guardar'>
	<a href="productos.php">Volver</a>
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