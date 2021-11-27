<?php
require_once("../dirs.php");
require_once (CONTROLLER_PATH."UsuarioController.php");


$datos = json_decode(file_get_contents("php://input")); 
echo("entre controller");
print_r($datos);
$usuariocontroller = new UsuarioController();

$email = $datos->email;
$password = $datos->password;

$usuario = $usuariocontroller->LogearUsuario($email,$password);
// print_r($usuario);
// echo($usuario[0]["IdRol"]);
switch($usuario[0]["IdRol"]){
  case(4):
    if($usuario != null){
      return require_once("../v.principal-reclutador.php");
      
    }
    else{
      require_once("../FormularioCargaReclutdato.html");
    }





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