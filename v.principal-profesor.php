<?php
session_start();

if($_SESSION["IdRol"] != 5){
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
  <link rel="stylesheet" href="./fontawesome/css/all.css">
  <title>Vista principal profesor </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg barra rounded">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="index.php">Unip</a>
      <img src="./img/Logo3.png" alt="5%" width="3%">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" href="./FormularioOfertasLaborales.html">Crear publicación</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" id="miPerfil" href="perfil-profesor.php">Mi Perfil</a>
          </li>
          <li class="nav-item dropdown">
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-5">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar Alumno " aria-label="Search">
      </div>
    </div>
    <div class="row">
      <div class=" col-md-1 dropdown">
        <button class="btn btn-secondary dropdown-toggle mt-1" type="button" id="dropdownMenuButton1"
          data-bs-toggle="dropdown" aria-expanded="false">
          Skills
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">Tester</a></li>
          <li><a class="dropdown-item" href="#">Programador C</a></li>
          <li><a class="dropdown-item" href="#">Base de datos</a></li>
        </ul>
      </div>
    </div>
    <?php
    
      require_once("C:/xampp/htdocs/Unip/Controller/obteneralumnosController.php");
      $alumnosController = new obteneralumnosController();
      $listaAlumnos = $alumnosController->ListarAlumnos();
      // print_r($listaAlumnos);
      foreach($listaAlumnos as $row){
        echo('
          <div class="row">
          <div class="col-md-5 mt-4  border border-2 border-dark rounded  tarjeta-laboral tarjetas">
            <img class="rounded-circle mt-1 ms-2" src="./'.$row["FotoPerfil"].'" alt="" width="100">
            <P class="h3 ms-2">'.$row['Nombre'].' '.$row['Apellido'].'</P>
            <p class="h4 ms-2 ">Alumno cursando tercer año de la carrera tecnicatura universitaria de software</p>
            <a href="Consultaperfil-alumno-profesor.php?Id='.$row['IdPersona'].'" class="link-dark float-end btn btn-primary text-white mb-2 mt-4 ">Ver Perfil completo</a>
          </div>
        ');
      }
    ?>
   
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
<a href="logout.php">salir</a>
</html>