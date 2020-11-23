<?php
require_once ('crud_permisos.php');
require_once ('permiso.php');


$crud= new CrudPermiso();
$permiso= new Permiso();


  try {
		// si el elemento insertar no viene nulo llama al crud e inserta un permiso
		
		if (isset($_POST['insertar'])) {
			$permiso->setEmail(   $_POST['email']);
			$permiso->setTipo_rol(    $_POST['tipo_rol']);
			$permiso->setAccion(  $_POST['accion']);
			//llama a la función insertar definida en el crud
			$crud->insertar($permiso);
			header('Location: usuarios.php');
			echo '<script language="javascript">alert("Usuario agregado");</script>';
		// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el permiso
		}elseif(isset($_POST['actualizar'])){
			$permiso->setEmail(   $_POST['email']);
			$permiso->setTipo_rol(    $_POST['tipo_rol']);
			$permiso->setAccion(  $_POST['accion']);			
			$crud->actualizar($permiso);
			header('Location: usuarios.php');
		// si la variable accion enviada por GET es == 'e' llama al crud y elimina un permiso
		}elseif ($_GET['accion']=='e') {
			$crud->eliminar($_GET['email']);
			header('Location: usuarios.php');		
		// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
		}elseif($_GET['accion']=='a'){
			header('Location: actualizar_permisos.php');
		}
  } catch (\Throwable $th) {
	header("refresh:1;url=usuarios.php"); 
	echo 'Debes completar todos los campos. Intentalo de nuevo.</a>.'; 
  }
?>