<?php

class Permiso{
    private $email    ;
    private $tipo_rol;
    private $accion   ;
    

    function __construct(){}

    public function getEmail    (){ return $this->email;}
    public function setEmail    ($email){  $this->email=$email;}
    public function getTipo_rol() { return $this->tipo_rol;}
    public function setTipo_rol($tipo_rol){$this->tipo_rol=$tipo_rol;}
    public function getAccion(){ return $this->accion;}
    public function setAccion($accion){  $this->accion=$accion;}

}


?>