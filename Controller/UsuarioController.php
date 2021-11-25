<?php
    require_once("../Model/UsuarioModel.php");
 /*    require_once("../Clases/Usuario.php"); */
    class UsuarioController 
    {
        function __construct(){
            $this->usuarioModel = new UsuarioModel();
        }
        public function Listar()
        {
            $datos = $this->usuarioModel->Listar();
            return $datos; 
        }

        public function LogearUsuario($correo,$pass)
        {
          
            $datos = $this->usuarioModel->LogearUsuario($correo,$pass);
            return $datos;
        }
    }
?>