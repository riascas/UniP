<?php
require_once("../dirs.php");
require_once (CLASES_PATH."Profesor.php");
require_once (CONTROLLER_PATH."ProfesorController.php");
    
    $datos = json_decode( file_get_contents("php://input"));
    $pass = $datos-> contrasenia; 
    $profesor = new Profesor($datos->nombre, $datos->apellido,$datos->dni,$datos->nacionalidad,$datos->nacimiento,$datos->telefono,$datos->estadoCivil,$datos->calle,$datos->numerocalle,$datos->email,$datos->imagen,$datos->cuil,$datos->tipoent,$datos->resumen,$datos->urlEmpresa,$datos->pass,$datos->idprovincia,$datos->idlocalidad);
    $profesorController = new ProfesorController();
    $profesorController->Guardar($profesor);
 ?>