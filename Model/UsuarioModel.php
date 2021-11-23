<?php
    class UsuarioModel extends ConexionDB
    {
        public function Listar()
        {
            $this->query = "SELECT U.IdUsuario, U.Nombre, U.Apellido,U.DNI, U.Email
                            FROM Usuario U";
            $this->obtenerRows();
            return $this->rows;
            
        }

        public function Guardar(Persona $usr)
        {
            $this->query="INSERT INTO Usuario(IdUsuario,Nombre, Apellido,DNI,Email,FechaNacimiento,FotoPerfil)
            VALUES(:idUsr,:nombre,:apellido,:dni,:email,:fechaNac,:fotoPrf)";
            $this->ejecutar( array(
                ':idUsr' => $usr->getIdUsuario(),
                ':nombre' => $usr->getNombre(),
                ':apellido' => $usr->getApellido(),
                ':dni' => $usr->getDNI(),
                ':email' => $usr->getEmail(),
                ':fechaNac' => $usr->getFechaNacimiento(),
                ':fotoPrf' => $usr->getImagenPerfil()
            ));
            return $this->ultimoId();
        }

        public function LogearUsuario($correo,$pass)
        {
            $this->query = "SELECT p.IdPersona, Nombre, Apellido, DNI, Email,r.IdRol,r.Descripcion FROM persona p
            INNER JOIN rolespersona rp ON p.IdPersona = rp.IdPersona
            INNER JOIN roles r ON r.IdRol = rp.IdRol
            WHERE Correo = :coreo AND Password = :pass";
            $usuarioLogeado = $this->ejecutar((array(
                ':correo' => $correo,
                ':pass' => $pass
            )));

            return $usuarioLogeado;
            
        }
    }
?>