<?php

class producto {
    private $id;
    private $ciudad;
    private $precio;
    private $descripcion;
    private $detalle;
    private $url;
    private $destacado;
    private $activo;

    function __construct(){}
    public function getId(){ return $this->idproducto ;}
    public function setId($id){return $this->idproducto = $idproducto;}
    public function getCiudad(){return $this->ciudad ;}
    public function setCiudad($ciudad){return $this->ciudad = $ciudad;}
    public function getPrecio(){return $this->precio ;}
    public function setPrecio($precio){return $this->precio = $precio;}
    public function getDescripcion(){return $this->pais ;}
    public function setDescripcion($descripcion){return $this->$descripcion = $descripcion;}
    public function getDetalle(){return $this->detalle;}
    public function setDetalle($detalle){return $this->detalle = $detalle;}
    public function getUrl(){return $this->url ;}
    public function setUrl($url){return $this->url = $url;}
    public function getDestacado(){return $this->destacado ;}
    public function setDestacado($destacado){return $this->destacado = $destacado; }
    public function getActivo(){return $this->activo ;}
    public function setActivo($activo){return $this->activo = $activo;}
}

?>