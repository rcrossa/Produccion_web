<?php

class producto {
    private $idproducto;
    private $ciudad;
    private $pais;
    private $continente;
    private $precio;
    private $descripcion;
    private $detalle;
    private $url;
    private $destacado;
    private $activo;

    function __construct(){}
    public function getIdProducto(){ return $this->idproducto ;}
    public function setIdProducto($idproducto){return $this->idproducto = $idproducto;}
    public function getCiudad(){return $this->ciudad ;}
    public function setCiudad($ciudad){return $this->ciudad = $ciudad;}
    public function getPais(){return $this->pais ;}
    public function setPais($pais){return $this->pais = $pais;}
    public function getContinente(){return $this->continente ;}
    public function setContinente($continente){return $this->continente = $continente;}
    public function getPrecio(){return $this->precio ;}
    public function setPrecio($precio){return $this->precio = $precio;}
    public function getDescripcion(){return $this->descripcion ;}
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