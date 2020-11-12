<?php
	//incluye la clase Db
	require_once ('conexion.php');
	
	class CrudUsuario{
		//constructor de la clase
		public function __construct(){}

		//metodo para insertar, recibe como parametro al objeto usuario

		public function insertar($usuario){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO usuarios values(NULL,:nombre,:apellido,:edad,:email,:password,:perfil)');
			$insert->bindValue('nombre',$usuario->getNombre());
			$insert->bindValue('apellido',$usuario->getApellido());
			$insert->bindValue('edad',$usuario->getEdad());
			$insert->bindValue('email',$usuario->getEmail());
			$insert->bindValue('password',$usuario->getPassword());
			$insert->bindValue('perfil',$usuario->getPerfil());
			$insert->execute();
		}
			//metodo para mostrar todos los usuarios
		public function mostrar(){
			$db=DB::conectar();
			$listarUsuarios=[];
			$select=$db->query('SELECT * FROM usuarios');

			foreach ($select->fetchAll() as $usuario) {
				$myUsuario = new Usuario();
				$myUsuario->setId($usuario['id']);
				$myUsuario->setNombre($usuario['nombre']);
				$myUsuario->setApellido($usuario['apellido']);
				$myUsuario->setEdad($usuario['edad']);
				$myUsuario->setEmail($usuario['email']);
				$myUsuario->setPassword($usuario['password']);
				$myUsuario->setPerfil($usuario['perfil']);
				$listarUsuarios[]=$myUsuario;
				# code...
			}
			return $listarUsuarios;
		}
		//metodo para eliminar un usuario, recibe como parametro el id del usuario
		public function eliminar($id){
			$db=DB::conectar();
			$eliminar=$db->prepare('DELETE FROM usuarios where ID=:id');
			$eliminar->bindvalue('id',$id);
			$eliminar->execute();
		}

		//metodo para buscar un usuario, recibe como parametro el id del usuario
		public function obtenerUsuario($id){
			$db=DB::conectar();
			$select=$db->prepare('SELECT * FROM usuarios WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$usuario=$select->fetch();
			$myUsuario= new Usuario();
			$myUsuario->setId($usuario['id']);
			$myUsuario->setNombre($usuario['nombre']);
			$myUsuario->setApellido($usuario['apellido']);
			$myUsuario->setEdad($usuario['edad']);
			$myUsuario->setEmail($usuario['email']);
			$myUsuario->setPassword($usuario['password']);
			$myUsuario->setPerfil($usuario['perfil']);
			return $myUsuario;
		}

		//metodo para actualizar un usuario, recibe como parametro el usuario
		public function actualizar($usuario){
			$db=DB::conectar();
			$actualizar=$db->prepare('UPDATE usuarios set nombre=:nombre,apellido=:apellido,edad=:edad,email=:email,password=:password,perfil=:perfil WHERE ID=:id');
			$actualizar->bindValue('id'  ,$usuario->getId());
			$actualizar->bindValue('nombre'  ,$usuario->getNombre());
			$actualizar->bindValue('apellido',$usuario->getApellido());
			$actualizar->bindValue('edad'    ,$usuario->getEdad());
			$actualizar->bindValue('email'   ,$usuario->getEmail());
			$actualizar->bindValue('password',$usuario->getPassword());
			$actualizar->bindValue('perfil'  ,$usuario->getPerfil());
			$actualizar->execute();			
		}
	}
?>