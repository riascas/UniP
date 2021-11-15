<?php
require_once('Persona.php');
class Profesor extends Persona
{
    private $password;

    public function __construct($nombre, $apellido,$dni,$nacionalidad,$fecNac,$telefono,$estadoCivil,$provincia,$localidad,$calle,$numeroCalle,$email,$imgPerfil,$pass,$idprovincia,$idLocalidad)
    {   
        parent::__construct($nombre, $apellido,$dni,$nacionalidad,$fecNac,$telefono,$estadoCivil,$provincia,$localidad,$calle,$numeroCalle,$email,$imgPerfil);  
        $this->Password = $pass;
    }

    public function setPassword($pass)
    {
        $this->Password = $pass;
    }
    
    public function getPassword()
    {
        return $this->Password; 
    }

}

?>