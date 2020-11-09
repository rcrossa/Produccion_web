<?php
//incluir la clase usuario y crudusuario
require_once ('crud_tiporoles.php');
require_once ('roles.php');


$crud= new CrudTiporol();
$roles= new Roles();


  try {
		// si el elemento insertar no viene nulo llama al crud e inserta un permiso
		
		if (isset($_POST['insertar'])) {
			$roles->setIdrol(   $_POST['idrol']);
			//llama a la función insertar definida en el crud
			$crud->insertar($roles);
			header('Location: usuarios.php');
			echo '<script language="javascript">alert("Usuario agregado");</script>';
		// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el permiso
		}elseif(isset($_POST['actualizar'])){
			$roles->setIdrol(   $_POST['idrol']);	
			$crud->actualizar($roles);
			header('Location: usuarios.php');
		// si la variable accion enviada por GET es == 'e' llama al crud y elimina un permiso
		}elseif ($_GET['accion']=='e') {
			$crud->eliminar($_GET['idrol']);
			header('Location: usuarios.php');		
		// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
		}elseif($_GET['accion']=='a'){
			header('Location: actualizar_roles.php');
		}
  } catch (\Throwable $th) {
	header("refresh:1;url=usuarios.php"); 
	echo 'Debes completar todos los campos. Intentalo de nuevo.</a>.'; 
  }
?>