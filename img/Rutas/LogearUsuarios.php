<?php
require_once("../dirs.php");
require_once ("../Controller/UsuarioController.php");

/* $datos = json_decode( file_get_contents("php://input")); */

$usuariocontroller = new UsuarioController();

$param = $_POST["param"];
switch ($param) {
  case 'login':
    $email = $_POST["email"];
    $password = $_POST["password"];

    $usuario = $usuariocontroller->LogearUsuario($email,$password);
    echo json_encode($usuario);
    break;
  
  default:
    # code...
    break;
}


















/* 
if($usuario != "" || $usuario != null){
  session_start();
  $_SESSION["id"] = $usuario["tipodeusuario"];
  session_destroy();
}
echo($usuario); */
// print_r($listaReclutadores);

// require_once (VISTAS_PATH.".php");
?>