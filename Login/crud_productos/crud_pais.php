<?php
	//incluye la clase Db
	require_once ('conexion.php');
	
	class CrudPais{
		//constructor de la clase
		public function __construct(){}

		//metodo para insertar, recibe como parametro al objeto pais

		public function insertar($pais){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO paises values(:idpais,:nombrepais,:idcontinente,:activo)');
			$insert->bindValue('idpais',   $pais->getIdpais());
			$insert->bindValue('nombrepais',   $pais->getNombrepais());
			$insert->bindValue('idcontinente',   $pais->getIdcontinente());
			$insert->bindValue('activo',   $pais->getActivo());
			$insert->execute();
		}
			//metodo para mostrar todos los pais
			public function mostrar(){
				$db=DB::conectar();
				$listarPaises=[];
				$select=$db->query('SELECT * FROM paises');
	
				foreach ($select->fetchAll() as $pais) {
					$myPais = new Pais();
					$myPais->setIdpais($pais['idpais']);
					$myPais->setNombrepais($pais['nombrepais']);
					$myPais->setIdcontinente($pais['idcontinente']);
					$myPais->setActivo($pais['activo']);
					$listarPaises[]=$myPais;
					# code...
				}
				return $listarPaises;
			}
		//metodo para eliminar un pais, recibe como parametro el id del pais
		public function eliminar($idpais){
			$db=DB::conectar();
			$eliminar=$db->prepare('DELETE FROM paises where IDPAIS=:idpais');
			$eliminar->bindvalue('idpais',$idpais);
			$eliminar->execute();
		}

		//metodo para buscar un pais, recibe como parametro el id del pais
		public function obtenerPais($idpais){
			$db=DB::conectar();
			$select=$db->prepare('SELECT * FROM paises WHERE IDPAIS=:idpais');
			$select->bindValue('idpais',$idpais);
			$select->execute();
			$producto=$select->fetch();
			$myPais= new Pais();
			$myPais->setIdpais($pais['idpais']);
			$myPais->setNombrepais($pais['nombrepais']);
			$myPais->setIdcontinente($pais['idcontinente']);
			$myPais->setActivo($pais['activo']);
			return $myPais;
		}

		//metodo para actualizar un pais, recibe como parametro el pais
		public function actualizar($pais){
			$db=DB::conectar();
			$actualizar=$db->prepare('UPDATE paiss set idpais=:idpais,nombrepais=:nombrepais,idcontinente=:idcontinente,activo=:activo WHERE IDPAIS=:idpais');
			$actualizar->bindValue('idpais'  ,$pais->getIdpais());
			$actualizar->bindValue('nombrepais',$pais->getNombrepais());
			$actualizar->bindValue('idcontinente',$pais->getIdcontinente());
			$actualizar->bindValue('activo',$pais->getActivo());
			$actualizar->execute();			
		}
	}
?>