<?php
require_once ('crud_comentario_dinamico_data.php');
require_once ('comentario_dinamico_data.php');


$crud= new CrudComentarioDinamicoData();
$comentariosdinamicosdata= new ComentarioDinamicoData();


  try {
		// si el elemento insertar no viene nulo llama al crud e inserta un Rol
		
		if (isset($_POST['insertar'])) {
			// $comentariosdinamicos->setId(   $_POST['id']);
			$comentariosdinamicosdata->setId_comentario(   $_POST['d_comentario']);
			$comentariosdinamicosdata->setEmail(   $_POST['email']);
			$comentariosdinamicosdata->setDetalle(   $_POST['detalle']);
			$comentariosdinamicosdata->setActivo(   $_POST['activo']);
			//llama a la función insertar definida en el crud
			$crud->insertar($comentariosdinamicosdata);
			header('Location: ../index.php');
			echo '<script language="javascript">alert("comentario dinamico data agregado");</script>';
		// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el Rol
		}elseif(isset($_POST['actualizar'])){
			$comentariosdinamicosdata->setId(   $_POST['id']);
			$comentariosdinamicosdata->setId_comentario(   $_POST['Id_comentario']);
			$comentariosdinamicosdata->setEmail(   $_POST['email']);
			$comentariosdinamicosdata->setDetalle(   $_POST['detalle']);
			$comentariosdinamicosdata->setActivo(   $_POST['activo']);	
			$crud->actualizar($comentariosdinamicosdata);
			header('Location: ../index.php');
		// si la variable accion enviada por GET es == 'e' llama al crud y elimina un Rol
		}elseif ($_GET['accion']=='e') {
			$crud->eliminar($_GET['id']);
			header('Location: ../index.php');		
		// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
		}elseif($_GET['accion']=='a'){
			header('Location: comentarios/actualizar_comentarios_dinamico_data.php');
		}
  } catch (\Throwable $th) {
	header("refresh:1;url=../index.php"); 
	echo 'Debes completar todos los campos. Intentalo de nuevo.</a>.'; 
  }
?>