<?php
//incluir la clase producto y crudproducto
require_once ('crud_producto.php');
require_once ('producto.php');


$crud = new CrudProducto();
$producto= new Producto();


  try {
		// si el elemento insertar no viene nulo llama al crud e inserta un producto
		
		if (isset($_POST['insertar'])) {
			$producto->setIdciudad(  $_POST['idciudad']);
			$producto->setPrecio(    $_POST['precio']);
			$producto->setDescripcion(   $_POST['descripcion']);
			$producto->setDescripcion_details(    $_POST['detalle']);
			$producto->setUrl(    $_POST['url']);
			$producto->setDestacado(  $_POST['destacado']);
			$producto->setActivo(  $_POST['activo']);
			header("refresh:1;url=productos.php");
			echo '</a>Se registro correctamente.</a>.';
			//llama a la función insertar definida en el crud
			$crud->insertar($producto);
			header('Location: productos.php');
		// si el elemento de la vista con continente actualizar no viene nulo, llama al crud y actualiza el producto
		}elseif(isset($_POST['actualizar'])){
			$producto->setIdproducto(  $_POST['idproducto']);
			$producto->setIdciudad($_POST['idciudad']);
			$producto->setPrecio(    $_POST['precio']);
			$producto->setDescripcion(   $_POST['descripcion']);
			$producto->setDescripcion_details(    $_POST['detalle']);
			$producto->setUrl(    $_POST['url']);
			$producto->setDestacado(  $_POST['destacado']);
			$producto->setActivo(  $_POST['activo']);
			$crud->actualizar($producto);
			header('Location: productos.php');
		// si la variable accion enviada por GET es == 'e' llama al crud y elimina un producto
		}elseif ($_GET['accion']=='e') {
			$crud->eliminar($_GET['idproducto']);
			header('Location: productos.php');		
		// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
		}else($_GET['accion']=='a'){
			header('Location: actualizar.php');
		}
  } catch (\Throwable $th) {
	// $message = "wrong answer";
	// 	// echo "<script type='text/javascript'>alert('$message');</script>";
	// 	$url ="productos.php"; // aqui pones la url
	// 	$tiempo_espera = 0.1; // Aquí se configura cuántos segundos hasta la actualización.
	// 	// Declaramos la funcion apra la redirección
	// 	header("echo '$message'; refresh: $tiempo_espera; url=$url");
	header("refresh:1;url=productos.php"); 
	echo '<a>Debes completar todos los campos. Intentalo de nuevo.</a>.'; 
  }
?>