<?php

class producto {
    private $id;
    private $continente;
    private $pais;
    private $precio;
    private $descripcion;
    private $descripcion_details;
    private $url;
    private $destacado;
    private $activo;

    function __construct(){}
    public function getId(){ return $this->id ;}
    public function setId($id){return $this->id = $id;}
    public function getContinente(){ return $this->continente ;}
    public function setContinente($continente){return $this->continente = $continente;}
    public function getPais(){return $this->pais ;}
    public function setPais($pais){return $this->pais = $pais;}
    public function getPrecio(){return $this->precio ;}
    public function setPrecio($precio){return $this->precio = $precio;}
    public function getDescripcion(){return $this->pais ;}
    public function setDescripcion($descripcion){return $this->$descripcion = $descripcion;}
    public function getDescripcion_details(){return $this->descripcion_details ;}
    public function setDescripcion_details($descripcion_details){return $this->descripcion_details = $descripcion_details;}
    public function getUrl(){return $this->url ;}
    public function setUrl($url){return $this->url = $url;}
    public function getDestacado(){return $this->destacado ;}
    public function setDestacado($destacado){return $this->destacado = $destacado; }
    public function getActivo(){return $this->activo ;}
    public function setActivo($activo){return $this->activo = $activo;}
}

?>