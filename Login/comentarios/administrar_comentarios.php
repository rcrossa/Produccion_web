<?php
require_once ('crud_comentario.php');
require_once ('comentario.php');


$crud= new CrudComentario();
$comentarios= new comentario();


  try {
		// si el elemento insertar no viene nulo llama al crud e inserta un Rol
		
		if (isset($_POST['insertar'])) {
			$roles->setIdproducto(   $_POST['idproducto']);
			//llama a la función insertar definida en el crud
			$crud->insertar($comentarios);
			header('Location: ../Panelusuario/index.php');
			echo '<script language="javascript">alert("Usuario agregado");</script>';
		// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el Rol
		}elseif(isset($_POST['actualizar'])){
			$comentarios->setIdproducto(   $_POST['idproducto']);	
			$crud->actualizar($comentarios);
			header('Location: ../Panelusuario/index.php');
		// si la variable accion enviada por GET es == 'e' llama al crud y elimina un Rol
		}elseif ($_GET['accion']=='e') {
			$crud->eliminar($_GET['idproducto']);
			header('Location: ../Panelusuario/index.php');		
		// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
		}elseif($_GET['accion']=='a'){
			header('Location: actualizar_comentarios.php');
		}
  } catch (\Throwable $th) {
	header("refresh:1;url=usuarios.php"); 
	echo 'Debes completar todos los campos. Intentalo de nuevo.</a>.'; 
  }
?>