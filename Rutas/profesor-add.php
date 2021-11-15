<?php
<<<<<<< HEAD
//console.log("entro a profesor-add");
/*este archivo  recibe el arreglo con los datos del formulario alumno y los envia a la BD*/
include_once('./Model/ProfesorModel.php');
include_once('./Clases/Persona.php');
    if(isset($_POST['nombre'])){
=======
require_once("../dirs.php");
require_once (MODEL_PATH."AlumnoModel.php");
require_once (CLASES_PATH."Profesor.php");
require_once (CONTROLLER_PATH."ProfesorController.php");

//recibimos los datos de la imagen
$nombre_imagen= $_FILES['imagen']["name"];
//ruta de la carpeta destino
$carpeta_destino= $_SERVER["DOCUMENT_ROOT"]."/UNIP/tempimagenes";
//movemos la imagen del directorio temporal al directorio escogido 
move_uploaded_file($_FILES['imagen']["tmp_name"],$carpeta_destino.$nombre_imagen);

    if(isset($_POST['nombre']))
    {
>>>>>>> d4d81062933b27cfa5a65bc267c0b1e621da2f35
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
        $imgPerfil=$carpeta_destino;
        $pass= sha1($_POST['contrasenia']);
        
    }
    echo($nombre);
    /*Instancio un ojeto de tipo persona con los datos que recibi del formulario */
    $profesor = new Profesor($nombre, $apellido,$dni,$nacionalidad,$fecNac,$telefono,$estadoCivil,$provincia,$localidad,$calle,$numeroCalle,$email,$imgPerfil,$pass,$idprovincia,$idLocalidad);
    /*Instancio un ojeto de tipo Alumnomodel para usar su funcion de guardar en la bd */
    // $reclutadorModel = new ReclutadorModel();
    // $reclutadorModel->guardar($alumno);
    $profesorController = new ProfesorController();
    $profesorController->Guardar($profesor);
 ?>