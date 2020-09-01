<?php
//incluir la clase usuario y crudusuario
require_once ('crud_usuario.php');
require_once ('usuario.php');


$crud= new CrudUsuario();
$usuario= new Usuario();


  try {
		// si el elemento insertar no viene nulo llama al crud e inserta un usuario
		
		if (isset($_POST['insertar'])) {
			$usuario->setNombre(  $_POST['nombre']);
			$usuario->setApellido($_POST['apellido']);
			$usuario->setEdad(    $_POST['edad']);
			$usuario->setEmail(   $_POST['email']);
			$usuario->setUser_id(    $_POST['user_id']);
			$usuario->setPassword(    $_POST['password']);
			$usuario->setPerfil(  $_POST['perfil']);
			//llama a la función insertar definida en el crud
			$crud->insertar($usuario);
			header('Location: usuarios.php');
		// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el usuario
		}elseif(isset($_POST['actualizar'])){
			$usuario->setId(  $_POST['id']);
			$usuario->setNombre(  $_POST['nombre']);
			$usuario->setApellido($_POST['apellido']);
			$usuario->setEdad(    $_POST['edad']);
			$usuario->setEmail(   $_POST['email']);
			$usuario->setUser_id(    $_POST['user_id']);
			$usuario->setPassword(    $_POST['password']);
			$usuario->setPerfil(  $_POST['perfil']);
			$crud->actualizar($usuario);
			header('Location: usuarios.php');
		// si la variable accion enviada por GET es == 'e' llama al crud y elimina un usuario
		}elseif ($_GET['accion']=='e') {
			$crud->eliminar($_GET['id']);
			header('Location: usuarios.php');		
		// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
		}elseif($_GET['accion']=='a'){
			header('Location: actualizar.php');
		}
  } catch (\Throwable $th) {
	// $message = "wrong answer";
	// 	// echo "<script type='text/javascript'>alert('$message');</script>";
	// 	$url ="usuarios.php"; // aqui pones la url
	// 	$tiempo_espera = 0.1; // Aquí se configura cuántos segundos hasta la actualización.
	// 	// Declaramos la funcion apra la redirección
	// 	header("echo '$message'; refresh: $tiempo_espera; url=$url");
	header("refresh:1;url=usuarios.php"); 
	echo 'Debes completar todos los campos. Intentalo de nuevo.</a>.'; 
  }
?>