<?php
	//incluye la clase Db
	require_once ('conexion.php');
	
	class CrudUsuario{
		//constructor de la clase
		public function __construct(){}

		//metodo para insertar, recibe como parametro al objeto usuario

		public function insertar($usuario){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO usuarios values(:email,:password,:nombre,:apellido,:edad)');
			$insert->bindValue('email',$usuario->getEmail());
			$insert->bindValue('password',password_hash('password', PASSWORD_BCRYPT),$usuario->getPassword());
			$insert->bindValue('nombre',$usuario->getNombre());
			$insert->bindValue('apellido',$usuario->getApellido());
			$insert->bindValue('edad',$usuario->getEdad());
			$insert->execute();
			
		}
			//metodo para mostrar todos los usuarios
		public function mostrar(){
			$db=DB::conectar();
			$listarUsuarios=[];
			$select=$db->query('SELECT * FROM usuarios');

			foreach ($select->fetchAll() as $usuario) {
				$myUsuario = new Usuario();
				// $myUsuario->setId($usuario['id']);				
				$myUsuario->setEmail($usuario['email']);
				$myUsuario->setPassword($usuario['password']);
				$myUsuario->setNombre($usuario['nombre']);
				$myUsuario->setApellido($usuario['apellido']);
				$myUsuario->setEdad($usuario['edad']);
				$listarUsuarios[]=$myUsuario;
				# code...
			}
			return $listarUsuarios;
		}
		//metodo para eliminar un usuario, recibe como parametro el id del usuario
		public function eliminar($email){
			$db=DB::conectar();
			$eliminar=$db->prepare('DELETE FROM usuarios where EMAIL=:email');
			$eliminar->bindvalue('email',$email);
			$eliminar->execute();
		}

		//metodo para buscar un usuario, recibe como parametro el id del usuario
		public function obtenerUsuario($email){
			$db=DB::conectar();
			$select=$db->prepare('SELECT * FROM usuarios WHERE EMAIL=:email');
			$select->bindValue('email',$email);
			$select->execute();
			$usuario=$select->fetch();
			$myUsuario= new Usuario();
			$myUsuario->setEmail($usuario['email']);
			$myUsuario->setPassword($usuario['password']);
			$myUsuario->setNombre($usuario['nombre']);
			$myUsuario->setApellido($usuario['apellido']);
			$myUsuario->setEdad($usuario['edad']);
			return $myUsuario;
		}

		//metodo para actualizar un usuario, recibe como parametro el usuario
		public function actualizar($usuario){
			$db=DB::conectar();
			$actualizar=$db->prepare('UPDATE usuarios set email=:email,password=:password,nombre=:nombre,apellido=:apellido,edad=:edad WHERE EMAIL=:email');
			$actualizar->bindValue('email',$usuario->getEmail());
			$actualizar->bindValue('password',$usuario->getPassword());
			$actualizar->bindValue('nombre'  ,$usuario->getNombre());
			$actualizar->bindValue('apellido',$usuario->getApellido());
			$actualizar->bindValue('edad'    ,$usuario->getEdad());
			$actualizar->execute();			
		}		
	}
?>