<?php
require_once ('crud_comentario_dinamico.php');
require_once ('comentario_dinamico.php');


$crud= new CrudComentarioDinamico();
$comentariodinamico= new ComentarioDinamico();


  try {
		// si el elemento insertar no viene nulo llama al crud e inserta un Rol
		
		if (isset($_POST['insertar'])) {
			$comentariodinamico->setProducto_id(   $_POST['producto_id']);
			$comentariodinamico->setLabel(   $_POST['label']);
			$comentariodinamico->setActivo(   $_POST['activo']);
			//llama a la función insertar definida en el crud
			$crud->insertar($comentariodinamico);
			header('Location: ../index.php');
			echo '<script language="javascript">alert("comentario dinamico agregado");</script>';
		// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el Rol
		}elseif(isset($_POST['actualizar'])){
			$comentariodinamico->setId(   $_POST['id']);
			$comentariodinamico->setProducto_id(   $_POST['producto_id']);
			$comentariodinamico->setLabel(   $_POST['label']);
			$comentariodinamico->setActivo(   $_POST['activo']);	
			$crud->actualizar($comentariodinamico);
			header('Location: ../index.php');
		// si la variable accion enviada por GET es == 'e' llama al crud y elimina un Rol
		}elseif ($_GET['accion']=='e') {
			$crud->eliminar($_GET['id']);
			header('Location: ../index.php');		
		// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
		}elseif($_GET['accion']=='a'){
			header('Location: comentarios/actualizar_comentarios_dinamico.php');
		}
  } catch (\Throwable $th) {
	header("refresh:1;url=../index.php"); 
	echo 'Debes completar todos los campos. Intentalo de nuevo.</a>.'; 
	var_dump($comentariodinamico);
  }
?>