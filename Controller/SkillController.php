<?php
require_once("C:/xampp/htdocs/Unip/Model/SkillModel.php");

class SkillController
{
    private $skillModel;
    
    function __construct()
    {
        $this->skillModel = new SkillModel();
    }

    public function ListarSkill($idAlumno)
    {
        $datos = $this->skillModel->ListarSkill($idAlumno);

        return $datos;
    }
    public function ListarSkillporid($id_skill){
        $datos = $this->skillModel->ListarSkillporid($id_skill);

        return $datos;
    }

    
}

?>