<?php
require_once("../dirs.php");
require_once (CLASES_PATH."Reclutador.php");
require_once (CONTROLLER_PATH."ReclutadorController.php");



$reclutadorcontroller = new ReclutadorController();
$listaReclutadores = $reclutadorcontroller->ListarOfertas($idRec);

// print_r($listaReclutadores);

require_once (VISTAS_PATH."ReclutadorListarOfertas.php");
?>