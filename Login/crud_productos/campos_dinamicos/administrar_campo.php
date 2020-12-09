<?php
//incluir la clase producto y crudproducto
require_once ('crud_campo.php');
require_once ('campo.php');


$crud= new CrudCampo();
$campo= new Campo();


  try {
		// si el elemento insertar no viene nulo llama al crud e inserta un producto
		
		if (isset($_POST['insertar'])) {
			// $producto->setIdproducto(  $_POST['idproducto']);
			$campo->setId_producto(  $_POST['id_producto']);
			$campo->setLabel(    $_POST['label']);
			$campo->setActivo(  $_POST['activo']);			
			$campo->setData(   $_POST['data']);
			//llama a la función insertar definida en el crud
			$crud->insertar($campo);
			echo '</a>Se registro correctamente.</a>.';
			header('Location: ../productos.php');
		// si el elemento de la vista con producto actualizar no viene nulo, llama al crud y actualiza el producto
		}elseif(isset($_POST['actualizar'])){
			$campo->setId($_POST['id']);
			$campo->setId_producto(  $_POST['id_producto']);
			$campo->setLabel(    $_POST['label']);
			$campo->setActivo(  $_POST['activo']);			
			$campo->setData(   $_POST['data']);
			$crud->actualizar($campo);	
			header('Location: ../productos.php');
		// si la variable accion enviada por GET es == 'e' llama al crud y elimina un producto
		}elseif($_GET['accion']=='e') {
			$crud->eliminar($_GET['id']);
			header('Location: ../productos.php');		
		// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
		}elseif($_GET['accion']=='a'){
			header('Location: actualizar.php');
		}
  } catch (\Throwable $th) {
	  var_dump($_POST['actualizar']);
	header("refresh:1;url=../productos.php"); 
	echo '<a>Debes completar todos los campos. Intentalo de nuevo.</a>.'; 
  }
?>