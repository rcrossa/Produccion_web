<?php

class ciudad {
    private $idciudad;
    private $nombreciudad;
    private $idpais;
    private $activo;

    function __construct(){}
    public function getIdciudad(){ return $this->idciudad ;}
    public function setIdciudad($idciudad){ $this->idciudad = $idciudad;}
    public function getNombreciudad(){ return $this->nombreciudad ;}
    public function setNombreciudad($nombreciudad){ $this->nombreciudad = $nombreciudad;}
    public function getIdpais(){ return $this->idpais ;}
    public function setIdpais($idpais){ $this->idpais = $idpais;}
    public function getActivo(){return $this->activo ;}
    public function setActivo($activo){ $this->activo = $activo;}
}

?>