<?php
    class ProfesorModel extends ConexionDB
    {
        public function Listar(){
            $this->query = "SELECT P.IdProfesor,U.IdUsuario, U.Nombre, U.Apellido,U.Cuil, R.nombre, R.IdMaestro, R.IdProfesor,R.Materia
                            FROM Profesor P
                            INNER JOIN Usuario U ON U.IdUsuario = P.IdUsuario";
            $this->obtenerRows(array(
                ':inscripcionId' => $this->inscripcionId
            ));
            return $this->rows;
        }

        public function Guardar(){
            $this->query = "INSERT INTO Profesor(IdProfesor, IdUsuario, URL)
                            VALUES(:nombre, :url)";
            $this->ejecutar( array(
                    ':nombre' => $this->nombre,
                    ':url' => $this->url
                ));
            $this->documentoId = $this->ultimoId();
        }
    }

?>