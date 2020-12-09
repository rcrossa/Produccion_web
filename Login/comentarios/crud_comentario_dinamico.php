<?php
	//incluye la clase Db
	require_once ('conexion.php');
	
	class CrudComentarioDinamico{
		//constructor de la clase
		public function __construct(){}

		//metodo para insertar, recibe como parametro al objeto comentario

		public function insertar($comentariodinamico){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO comentarios_campo_dinamic values( :id,:idproducto,:label,:activo)');
			$insert->bindValue('id',$comentariodinamico->getId());
			$insert->bindValue('Producto_id',$comentariodinamico->getProducto_id());
			$insert->bindValue('label',$comentariodinamico->getLabel());
			$insert->bindValue('activo',$comentariodinamico->getActivo());
			$insert->execute();
			
		}
			//metodo para mostrar todos los comentarios
		public function mostrar(){
			$db=DB::conectar();
			$listarComentariosDinamicos=[];
			$select=$db->query('SELECT * FROM comentarios_campo_dinamic');

			foreach ($select->fetchAll() as $comentariodinamico) {
				$myComentarioDinamico = new ComentarioDinamico();
				$myComentarioDinamico->setId($comentariodinamico['id']);
				$myComentarioDinamico->setProducto_id($comentariodinamico['idproducto']);				
				$myComentarioDinamico->setLabel($comentariodinamico['label']);
				$myComentarioDinamico->setActivo($comentariodinamico['activo']);
				$listarComentariosDinamicos[]=$myComentarioDinamico;
				# code...
			}
			return $listarComentariosDinamicos;
		}

		//Mostrar los comentarios pedientes de aprobacion
		public function mostrar1(){
			$db=DB::conectar();
			$listarComentariosDinamicos1=[];
			$select=$db->query('SELECT * FROM comentarios_campo_dinamic WHERE activo=0');

			foreach ($select->fetchAll() as $comentariodinamico) {
				$myComentarioDinamico = new ComentarioDinamico();
				$myComentarioDinamico->setId($comentariodinamico['id']);			
				$myComentarioDinamico->setProducto_id($comentariodinamico['producto_id']);	
				$myComentarioDinamico->setLabel($comentariodinamico['label']);
				$myComentarioDinamico->setActivo($comentariodinamico['activo']);
				$listarComentariosDinamicos1[]=$myComentarioDinamico;
				# code...
			}
			return $listarComentariosDinamicos1;
		}
		//metodo para eliminar un comentario, recibe como parametro el id del comentario
		public function eliminar($id){
			$db=DB::conectar();
			$eliminar=$db->prepare('DELETE FROM comentarios_campo_dinamic where ID=:id');
			$eliminar->bindvalue('id',$id);
			$eliminar->execute();
		}

		//metodo para buscar un comentario, recibe como parametro el id del comentario
		public function obtenerComentarioDinamico($id){
			$db=DB::conectar();
			$select=$db->prepare('SELECT * FROM comentarios_campo_dinamic WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$comentario=$select->fetch();
			$myComentarioDinamico= new ComentarioDinamico();
			$myComentarioDinamico->setId($comentariodinamico['id']);	
			$myComentarioDinamico->setProducto_id($comentariodinamico['producto_id']);
			$myComentarioDinamico->setActivo($comentariodinamico['activo']);
			return $myComentarioDinamico;
		}

		//metodo para actualizar un comentarios, recibe como parametro el id del comentario
		public function actualizar($comentariodinamico){
			$db=DB::conectar();
			$actualizar=$db->prepare('UPDATE comentarios_campo_dinamic set id=:id,producto_id=:producto_id,label=:label,activo=:activo
			 WHERE ID=:id');
			$actualizar->bindValue('id',$comentariodinamico->getId());
			$actualizar->bindValue('producto_id',$comentariodinamico->getProducto_id());
			$actualizar->bindValue('label',$comentariodinamico->getLabel());
			$actualizar->bindValue('activo',$comentariodinamico->getActivo());
			$actualizar->execute();			
		}		
	}
?>