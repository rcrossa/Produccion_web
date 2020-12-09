<?php

class ComentarioDinamico{
    private $id   ;
    private $producto_id   ;
    private $label ;
    private $activo  ; 

    function __construct(){}


    public function getId   (){   return $this->id;}
    public function setId   ($id){  $this->id=$id;}
    public function getProducto_id   (){ return $this->producto_id;}
    public function setProducto_id   ($producto_id){ $this->producto_id=$producto_id;}
    public function getLabel (){ return $this->label;}
    public function setLabel ($label){ $this->label=$label;}
    public function getActivo   (){ return $this->activo;}
    public function setActivo   ($activo){  $this->activo=$activo;}
}


?>