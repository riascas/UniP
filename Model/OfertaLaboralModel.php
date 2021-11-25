<?php
    require_once("../dirs.php");
    require_once (MODEL_PATH."ConexionDB.php");

    class OfertaLaboral extends ConexionDB
    {

        public function Listar()
        {
            $this->query = "SELECT IdOferta,Titulo, IdEmpresa, UbicacionOferta, DetallePuesto, FuncionesPuesto, IdTipoContrato, IdTipoJornada, , IdLocalidad,P.IdEstado, E.Descripcion
             AS Estado
                            FROM Oferta o
                            INNER JOIN estadoreclutador E on P.IdEstado = E.IdEstado";
                           
            $this->obtenerRows();
            return $this->rows;
        }

        public function ListarOferta($id)
        {
            
        
            
            $this->query ="SELECT IdOferta, o.Titulo as Tipo, UbicacionOferta, DetallePuesto, FuncionesPuesto 
            o.IdEmpresa, em.Nombre
            as NombreEmpresa
            o.IdTipoContrato, dc.DetalleContrato
            as DetalleContrato
            o.IdTipoJornada, dj.Detalle
            as Tipojornada
            from oferta o
            INNER JOIN Nombre em on o.Idempresa= em.Nombre 
            INNER JOIN DetalleContrato dc on o.IdTipoContrato= dc.DetalleContrato
            INNER JOIN detalle dj on o.IdTipoJornada= dj.Detalle
            WHERE IdOferta = :IdOfer";

            $this->obtenerRows(array(
                ':IdPers'=> intval($id)
            ));

            return $this->rows;
        }
        /*
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
        */
        public function Guardar(Reclutador $datos)
        {
            // print_r($datos);
            // print_r($this);
            // echo($datos->getNombre()."NombreModel");
            try
            {
                $this->query = "INSERT INTO oferta (Titulo, Contejamiento, DNI, Email, FechaNacimiento, FotoPerfil, Nacionalidad, Telefono, IdEstadoCivil, NombreCalle, NumeroCalle, Password, IdProvincia, IdLocalidad)
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