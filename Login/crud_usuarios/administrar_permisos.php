<?php
//incluir la clase usuario y crudusuario
require_once ('crud_permisos.php');
require_once ('permiso.php');


$crud= new CrudPermiso();
$usuario= new Permiso();


  try {
		// si el elemento insertar no viene nulo llama al crud e inserta un usuario
		
		if (isset($_POST['insertar'])) {
			$permiso->setEmail(   $_POST['email']);
			$permiso->setTipo_rol(    $_POST['tipo_rol']);
			$permiso->setAccion(  $_POST['Accion']);
			//llama a la función insertar definida en el crud
			$crud->insertar($permiso);
			header('Location: usuarios.php');
		// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el usuario
		}elseif(isset($_POST['actualizar'])){
			// password_hash($_POST['password'], PASSWORD_BCRYPT),$usuario->getPassword()
			$permiso->setEmail(   $_POST['email']);
			$permiso->setTipo_rol(    $_POST['tipo_rol']);
			$permiso->setAccion(  $_POST['Accion']);			
			$crud->actualizar($permiso);
			header('Location: usuarios.php');
		// si la variable accion enviada por GET es == 'e' llama al crud y elimina un usuario
		}elseif ($_GET['accion']=='e') {
			$crud->eliminar($_GET['email']);
			header('Location: usuarios.php');		
		// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
		}elseif($_GET['accion']=='a'){
			header('Location: actualizarpermisos.php');
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