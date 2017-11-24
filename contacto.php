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
            background: url(images/5.jpg);
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
                    <a class="nav-link dropdown-toggle" href="# " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Ciudad
                    </a>
                    <div class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink" style="background-color: #29a3a3; ">
                      <a class="dropdown-item" href="cancun.php">Cancún</a>
                      <a class="dropdown-item" href="playadelcarmen.php">Playa del Carmen</a>
                    </div>
            </li>
            <a class="nav-item nav-link" href="servicios.php">Servicios</a>
            <a class="nav-item nav-link active" href="contacto.php">Contacto</a>
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
    <!-- <section class="container mt-5 pt-5">
            <div class="card-deck">
                    <div class="card">
                      <img class="card-img-top img-fluid" src="images/c1.jpg" alt="Card image cap">
                      <div class="card-block">
                        <h4 class="card-title">Casa 1</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <button class="btn btn-primary" type="submit">Ver más...</button>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top img-fluid" src="images/c2.jpg" alt="Card image cap">
                      <div class="card-block">
                        <h4 class="card-title">Casa 2</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <button class="btn btn-primary" type="submit">Ver más...</button>
                      </div>
                    </div>
                    <div class="card">
                      <img class="card-img-top img-fluid" src="images/c3.jpg" alt="Card image cap">
                      <div class="card-block">
                        <h4 class="card-title">Casa 3</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <button class="btn btn-primary" type="submit">Ver más...</button>
                      </div>
                    </div>
                  </div>
    </section> -->
    <!-- Fin Cards o Tarjetas -->

    <!-- Formulario 1 -->
  
  <div class="container-fluid ml-5 mr-5">
        <section class="container py-3 mt-5 bg-faded">
          <h3 class="text-uppercase text-center mb-4 pt-5 text-muted">Contacto</h3>
          
            <div class="row">
              <div class="col-md-6">
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
              <div class="col-md-6">
                <p class="lead mb-3 mt-5 ml-5 pr-5 text-muted text-justify">¿Alguna duda, queja o sujerencia? Envíanos un correo llenando el siguiente formulario. FindHome toma en cuenta cada uno de los comentarios, para poder brindarte un mejor servicio. Contáctanos.</p>
              </div>
            </div>
              
        </section>
      </div>
    
      <!-- fin Formulario 1 -->

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