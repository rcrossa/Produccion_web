<?php
require_once ('conexion.php');
class CrudPermiso{
    public function __construct(){}

    public function insertar($permiso){
        $db=DB::conectar();
        $insert=$db->prepare('INSERT INTO roles values(:email,:tipo_rol,:accion)');
        $insert->bindValue('email',$permiso->getEmail());
        $insert->bindValue('tipo_rol',$permiso->getTipo_rol());
        $insert->bindValue('accion',$permiso->getAccion());
        $insert->execute();
    }
        //metodo para mostrar todos los usuarios
    public function mostrar(){
        $db=DB::conectar();
        $listarPermisos=[];
        $select=$db->query('SELECT * FROM roles');

        foreach ($select->fetchAll() as $permiso) {
            $myPermiso = new Permiso();
            $myPermiso->setEmail($permiso['email']);
            $myPermiso->setTipo_rol($permiso['tipo_rol']);
            $myPermiso->setAccion($permiso['accion']);
            $listarPermisos[]=$myPermiso;
            # code...
        }
        return $listarPermisos;
    }
    //metodo para eliminar un permiso, recibe como parametro el id del permiso
    public function eliminar($email){
        $db=DB::conectar();
        $eliminar=$db->prepare('DELETE FROM roles where email=:email');
        $eliminar->bindvalue('email',$email);
        $eliminar->execute();
    }

    //metodo para buscar un permiso, recibe como parametro el id del permiso
    public function obtenerPermiso($email){
        $db=DB::conectar();
        $select=$db->prepare('SELECT * FROM roles WHERE EMAIL=:email');
        $select->bindValue('email',$email);
        $select->execute();
        $permiso=$select->fetch();
        $myPermiso= new Permiso();
        $myPermiso->setEmail($permiso['email']);
        $myPermiso->setTipo_rol($permiso['tipo_rol']);
        $myPermiso->setAccion($permiso['accion']);
        return $myPermiso;
    }

    //metodo para actualizar un permiso, recibe como parametro el permiso
    public function actualizar($permiso){
        $db=DB::conectar();
        $actualizar=$db->prepare('UPDATE roles set email=:email,tipo_rol=:tipo_rol,accion=:accion WHERE email=:email');
        $actualizar->bindValue('email'   ,$permiso->getEmail());
        $actualizar->bindValue('tipo_rol',$permiso->getTipo_rol());
        $actualizar->bindValue('accion'  ,$permiso->getaccion());
        $actualizar->execute();			
    }
}

?>