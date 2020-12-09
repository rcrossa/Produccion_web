<?php

class Campo {
    private $id;
    private $id_producto;
    private $label;
    private $activo;
    private $data;

    function __construct(){}
    public function getId(){ return $this->id ;}
    public function setId($id){ $this->id = $id;}
    public function getId_producto(){ return $this->id_producto ;}
    public function setId_producto($id_producto){ $this->id_producto = $id_producto;}
    public function getLabel(){ return $this->label ;}
    public function setLabel($label){ $this->label = $label;}
    public function getActivo(){return $this->activo ;}
    public function setActivo($activo){ $this->activo = $activo;}
    public function getData(){return $this->data ;}
    public function setData($data){ $this->data = $data;}
}

?>