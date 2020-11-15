<?php
	//incluye la clase Db
	require_once ('conexion.php');
	
	class CrudComentario{
		//constructor de la clase
		public function __construct(){}

		//metodo para insertar, recibe como parametro al objeto comentario

		public function insertar($comentario){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO comentarios values( :idproducto,:ip,:fecha,:comentario,:estrellas,:activo,:email)');
			$insert->bindValue('idproducto',$comentario->getIdproducto());
			$insert->bindValue('ip',$comentario->getIp());
			$insert->bindValue('fecha',$comentario->getFecha());
			$insert->bindValue('comentario',$comentario->getComentario());
			$insert->bindValue('estrellas',$comentario->getEstrellas());
			$insert->bindValue('activo',$comentario->getActivo());
			$insert->bindValue('email',$comentario->getEmail());
			$insert->execute();
			
		}
			//metodo para mostrar todos los comentarios
		public function mostrar(){
			$db=DB::conectar();
			$listarComentarios=[];
			$select=$db->query('SELECT * FROM comentarios');

			foreach ($select->fetchAll() as $comentario) {
				$myComentario = new Comentario();
				$myComentario->setIdproducto($comentario['idproducto']);				
				$myComentario->setIp($comentario['ip']);
				$myComentario->setFecha($comentario['fecha']);
				$myComentario->setComentario($comentario['comentario']);
				$myComentario->setEstrellas($comentario['estrellas']);
				$myComentario->setActivo($comentario['activo']);
				$myComentario->setEmail($comentario['email']);
				$listarComentarios[]=$myComentario;
				# code...
			}
			return $listarComentarios;
		}
		//metodo para eliminar un comentario, recibe como parametro el id del producto
		public function eliminar($idproducto){
			$db=DB::conectar();
			$eliminar=$db->prepare('DELETE FROM comentarios where IDPRODUCTO=:idproducto');
			$eliminar->bindvalue('idproducto',$idproducto);
			$eliminar->execute();
		}

		//metodo para buscar un comentario, recibe como parametro el id del producto
		public function obtenerUsuario($idproducto){
			$db=DB::conectar();
			$select=$db->prepare('SELECT * FROM comentarios WHERE IDPRODUCTO=:idproducto');
			$select->bindValue('idproducto',$idproducto);
			$select->execute();
			$comentario=$select->fetch();
			$myComentario= new Usuario();
			$myComentario->setIdproducto($comentario['idproducto']);				
				$myComentario->setIp($comentario['ip']);
				$myComentario->setFecha($comentario['fecha']);
				$myComentario->setComentario($comentario['comentario']);
				$myComentario->setEstrellas($comentario['estrellas']);
				$myComentario->setActivo($comentario['activo']);
				$myComentario->setEmail($comentario['email']);
			return $myComentario;
		}

		//metodo para actualizar un comentarios, recibe como parametro el id del producto
		public function actualizar($comentario){
			$db=DB::conectar();
			$actualizar=$db->prepare('UPDATE comentarios set idproducto=:idproducto,ip=:ip,fecha=:fecha,comentario=:comentario,estrellas=:estrellas,activo=:activo,email=:email
			 WHERE IDPRODUCTO=:idproducto');
			$actualizar->bindValue('idproducto',$comentario->getIdproducto());
			$actualizar->bindValue('ip',$comentario->getIp());
			$actualizar->bindValue('fecha',$comentario->getFecha());
			$actualizar->bindValue('comentario',$comentario->getComentario());
			$actualizar->bindValue('estrellas',$comentario->getEstrellas());
			$actualizar->bindValue('activo',$comentario->getActivo());
			$actualizar->bindValue('email',$comentario->getEmail());
			$actualizar->execute();			
		}		
	}
?>