<?php
/*este archivo  recibe el arreglo con los datos del formulario alumno y los envia a la BD*/
include_once('../Model/AlumnoModel.php');
include_once('../Clases/Alumno.php');
    if(isset($_POST['nombre'])){
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
        $preferencia = $_POST['preferencia'];
        $imagen= $_POST['imagen'];
    }
    //Instancio un objeto de tipo alumno  con los datos que recibi del formulario */
    $alumno = new Alumno($nombre,$apellido,$dni,$nacionalidad,$nacimiento,$telefono,$estadoCivil,$provincia,$localidad,$calle,$numero, $email,$imagen,$preferencia);
    //Instancio un objeto de tipo Alumnomodel para usar su funcion de guardar en la bd */
    $alumnoModel = new AlumnoModel();
    $resultado = $alumnoModel->guardar($alumno);
    $alumnoModel->GuardarRol();
    $alumnoModel->GuardarPreferencia();

?>