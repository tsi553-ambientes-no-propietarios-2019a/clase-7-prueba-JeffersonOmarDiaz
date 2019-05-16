<?php

class Seguridad
{
    private $usuario=null;

    function _construct()
    {
        session_start();
        if(isset($_SESSION['usuarios'])) $this->usuario=$_SESSION['usuarios'];
    }

    public function getUsuario(){
        return $this->usuarios;
    }

    public function addUsuario($usuario){
        $_SESSION["usuarios"]=$usuario;
        $this->usuarios=$usuario;
    }
}
?>