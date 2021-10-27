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

    public function setNombre($nombre)
    {
        $this->Nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function setApellido($apellido)
    {
        $this->Apellido = $apellido;
    }

    public function getApellido()
    {
        return $this->Apellido;
    }

    public function setFechaNacimiento($fecNac)
    {
        $this->FechaNacimiento = $fecNac;
    }

    public function getFechaNacimiento()
    {
        return $this->FechaNacimiento;
    }

    public function setEmail($email)
    {
        $this->Email = $email;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setImagenPerfil($imgPerfil)
    {
        $this->ImagenPerfil = $imgPerfil;
    }

    public function getImagenPerfil()
    {
        return $this->ImagenPerfil;
    }
}

?>