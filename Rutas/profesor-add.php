<?php
//console.log("entro a profesor-add");
/*este archivo  recibe el arreglo con los datos del formulario alumno y los envia a la BD*/
include_once('./Model/ProfesorModel.php');
include_once('./Clases/Persona.php');
    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $nacionalidad= $_POST['nacionalidad'];
        $estadoCivil = $_POST['estadoCivil'];
        $fecha_nac = $_POST['fecha_nac'];
        $provincia= $_POST['provincia'];
        $localidad= $_POST['localidad'];
        $barrio = $_POST['barrio'];
        $nomcalle= $_POST['nomcalle'];
        $numcalle= $_POST['numcalle'];
        $pisodepto= $_POST['pisodepto'];
        $contrasenia= sha1($_POST['contrasenia']);
        $email= $_POST['email'];
        $imagen= $_POST['imagen'];
        $telefono= $_POST['telefono'];
    }
    /*Instancio un ojeto de tipo persona con los datos que recibi del formulario */
    $profesor = new Persona($telefono,$contrasenia,$nombre,$apellido,$dni,$nacionalidad,$fecha_nac,$estadoCivil,$provincia,$localidad,$nomcalle,$numcalle, $email,$imagen);
    /*Instancio un ojeto de tipo Alumnomodel para usar su funcion de guardar en la bd */
    $profesorModel = new ProfesorModel();
    $profesorModel->guardar($profesor);
?>