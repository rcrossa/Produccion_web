<?php
//incluir la clase producto y crudproducto
require_once ('crud_producto.php');
require_once ('producto.php');


$crud= new CrudProducto();
$producto= new Producto();


  try {
		// si el elemento insertar no viene nulo llama al crud e inserta un producto
		if(isset($_FILES['userfile'])){
				$tipo_archivo = $_FILES['userfile']['type'];
				$tamano_archivo = $_FILES['userfile']['size'];
				$destino = _DIR_ . "/campos_dinamicos/".$nombre_archivo;
				move_uploaded_file($_FILES['userfile']['tmp_name'],  $destino)
				if (!(($_FILES['userfile']['type'] == "application/msword" ||  strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "png")) && ($tamano_archivo < 500000))) {

				echo 'El tamaño o el  tipo de archivo es incorrecto';
				
				}elseif(!move_uploaded_file($_FILES['userfile']['tmp_name'],  $destino)){
				// move_uploaded_file se utiliza para mover el archivo a la posición definitiva
       
            		echo 'Ocurrió algún error al subir el fichero. No pudo guardarse.' ;
					}
				}

		if (isset($_POST['insertar'])) {

			// if(isset($_FILES['userfile'])){
			// 	$nombre_archivo = $_FILES['userfile']['name'];
			// $nombre_archivo= uniqid().'.'.pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
			// 	$directorio_definitivo = "C:\xampp\htdocs";
			// 	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $directorio_definitivo.$nombre_archivo)){
			// 		echo "El archivo ha sido cargado correctamente.";
			// 		}else{
			// 		echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
			// 		}
			// // 				}
				
				// }
			// $producto->setIdproducto(  $_POST['idproducto']);
			$producto->setIdciudad(  $_POST['idciudad']);
			$producto->setPrecio(    $_POST['precio']);
			$producto->setDescripcion(   $_POST['descripcion']);
			$producto->setDetalle(    $_POST['detalle']);
			$producto->setUrl(    $_POST['url']);
			$producto->setDestacado(  $_POST['destacado']);
			$producto->setActivo(  $_POST['activo']);
			//llama a la función insertar definida en el crud
			$crud->insertar($producto);
			echo '</a>Se registro correctamente.</a>.';
			header('Location: productos.php');
		// si el elemento de la vista con producto actualizar no viene nulo, llama al crud y actualiza el producto
		}elseif(isset($_POST['actualizar'])){
			$producto->setIdproducto($_POST['idproducto']);
			$producto->setIdciudad($_POST['idciudad']);
			$producto->setPrecio(    $_POST['precio']);
			$producto->setDescripcion(   $_POST['descripcion']);
			$producto->setDetalle(    $_POST['detalle']);
			$producto->setUrl(    $_POST['url']);
			$producto->setDestacado(  $_POST['destacado']);
			$producto->setActivo(  $_POST['activo']);
			$crud->actualizar($producto);	
			header('Location: productos.php');
		// si la variable accion enviada por GET es == 'e' llama al crud y elimina un producto
		}elseif($_GET['accion']=='e') {
			$crud->eliminar($_GET['idproducto']);
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