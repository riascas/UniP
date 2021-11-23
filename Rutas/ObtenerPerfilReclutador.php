<?php
require_once("../dirs.php");
require_once (CLASES_PATH."Reclutador.php");
require_once (CONTROLLER_PATH."ReclutadorController.php");

// echo("entré a la ruta");
// $datos = json_decode( file_get_contents("php://input"));
$datoId = $_GET["idReclutador"];
// echo($datoId);
$reclutadorcontroller = new ReclutadorController();
$perfilReclutador = $reclutadorcontroller->ListarPerfil($datoId);
if($perfilReclutador == null)
{
    echo("no obtuve datos");
}

require_once (VISTAS_PATH."perfil-Reclutador.php");
?>