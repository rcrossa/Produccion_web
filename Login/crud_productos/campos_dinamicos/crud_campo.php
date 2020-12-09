<?php
	//incluye la clase Db
	require_once ('./conexion.php');
	
	class CrudCampo{
		//constructor de la clase
		public function __construct(){}

		//metodo para insertar, recibe como parametro al objeto producto

		public function insertar($campo){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO productos_campo_dinamico values(:id,:id_producto,:label,:activo,:data)');
			$insert->bindValue('id',   $campo->getId());
			$insert->bindValue('id_producto',   $campo->getId_producto());
			$insert->bindValue('label',   $campo->getLabel());
			$insert->bindValue('activo',   $campo->getActivo());
			$insert->bindValue('data',     $campo->getData());
			$insert->execute();
		}
			//metodo para mostrar todos los productos
		public function mostrar(){
			$db=DB::conectar();
			$listarCampos=[];
			$select=$db->query('SELECT * FROM productos_campo_dinamico');

			foreach ($select->fetchAll() as $campo) {
				$myCampo = new Campo();
				$myCampo->setId($campo['id']);
				$myCampo->setId_producto($campo['id_producto']);
				$myCampo->setLabel($campo['label']);
				$myCampo->setActivo($campo['activo']);
				$myCampo->setData($campo['data']);
				$myCampo->setActivo($campo['activo']);
				$listarCampos[]=$myCampo;
				# code...
			}
			return $listarCampos;
		}
		//metodo para eliminar un producto, recibe como parametro el id del producto
		public function eliminar($id){
			$db=DB::conectar();
			$eliminar=$db->prepare('DELETE FROM productos_campo_dinamico where ID=:id');
			$eliminar->bindvalue('id',$id);
			$eliminar->execute();
		}

		//metodo para buscar un producto, recibe como parametro el id del producto
		public function obtenerCampo($id){
			$db=DB::conectar();
			$select=$db->prepare('SELECT * FROM productos_campo_dinamico WHERE ID=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$campo=$select->fetch();
			$myCampo= new Campo();
			$myCampo->setId($campo['id']);
			$myCampo->setId_producto($campo['id_producto']);
			$myCampo->setLabel($campo['label']);
			$myCampo->setActivo($campo['activo']);
			$myCampo->setData($campo['data']);
			return $myCampo;
		}
		public function actualizar($campo){
			$db=DB::conectar();
			$actualizar=$db->prepare('UPDATE productos_campo_dinamico set id=:id,id_producto=:id_producto,label=:label,activo=:activo,data=:data WHERE ID=:id');
			$actualizar->bindValue('id',   $campo->getId());
			$actualizar->bindValue('id_producto',   $campo->getId_producto());
			$actualizar->bindValue('label',   $campo->getLabel());
			$actualizar->bindValue('activo',   $campo->getActivo());
			$actualizar->bindValue('data',     $campo->getData());
			$actualizar->execute();			
		}
	}
?>