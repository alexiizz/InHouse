<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Estilos CSS -->
    <style>
        .slider{
            background: url(images/8.jpg);
            height: 80vh;
            background-size: cover;
            background-position: center;
        }
    </style>
  </head>
  <!-- Título -->
  <title>In-House</title>
  <body>
    <section class="container-fluid slider d-flex justify-content-center align-items-center">
        <h1 class="display-3" style="color:white">BIENVENIDO!</h1>
    </section>
    <!-- Menú de navegación INICIA -->
    <div class="container  sticky-top">
      <nav class="navbar navbar-toggleable-md navbar-light bg-faded"style="background-color: #33cccc; ">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.php">
            <img src="images/icono.png" width="50" height="50" class="d-inline-block align-center" alt="">
            In-House
        </a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mr-auto ml-auto text-center">
            <a class="nav-item nav-link" href="index.php">Inicio</a>
            
            <!-- Sub menús -->
            <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle active" href="# " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Ciudad
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink" style="background-color: #29a3a3; ">
                      <a class="dropdown-item" href="cancun.php">Cancún</a>
                      <a class="dropdown-item" href="playadelcarmen.php">Playa del Carmen</a>
                    </div>
            </li>
            <a class="nav-item nav-link" href="servicios.php">Servicios</a>
            <a class="nav-item nav-link" href="contacto.php">Contacto</a>
            <a class="nav-item nav-link" href="acerca de nosotros.php">Acerca de Nosotros</a>
          </div>
          <div class="d-flex flex-row justify-content-center">
              <a href="propietario.php" class="btn btn-outline-primary mr-1">Iniciar Sesión</a>
          </div>
        </div>
       </nav>
</div>
    <!-- TERMINA el menú de navegación -->

      <!-- Inicia Login -->
      <div class="modal-dialog">
        <div class="modal-content bg-faded">
          <div class="modal-header justify-content-center">
            <h1 class="">PROPIETARIO</h1>
          </div>
          <div class="modal-body">
            <form action="" class="col-md-12 center-block">
              <div class="form-group">
                <input type="email" class="form-control input-lg text-center" placeholder="Nombre de Usuario">
              </div>
              <div class="form-group">
                <input type="password" class="form-control input-lg text-center" placeholder="Contraseña">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-block btn-lg btn-success" value="Iniciar Sesión">
                <div class="d-flex justify-content-between mt-2">
                <span class=""><a href="#">Olvidé mi contraseña</a></span>
                </div>
                
              </div>
            </form>
            <div class="modal-footer">
              <div class="col-md-12 d-flex justify-content-end">
                <button class="btn-danger btn btn-md">Cancelar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Termina Login -->

    <!-- Footer -->
    <footer class="container-fluid bg-inverse">
    <div class="row text-white py-4 text-white d-flex justify-content-between">
      <div class="col-md-2">
          <a class="navbar-brand float-left" href="index.php">
        <img src="images/icono.png" alt=""  width="50px" height="auto" class="float-left mr-3">
        <h4 class="lead text-white" href="index.php">In-House</h4>
        <footer class="blockquote-footer">Tu casa te espera.</footer>
          </a>
        
      </div>
      <div class="col-md-8 d-flex lead justify-content-center">
          <a class="navbar-brand text-white" href="index.php">Inicio</a>
          <a class="navbar-brand text-white" href="servicios.php">Servicios</a>
          <a class="navbar-brand text-white" href="contacto.php">Contacto</a>
          <a class="navbar-brand text-white" href="acerca de nosotros.php">Acerca de Nosotros</a>
      </div>
      <div class="col-md-2">
        <h4 class="lead">Síguenos</h4>
        <a href="#"><span class="badge badge-primary">Facebook</span></a>
        <a href="#"><span class="badge badge-danger">Youtube</span></a>
      </div>
    </div>
    <hr class="" style="display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #595d60;
    margin: 1em 0;
    padding: 0;">
    <p class="text-center text-white pb-3">© 2017 In-House.</p>
</footer>
      <!-- Fin Footer -->

    <!-- Inicia JumBotron -->

    <!-- <div class="jumbotron mt-5 rounded-0">
        <div class="container">
                <h1 class="display-3">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <div class="d-flex justify-content-between align-items-center">
                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                    <p class="lead">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Ver más...</a>
                    </p>
                </div>
        </div>
    </div> -->
    <!-- Termina JumBotron -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>