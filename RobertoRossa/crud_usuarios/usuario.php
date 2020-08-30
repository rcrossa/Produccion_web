<?php

class Usuario{
    private $id   ;
    private $nombre   ;
    private $apellido ;
    private $edad     ;
    private $email    ;
    private $user_id  ;
    private $password     ; 
    private $perfil   ; 

    function __construct(){}


    public function getNombre   (){ 
        return $this->nombre;}
    public function setNombre   ($nombre){ 
        return $this->nombre=$nombre;}
    public function getApellido (){ return $this->apellido;}
    public function setApellido ($apellido){ return $this->apellido=$apellido;}
    public function getEdad     (){ return $this->edad;}
    public function setEdad     ($edad){ return $this->edad=$edad;}
    public function getEmail    (){ return $this->email;}
    public function setEmail    ($email){ return $this->email=$email;}
    public function getUser_id     (){ return $this->user_id;}
    public function setUser_id     ($user_id){ return $this->user_id=$user_id;}
    public function getPassword     (){ return $this->password;}
    public function setPassword     ($password){ return $this->password=$password;}
    public function getPerfil   (){ return $this->perfil;}
    public function setPerfil   ($perfil){ return $this->perfil=$perfil;}
    public function getId   (){ return $this->id;}
    public function setId   ($id){ return $this->id= $id;}
}


?>