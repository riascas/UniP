<?php
require_once("../dirs.php");
require_once (CLASES_PATH."Persona.php");
require_once (MODEL_PATH."ReclutadorModel.php");

class ReclutadorController
{
    private $recModel;

    function __construct(){
            $this->recModel= new ReclutadorModel();
        }
    
    // private $recModel = new ReclutadorModel();
    
    //Metodo para obtener todos los registros
    public function Listar()
    {
       $datos=$this->recModel->Listar();

       return $datos;
    }

    //Metodo para guardar datos 
    public function Guardar(Reclutador $reclutador)
    {
        
        
        $recModel = new ReclutadorModel();
    
        $idUsr = $recModel->Guardar($reclutador);
        // $reclutador = new ReclutadorModel($idUsr,$datos->cuil,$datos->urlReclutador,$datos->tipoente,$datos->resumenEmpresa,$datos->estado);
        //obgtengo pk de usuario
        //uso la pk para el reclutador
        //inserto reclutador
        //agregar validaciones

        // $datos = $this->reclutadorModel->Guardar($reclutador);

        return 'OK';

    }

}
?>