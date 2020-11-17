<?php
	//incluye la clase Db
	require_once ('conexion.php');
	
	class CrudProducto{
		//constructor de la clase
		public function __construct(){}

		//metodo para insertar, recibe como parametro al objeto producto

		public function insertar($producto){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO productos values(:idproducto,:idciudad,:precio,:descripcion,:detalle,:url,:destacado,:activo)');
			$insert->bindValue('idproducto',   $producto->getIdproducto());
			$insert->bindValue('idciudad',   $producto->getIdciudad());
			$insert->bindValue('precio',   $producto->getPrecio());
			$insert->bindValue('descripcion',     $producto->getDescripcion());
			$insert->bindValue('detalle',  $producto->getDetalle());
			$insert->bindValue('url',$producto->getUrl());
			$insert->bindValue('destacado', $producto->getDestacado());
			$insert->bindValue('activo',   $producto->getActivo());
			$insert->execute();
		}
			//metodo para mostrar todos los productos
		public function mostrar(){
			$db=DB::conectar();
			$listarProductos=[];
			$select=$db->query('SELECT * FROM productos');

			foreach ($select->fetchAll() as $producto) {
				$myProducto = new Producto();
				$myProducto->setIdproducto($producto['idproducto']);
				$myProducto->setIdciudad($producto['idciudad']);
				$myProducto->setPrecio($producto['precio']);
				$myProducto->setDescripcion($producto['descripcion']);
				$myProducto->setDetalle($producto['detalle']);
				$myProducto->setUrl($producto['url']);
				$myProducto->setDestacado($producto['destacado']);
				$myProducto->setActivo($producto['activo']);
				$listarProductos[]=$myProducto;
				# code...
			}
			return $listarProductos;
		}
		//metodo para eliminar un producto, recibe como parametro el id del producto
		public function eliminar($idproducto){
			$db=DB::conectar();
			$eliminar=$db->prepare('DELETE FROM productos where IDPRODUCTO=:idproducto');
			$eliminar->bindvalue('idproducto',$idproducto);
			$eliminar->execute();
		}

		//metodo para buscar un producto, recibe como parametro el id del producto
		public function obtenerProducto($idproducto){
			$db=DB::conectar();
			$select=$db->prepare('SELECT * FROM productos WHERE IDPRODUCTO=:idproducto');
			$select->bindValue('idproducto',$idproducto);
			$select->execute();
			$producto=$select->fetch();
			$myProducto= new Producto();
			$myProducto->setIdproducto($producto['idproducto']);
			$myProducto->setIdciudad($producto['idciudad']);
			$myProducto->setPrecio($producto['precio']);
			$myProducto->setDescripcion($producto['descripcion']);
			$myProducto->setDetalle($producto['detalle']);
			$myProducto->setUrl($producto['url']);
			$myProducto->setDestacado($producto['destacado']);
			$myProducto->setActivo($producto['activo']);
			return $myProducto;
		}

		//metodo para actualizar un producto, recibe como parametro el producto
		public function actualizar($producto){
			$db=DB::conectar();
			$actualizar=$db->prepare('UPDATE productos set idproducto=:idproducto,idciudad=:idciudad,precio=:precio,description=:description,detalle=:detalle,url=:url,destacado=:destacado,activo=:activo WHERE IDPRODUCTO=:idproducto');
			$actualizar->bindValue('idproducto',$producto->getIdproducto());
			$actualizar->bindValue('idciudad',$producto->getIdciudad());
			$actualizar->bindValue('precio',$producto->getPrecio());
			$actualizar->bindValue('description'    ,$producto->getDescripcion());
			$actualizar->bindValue('detalle'   ,$producto->getDetalle());
			$actualizar->bindValue('url' ,$producto->getUrl());
			$actualizar->bindValue('destacado',$producto->getDestacado());
			$actualizar->bindValue('activo'  ,$producto->getActivo());
			$actualizar->execute();			
		}
	}
?>