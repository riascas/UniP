<?php
    // require_once("../dirs.php");
    // require_once(MODEL_PATH."ConexionDB.php");
    require_once("ConexionDB.php");
    class obteneralumnosModel extends ConexionDB
    {
        public function ListarAlumnos()
        {
            try
            {
                $this->query = "SELECT * FROM persona";
                $this->obtenerRows();
                return $this->rows;
            }
            catch (Exception $ex){
                echo $ex->getMessage();
            }
        }

        public function ConsultarPerfilAlumno($idAlumno)
        {
            $this->query = "SELECT * FROM persona WHERE IdPersona = :idAlumno";
            $this->obtenerRows(array(
                ':idAlumno'=>$idAlumno  
            ));
            return $this->rows;
        }
    }
?>