<?php
include_once('./Model/AlumnoModel.php');
include_once('./Clases/Alumno.php');
    if(isset($_POST['nombre'])){
        $email= $_POST['email'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $dni = $_POST['dni'];
        $nacionalidad= $_POST['nacionalidad'];
        $estadoCivil = $_POST['estadoCivil'];
        $fecha = $_POST['fecha'];
        $calle= $_POST['calle'];
        $numero= $_POST['numeroCalle'];
        $telefono= $_POST['telefono'];
        $opcion =$_POST['opcion'];
    }

switch($opcion){
    case 2:
        $alumno = new AlumnoModel();
        $alumno->actualizarDatos($email,$nombre,$apellido,$dni,$nacionalidad,$fecha,$calle,$numero,$telefono);
}


?>