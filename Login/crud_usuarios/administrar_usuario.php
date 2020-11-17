<?php
//incluir la clase usuario y crudusuario
require_once ('crud_usuario.php');
require_once ('usuario.php');


$crud= new CrudUsuario();
$usuario= new Usuario();


  try {
		// si el elemento insertar no viene nulo llama al crud e inserta un usuario
		if (isset($_POST['insertar'])) {
			$usuario->setEmail(   $_POST['email']);
			$usuario->setPassword( password_hash($_POST['password'], PASSWORD_BCRYPT));
			$usuario->setNombre(  $_POST['nombre']);
			$usuario->setApellido($_POST['apellido']);
			$usuario->setEdad(    $_POST['edad']);
			
			//llama a la función insertar definida en el crud
			$crud->insertar($usuario);
			header('Location: usuarios.php');
		// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el usuario
		}elseif(isset($_POST['actualizar'])){
			// password_hash($_POST['password'], PASSWORD_BCRYPT),$usuario->getPassword()
			$usuario->setEmail(   $_POST['email']);
			$usuario->setPassword(    password_hash($_POST['password'], PASSWORD_BCRYPT));
			$usuario->setNombre(  $_POST['nombre']);
			$usuario->setApellido($_POST['apellido']);
			$usuario->setEdad(    $_POST['edad']);
			$crud->actualizar($usuario);
			header('Location: usuarios.php');
		// si la variable accion enviada por GET es == 'e' llama al crud y elimina un usuario
		}elseif ($_GET['accion']=='e') {
			$crud->eliminar($_GET['email']);
			header('Location: usuarios.php');		
		// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
		}elseif($_GET['accion']=='a'){
			header('Location: actualizar.php');
		}
  } catch (\Throwable $th) {
	header("refresh:1;url=usuarios.php"); 
	echo 'Debes completar todos los campos. Intentalo de nuevo.</a>.'; 
  }
?>