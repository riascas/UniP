<?php
//console.log("entro a profesor-add");

/*este archivo  recibe el arreglo con los datos del formulario alumno y los envia a la BD*/
include_once('../Model/ProfesorModel.php');
include_once('../Clases/Persona.php');
include_once('../Controller/ProfesorController.php');
include_once('../Clases/Profesor.php');
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $nacionalidad= $_POST['nacionalidad'];
        $estadoCivil = $_POST['estadoCivil'];
        $fecNac = $_POST['fecha_nac'];
        $provincia= $_POST['provincia'];
        $localidad= $_POST['localidad'];
        $calle= $_POST['nomcalle'];
        $numeroCalle= $_POST['numcalle'];
        $email= $_POST['email'];
        $telefono= $_POST['telefono'];
        $imgPerfil="carpeta destino";
        $pass= sha1($_POST['contrasenia']);
        $idprovincia="";
        $idLocalidad="";
        
    }
  
    /*Instancio un ojeto de tipo persona con los datos que recibi del formulario */
    $profesor = new Profesor($nombre, $apellido,$dni,$nacionalidad,$fecNac,$telefono,$estadoCivil,$provincia,$localidad,$calle,$numeroCalle,$email,$imgPerfil,$pass,$idprovincia,$idLocalidad);
    /*Instancio un ojeto de tipo Alumnomodel para usar su funcion de guardar en la bd */
    // $reclutadorModel = new ReclutadorModel();
    // $reclutadorModel->guardar($alumno);
    $profesorController = new ProfesorController();
    $respuesta=$profesorController->Guardar($profesor);
    echo json_encode ($respuesta);
 ?>