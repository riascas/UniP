<?php
require_once("../dirs.php");
require_once (CLASES_PATH."Persona.php");
require_once (MODEL_PATH."ProfesorModel.php");

class ProfesorController
{
    private $profModel;

    function __construct(){
            $this->profModel= new ProfesorModel();
        }
    
    // private $recModel = new ReclutadorModel();
    
    //Metodo para obtener todos los registros
    public function Listar()
    {
       $datos=$this->profModel->Listar();

       return $datos;
    }

    //Metodo para guardar datos 
    public function Guardar(Profesor $profesor)
    {
        
        
        $profModel = new ProfesorModel();
    
        $idUsr = $profModel->Guardar($profesor);
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