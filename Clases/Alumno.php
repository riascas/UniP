<?php 
require_once('./Persona.php');

class Alumno extends Persona{
    private $IdRol;
    private $Preferencia;
    private $Skilss;

    public function __construct($nombre, $apellido,$dni,$nacionalidad,$fecNac,$telefono,$estadoCivil,$calle,$numeroCalle,$email,$imgPerfil,$idprovincia,$idlocalidad,$preferencia)
    {   
        parent::__construct($nombre, $apellido,$dni,$nacionalidad,$fecNac,$telefono,$estadoCivil,$idprovincia,$idlocalidad,$calle,$numeroCalle,$email,$imgPerfil);
        $this->IdRol = 3;
        $this->Preferencia = $preferencia;
    }
}

?>