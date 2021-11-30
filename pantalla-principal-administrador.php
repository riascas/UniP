<?php
session_start();

if($_SESSION["IdRol"] != 1){
  header("Location: login.php"); 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="css/fotos-administrador.css">

  <link rel="stylesheet" href="./fontawesome/css/all.css">
  <title>Pantalla principal </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
</head>
<nav class="navbar navbar-expand-lg barra rounded">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="./pantalla-principal.php">Unip</a>
    <img src="./img/Logo3.png" alt="5%" width="3%">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="./pantalla-principal-administrador.html">Administracion</a>
        </li>
        <li class="nav-item dropdown">
          <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a> -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <!-- <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li> -->
      </ul>
      <!-- <form class="d-flex">
                Colocar boton de inicio y cerrar sesion en esta parte
              <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
                          <!-- Fin navbar -->

<body>
      <div class="container">     
        <h1>Administracion de usuarios y funcionalidades</h1> 
                 
                          
                            <!--inicio de componentes para la pantalla inicial 1-->
                  <div class="row">                     

                          <div class="col-md-4  fotos-administrador">
                            <div class="card">
                              <img src="img/Alumnos.jpg"  class="card-img-top " alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Alumnos</h5>
                                <p class="card-text">Administrar prefencias de empleo y skills</p>
                                <a href="./ABMPreferenciasSkill.html" class="btn btn-primary">Ingresar</a>
                              </div>
                            </div>
                          </div>


                            <div class="col-md-4  fotos-administrador">
                              <div class="card ">
                                <img src="img/profesor.jpg" class="card-img-top " alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Profesores</h5>
                                  <p class="card-text">Gestiona profesores de la universidad</p>
                                  <a href="./ABMProfesores.html" class="btn btn-primary">Ingresar</a>
                                </div>
                              </div>
                            </div>

                            <!--<div class="col-md-3 col-12 fotos-administrador">
                              <div class="card">
                                <img src="img/estadisticas.jpeg" class="card-img-top " alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Estadísticas</h5>
                                  <p class="card-text">Conoce el prestigio adquirido de la universidad</p>
                                  <a href="estadisticas.html" class="btn btn-primary">Ingresar</a>
                                </div>
                              </div>
                            </div>-->
        
        
                            <div class="col-md-4 fotos-administrador">
                              <div class="card">
                                <img src="img/departamento-alumnos.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Departamento de alumnos</h5>
                                  <p class="card-text">Gestiona usuarios del departamento de alumnos</p>
                                  <a href="ABMdepartamentoalumnos.html" class="btn btn-primary ">Ingresar</a>
                                </div>
                              </div>
                            </div> 
                    
                  </div>
                  <a href="logout.php">salir</a>

      </div>   <!--fin del container-->
  </body>    
      
  <a href="logout.php">salir</a>
  
      <!--FIN TARJETAS-->          

</html>