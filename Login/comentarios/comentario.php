<?php

class Comentario{
    private $idproducto   ;
    private $ip   ;
    private $fecha ;
    private $comentario     ;
    private $estrellas    ;
    private $activo  ; 
    private $email   ;

    function __construct(){}


    public function getIdproducto   (){ 
        return $this->idproducto;}
    public function setIdproducto   ($idproducto){ 
         $this->idproducto=$idproducto;}
    public function getIp (){ return $this->ip;}
    public function setIp ($ip){ $this->ip=$ip;}
    public function getFecha     (){ return $this->fecha;}
    public function setFecha     ($fecha){ $this->fecha=$fecha;}
    public function getComentario    (){ return $this->comentario;}
    public function setComentario    ($comentario){  $this->comentario=$comentario;}
    public function getEstrellas     (){ return $this->estrellas;}
    public function setEstrellas     ($estrellas){  $this->estrellas=$estrellas;}
    public function getActivo   (){ return $this->activo;}
    public function setActivo   ($activo){  $this->activo=$activo;}
    public function getEmail   (){ return $this->email;}
    public function setEmail   ($email){  $this->email= $email;}
}


?>