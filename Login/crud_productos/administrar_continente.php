<?php
//incluir la clase producto y crudproducto
require_once ('crud_continente.php');
require_once ('continente.php');


$crud = new CrudContinente();
$continente= new Continente();


  try {
		// si el elemento insertar no viene nulo llama al crud e inserta un continente
		
		if (isset($_POST['insertar'])) {
			$continente->setIdcontinente(  $_POST['idcontinente']);
			$continente->setNombrecontinente(    $_POST['nombrecontinente']);
			$continente->setActivo(  $_POST['activo']);
			header("refresh:1;url=productos.php");
			echo '</a>Se registro correctamente.</a>.';
			//llama a la función insertar definida en el crud
			$crud->insertar($continente);
			header('Location: productos.php');
		// si el elemento de la vista con continente actualizar no viene nulo, llama al crud y actualiza el producto
		}elseif(isset($_POST['actualizar'])){
			$continente->setIdcontinente(  $_POST['idcontinente']);
			$continente->setNombrecontinente($_POST['nombrecontinente']);
			$continente->setActivo(  $_POST['activo']);
			$crud->actualizar($continente);
			header('Location: productos.php');
		// si la variable accion enviada por GET es == 'e' llama al crud y elimina un producto
		}elseif ($_GET['accion']=='e') {
			$crud->eliminar($_GET['idcontinente']);
			header('Location: productos.php');		
		// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
		}elseif($_GET['accion']=='a'){
			header("Location: actualizar_continente.php");
		}
  } catch (\Throwable $th) {
	header("refresh:1;url=productos.php"); 
	echo '<a>Debes completar todos los campos. Intentalo de nuevo.</a>.'; 
  }
?>