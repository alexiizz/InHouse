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
            background: url(images/1.jpeg);
            height: 80vh;
            background-size: cover;
            background-position: center;
        }
        /* .form-control{
            background-color: #ebeeed;
            border: 0;
            box-shadow: none;
        }
        .btn-default.enviar {
            background-color: #323538;
            color: #fff;
            border: 0;
            padding: 7px 52px;
            text-transform: uppercase;
        }
        .modal-body {
            position: relative;
            padding: 15px;
        } */
    </style>
  </head>
  <!-- Título -->
  <title>In-House</title>
  <body>
    <!-- <section class="container-fluid slider d-flex justify-content-center align-items-center">
        <h1 class="display-3">WELCOME!</h1>
    </section> -->

    <!-- Inicia SlideShow -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active" style="height: 90vh">
                <img class="d-block img-fluid" src="images/4.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                        <h3>¿Buscas hospedaje Bueno, Bonito y Barato? Nosotros podemos ayudarte.</h3>
                        <p>En FindHome tenemos una gran variedad de hermosas casas en renta al mejor precio.</p>
                      </div>
              </div>
              <div class="carousel-item" style="height: 90vh">
                <img class="d-block img-fluid" src="images/13.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                        <h3>¿Te vas de vacaciones y aún no tienes donde hospedarte?</h3>
                        <p>Tu mejor respuesta es FindHome, tenemos lo mejor en hospedaje de calidad a tu alcance.</p>
                      </div>
              </div>
              <div class="carousel-item" style="height: 90vh">
                <img class="d-block img-fluid" src="images/10.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                        <h3>¿Buscas una casa bonita, a buen precio y con buena ubicación?</h3>
                        <p>En FindHome tú escoges donde quieres rentar, cuanto quieres pagar y la casa que te guste más.</p>
                      </div>
              </div>
              <div class="carousel-item" style="height: 90vh">
                    <img class="d-block img-fluid" src="images/5.jpg" alt="Fourd slide">
                    <div class="carousel-caption d-none d-md-block">
                            <h3>¿Necesitas hospedaje urgentemente? Felicidades, estás en el sitio correcto.</h3>
                            <p>En FindHome puedes reservar lo mejor en hospedaje desde la comodidad de tu casa.</p>
                          </div>
                  </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Siguiente</span>
            </a>
    </div>

    <!-- Termina SlideShow -->

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
                        <a class="nav-item nav-link active" href="index.php">Inicio</a>
                        
                        <!-- Sub menús -->
                        <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" href="# " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Ciudad
                                </a>
                                <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink" style="background-color: #29a3a3; ">
                                  <a class="dropdown-item" href="cancun.php">Cancún</a>
                                  <a class="dropdown-item" href="cancun.php">Playa del Carmen</a>
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

    <!-- Cards o Tarjetas Inicio-->
    <section class="container mt-3 pt-3">
        <!-- <hr class=""> -->
          <h2 class="d-flex flex-row justify-content-center mt-3 mb-5 py-5 bg-faded" style="border: 1px solid #85e0e0;">BIENVENIDO HUÉSPED</h2>
          <!-- <hr class="mb-5"> -->
            <div class="card-deck">
                    <div class="card">
                      <a href="" data-toggle="modal" data-target="#myModal"><img class="card-img-top img-fluid" src="images/c1.jpg" alt="Card image cap"></a>
                      <div class="card-block text-center">
                        <h4 class="card-title">Hermosa casa en la Zona Hotelera</h4>
                        
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#myModal">
                        Ver más...
                        </button>
      
                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Zona Turística</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="row">
                                      <div class="col-md-6 text-justify">
                                        <p>En la Zona Turística o Zona Hotelera encontrarás las mejores casas de lujo, a un precio más elevado pero te incluyen todas las comodidades y lujos que desees que realmente valen la pena, además de que tendrás más cerca la Zona de Antros en la cual se encuentran una gran variedad de Restaurantes, Bares, Discotecas y negocios para comprar souvenirs.</p>
                                      </div>
                                      <div class="col-md-6">
                                        <img class="card-img-top img-fluid" src="images/c1.jpg" alt="">
                                      </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin Modal -->
                      </div>
                    </div>
                    <div class="card">
                            <a href="" data-toggle="modal" data-target="#myModal2"><img class="card-img-top img-fluid" src="images/c2.jpg" alt="Card image cap"></a>
                      <div class="card-block text-center">
                        <h4 class="card-title">Hermosa casa en el centro de la Ciudad</h4>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#myModal2">
                                Ver más...
                                </button>
              
                                <!-- Modal -->
                                <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Zona Centro</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                              <div class="row">
                                                <div class="col-md-6 text-justify">
                                                  <p>En la Zona Centro de la ciudad encontrarás hermosas casas a precios más accesibles, una de las ventajas es que tendrás más cerca una gran variedad de negocios para comprar souvenirs así como plazas y centros comerciales.</p>
                                                </div>
                                                <div class="col-md-6">
                                                  <img class="card-img-top img-fluid" src="images/c2.jpg" alt="">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin Modal -->
                      </div>
                    </div>
                    <div class="card">
                            <a href="" data-toggle="modal" data-target="#myModal3"><img class="card-img-top img-fluid" src="images/c3.jpg" alt="Card image cap"></a>
                      <div class="card-block text-center">
                        <h4 class="card-title">Hermosa casa en la Zona Hotelera</h4>
                        <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary mt-3" data-toggle="modal" data-target="#myModal3">
                                Ver más...
                                </button>
              
                                <!-- Modal -->
                                <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Personalizado</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                              <div class="row">
                                                <div class="col-md-6 text-justify">
                                                  <p>En el área de Personalizado tú podrás elegir el tipo de casa que quieres rentar, ya sea por número de habitaciones, camas, baños, con o sin piscina, por menor o mayor precio, etc. Sólo tú decides como quieres tener la casa perfecta que se adapte a tus gustos y preferencias .</p>
                                                </div>
                                                <div class="col-md-6">
                                                  <img class="card-img-top img-fluid" src="images/c3.jpg" alt="">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin Modal -->
                      </div>
                    </div>
                  </div>
    </section>
    <!-- Fin Cards o Tarjetas -->
    
    <!-- START THE FEATURETTES -->

    <div class="container my-5">
            <hr class="">
            
            <div class="row d-flex align-items-center my-5 py-5">
              <div class="col-md-7">
                <h2 class="display-4">In-House. <span class="text-muted">Tu casa te espera...</span></h2>
                <p class="lead">Olvídate de pagar hoteles caros para hospedarte en tus vacaciones, en In-House te ofrecemos una gran variedad de hermosas casas al mejor precio.</p>
              </div>
              <div class="col-md-5">
                <img class=" img-fluid mx-auto" src="images/c6.jpg" alt="Generic placeholder image">
              </div>
            </div>
            
            <hr class="">
            
            <!-- <div class="row d-flex align-items-center my-5 py-5">
              <div class="col-md-7 push-md-5">
                <h2 class="display-4">Oh yeah, it's that good.<span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
              <div class="col-md-5 pull-md-7">
                <img class=" img-fluid mx-auto" src="images/c2.jpg" alt="Generic placeholder image">
              </div>
            </div>
            
            <hr class="">
            
            <div class="row d-flex align-items-center my-5 py-5">
              <div class="col-md-7">
                <h2 class="display-4">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
              </div>
              <div class="col-md-5">
                <img class=" img-fluid mx-auto" src="images/c3.jpg" alt="Generic placeholder image">
              </div>
            </div> -->
            
            
          </div>
    
          <!-- /END THE FEATURETTES -->

    <!-- Inicia JumBotron -->

    <div class="jumbotron mt-5 rounded-0 text-white" style="background-color: #5b5b57">
        <div class="container">
                <h2 class="display-5 d-flex justify-content-center">¿Cansado de pagar hoteles caros? Podemos ayudarte.</h2>
                <p class="lead d-flex justify-content-center">Solo contactanos y nosotros te conseguiremos el hospedaje perfecto al mejor precio.</p>
                <hr class="my-4">
                <div class="d-flex justify-content-center align-items-center">
                    
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
                      Solicitar informes
                      </button>
    
                      <!-- Modal -->
                      <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                  <div class="modal-header  text-muted">
                                  <h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                                  </div>
                                  <div class="modal-body">
                                    
                                    
                                      <section class="container py-3 bg-faded">
                                        
                                          <div class="row">
                                            <div class="col-md-12">
                                              <form action="" class=" flex-md-row">
                                                <div class="form-group row">
                                                  <label for="" class="text-muted col-md-2 col-form-label">Nombre:</label>
                                                  <input type="text" placeholder="Escribe tu nombre aquí" class="form-control col-10 text-center">
                                                </div>
                                                <div class="form-group row">
                                                  <label for="" class="text-muted col-md-2 col-form-label">Correo:</label>
                                                  <input type="email" placeholder="Correo electrónico" class="form-control col-10 text-center">
                                                </div>
                                                <div class="form-group row">
                                                  <label for="" class="text-muted col-md-2 col-form-label">Teléfono:</label>
                                                  <input type="tel" placeholder="Número de teléfono" class="form-control col-10 text-center">
                                                </div>
                                                <div class="form-group row">
                                                  <label for="" class="text-muted col-md-2 col-form-label">Mensaje:</label>
                                                  <textarea placeholder="Escriba su mensaje aquí" class="form-control col-10 text-center"></textarea>
                                                </div>
                                                <div class="form-group row">
                                                  <div class="col-md-2">
                                                  </div>
                                                  <div class="col-md-10 d-flex justify-content-center">
                                                      
                                                      <button type="submit" class="btn btn-success enviar ">Enviar</button>
                                                      
                                                  </div>
                                                  
                                                </div>
                                              </form>
                                            </div>
                                            
                                            
                                      </section>
                                    
                                      </div>
                                  <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- Fin Modal -->
                </div>
        </div>
    </div>
    <!-- Termina JumBotron -->

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