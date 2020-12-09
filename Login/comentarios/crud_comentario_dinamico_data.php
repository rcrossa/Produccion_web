<?php
	//incluye la clase Db
	require_once ('conexion.php');
	
	class CrudComentarioDinamicoData{
		//constructor de la clase
		public function __construct(){}

		//metodo para insertar, recibe como parametro al objeto comentario

		public function insertar($comentariodinamicodata){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO comentarios_campos_dinamicos_data values( :id,:id_comentario,:email,:detalle,:activo)');
			$insert->bindValue('id',$comentariodinamicodata->getId());
			$insert->bindValue('id_comentario',$comentariodinamicodata->getId_comentario());
			$insert->bindValue('email',$comentariodinamicodata->getEmaill());
			$insert->bindValue('detalle',$comentariodinamicodata->getDetalle());
			$insert->bindValue('activo',$comentariodinamicodata->getActivo());
			$insert->execute();
			
		}
			//metodo para mostrar todos los comentarios
		public function mostrar(){
			$db=DB::conectar();
			$listarComentariosDinamicosData=[];
			$select=$db->query('SELECT * FROM comentarios_campos_dinamicos_data');

			foreach ($select->fetchAll() as $comentariodinamicodata) {
				$myComentarioDinamicoData = new ComentarioDinamicoData();
				$myComentarioDinamicoData->setId($comentariodinamicodata['id']);			
				$myComentarioDinamicoData->setId_comentario($comentariodinamicodata['id_comentario']);	
				$myComentarioDinamicoData->setEmail($comentariodinamicodata['email']);
				$myComentarioDinamicoData->setDetalle($comentariodinamicodata['detalle']);
				$myComentarioDinamicoData->setActivo($comentariodinamicodata['activo']);
				$listarComentariosDinamicosData[]=$myComentarioDinamicoData;
				# code...
			}
			return $listarComentariosDinamicosData;
		}

		//Mostrar los comentarios pedientes de aprobacion
		public function mostrar1(){
			$db=DB::conectar();
			$listarComentariosDinamicosData1=[];
			$select=$db->query('SELECT * FROM comentarios_campos_dinamicos_data WHERE activo=0');

			foreach ($select->fetchAll() as $comentariodinamicodata) {
				$myComentarioDinamicoData = new ComentarioDinamicoData();
				$myComentarioDinamicoData->setId($comentariodinamicodata['id']);			
				$myComentarioDinamicoData->setId_comentario($comentariodinamicodata['id_comentario']);	
				$myComentarioDinamicoData->setEmail($comentariodinamicodata['email']);
				$myComentarioDinamicoData->setDetalle($comentariodinamicodata['detalle']);
				$myComentarioDinamicoData->setActivo($comentariodinamicodata['activo']);
				$listarComentariosDinamicosData1[]=$myComentarioDinamicoData;
				# code...
			}
			return $listarComentariosDinamicosData1;
		}
		//metodo para eliminar un comentario, recibe como parametro el id del comentario
		public function eliminar($id){
			$db=DB::conectar();
			$eliminar=$db->prepare('DELETE FROM comentarios_campos_dinamicos_data where ID=:id');
			$eliminar->bindvalue('id',$id);
			$eliminar->execute();
		}

		//metodo para buscar un comentario, recibe como parametro el id del comentario
		public function obtenerComentarioDinamicoData($id){
			$db=DB::conectar();
			$select=$db->prepare('SELECT * FROM comentarios_campos_dinamicos_data where ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$comentariodinamicodata=$select->fetch();
			$myComentarioDinamicoData= new ComentarioDinamicoData();
			$myComentarioDinamicoData->setId($comentariodinamicodata['id']);	
			$myComentarioDinamicoData->setId_comentario($comentariodinamicodata['id_comentario']);
			$myComentarioDinamicoData->setEmail($comentariodinamicodata['email']);
			$myComentarioDinamicoData->setDetalle($comentariodinamicodata['detalle']);
			$myComentarioDinamicoData->setActivo($comentariodinamicodata['activo']);
			return $myComentarioDinamicoData;
		}

		//metodo para actualizar un comentarios, recibe como parametro el id del comentario
		public function actualizar($comentariodinamicodata){
			$db=DB::conectar();
			$actualizar=$db->prepare('UPDATE comentarios_campos_dinamicos_data set id=:id,id_comentario=:id_comentario,email=:email,detalle=:detalle,activo=:activo
			 WHERE ID=:id');
			$actualizar->bindValue('id',$comentariodinamicodata->getId());
			$actualizar->bindValue('id_comentario',$comentariodinamicodata->getId_comentario());
			$actualizar->bindValue('email',$comentariodinamicodata->getEmail());
			$actualizar->bindValue('detalle',$comentariodinamicodata->geDetalle());
			$actualizar->bindValue('activo',$comentariodinamicodata->getActivo());
			$actualizar->execute();			
		}		
	}
?>