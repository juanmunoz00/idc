<?php include("./dba/registroDB.php"); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portal Synertech</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Registro de Identidad Digital Ciudadana</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./index.html">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="./acerca.html">Acerca de</a>
            </li>
            <!--
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contactenos</a>
            </li>
          -->
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h3 class="text-uppercase">
              <strong>Identidad</strong>
            </h3>
            <hr>
          </div>

          <div class="col-lg-8 mx-auto">
            <!--
            <p class="text-faded mb-5">Este es una plataforma para la verificación de la identidad digital.</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Más Información...</a>
          -->

          							<form class="marginTop" method="post">
									
				<?php
					if($error){
						echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
						
					}					
					if($message){
						echo '<div class="alert alert-success">'.addslashes($message).'</div>';
						
					}				
				?>									
									
                            <div class="form-group">
                                <label for="loginEmail">CURP</label>
                                <input type="text" name="curp" class="form-control" >
                            </div>

          										<div class="form-group">
          												<label for="loginEmail">Apellido Paterno</label>
          												<input type="text" name="ap_paterno" class="form-control" >
          										</div>

          										<div class="form-group">
          												<label for="loginEmail">Apellido Materno</label>
          												<input type="text" name="ap_materno" class="form-control" >
          										</div>

          										<div class="form-group">
          												<label for="loginEmail">Nombre</label>
          												<input type="text" name="nombre" class="form-control" >
          										</div>

                              <h3 class="text-uppercase">
                                <strong>fecha/lugar de nacimiento</strong>
                              </h3>

          										<div class="form-group">
          												<label for="loginEmail">Fecha de Nacimiento</label>
          												<input type="date" name="f_nac" class="form-control" >
          										</div>

                              <div class="form-group">
          												<label for="loginEmail">Ciudad</label>
          												<input type="text" name="nac_ciudad" class="form-control" >
          										</div>

                              <div class="form-group">
          												<label for="loginEmail">Estado</label>
          												<input type="text" name="nac_estado" class="form-control" >
          										</div>

                              <h3 class="text-uppercase">
                                <strong>domicilio</strong>
                              </h3>

                              <div class="form-group">
          												<label for="loginEmail">Calle y Número</label>
          												<input type="text" name="dom_calle_num" class="form-control" >
          										</div>

                              <div class="form-group">
          												<label for="loginEmail">Fraccionamiento/Colonia</label>
          												<input type="text" name="dom_col" class="form-control" >
          										</div>

                              <div class="form-group">
          												<label for="loginEmail">Código Postal</label>
          												<input type="text" name="dom_cod_post" class="form-control" >
          										</div>

                              <div class="form-group">
          												<label for="loginEmail">Ciudad</label>
          												<input type="text" name="dom_ciudad" class="form-control" >
          										</div>

                              <div class="form-group">
          												<label for="loginEmail">Estado</label>
          												<input type="text" name="dom_estado" class="form-control" >
          										</div>

                              <div class="form-group">
          												<label for="loginEmail">No. de Cuenta Recibo del Agua</label>
          												<input type="text" name="num_cta_agua" class="form-control" >
          										</div>

                              <div class="form-group">
          												<label for="loginEmail">No. de Cuenta Recibo de la luz</label>
          												<input type="text" name="num_cta_luz" class="form-control" >
          										</div>

                              <h3 class="text-uppercase">
                                <strong>contacto</strong>
                              </h3>

                              <div class="form-group">
          												<label for="loginEmail">Teléfono de Residencia</label>
          												<input type="text" name="tel_res" class="form-control" >
          										</div>

                              <div class="form-group">
          												<label for="loginEmail">Teléfono Celular</label>
          												<input type="text" name="tel_cel" class="form-control" >
          										</div>

          										<div class="form-group">
          												<label for="loginEmail">Correo Electrónico</label>
          												<input type="email" name="corr_elect" class="form-control" placeholder="alguien@mail.com" value="<?php addslashes($email) ?>">
          										</div>

          										<!--
          											<div class="form-group">
          													<label for="loginEmail">Contraseña</label>
          													<input type="password" name="password" class="form-control" placeholder="Password" />
          											</div>
          										-->
                        </br>
                        <input type="submit" name="registro" value="Registrarse" class="btn btn-success btn-lg marginTop" />
          						</form>
          </div>



        </div>
      </div>
    </header>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
