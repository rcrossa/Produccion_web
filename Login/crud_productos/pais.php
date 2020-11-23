<?php

class pais {
    private $idpais;
    private $nombrepais;
    private $idcontinente;
    private $activo;

    function __construct(){}
    public function getIdpais(){ return $this->idpais ;}
    public function setIdpais($idpais){ $this->idpais = $idpais;}
    public function getNombrepais(){ return $this->nombrepais ;}
    public function setNombrepais($nombrepais){ $this->nombrepais = $nombrepais;}
    public function getIdcontinente(){ return $this->idcontinente ;}
    public function setIdcontinente($idcontinente){ $this->idcontinente = $idcontinente;}
    public function getActivo(){return $this->activo ;}
    public function setActivo($activo){ $this->activo = $activo;}
}

?>