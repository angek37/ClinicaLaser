<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clinica Láser</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Clinica Láser</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#acerca">Acerca de</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger portfolio-item d-block mx-auto" href="#portfolio-modal-1">Cita</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#signup">Inicia Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/logo.png">
        <h1 class="text-uppercase mb-0">Clinica Láser</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Dr. David Bolaños Celaya</h2>
        <h2 class="font-weight-light mb-0">Cirugía General y Laparoscópica</h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="acerca">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Acerca de</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-md-6">
            <p class="lead">Clínica de cirugía estética en Dolores Hidalgo,Guanajuato con 26 años de experiencia. Te brindamos comodidad, seguridad y calidad en nuestros servicios.</p>
          </div>
          <div class="col-md-6">
            <p class="lead">La Cirugía Laparoscópica ha supuesto el mayor cambio en el abordaje de las patologías abdominales desde el inicio del desarrollo de la cirugía. Consiste en realizar las intervenciones sobre los órganos abdominal a través de pequeñas incisiones en el abdomen</p>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <img class="img-fluid mb-5 d-block mx-auto" src="img/pic1.jpg" width="50%" height="50%">
        </div>
      </div>
    </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Ubicación</h4>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d232.55127533975036!2d-100.9343801877182!3d21.159544340066507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842b3f076bf1d779%3A0xca21e60de9b9f519!2zQ2zDrW5pY2EgTMOhc2Vy!5e0!3m2!1ses!2smx!4v1511499962977" width="80%" height="80%" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-md-4 rounded" id="signup" style="background: #FFF; padding: 10px">
            <h4 class="text-uppercase text-secondary mb-4">Iniciar Sesión</h4>
            <form id="contactForm" novalidate="novalidate" method="POST" action="signin">
                <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Usuario</label>
                <input class="form-control" name="name" type="text" placeholder="Usuario" required="required" data-validation-required-message="Por favor ingresa tu usuario.">
                <p class="help-block text-danger"></p>
                </div>
                </div>
                <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Contraseña</label>
                <input class="form-control" name="password" type="password" placeholder="Contraseña" required="required" data-validation-required-message="Por favor ingresa tu contraseña.">
                <p class="help-block text-danger"></p>
                </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Inicia Sesión</button>
                </div>
          </form>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; Clinica Láser 2017</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Cita</h2>
              <hr class="star-dark mb-5">
             <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
