<?php
require_once('../Model/AlumnoModel.php');
if(isset($_POST['email'],$_POST['opcion'])){
    $email= $_POST['email'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $nacionalidad= $_POST['nacionalidad'];
    $fecha = $_POST['fecha'];
    $calle= $_POST['calle'];
    $numero= $_POST['numeroCalle'];
    $telefono= $_POST['telefono'];
    $imagen = $_POST['imagen'];
    $opcion=$_POST['opcion'];
    switch($opcion){
        case 2:
            $alumno = new AlumnoModel();
            $resultado= $alumno->actualizarDatos($email,$nombre,$apellido,$dni,$nacionalidad,$fecha,$imagen,$calle,$numero,$telefono);
            
            $datos =  $resultado->fetch(PDO::FETCH_ASSOC);
            $json[] = array(
                'nombre' => $datos['Nombre'],
                'apellido' => $datos['Apellido'],
                'dni' => $datos['DNI'],
                'nacionalidad' => $datos['Nacionalidad'],
                'fecha' => $datos['FechaNacimiento'],
                'foto' => $datos['FotoPerfil'],
                'calle' => $datos['NombreCalle'],
                'numeroCalle' => $datos['NumeroCalle'],
                'telefono' => $datos['Telefono'],
            );

            $jsonstring =  json_encode($json);
            echo $jsonstring;
    }
}
 ?>