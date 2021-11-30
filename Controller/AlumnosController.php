<?php
<<<<<<< HEAD
require_once("C:/xampp/htdocs/Unip/Model/AlumnosModel.php");
=======
require_once("./dirs.php");
require_once(MODEL_PATH."AlumnosModel.php");
>>>>>>> 6a186f0e3d805c64296f15c4449c870c3d5d8857

class AlumnoController
{
    private $alumnoModel;
    
    function __construct()
    {
        $this->alumnoModel = new AlumnosModel();
    }

    public function ListarAlumnosResumido()
    {
        $datos = $this->alumnoModel->ListarAlumnosResumido();

        return $datos;
    }

    public function ConsultarPerfilAlumno($idAlumno)
    {
        $datos = $this->alumnoModel->ConsultarPerfilAlumno($idAlumno);
        return $datos;
    }
}

?>