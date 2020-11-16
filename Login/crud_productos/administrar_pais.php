<?php
//incluir la clase producto y crudproducto
require_once ('crud_pais.php');
require_once ('pais.php');


$crud = new CrudPais();
$pais= new Pais();


  try {
		// si el elemento insertar no viene nulo llama al crud e inserta un pais
		
		if (isset($_POST['insertar'])) {
			$pais->setIdpais(  $_POST['idpais']);
			$pais->setNombrepais(    $_POST['nombrepais']);
			$pais->setDescripcion(   $_POST['idcontinente']);
			$pais->setActivo(  $_POST['activo']);
			header("refresh:1;url=productos.php");
			echo '</a>Se registro correctamente.</a>.';
			//llama a la función insertar definida en el crud
			$crud->insertar($pais);
			header('Location: productos.php');
		// si el elemento de la vista con continente actualizar no viene nulo, llama al crud y actualiza el pais
		}elseif(isset($_POST['actualizar'])){
			$pais->setIdpais(  $_POST['idpais']);
			$pais->setNombrepais($_POST['nombrepais']);
			$pais->setDescripcion(    $_POST['idcontinente']);
			$pais->setActivo(  $_POST['activo']);
			$crud->actualizar($pais);
			header('Location: productos.php');
		// si la variable accion enviada por GET es == 'e' llama al crud y elimina un pais
		}elseif ($_GET['accion']=='e') {
			$crud->eliminar($_GET['idpais']);
			header('Location: productos.php');		
		// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
		}else($_GET['accion']=='a'){
			header('Location: actualizar.php');
		}
  } catch (\Throwable $th) {
	header("refresh:1;url=productos.php"); 
	echo '<a>Debes completar todos los campos. Intentalo de nuevo.</a>.'; 
  }
?>