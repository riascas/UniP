<?php

include('./login-google.php');

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
  <title>Pantalla principal </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <nav class="navbar barra navbar-expand-lg navbar-light  rounded">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Unip</a>
      <img src="./img/Logo3.png" alt="5%" width="3%">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!--<ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">Mi Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Mis postulaciones</a>
          </li>
          <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a> 
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li> 
        </ul>
        <form class="d-flex">
                    Colocar boton de inicio y cerrar sesion en esta parte
                  <button class="btn btn-outline-success" type="submit">Search</button>
          </form> -->
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="row   buscador">
      <div class="col-md-2"></div>
      <div class="col-md-6 ">
        <a type="button" class="btn btn-primary btn-lg" href="./v.principal-reclutador.html"
          >Candidatos</a>
        <a type="button" class="btn btn-success btn-lg text-white" href="./V.principal-alumno.php"
          >Publicaciones</a>
      </div>
    </div>

    <div class="row ">
      <div class="col-md-2"></div>
      <div class="col-md-6 ">
        <input class="form-control mr-sm-2 bg-i shadow border-dark mt-1 " type="search" placeholder="Buscar "
          aria-label="Search">
      </div>

      <div class="row filaTarjetas">
        <div class="col-md-3">
          <div class="card tarjeta-inicio border border-2 border-secondary tarjetas">
            <img src="img/Alumnos.jpg" class="card-img-top " alt="...">
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <h3 class="card-title h3 text-center">Alumnos</h5>
                </div>
                <div class="row mt-1">
                  <div class="col-sm-12">
                    <a class="btn btn-primary w-100 my-1" data-bs-toggle="modal" data-bs-target="#loginmodal" >
                      <div class="row aling-items-center">
                          <div class="col-1"></div>
                          <div class="col-11">
                              <p class=" h5 ps-5 text-center">INGRESAR</p> 
                          </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3 mb-1">
          <div class="card tarjeta-inicio border border-2 border-secondary tarjetas">
            <img src="img/Reclutadores.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <h3 class="card-title h3 text-center">Reclutadores</h5>
                </div>
                <div class="row mt-3">
                  <div class="col-sm-12">
                    <a class="btn btn-primary w-100 my-1" data-bs-toggle="modal" data-bs-target="#loginmodal2">
                      <div class="row aling-items-center">
                          <div class="col-1"></div>
                          <div class="col-11">
                              <p class=" h5 ps-5 text-center">INGRESAR</p> 
                          </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card tarjeta-inicio border border-2 border-secondary tarjetas">
            <img src="img/profesor.jpg" class="card-img-top " alt="...">
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <h3 class="card-title h3 text-center">Profesores</h5>
                </div>
                <div class="row mt-1">
                  <div class="col-sm-12">
                    <a class="btn btn-primary w-100 my-1" data-bs-toggle="modal" data-bs-target="#loginmodal4" >
                      <div class="row aling-items-center">
                          <div class="col-1"></div>
                          <div class="col-11">
                              <p class=" h5 ps-5 text-center">INGRESAR</p> 
                          </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="card tarjeta-inicio border border-2 border-secondary tarjetas">
            <img src="img/departamento-alumnos.jpg" class="card-img-top" >
            <div class="card-body">
              <div class="container">
                <div class="row">
                  <h3 class="card-title h4 text-center">Dpto. Alumnos</h5>
                </div>
                <div class="row mt-1">
                  <div class="col-sm-12">
                    <a class="btn btn-primary w-100 my-1" data-bs-toggle="modal" data-bs-target="#loginmodal3" >
                      <div class="row aling-items-center">
                          <div class="col-1"></div>
                          <div class="col-11">
                              <p class=" h5 ps-5 text-center">INGRESAR</p> 
                          </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" role="dialog" id="loginmodal" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-secondary">
                  <h3 class="modal-tittle text-white ">Bienvenido</h3>
                </div>
                <div class="modal-body">
                  <div class="row text-center">
                    <div class="col-12 h3">Iniciar sesión</div>
                </div>
                <div class="modal-footer">
                  <?php echo $login_button ;?>
                </div>
            </div>
        </div>
      </div>

      <div class="modal fade" role="dialog" id="loginmodal2">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-secondary">
              <h3 class="moddal-tittle text-white ">Bienvenido</h3>
            </div>
            <div class="modal-body">
              <div class="row text-center">
                <div class="col-12 h3">Iniciar Sesión</div>
              </div>
              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext border border-secondary rounded" id="staticEmail" value="email@example.com">
                </div>
            </div>
            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label ">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control-plaintext border border-secondary rounded" id="inputPassword">
              </div>
            </div>
            <a type="submit" class="btn btn-danger" href="./v.principal-reclutador.html">
              Ingresar
            </a>
        <a type="button" class="btn btn-link" href="./recuperar-contraseña.html" >
              Olvide mi contraseña 
        </a>
        <a  href="./FormularioCargaReclutador.html" class="btn btn-link">
          No tengo cuenta
        </a>
          </div>
          </div>
        </div>
      </div>


      <div class="modal fade" role="dialog" id="loginmodal3" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-secondary">
              <h3 class="moddal-tittle text-white ">Bienvenido</h3>
            </div>
            <div class="modal-body">
              <div class="row text-center">
                <div class="col-12 h3">Iniciar Sesión</div>
              </div>
              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext border border-secondary rounded" id="staticEmail" value="email@example.com">
                </div>
            </div>
            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label ">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control-plaintext border border-secondary rounded" id="inputPassword">
              </div>
            </div>
            <a type="submit" class="btn btn-danger" href="./Rutas/ListarReclutador.php">
              Ingresar
            </a>
        <a type="button" class="btn btn-link" href="./recuperar-contraseña.html" >
              Olvide mi contraseña 
        </a>
        <a  href="./FormularioCargaReclutador.html" class="btn btn-link">
          No tengo cuenta
        </a>
          </div>
          </div>
        </div>
      </div>
      <!----modal para profesores------>
      <div class="modal fade" role="dialog" id="loginmodal4" >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-secondary">
              <h3 class="moddal-tittle text-white ">Bienvenido</h3>
            </div>
            <div class="modal-body">
              <div class="row text-center">
                <div class="col-12 h3">Iniciar Sesión</div>
              </div>
              <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext border border-secondary rounded" id="staticEmail" value="email@example.com">
                </div>
            </div>
            <div class="mb-3 row">
              <label for="inputPassword" class="col-sm-2 col-form-label ">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control-plaintext border border-secondary rounded" id="inputPassword">
              </div>
            </div>
            <a type="submit" class="btn btn-danger" href="./v.principal-reclutador.html">
              Ingresar
            </a>
        <a type="button" class="btn btn-link" href="./recuperar-contraseña.html" >
              Olvide mi contraseña 
        </a>
        <a  href="./perfil-alumno.html" class="btn btn-link">
          No tengo cuenta
        </a>
          </div>
          </div>
        </div>
      </div>
    

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>