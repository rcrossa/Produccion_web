<?php

class producto {
    private $idproducto;
    private $idciudad;
    private $precio;
    private $descripcion;
    private $detalle;
    private $url;
    private $destacado;
    private $activo;

    function __construct(){}
    public function getIdproducto(){ return $this->idproducto ;}
    public function setIdproducto($idproducto){ $this->idproducto = $idproducto;}
    public function getIdciudad(){ return $this->idciudad ;}
    public function setIdciudad($idciudad){ $this->idciudad = $idciudad;}
    public function getPrecio(){return $this->precio ;}
    public function setPrecio($precio){ $this->precio = $precio;}

    public function getDescripcion(){return $this->descripcion ;}
    public function setDescripcion($descripcion){ $this->$descripcion = $descripcion;}
    public function getDetalle(){return $this->detalle ;}
    public function setDetalle($detalle){ $this->detalle = $detalle;}
    public function getUrl(){return $this->url ;}
    public function setUrl($url){ $this->url = $url;}
    public function getDestacado(){return $this->destacado ;}
    public function setDestacado($destacado){ $this->destacado = $destacado; }
    public function getActivo(){return $this->activo ;}
    public function setActivo($activo){ $this->activo = $activo;}
}

?>