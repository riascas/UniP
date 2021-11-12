<?php 

require_once('./Clases/Persona.php');
require_once('./Model/ConexionDB.php');   

    class AlumnoModel extends ConexionDB  {
        private $servername = "localhost";
        private $dbname = "unip";
        private $username = "root";
        private $password = "";
        private $idAlumno;
        private $idRol;
        private $idPreferencia;
       public function guardar(Alumno $usr) {
        try{

            /*me conecto a la BD*/
            $conexion = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            /*query para insertar datos en tabla persona*/
            $sentenciaSQL= $conexion->prepare("INSERT INTO persona (Nombre, Apellido, DNI, Email, FechaNacimiento, FotoPerfil, Nacionalidad, Telefono, IdEstadoCivil, NombreCalle, NumeroCalle, Password, IdProvincia, IdLocalidad)
            VALUES (:Nombre, :Apellido, :DNI,:Email, :FechaNacimiento, :FotoPerfil, :Nacionalidad, :Telefono, :IdEstadoCivil,  :NombreCalle, :NumeroCalle, NULL,:IdProvincia, :IdLocalidad);"); 
            /* valores para los parametros */
            $sentenciaSQL->bindParam('Nombre',$usr->getNombre());
            $sentenciaSQL->bindParam('Apellido',$usr->getApellido());
            $sentenciaSQL->bindParam('DNI',$usr->getDNI());
            $sentenciaSQL->bindParam('Email',$usr->getEmail());
            $sentenciaSQL->bindParam('FechaNacimiento',$usr->getFechaNacimiento());
            $sentenciaSQL->bindParam('FotoPerfil',$usr->getImagenPerfil());
            $sentenciaSQL->bindParam('Nacionalidad',$usr->getNacionalidad());
            $sentenciaSQL->bindParam('Telefono',$usr->getTelefono());
            $sentenciaSQL->bindParam('IdEstadoCivil',$usr->getEstadoCivil());
            $sentenciaSQL->bindParam('NombreCalle',$usr->getCalle());
            $sentenciaSQL->bindParam('NumeroCalle',$usr->getNumeroCalle());
            $sentenciaSQL->bindParam('IdProvincia',$usr->getProvincia());
            $sentenciaSQL->bindParam('IdLocalidad',$usr->getLocalidad());
            $sentenciaSQL->execute();
           $this->idAlumno =  $conexion->lastInsertId();
           $this->idRol = $usr->getRol();
           $this->idPreferencia = $usr->getPreferencia();

        }catch( Exception $ex){
            echo $ex->getMessage();
        }
    } 


    public function GuardarRol()
    {
        try
        {
          /*me conecto a la BD*/
          $conexion = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password,
          array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
          /*query para insertar datos en tabla rolespersona*/
          $sentenciaSQL= $conexion->prepare("INSERT INTO rolespersona (IdUsuario, IdTipoUsuario) VALUES (:IdUsuario, :IdTipo);");
           /* valores para los parametros */
           $sentenciaSQL->bindParam('IdUsuario',$this->idAlumno);
           $sentenciaSQL->bindParam('IdTipo',$this->idRol);
           $sentenciaSQL->execute();
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }


    public function GuardarPreferencia(){
        /*me conecto a la BD*/

        try{
            $conexion = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        /*query para insertar datos en tabla alumno_preferencia*/
        $sentenciaSQL= $conexion->prepare("INSERT INTO `alumno_preferencias` (`IdAlumno`, `IdPreferencia`) VALUES ( :IdAlumno, :IdPreferencia);");
        /* valores para los parametros */
        $sentenciaSQL->bindParam('IdAlumno',$this->idAlumno);
        $sentenciaSQL->bindParam('IdPreferencia',$this->idPreferencia);
        $sentenciaSQL->execute();
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    
    }
} 
?>