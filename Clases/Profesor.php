<?php
require_once("Usuario.php");
class Profesor extends Usuario
{
    private $IdProfesor;
    private $cuil;
    private $IdMateria;
    private $nombre;

    public function __construct($IdProfesor,$cuil,$IdMateria,$nombre)
    {   
        $this->IdProfesor = $IdProfesor;
        $this->cuil = $cuil;
        $this->IdMateria = $IdMateria;
        $this->nombre = $nombre;      
    }

    public function setIdProfesor($IdProfesor)
    {
        $this->IdProfesor = $IdProfesor;
    }

    public function getIdProfesor()
    {
        return $this->IdProfesor;
    }

    public function setcuil($cuil)
    {
        $this->cuil = $cuil;
    }

    public function getcuil()
    {
        return $this->cuil;
    }

    public function setIdMateria($IdMateria)
    {
        $this->IdMateria = $IdMateria;
    }

    public function getIdMateria()
    {
        return $this->IdMateria;
    }

    public function setnombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getnombre()
    {
        return $this->nombre;
    }
}

?>