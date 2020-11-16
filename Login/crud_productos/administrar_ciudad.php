<?php
//incluir la clase producto y crudproducto
require_once ('crud_ciudad.php');
require_once ('ciudad.php');


$crud = new CrudCiudad();
$ciudad= new Ciudad();


  try {
		// si el elemento insertar no viene nulo llama al crud e inserta un pais
		
		if (isset($_POST['insertar'])) {
			$ciudad->setIdciudad(  $_POST['idciudad']);
			$ciudad->setNombreciudad(    $_POST['nombreciudad']);
			$ciudad->setIdpais(   $_POST['idpais']);
			$ciudad->setActivo(  $_POST['activo']);
			header("refresh:1;url=productos.php");
			echo '</a>Se registro correctamente.</a>.';
			//llama a la función insertar definida en el crud
			$crud->insertar($ciudad);
			header('Location: productos.php');
		// si el elemento de la vista con continente actualizar no viene nulo, llama al crud y actualiza el pais
		}elseif(isset($_POST['actualizar'])){
			$ciudad->setIdciudad(  $_POST['idciudad']);
			$ciudad->setNombreciudad($_POST['nombreciudad']);
			$ciudad->setIdpais(    $_POST['idpais']);
			$ciudad->setActivo(  $_POST['activo']);
			$crud->actualizar($ciudad);
			header('Location: productos.php');
		// si la variable accion enviada por GET es == 'e' llama al crud y elimina un pais
		}elseif ($_GET['accion']=='e') {
			$crud->eliminar($_GET['idciudad']);
			header('Location: productos.php');		
		// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
		}elseif($_GET['accion']=='a'){
			header('Location: actualizar.php');
		}
  } catch (\Throwable $th) {
	header("refresh:1;url=productos.php"); 
	echo '<a>Debes completar todos los campos. Intentalo de nuevo.</a>.'; 
  }
?>