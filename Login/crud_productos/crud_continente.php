<?php
	//incluye la clase Db
	require_once ('conexion.php');
	
	class CrudContinente{
		//constructor de la clase
		public function __construct(){}

		//metodo para insertar, recibe como parametro al objeto producto

		public function insertar($continente){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO continentes values(:idcontinente,:nombrecontinente,:activo)');
			$insert->bindValue('idcontinente',   $continente->getIdcontinente());
			$insert->bindValue('nombrecontinente',   $continente->getNombrecontinente());
			$insert->bindValue('activo',   $continente->getActivo());
			$insert->execute();
		}
			//metodo para mostrar todos los productos
		public function mostrar(){
			$db=DB::conectar();
			$listarContinentes=[];
			$select=$db->query('SELECT * FROM continentes');
			foreach ($select->fetchAll() as $continente) {
				$myContinente = new Continente();
				$myContinente->setIdcontinente($continente['idcontinente']);
				$myContinente->setNombrecontinente($continente['nombrecontinente']);
				$myContinente->setActivo($continente['activo']);
				$listarContinentes[]=$myContinente;
				# code...
			}
			return $listarContinentes;
		}
		//metodo para eliminar un producto, recibe como parametro el id del producto
		public function eliminar($idcontinente){
			$db=DB::conectar();
			$eliminar=$db->prepare('DELETE FROM continentes where IDCONTINENTE=:idcontinente');
			$eliminar->bindvalue('idcontinente',$idcontinente);
			$eliminar->execute();
		}

		//metodo para buscar un producto, recibe como parametro el id del producto
		public function obtenerContinente($idcontinente){
			$db=DB::conectar();
			$select=$db->prepare('SELECT * FROM continentes WHERE IDCONTINENTE=:idcontinente');
			$select->bindValue('idcontinente',$idcontinente);
			$select->execute();
			$continente=$select->fetch();
			$myContinente= new Continente();
			$myContinente->setIdcontinente($continente['idcontinente']);
			$myContinente->setNombrecontinente($continente['nombrecontinente']);
			$myContinente->setActivo($continente['activo']);
			return $myContinente;
		}

		//metodo para actualizar un producto, recibe como parametro el producto
		public function actualizar($continente){
			$db=DB::conectar();
			$actualizar=$db->prepare('UPDATE continentes set idcontinente=:idcontinente,nombrecontinente=:nombrecontinente,activo=:activo WHERE IDCONTINENTE=:idcontinente');
			$actualizar->bindValue('idcontinente'  ,$continente->getIdcontinente());
			$actualizar->bindValue('nombrecontinente',$continente->getNombrecontinente());
			$actualizar->bindValue('activo',$continente->getActivo());
			$actualizar->execute();			
		}
	}
?>