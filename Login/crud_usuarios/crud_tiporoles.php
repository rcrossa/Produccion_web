<?php
require_once ('conexion.php');
class CrudTiporol{
    public function __construct(){}

    public function insertar($tiporol){
        $db=DB::conectar();
        $insert=$db->prepare('INSERT INTO tipo_rol values(:idrol)');
        $insert->bindValue('idrol',$tiporol->getIdrol());
        $insert->execute();
    }
        //metodo para mostrar todos los roles
    public function mostrar(){
        $db=DB::conectar();
        $listarTiporol=[];
        $select=$db->query('SELECT * FROM tipo_rol');

        foreach ($select->fetchAll() as $tiporol) {
            $myTiporol = new Roles;
            $myTiporol->setIdrol($tiporol['idrol']);
            $listarTiporol[]=$myTiporol;
            # code...
        }
        return $listarTiporol;
    }
    //metodo para eliminar un rol, recibe como parametro el id del rol
    public function eliminar($idrol){
        $db=DB::conectar();
        $eliminar=$db->prepare('DELETE FROM tipo_rol where idrol=:idrol');
        $eliminar->bindvalue('idrol',$idrol);
        $eliminar->execute();
    }

    //metodo para buscar un rol, recibe como parametro el id del rol
    public function obtenerTiporol($idrol){
        $db=DB::conectar();
        $select=$db->prepare('SELECT * FROM tipo_rol WHERE idrol=:idrol');
        $select->bindValue('idrol',$idrol);
        $select->execute();
        $roles=$select->fetch();
        $myTiporol= new Roles();
        $myTiporol->setIdrol($roles['idrol']);
        return $myTiporol;
    }

    //metodo para actualizar un tiporol, recibe como parametro el tiporol
    public function actualizar($roles){
        $db=DB::conectar();
        $actualizar=$db->prepare('UPDATE roles set idrol=:idrol WHERE idrol=:idrol');
        $actualizar->bindValue('idrol' ,$roles->getIdrol());
        $actualizar->execute();			
    }
}

?>