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
    public function setId($id){ $this->id = $id;}
    public function getContinente(){ return $this->continente ;}
    public function setContinente($continente){ $this->continente = $continente;}
    public function getPais(){return $this->pais ;}
    public function setPais($pais){ $this->pais = $pais;}
    public function getPrecio(){return $this->precio ;}
    public function setPrecio($precio){ $this->precio = $precio;}
    public function getDescripcion(){return $this->pais ;}
    public function setDescripcion($descripcion){ $this->$descripcion = $descripcion;}
    public function getDescripcion_details(){return $this->descripcion_details ;}
    public function setDescripcion_details($descripcion_details){ $this->descripcion_details = $descripcion_details;}
    public function getUrl(){return $this->url ;}
    public function setUrl($url){ $this->url = $url;}
    public function getDestacado(){return $this->destacado ;}
    public function setDestacado($destacado){ $this->destacado = $destacado; }
    public function getActivo(){return $this->activo ;}
    public function setActivo($activo){ $this->activo = $activo;}
}

?>