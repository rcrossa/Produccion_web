<?php
 class Usuario
 {
    private $id       ;
    private $nombre   ;
    private $apellido ;
    private $edad     ;
    private $email    ;
    private $user_id  ;
    private $pass     ;
    private $perfil   ;

    public function __GET($k){ return $this -> $k ; }
    public function __SET($k, $v){ return $this ->$k = $v; }    
 }

?>