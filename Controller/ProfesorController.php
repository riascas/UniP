<?php
require_once("../dirs.php");
require_once (CLASES_PATH."Persona.php");
require_once (MODEL_PATH."ProfesorModel.php");
require_once (MODEL_PATH."RolesUsuarios.php");

class ProfesorController
{
    private $profModel;
    private $rolesUsuariosModel;

    function __construct(){
        $this->profModel= new ProfesorModel();
        $this->rolesUsuariosModel = new RolesUsuariosModel();
    }
    public function Listar()
    {
       $datos=$this->profModel->Listar();

       return $datos;
    }

    public function ModificarEstado($id,$idestado)
    {
        $this->profModel->ModificarEstado($id,$idestado);
        if($this->profModel->estado=='Conectado')
        {
            echo(json_encode(array('Estado'=> 'Ok' )));
            // echo('Ok');
        }
        else
        {
            echo(json_encode(array('Estado'=> 'Error'.$this->profModel->estado)));
            
        }
    }
    //Metodo para guardar datos 
    public function Guardar(Profesor $profesor)
    {
        $profModel = new ProfesorModel();
        try {
        
            $idUsr = $this->profModel->Guardar($profesor);
            echo($idUsr);
            echo($profesor->getRol());
            $this->rolesUsuariosModel->Guardar($idUsr,$profesor->getRol());
            print_r($this->rolesUsuariosModel);

            return 'OK';
        } 
        catch (Exception $e) {
            $e->getMessage();
        }
    }

}
?>