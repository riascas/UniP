<?php
require_once("Model/ProfesorModel.php");
require_once("Model/UsuarioModel.php");
require_once("Clases/Usuario.php");
require_once("Clases/Profesor.php");
class ProfesorController
{
    private $profesorModel = new ProfesorModel();
    private $usuarioModel = new UsuarioModel();
    //Metodo para obtener todos los registros
    public function Listar()
    {
       $datos=$this->profesorModel->Listar();

       return $datos;
    }

    //Metodo para guardar datos 
    public function Guardar()
    {
        //Obtengo los datos del jason
        $datos = json_decode( file_get_contents("php://input"));

        $usuario = new Usuario($datos->Nombre,$datos->apellidos,$datos->dni,$datos->fechaNac,$datos->email,$datos->imgPerfil);
        
        //Inserto usuario
        $idUsr = $this->usuarioModel->Guardar($usuario);
        $profesor = new ProfesorModel($idUsr,$datos->cuil,$datos->nombre,$datos->IdProfesor,$datos->IdMateria);
        //obgtengo pk de usuario
        //uso la pk para el profesor
        //inserto presor
        //agregar validaciones

        $datos = $this->profesorModel->Guardar($profesor);

        return $datos;

    }

}
?>