<?php 

require_once('./Clases/Persona.php');
require_once('./Model/ConexionDB.php');   

    class AlumnoModel{
        private $servername = "localhost";
        private $dbname = "unip";
        private $username = "root";
        private $password = "";


       public function guardar(Persona $usr) {
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
            /*$this->query = ("INSERT INTO persona ( Nombre, Apellido, DNI, Email, FechaNacimiento, FotoPerfil, Nacionalidad, Telefono, IdEstadoCivil, NombreCalle, NumeroCalle, Password, IdLocalidad)
            VALUES (:Nombre, :Apellido, :DNI,:Email, :FechaNacimiento, :FotoPerfil, :Nacionalidad, :Telefono, :IdEstadoCivil,  :NombreCalle, :NumeroCalle, NULL, :IdLocalidad);");
            echo "Conectado a sistema y guardado";
            $this->ejecutar( array(
                ':Nombre' => $usr->getNombre(),
                ':Apellido' => $usr->getApellido(),
                ':Dni' => $usr->getDNI(),
                ':Email' => $usr->getEmail(),
                ':FechaNac' => $usr->getFechaNacimiento(),
                ':FotoPerfil' => $usr->getImagenPerfil(),
                ':Nacionalidad' => $usr->getNacionalidad(),
                ':Telefono' => $usr->getTelefono(),
                ':IdEstadoCivil' => $usr->getTelefono(),
                ':Telefono' => $usr->getTelefono(),
                ':Telefono' => $usr->getTelefono(),
                ':Telefono' => $usr->getTelefono(),
            ));*/
        }catch( Exception $ex){
            echo $ex->getMessage();
        }
    } 
} 
?>