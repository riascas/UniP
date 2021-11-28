<?php
 require_once("../dirs.php");
 require_once (MODEL_PATH."/ConexionDB.php");
class RolesUsuariosModel extends ConexionDB
{
    public function Guardar($idUsuario,$idRol)
    {
        try
        {
            $this->query="INSERT INTO reolespersona(IdTipoUsuario,IdUsuario)
            VALUES(:idrol,:idusuario)";
            $this->ejecutar(array(
                ':idrol' => $idRol,
                ':idusuario' =>$idUsuario
            ));
        }
        catch(Exception $e)
        {
            $this->estado = "ERROR INSERTAR EN LA TABLA: ".$e->getMessage();
        }
    }
}
?>