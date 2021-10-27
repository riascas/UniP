<?php
class Usuario{
    private $IdUsuario;
    private $Nombre;
    private $Apellido;
    private $FechaNacimiento;
    private $Email;
    private $ImagenPerfil;

    public function __construct()
    {
    }

    public function setIdusuario($idUsr)
    {
        $this->IdUsuario = $idUsr;
    }

    public function getIdusuario()
    {
        return $this->IdUsuario;
    }
}

?>