<?php
require_once('Persona.php');
class Ofertalaboral extends Persona
{
    private $IdOferta;
    private $Titulo;
    private $IdEmpresa;
    private $UbicacionOferta;
    private $DetallePuesto;
    private $FuncionesPuesto;
    private $IdTipoContrato;
    private $IdTipoJornada;
    private $IdReclutador;

    public function __construct($nombre, $apellido,$dni,$IdOferta,$Titulo,$IdEmpresa,$UbicacionOferta,$DetallePuesto,$FuncionesPuesto,$IdTipoContrato,$IdTipoJornada,$IdReclutador)
    {   
        parent::__construct($IdOferta,$Titulo,$IdEmpresa,$UbicacionOferta,$DetallePuesto,$FuncionesPuesto,$IdTipoContrato,$IdTipoJornada,$IdReclutador);
        $this->IdOferta= $IdOferta;
        $this->Titulo = $Titulo;
        $this->IdEmpresa = $IdEmpresa;
        $this->UrlEmpresa = $UrlEmpresa;
        $this->UbicacionOferta = $UbicacionOferta;
        $this->DetallePuesto = $DetallePuesto;   
        $this->FuncionesPuesto = $FuncionesPuesto;
        $this->IdTipoContrato = $IdTipoContrato;
        $this->IdTipoJornada = $IdTipoJornada;
        $this->IdReclutador = $IdReclutador;
    }

    // public function setIdReclutador($IdRecl)
    // {
    //     $this->IdReclutador = $IdRecl;
    // }

    // public function getIdReclutador()
    // {
    //     return $this->IdReclutador;
    // }

    public function setIdOferta($idOferta)
    {
        $this->IdOferta = $idOferta;
    }

    public function getIdOferta()
    {
        return $this->IdOferta;
    }

    public function setTitulo($titulo)
    {
        $this->Titulo = $titulo;
    }

    public function getTitulo()
    {
        return $this->Titulo;
    }

    public function setIdEmpresa($idEmpresa)
    {
        $this->IdEmpresa = $idEmpresa;
    }

    public function getIdEmpresa()
    {
        return $this->IdEmpresa;
    }

    public function setUbicacionOferta($ubicacionOferta)
    {
        $this->UbicacionOferta = $ubicacionOferta;
    }

    public function getUbicacionOferta()
    {
        return $this->UbicacionOferta;
    }

    public function setDetallePuesto($detallePuesto)
    {
        $this->DetallePuesto = $detallePuesto;
    }

    public function getDetallePuesto()
    {
        return $this->DetallePuesto;
    }
    
    public function getDetallePuesto()
    {
        return $this->DetallePuesto;
    }

    public function setFuncionesPuesto($funcionesPuesto)
    {
        $this->FuncionesPuesto = $funcionesPuesto;
    }
    
    public function getFuncionesPuesto()
    {
        return $this->FuncionesPuesto; 
    }

    public function setIdTipoContrato($idTipoContrato)
    {
        $this->IdTipoContrato = $idTipoContrato;
    }
    
    public function getIdTipoContrato()
    {
        return $this->idTipoContrato; 
    }

    public function setIdTipoJornada($idTipoJornada)
    {
        $this->IdTipoJornada = $idTipoJornada;
    }
    
    public function getIdTipoJornada()
    {
        return $this->IdTipoJornada; 
    }

    public function setIdReclutador($idReclutador)
    {
        $this->IdReclutador = $idReclutador;
    }
    
    public function getIdReclutador()
    {
        return $this->IdReclutador; 
    }

}

?>