<?php
require_once("C:/xampp/htdocs/Unip/Model/obteneralumnosModel.php");

class obteneralumnosController
{
    private $alumnoModel;
    
    function __construct()
    {
        $this->alumnoModel = new obteneralumnosModel();
    }

    public function ListarAlumnos()
    {
        $datos = $this->alumnoModel->ListarAlumnos();

        return $datos;
    }

    public function ConsultarPerfilAlumno($idAlumno)
    {
        $datos = $this->alumnoModel->ConsultarPerfilAlumno($idAlumno);
        return $datos;
    }
}

?>