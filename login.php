<?php
    require 'conexion.php';

    $personas = $mysqli->query("SELECT Email, TipoUsuario
    FROM personas
    WHERE Persona  = ' ".$_POST['email']. " '
    AND Password = '".$_POST['password']."'");

    if:($personas->numrows==1):
        $datos = $usuarios->fetch_assoc();
        echo json_encode(array('error' => false, 'tipo' => $datos['Tipo_usuario']));
    else:
        echo json_encode(array('error' => true));
    endif;
    $mysqli -> close();
?>