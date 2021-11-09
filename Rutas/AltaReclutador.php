<?php
require_once("../dirs.php");
require_once (CLASES_PATH."Reclutador.php");
require_once (CONTROLLER_PATH."ReclutadorController.php");
    
    $datos = json_decode( file_get_contents("php://input"));
    
    print_r($datos);
    // if(isset($_POST['nombre']))
    // {
    //     $nombre = $_POST['nombre'];
    //     $apellido = $_POST['apellido'];
    //     $dni = $_POST['dni'];
    //     $nacionalidad= $_POST['nacionalidad'];
    //     $estadoCivil = $_POST['estadoCivil'];
    //     $nacimiento = $_POST['nacimiento'];
    //     $provincia= $_POST['provincia'];
    //     $localidad= $_POST['localidad'];
    //     $calle= $_POST['calle'];
    //     $numeroCalle= $_POST['numerocalle'];
    //     $email= $_POST['email'];
    //     $telefono= $_POST['telefono'];
    //     $imagen= $_POST['imagen'];
    // }
    // echo($nombre);
    /*Instancio un ojeto de tipo persona con los datos que recibi del formulario */
    $reclutador = new Reclutador($datos->nombre, $datos->apellido,$datos->dni,$datos->nacionalidad,$datos->nacimiento,$datos->telefono,$datos->estadoCivil,$datos->calle,$datos->numerocalle,$datos->email,$datos->imagen,$datos->cuil,$datos->tipoent,$datos->resumen,$datos->urlEmpresa,$datos->pass,$datos->idprovincia,$datos->idlocalidad);
    /*Instancio un ojeto de tipo Alumnomodel para usar su funcion de guardar en la bd */
    // $reclutadorModel = new ReclutadorModel();
    // $reclutadorModel->guardar($alumno);
    $reclutadorController = new ReclutadorController();
    $reclutadorController->Guardar($reclutador);
 ?>