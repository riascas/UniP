<?php
    // require_once("../dirs.php");
    // require_once(MODEL_PATH."ConexionDB.php");
    require_once("ConexionDB.php");
    class SkillModel extends ConexionDB
    {
     
        public function ListarSkill($idAlumno)
        {
            try
            {
                $this->query = "SELECT * FROM alumno_skills
                
                where IdAlumno = $idAlumno ";
                $this->obtenerRows();
                return $this->rows;
            }
            catch (Exception $ex){
                echo $ex->getMessage();
            }
        }

        public function ListarSkillporid($id_skill)
        {
            try
            {
                $this->query = "SELECT * FROM skills
                
                where IdSkills = $id_skill ";
                $this->obtenerRows();
                return $this->rows;
            }
            catch (Exception $ex){
                echo $ex->getMessage();
            }
        }
    }
?>
