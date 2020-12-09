<?php

class ComentarioDinamicoData{
    private $id   ;
    private $id_comentario   ;
    private $email ;
    private $detalle  ; 
    private $activo ;

    function __construct(){}


    public function getId   (){   return $this->id;}
    public function setId   ($id){  $this->id=$id;}
    public function getId_comentario   (){   return $this->id_comentario;}
    public function setId_comentario   ($id_comentario){  $this->id_comentario=$id_comentario;}
    public function getEmail   (){ return $this->email;}
    public function setEmail   ($email){ $this->email=$email;}
    public function getDetalle (){ return $this->detalle;}
    public function setDetalle ($detalle){ $this->detalle=$detalle;}
    public function getActivo   (){ return $this->activo;}
    public function setActivo   ($activo){  $this->activo=$activo;}
}


?>