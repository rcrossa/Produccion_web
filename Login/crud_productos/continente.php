<?php

class continente {
    private $idcontinente;
    private $nombrecontinente;
    private $activo;

    function __construct(){}
    public function getIdcontinente(){ return $this->idcontinente ;}
    public function setIdcontinente($idcontinente){ $this->idcontinente = $idcontinente;}
    public function getNombrecontinente(){ return $this->nombrecontinente ;}
    public function setNombrecontinente($nombrecontinente){ $this->nombrecontinente = $nombrecontinente;}
    public function getActivo(){return $this->activo ;}
    public function setActivo($activo){ $this->activo = $activo;}
}

?>