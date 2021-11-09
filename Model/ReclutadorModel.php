<?php
    require_once("../dirs.php");
    require_once (MODEL_PATH."ConexionDB.php");

    class ReclutadorModel extends ConexionDB
    {

        public function Listar()
        {
            $this->query = "SELECT IdPersona,Nombre, Apellido, DNI, Email, FechaNacimiento, FotoPerfil, Nacionalidad, Telefono, IdEstadoCivil, NombreCalle, NumeroCalle, Password, IdProvincia, IdLocalidad,P.IdEstado, E.Descripcion AS Estado
                            FROM Persona P
                            INNER JOIN estadoreclutador E on P.IdEstado = E.IdEstado";
                           
            $this->obtenerRows();
            return $this->rows;
        }

        public function LitarReclutadorPorId($id)
        {
            $this->query ="SELECT IdPersona, Nombre, Apellido, DNI, Email, FechaNacimiento, FotoPerfil, Nacionalidad, Telefono, IdEstadoCivil, NombreCalle, NumeroCalle, Password, IdProvincia, IdLocalidad
            From Persona
            WHERE IdPersona = :IdPersona";
            return $this->obtenerRows(array(
                ':IdPersona'=> $id
            ));
        }

        public function ModificarEstado($id,$idestado)
        {
            $this->query = "UPDATE Persona
                            SET IdEstado = :idestado
                            WHERE IdPersona = :id";
            $this->ejecutar(array(
                                ':idestado' => $idestado,
                                ':id' => $id 
            ));
        }

        public function Guardar(Reclutador $datos)
        {
            // print_r($datos);
            // print_r($this);
            // echo($datos->getNombre()."NombreModel");
            try
            {
                $this->query = "INSERT INTO persona (Nombre, Apellido, DNI, Email, FechaNacimiento, FotoPerfil, Nacionalidad, Telefono, IdEstadoCivil, NombreCalle, NumeroCalle, Password, IdProvincia, IdLocalidad)
                VALUES (:nombre, :apellido,:dni,:email,:fechaNacimiento,:fotoPerfil, :nacionalidad, :telefono, :idEstadoCivil, :nombreCalle, :numeroCalle, :pass,:idProvincia, :idLocalidad);";
                $this->ejecutar( array(
                        ':nombre' => $datos->getNombre(),
                        ':apellido' => $datos->getApellido(),
                        ':dni' => $datos->getDNI(),
                        ':email' => $datos->getEmail(),
                        ':fechaNacimiento' => $datos->getFechaNacimiento(),
                        ':fotoPerfil' => $datos->getImagenPerfil(),
                        ':nacionalidad'=> $datos->getNacionalidad(),
                        ':telefono' => $datos->getTelefono(),
                        ':idEstadoCivil' => $datos->getEstadoCivil(),
                        ':nombreCalle'=> $datos->getCalle(),
                        ':numeroCalle'=> $datos->getNumeroCalle(),
                        ':pass' => $datos->getPassword(),
                        ':idProvincia' => $datos->getProvincia(),
                        ':idLocalidad' => $datos->getLocalidad()
                    ));
                
                // echo($this->estado);
                // $datos->setIdUsuario( $this->ultimoId());
                return $this->ultimoId();
                // echo(strval($this->ultimoId()));
                // echo($datos->getNombre());
                // echo($this->estado);
                // echo('Ok');
            }
            catch(Exception $e)
            {
                $this->estado = "ERROR INSERTAR RECLUTADOR: " . $e->getMessage();
            }
        }
    }

?>