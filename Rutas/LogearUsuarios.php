<?php
require_once("../dirs.php");
require_once (CONTROLLER_PATH."UsuarioController.php");

$datos = json_decode( file_get_contents("php://input"));

$usuariocontroller = new UsuarioController();
$usuario = $usuariocontroller->LogearUsuario($datos->correo, $datos->pas, $datos->tipoUsuario);

echo($usuario);
// print_r($listaReclutadores);

// require_once (VISTAS_PATH.".php");
?>