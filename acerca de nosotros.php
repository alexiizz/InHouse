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
            background: url(images/4.jpg);
            height: 80vh;
            background-size: cover;
            background-position: center;
        }
        .panel-title {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 16px;
            color: inherit;
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
                    <a class="nav-link dropdown-toggle" href="# " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Ciudad
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink" style="background-color: #29a3a3; ">
                      <a class="dropdown-item" href="cancun.php">Cancún</a>
                      <a class="dropdown-item" href="playadelcarmen.php">Playa del Carmen</a>
                    </div>
            </li>
            <a class="nav-item nav-link" href="servicios.php">Servicios</a>
            <a class="nav-item nav-link" href="contacto.php">Contacto</a>
            <a class="nav-item nav-link active" href="acerca de nosotros.php">Acerca de Nosotros</a>
          </div>
          <div class="d-flex flex-row justify-content-center">
              <a href="propietario.php" class="btn btn-outline-primary mr-1">Iniciar Sesión</a>
          </div>
        </div>
       </nav>
</div>
    <!-- TERMINA el menú de navegación -->

<!-- Inicia Acordion -->

    <div class="container">
        <div class="row">
            <div class="col-md-7 d-flex flex-row ml-3 mr-3 mt-3 mb-5 py-5" style="border: 1px solid #85e0e0; background: #f2f2f2;">
            <div class="panel-group col-md-12" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default text-muted " style="background: #6fdcdc;">
                    <div class="panel-heading active">
                        <h4 class="panel-title py-2 pl-2">
                            <a class="text-muted" href="#mision" data-toggle="collapse" data-parent="#accordion" aria-expanded="true" aria-controls="mision">
                                Misión.
                            </a>
                        </h4>
                    </div>
                    <div id="mision" class="panel-collapse collapse in text-justify" role="tabpanel" aria-labelledby="tituloMision">
                        <div class="panel-body bg-faded px-2" style="border: 1px solid #85e0e0; background: #f2f2f2;">
                            <h4>Proporcionar múltiples opciones de hospedaje al sector turístico y empresarial por medio de una plataforma web intuitiva y segura.
                              </h4>
                       </div>
                    </div>

                </div> <!--panel-group-->

                <div class="panel panel-default text-muted" style="background: #6fdcdc;">
                    <div class="panel-heading" role="tab" id="titulo vision">
                        <h4 class="panel-title py-2 pl-2">
                            <a class="text-muted" href="#vision" class="collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="vision">
                                Vision
                            </a>
                        </h4>
                    </div><!--panel-heading-->

                    <div id="vision" class="panel-collapse collapse text-justify px-2" style="border: 1px solid #85e0e0; background: #f2f2f2;" role="tabpanel" aria-labelledby="tituloVision">
                         <h4>Ser la empresa líder en el ramo de bienes raíces ofreciendo difusión por medio de una plataforma estable y de fácil uso para el alquiler de inmuebles.
                          </h4>
                    </div>
                </div>

                     <div class="panel panel-default text-muted" style="background: #6fdcdc;">
                    <div class="panel-heading" role="tab" id="titulo quehace">
                        <h4 class="panel-title py-2 pl-2">
                            <a class="text-muted" href="#quehace" class="collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false" aria-controls="quehace">
                                ¿Qué hace?
                            </a>
                        </h4>
                    </div><!--panel-heading-->

                    <div id="quehace" class="panel-collapse collapse text-justify px-2" style="border: 1px solid #85e0e0; background: #f2f2f2;" role="tabpanel" aria-labelledby="tituloVision">
                         <h4>Administra bienes inmuebles poniéndolos a disposición del turismo o empresa según se requiera para poder alquilar por periodos definidos de tiempo ofreciendo una extensa gama de opciones según convenga al arrendador.
                          </h4>
                    </div>
                </div>

            </div> <!--panel-group-->
        </div><!---col-md7-->

        <div class="col-md-4 mt-3">
            <img src="images/c11.jpg" alt="logo nosotros" width="350" height="200" class="img-responsive">
        </div>

        </div> <!--container-->
    </div>

    <!-- Termina Acordion -->

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
    <p class="text-center text-white pb-0">© 2017 In-House.</p>
    <a class="navbar-brand d-flex justify-content-center" href="terminosdeuso.php">
        
        <footer class="blockquote-footer ">Terminos de Uso</footer>
    </a>
</footer>
      <!-- Fin Footer -->

    

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>