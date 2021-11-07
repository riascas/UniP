<?php
require_once("../dirs.php");
require_once (MODEL_PATH."AlumnoModel.php");
require_once (CLASES_PATH."Reclutador.php");
require_once (CONTROLLER_PATH."ReclutadorController.php");

    if(isset($_POST['nombre']))
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $nacionalidad= $_POST['nacionalidad'];
        $estadoCivil = $_POST['estadoCivil'];
        $nacimiento = $_POST['nacimiento'];
        $provincia= $_POST['provincia'];
        $localidad= $_POST['localidad'];
        $calle= $_POST['calle'];
        $numero= $_POST['numero'];
        $email= $_POST['email'];
        $telefono= $_POST['telefono'];
        $imagen= $_POST['imagen'];
    }
    echo($nombre);
    /*Instancio un ojeto de tipo persona con los datos que recibi del formulario */
    $reclutador = new Reclutador($nombre, $apellido,$dni,$nacionalidad,$nacimiento,$telefono,$estadoCivil,$provincia,$localidad,$calle,$numeroCalle,$email,$imgPerfil,$cuil,$tipoent,$resum,$url,$est,$pass,$idprovincia,$idLocalidad);
    /*Instancio un ojeto de tipo Alumnomodel para usar su funcion de guardar en la bd */
    // $reclutadorModel = new ReclutadorModel();
    // $reclutadorModel->guardar($alumno);
    $reclutadorController = new ReclutadorController();
    $reclutadorController->Guardar($reclutador);
 ?>