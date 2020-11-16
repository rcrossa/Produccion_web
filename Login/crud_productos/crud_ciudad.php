<?php
	//incluye la clase Db
	require_once ('conexion.php');
	
	class CrudCiudad{
		//constructor de la clase
		public function __construct(){}

		//metodo para insertar, recibe como parametro al objeto pais

		public function insertar($ciudad){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO ciudades values(:idciudad,:nombreciudad,:idpais,:activo)');
			$insert->bindValue('idciudad',   $ciudad->getIdciudad());
			$insert->bindValue('nombreciudad',   $ciudad->getNombreciudad());
			$insert->bindValue('idpais',   $ciudad->getIdpais());
			$insert->bindValue('activo',   $ciudad->getActivo());
			$insert->execute();
		}
			//metodo para mostrar todos los pais
			public function mostrar(){
				$db=DB::conectar();
				$listarCiudades=[];
				$select=$db->query('SELECT * FROM ciudades');
	
				foreach ($select->fetchAll() as $ciudad) {
					$myCiudad = new Ciudad();
					$myCiudad->setIdciudad($ciudad['idciudad']);
					$myCiudad->setNombreciudad($ciudad['nombreciudad']);
					$myCiudad->setIdpais($ciudad['idpais']);
					$myCiudad->setActivo($ciudad['activo']);
					$listarCiudades[]=$myCiudad;
					# code...
				}
				return $listarCiudades;
			}
		//metodo para eliminar un pais, recibe como parametro el id del pais
		public function eliminar($idciudad){
			$db=DB::conectar();
			$eliminar=$db->prepare('DELETE FROM ciudades where IDCIUDAD=:idciudad');
			$eliminar->bindvalue('idciudad',$idciudad);
			$eliminar->execute();
		}

		//metodo para buscar un pais, recibe como parametro el id del pais
		public function obtenerCiudad($idciudad){
			$db=DB::conectar();
			$select=$db->prepare('SELECT * FROM ciudad WHERE IDCIUDAD=:idciudad');
			$select->bindValue('idpais',$idpais);
			$select->execute();
			$producto=$select->fetch();
			$myciudad= new ciudad();
			$myCiudad->setIdciudad($ciudad['idciudad']);
			$myCiudad->setNombreciudad($ciudad['nombreciudad']);
			$myCiudad->setIdpais($ciudad['idpais']);
			$myCiudad->setActivo($ciudad['activo']);
			return $myCiudad;
		}

		//metodo para actualizar un pais, recibe como parametro el pais
		public function actualizar($ciudad){
			$db=DB::conectar();
			$actualizar=$db->prepare('UPDATE paiss set idciudad=:idciudad,nombreciudad=:nombreciudad,idpais=:idpais,activo=:activo WHERE IDCIUDAD=:idciudad');
			$actualizar->bindValue('idciudad'  ,$ciudad->getIdciudad());
			$actualizar->bindValue('nombreciudad',$ciudad->getNombreciudad());
			$actualizar->bindValue('idciudad',$ciudad->getIdciudad());
			$actualizar->bindValue('activo',$ciudad->getActivo());
			$actualizar->execute();			
		}
	}
?>