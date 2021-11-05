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
            $sentenciaSQL= $conexion->prepare("INSERT INTO persona (Nombre, Apellido, DNI, Email, FechaNacimiento, NombreCalle, NumeroCalle, Password, IdLocalidad)
            VALUES (:Nombre, :Apellido, :DNI,:Email, :FechaNacimiento,  :NombreCalle, :NumeroCalle, Password, :IdLocalidad);"); 
            /* valores para los parametros */
            $sentenciaSQL->bindParam('Nombre',$usr->getNombre());
            $sentenciaSQL->bindParam('Apellido',$usr->getApellido());
            $sentenciaSQL->bindParam('DNI',$usr->getDNI());
            $sentenciaSQL->bindParam('Email',$usr->getEmail());
            $sentenciaSQL->bindParam('NombreCalle',$usr->getCalle());
            $sentenciaSQL->bindParam('NumeroCalle',$usr->getNumeroCalle());
            $sentenciaSQL->bindParam('IdLocalidad',$usr->getLocalidad());
            $sentenciaSQL->execute();
        }catch( Exception $ex){
            echo $ex->getMessage();
        }
    } 
} 
?>