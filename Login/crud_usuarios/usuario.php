<?php

class Usuario{
    private $id   ;
    private $nombre   ;
    private $apellido ;
    private $edad     ;
    private $email    ;
    private $password     ; 
    private $accion   ;
    private $tipo_rol;

    function __construct(){}


    public function getNombre   (){ 
        return $this->nombre;}
    public function setNombre   ($nombre){ 
         $this->nombre=$nombre;}
    public function getApellido (){ return $this->apellido;}
    public function setApellido ($apellido){ $this->apellido=$apellido;}
    public function getEdad     (){ return $this->edad;}
    public function setEdad     ($edad){ $this->edad=$edad;}
    public function getEmail    (){ return $this->email;}
    public function setEmail    ($email){  $this->email=$email;}
    public function getPassword     (){ return $this->password;}
    public function setPassword     ($password){  $this->password=$password;}
    public function getPerfil   (){ return $this->perfil;}
    public function setPerfil   ($perfil){  $this->perfil=$perfil;}
    public function getId   (){ return $this->id;}
    public function setId   ($id){  $this->id= $id;}
    public function getTipo_rol() { return $this->tipo_rol;}
    public function setTipo_rol($tipo_rol){$this->tipo_rol;}
}


?>