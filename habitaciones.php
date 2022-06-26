<?php
 
// grab recaptcha library
require_once "recaptchalib.php";

// your secret key
$secret = "6Lcui54gAAAAAJIrlA11bcaLSf-IsOLEOmcsuaZa";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);

// if submitted check response
if ($_POST["g-recaptcha-response"]) {
  $response = $reCaptcha->verifyResponse(
      $_SERVER["REMOTE_ADDR"],
      $_POST["g-recaptcha-response"]
  );
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.ico">
    <title>Del Valle Hotel | Habitaciones</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/bd0bb73cdd.js" crossorigin="anonymous"></script>
    <script src="js/functions.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="floating-whatsapp/floating-wpp.js"></script>
    <link rel="stylesheet" href="floating-whatsapp/floating-wpp.css">
</head>
<body style="background-color: #fafafa;" onload="LoadRoom(); Carga()">
    
    <!-- Barra de Navegación -->
    <nav id="navorigin" class="navbar sticky-top navbar-expand-lg navbar-light bg-light" style="background-color: #f5f5f5 !important;">
      <div id="navdesplegable" class="container-fluid desplegable" style="width: auto; display: block;">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand desplegable-img" href="index.html">
          <img id="myLogo" class="image-fluid logo-normal" src="img/logo_general.png" alt="LogoHotel_del_Valle.jpg">
        </a>  
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item mx-2">
              <a class="nav-link letra-grande" aria-current="page" href="index.html">Inicio</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link letra-grande" href="sobrenosotros.html">Sobre Nosotros</a>
            </li>
            <li class="nav-item mx-2 dropdown">
              <a class="nav-link dropdown-toggle active letra-grande" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Habitaciones
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a id="Matrimoniales" class="dropdown-item letra-grande" href="#" onclick="LinkRoomsL(this.id); LinkRoomsS(this.id);">Matrimoniales</a></li>
                <li><a id="Dobles" class="dropdown-item letra-grande" href="#" onclick="LinkRoomsL(this.id); LinkRoomsS(this.id);">Dobles</a></li>
                <li><a id="Triples" class="dropdown-item letra-grande" href="#" onclick="LinkRoomsL(this.id); LinkRoomsS(this.id);">Triples</a></li>
                <li><a id="Queen" class="dropdown-item letra-grande" href="#" onclick="LinkRoomsL(this.id); LinkRoomsS(this.id);">Queen</a></li>     
              </ul>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link letra-grande" href="encuentranos.html">Encuéntranos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <div id="primer-fade" class="primer-fade">
    <!-- Carousel habitaciones pantalla grande -->
    <div class="container-fluid texture pb-1 pantalla-l" style="width: 100%;">
      <div class="container-fluid d-flex flex-wrap" style="max-width: 1400px;">
        <!-- Matrimonial -->
        <div id="carruselRoomMatrimonial" class="carousel slide carousel-fade pb-4 pt-4 col-4 d-block" data-bs-ride="carousel">
          <div style="position: relative; margin-right: -2rem;">
            <div class="carousel-indicators-rounded">
              <button type="button" data-bs-target="#carruselRoomMatrimonial" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carruselRoomMatrimonial" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carruselRoomMatrimonial" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" style="display: flex;">
                <div class="" style="height: 42rem; width: 100%; background-image: url('img/matrimonial1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
              </div>
              <div class="carousel-item">
                <div class="" style="height: 42rem; width: 100%; background-image: url('img/matrimonial2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
              </div>
              <div class="carousel-item">
                <div class="" style="height: 42rem; width: 100%; background-image: url('img/matrimonial3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Individual
        <div id="carruselRoomIndividual" class="carousel slide carousel-fade pb-4 pt-4 col-4 d-block" data-bs-ride="carousel">
          <div style="position: relative; margin-right: -2rem;">
            <div class="carousel-indicators-rounded">
              <button type="button" data-bs-target="#carruselRoomIndividual" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carruselRoomIndividual" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carruselRoomIndividual" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" style="display: flex;">
                <div class="" style="height: 42rem; width: 100%; background-image: url('img/accesible1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
              </div>
              <div class="carousel-item">
                <div class="" style="height: 42rem; width: 100%; background-image: url('img/accesible2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
              </div>
              <div class="carousel-item">
                <div class="" style="height: 42rem; width: 100%; background-image: url('img/accesible3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
              </div>
            </div>
          </div>
        </div> -->
        
        <!-- Doble -->
        <div id="carruselRoomDoble" class="carousel slide carousel-fade pb-4 pt-4 col-4 d-none" data-bs-ride="carousel">
          <div style="position: relative; margin-right: -2rem;">
            <div class="carousel-indicators-rounded">
              <button type="button" data-bs-target="#carruselRoomDoble" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carruselRoomDoble" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carruselRoomDoble" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" style="display: flex;">
                <div class="" style="height: 42rem; width: 100%; background-image: url('img/doble1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
              </div>
              <div class="carousel-item">
                <div class="" style="height: 42rem; width: 100%; background-image: url('img/doble2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
              </div>
              <div class="carousel-item">
                <div class="" style="height: 42rem; width: 100%; background-image: url('img/doble3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Triple -->
        <div id="carruselRoomTriple" class="carousel slide carousel-fade pb-4 pt-4 col-4 d-none" data-bs-ride="carousel">
          <div style="position: relative; margin-right: -2rem;">
            <div class="carousel-indicators-rounded">
              <button type="button" data-bs-target="#carruselRoomTriple" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carruselRoomTriple" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carruselRoomTriple" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" style="display: flex;">
                <div class="" style="height: 42rem; width: 100%; background-image: url('img/familiar1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
              </div>
              <div class="carousel-item">
                <div class="" style="height: 42rem; width: 100%; background-image: url('img/familiar2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
              </div>
              <div class="carousel-item">
                <div class="" style="height: 42rem; width: 100%; background-image: url('img/familiar3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Queen -->
        <div id="carruselRoomQueen" class="carousel slide carousel-fade pb-4 pt-4 col-4 d-none" data-bs-ride="carousel">
          <div style="position: relative; margin-right: -2rem;">
            <div class="carousel-indicators-rounded">
              <button type="button" data-bs-target="#carruselRoomQueen" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carruselRoomQueen" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carruselRoomQueen" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" style="display: flex;">
                <div class="" style="height: 42rem; width: 100%; background-image: url('img/queen1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
              </div>
              <div class="carousel-item">
                <div class="" style="height: 42rem; width: 100%; background-image: url('img/queen2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
              </div>
              <div class="carousel-item">
                <div class="" style="height: 42rem; width: 100%; background-image: url('img/queen3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-8">
          <h3 class="display-6 text-center p-3 px-5" style="font-weight: 500; font-size: 3rem !important;"><strong>Nuestras Habitaciones</strong></h3>
          <hr class="mb-4" style="color: #000000; width: 25%; height: 0.2em; border-radius: 0.1em; margin: auto;">
          <div class="d-block mb-4 mt-4">
            <ul class="d-flex flex-wrap lista_tours p-3" style="list-style: none; text-align: center;">

              <!-- Individual
              <li class="punto d-flex flex-wrap justify-content-center position-relative col-md-4 col-lg-2">
                <a class="link_tours active_link" id="Individual_link" href="javascript:void(0);" onclick="LinkRoomsL(this.id);">Accesible<br>Individual</a>
              </li>  -->
              
              <li class="punto d-flex flex-wrap justify-content-center position-relative col-md-4 col-lg-2">
                <a class="link_tours active_link" id="Matrimonial_link" href="javascript:void(0);" onclick="LinkRoomsL(this.id);">Tradicional<br>Matrimonial</a>
              </li>

              <li class="punto d-flex flex-wrap justify-content-center position-relative col-md-4 col-lg-2">
                <a class="link_tours" id="Doble_link" href="javascript:void(0);" onclick="LinkRoomsL(this.id);">Tradicional<br>Doble</a>
              </li>

              <li class="punto d-flex flex-wrap justify-content-center position-relative col-md-4 col-lg-2">
                <a class="link_tours" id="Triple_link" href="javascript:void(0);" onclick="LinkRoomsL(this.id);">Tradicional<br>Triple</a>
              </li>

              <li class="d-flex flex-wrap justify-content-center position-relative col-md-4 col-lg-2">
                <a class="link_tours" id="Queen_link" href="javascript:void(0);" onclick="LinkRoomsL(this.id);">Exclusivo<br>Queen</a>
              </li>
            </ul>
          </div>
          <hr class="" style="color: #000000; width: 81%; height: 0.2em; border-radius: 0.1em; margin: auto; margin-top: -1rem;">
          <div class="container-fluid pt-4 pb-4 col-10">

            <!-- Individual Descripcion
            <p id="Individual_descripcion" class="d-block" style="text-align: justify;">Disfruta de una acogedora habitación de 12 m² con una cama muy cómoda, cuenta con un velador y lámparas nocturnas. Podrás disfrutar de lo servicios de TV con cable y WiFi gratis. Además de contar con desayuno incluido. Ideal para personas que buscan un ambiente funcional y pacífico.</p>  -->
            
            <!-- Matrimonial Descripcion -->
            <p id="Matrimonial_descripcion" class="d-block" style="text-align: justify;">Disfruta de una acogedora habitación con una cama muy cómoda, cuenta con veladores y modernas lámparas nocturnas. Podrás disfrutar de los servicios de baño privado, TV con cable, intercomunicador y WiFi gratis. Además de contar con desayuno incluido. Ideal para personas que buscan un ambiente funcional y pacífico.</p>

            <!-- Doble Descripcion -->
            <p id="Doble_descripcion" class="d-none" style="text-align: justify;">Disfruta de una acogedora habitación con dos camas cómodas (01 cama de 2 plazas y 01 de 1 plaza y media) cuenta con veladores, y modernas lámparas nocturnas. Podrás disfrutar de los servicios de baño privado, TV con cable, intercomunicador y WiFi gratis. Además de contar con desayuno incluido. Ideal para familias que buscan un ambiente acogedor.</p>

            <!-- Triple Descripcion -->
            <p id="Triple_descripcion" class="d-none" style="text-align: justify;">Disfruta de una acogedora habitación con tres cómodas camas (01 cama de 2 plazas y 02 de 1 plaza y media) cuenta con veladores, y modernas lámparas nocturnas. Podrás disfrutar de los servicios de baño privado, TV con cable, intercomunicador y WiFi gratis. Además de contar con desayuno incluido. Ideal para familias que buscan un ambiente amplio y acogedor.</p>
            
            <!-- Queen Descripcion -->
            <p id="Queen_descripcion" class="d-none" style="text-align: justify;">Disfruta de una acogedora habitación con 01 confortable cama de tamaño Queen, cuenta con veladores, y modernas lámparas nocturnas. Podrás disfrutar de los servicios de baño privado, TV con cable, Netflix, intercomunicador y WiFi gratis. Además de contar con desayuno incluido. Ideal para parejas que buscan un ambiente amplio y acogedor.</p>
          </div>
          <hr class="" style="color: #d8d8d8; width: 81%; height: 1.2em; border-radius: 0.1em; margin: auto; margin-top: -1rem; opacity: 1 !important;">
          <div class="container-fluid mt-4 py-4 px-5 shadow-sm mb-4 rounded" style="flex: 0 0 auto; width: 81%; background-color: #fff;">

            <!-- Individual Icono
            <div id="Individual_icono" class="row d-flex">
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bath" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Baño privado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-tv" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">TV por cable</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-wifi" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">WiFi gratis</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-shower" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Ducha personal</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-couch" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Velador/Muebles</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-mug-saucer" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Desayuno</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-volume-xmark" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Insonorizado</span>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Matrimonial Icono -->
            <div id="Matrimonial_icono" class="row d-flex">
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bath" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Baño privado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-tv" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">TV por cable</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bell-concierge" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Servicio a la habitación</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-wifi" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">WiFi gratis</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-shower" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Ducha grande</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-soap" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Indumentarias de baño</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-person-booth" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Armario/Ropero</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-couch" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Velador/Muebles</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-rug" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Suelo alfombrado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-phone-flip" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Intercomunicador</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-mug-saucer" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Desayuno</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-volume-xmark" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Insonorizado</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Doble Icono -->
            <div id="Doble_icono" class="row d-flex d-none">
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bath" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Baño privado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-tv" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">TV por cable</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bell-concierge" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Servicio a la habitación</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-wifi" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">WiFi gratis</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-shower" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Ducha personal</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-person-booth" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Armario/Ropero</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-couch" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Velador/Muebles</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-rug" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Suelo alfombrado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-phone-flip" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Intercomunicador</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-mug-saucer" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Desayuno</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-volume-xmark" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Insonorizado</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Triple Icono -->
            <div id="Triple_icono" class="row d-flex d-none">
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bath" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Baño privado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-tv" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">TV por cable</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bell-concierge" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Servicio a la habitación</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-wifi" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">WiFi gratis</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-shower" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Ducha grande</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-soap" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Indumentarias de baño</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-person-booth" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Armario/Ropero</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-couch" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Velador/Muebles</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-rug" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Suelo alfombrado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-phone-flip" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Intercomunicador</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-mug-saucer" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Desayuno</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-volume-xmark" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Insonorizado</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Queen Icono -->
            <div id="Queen_icono" class="row d-flex d-none">
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bath" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Baño privado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-tv" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">TV por cable</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" id="footer-sample-full" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="iconify iconify--mdi" width="28.5" height="24"><path fill="#D69C4F" d="M6.5 2h4l2.94 8.83L13.5 2h4v20c-1.25-.22-2.63-.36-4.09-.42L10.5 13l-.07 8.59c-1.4.06-2.73.2-3.93.41V2Z"></path></svg>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Netflix</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bell-concierge" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Servicio a la habitación</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-wifi" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">WiFi gratis</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-shower" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Ducha grande</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-soap" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Indumentarias de baño</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-person-booth" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Armario/Ropero</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-couch" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Velador/Muebles</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-rug" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Suelo alfombrado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-phone-flip" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Intercomunicador</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-fire-burner" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Calefacción</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-mug-saucer" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Desayuno</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-volume-xmark" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Insonorizado</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Carousel habitaciones pantalla pequeña -->
    <div class="container-fluid texture pb-1 pantalla-s" style="width: 100%;">
      <div class="container-fluid d-flex flex-wrap justify-content-center" style="max-width: 1400px;">
        <div class="col-12">
          <h3 class="display-6 text-center p-3" style="font-weight: 500;"><strong>Nuestras Habitaciones</strong></h3>
          <hr class="mb-4" style="color: #000000; width: 25%; height: 0.2em; border-radius: 0.1em; margin: auto;">
          <div class="dropdown dropdown-flex mb-4 mt-4" style="text-align: center;">
            <button id="btnRooms" class="link_tours link_tours_button active_link button_rooms" style="text-transform: uppercase;" onclick="openLinks();">
              Tradicional Matrimonial
            </button>
            <div class="fa-solid fa-angle-down flecha_rooms"></div>
            <ul class="dropdown-menu dropdown-rooms" aria-labelledby="dropdownRooms" style="list-style: none;">
              
              <!-- Individual
              <li class="dropdown-item" style="text-align: center;">
                <a class="link_tours active_link" id="IndividualS_link" href="javascript:void(0);" onclick="LinkRoomsS(this.id);">Accesible Individual</a>
              </li> -->
              
              <li class="dropdown-item" style="text-align: center;">
                <a class="link_tours active_link" id="MatrimonialS_link" href="javascript:void(0);" onclick="LinkRoomsS(this.id);">Tradicional Matrimonial</a>
              </li>
              <li class="dropdown-item" style="text-align: center;">
                <a class="link_tours" id="DobleS_link" href="javascript:void(0);" onclick="LinkRoomsS(this.id);">Tradicional Doble</a>
              </li>
              <li class="dropdown-item" style="text-align: center;">
                <a class="link_tours" id="TripleS_link" href="javascript:void(0);" onclick="LinkRoomsS(this.id);">Tradicional Triple</a>
              </li>
              <li class="dropdown-item" style="text-align: center;">
                <a class="link_tours" id="QueenS_link" href="javascript:void(0);" onclick="LinkRoomsS(this.id);">Exclusivo Queen</a>
              </li>
            </ul>
          </div>
          <hr class="mt-4" style="color: #000000; height: 0.2em; border-radius: 0.1em; margin: auto; margin-top: -1rem;">
          <div class="container-fluid pt-4 pb-4 col-12">

            <!-- Individual Descripcion 
            <p id="IndividualS_descripcion" class="d-block" style="text-align: justify;">Disfruta de una acogedora habitación de 12 m² con una cama muy cómoda, cuenta con un velador y lámparas nocturnas. Podrás disfrutar de lo servicios de TV con cable y WiFi gratis. Además de contar con desayuno incluido. Ideal para personas que buscan un ambiente funcional y pacífico.</p> -->
            
            <!-- Matrimonial Descripcion -->
            <p id="MatrimonialS_descripcion" class="d-block" style="text-align: justify;">Disfruta de una acogedora habitación con una cama muy cómoda, cuenta con veladores y modernas lámparas nocturnas. Podrás disfrutar de los servicios de baño privado, TV con cable, intercomunicador y WiFi gratis. Además de contar con desayuno incluido. Ideal para personas que buscan un ambiente funcional y pacífico.</p>

            <!-- Doble Descripcion -->
            <p id="DobleS_descripcion" class="d-none" style="text-align: justify;">Disfruta de una acogedora habitación con dos camas cómodas (01 cama de 2 plazas y 01 de 1 plaza y media) cuenta con veladores, y modernas lámparas nocturnas. Podrás disfrutar de los servicios de baño privado, TV con cable, intercomunicador y WiFi gratis. Además de contar con desayuno incluido. Ideal para familias que buscan un ambiente acogedor.</p>

            <!-- Triple Descripcion -->
            <p id="TripleS_descripcion" class="d-none" style="text-align: justify;">Disfruta de una acogedora habitación con tres cómodas camas (01 cama de 2 plazas y 02 de 1 plaza y media) cuenta con veladores, y modernas lámparas nocturnas. Podrás disfrutar de los servicios de baño privado, TV con cable, intercomunicador y WiFi gratis. Además de contar con desayuno incluido. Ideal para familias que buscan un ambiente amplio y acogedor.</p>
            
            <!-- Queen Descripcion -->
            <p id="QueenS_descripcion" class="d-none" style="text-align: justify;">Disfruta de una acogedora habitación con 01 confortable cama de tamaño Queen, cuenta con veladores, y modernas lámparas nocturnas. Podrás disfrutar de los servicios de baño privado, TV con cable, Netflix, intercomunicador y WiFi gratis. Además de contar con desayuno incluido. Ideal para parejas que buscan un ambiente amplio y acogedor.</p>
          </div>
          <hr class="" style="color: #d8d8d8; height: 1.2em; border-radius: 0.1em; margin: auto; margin-top: -1rem; opacity: 1 !important;">
          <div class="container-fluid mt-4 py-4 px-5 shadow-sm mb-4 rounded" style="flex: 0 0 auto; background-color: #fff;">

            <!-- Individual Icono
            <div id="IndividualS_icono" class="row d-flex">
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bath" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Baño privado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-tv" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">TV por cable</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-wifi" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">WiFi gratis</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-shower" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Ducha personal</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-couch" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Velador/Muebles</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-mug-saucer" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Desayuno</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-volume-xmark" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Insonorizado</span>
                  </div>
                </div>
              </div>
            </div> -->
            
            <!-- Matrimonial Icono -->
            <div id="MatrimonialS_icono" class="row d-flex">
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bath" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Baño privado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-tv" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">TV por cable</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bell-concierge" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Servicio a la habitación</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-wifi" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">WiFi gratis</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-shower" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Ducha grande</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-soap" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Indumentarias de baño</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-person-booth" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Armario/Ropero</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-couch" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Velador/Muebles</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-rug" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Suelo alfombrado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-phone-flip" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Intercomunicador</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-mug-saucer" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Desayuno</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-volume-xmark" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Insonorizado</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Doble Icono -->
            <div id="DobleS_icono" class="row d-flex d-none">
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bath" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Baño privado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-tv" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">TV por cable</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bell-concierge" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Servicio a la habitación</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-wifi" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">WiFi gratis</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-shower" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Ducha personal</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-person-booth" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Armario/Ropero</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-couch" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Velador/Muebles</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-rug" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Suelo alfombrado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-phone-flip" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Intercomunicador</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-mug-saucer" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Desayuno</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-volume-xmark" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Insonorizado</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Triple Icono -->
            <div id="TripleS_icono" class="row d-flex d-none">
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bath" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Baño privado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-tv" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">TV por cable</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bell-concierge" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Servicio a la habitación</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-wifi" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">WiFi gratis</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-shower" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Ducha grande</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-soap" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Indumentarias de baño</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-person-booth" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Armario/Ropero</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-couch" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Velador/Muebles</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-rug" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Suelo alfombrado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-phone-flip" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Intercomunicador</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-mug-saucer" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Desayuno</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-volume-xmark" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Insonorizado</span>
                  </div>
                </div>
              </div>
            </div>
            <!-- Queen Icono -->
            <div id="QueenS_icono" class="row d-flex d-none">
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bath" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Baño privado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-tv" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">TV por cable</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" id="footer-sample-full" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="iconify iconify--mdi" width="28.5" height="24"><path fill="#D69C4F" d="M6.5 2h4l2.94 8.83L13.5 2h4v20c-1.25-.22-2.63-.36-4.09-.42L10.5 13l-.07 8.59c-1.4.06-2.73.2-3.93.41V2Z"></path></svg>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Netflix</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-bell-concierge" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Servicio a la habitación</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-wifi" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">WiFi gratis</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-shower" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Ducha grande</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-soap" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Indumentarias de baño</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-person-booth" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Armario/Ropero</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-couch" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Velador/Muebles</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-rug" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Suelo alfombrado</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-phone-flip" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Intercomunicador</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-fire-burner" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Calefacción</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-mug-saucer" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Desayuno</span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="mb-4 align-items-center justify-content-start d-flex">
                  <i class="fa-solid fa-volume-xmark" style="color: #d69c4f; font-size: 22px; margin-right: 5px;"></i>
                  <div>
                    <span style="font-weight: 200; font-size: 1rem;">Insonorizado</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Individual
        <div id="carruselRoomIndividualS" class="carousel slide carousel-fade pb-4 col-12 d-block" data-bs-ride="carousel">
          <div class="carousel-indicators-rounded p-4">
            <button type="button" data-bs-target="#carruselRoomIndividualS" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carruselRoomIndividualS" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carruselRoomIndividualS" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" style="display: flex;">
              <div class="" style="height: 36rem; width: 100%; background-image: url('img/accesible1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
            </div>
            <div class="carousel-item">
              <div class="" style="height: 36rem; width: 100%; background-image: url('img/accesible2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
            </div>
            <div class="carousel-item">
              <div class="" style="height: 36rem; width: 100%; background-image: url('img/accesible3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
            </div>
          </div>
        </div> -->
        
        <!-- Matrimonial -->
        <div id="carruselRoomMatrimonialS" class="carousel slide carousel-fade pb-4 col-12 d-block" data-bs-ride="carousel">
          <div class="carousel-indicators-rounded p-4">
            <button type="button" data-bs-target="#carruselRoomMatrimonialS" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carruselRoomMatrimonialS" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carruselRoomMatrimonialS" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" style="display: flex;">
              <div class="" style="height: 36rem; width: 100%; background-image: url('img/matrimonial1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
            </div>
            <div class="carousel-item">
              <div class="" style="height: 36rem; width: 100%; background-image: url('img/matrimonial2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
            </div>
            <div class="carousel-item">
              <div class="" style="height: 36rem; width: 100%; background-image: url('img/matrimonial3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
            </div>
          </div>
        </div>

        <!-- Doble -->
        <div id="carruselRoomDobleS" class="carousel slide carousel-fade pb-4 col-12 d-none" data-bs-ride="carousel">
          <div class="carousel-indicators-rounded p-4">
            <button type="button" data-bs-target="#carruselRoomDobleS" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carruselRoomDobleS" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carruselRoomDobleS" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" style="display: flex;">
              <div class="" style="height: 36rem; width: 100%; background-image: url('img/doble1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
            </div>
            <div class="carousel-item">
              <div class="" style="height: 36rem; width: 100%; background-image: url('img/doble2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
            </div>
            <div class="carousel-item">
              <div class="" style="height: 36rem; width: 100%; background-image: url('img/doble3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
            </div>
          </div>
        </div>

        <!-- Triple -->
        <div id="carruselRoomTripleS" class="carousel slide carousel-fade pb-4 col-12 d-none" data-bs-ride="carousel">
          <div class="carousel-indicators-rounded p-4">
            <button type="button" data-bs-target="#carruselRoomTripleS" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carruselRoomTripleS" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carruselRoomTripleS" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" style="display: flex;">
              <div class="" style="height: 36rem; width: 100%; background-image: url('img/familiar1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
            </div>
            <div class="carousel-item">
              <div class="" style="height: 36rem; width: 100%; background-image: url('img/familiar2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
            </div>
            <div class="carousel-item">
              <div class="" style="height: 36rem; width: 100%; background-image: url('img/familiar3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
            </div>
          </div>
        </div>

        <!-- Queen -->
        <div id="carruselRoomQueenS" class="carousel slide carousel-fade pb-4 col-12 d-none" data-bs-ride="carousel">
          <div class="carousel-indicators-rounded p-4">
            <button type="button" data-bs-target="#carruselRoomQueenS" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carruselRoomQueenS" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carruselRoomQueenS" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" style="display: flex;">
              <div class="" style="height: 36rem; width: 100%; background-image: url('img/queen1.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
            </div>
            <div class="carousel-item">
              <div class="" style="height: 36rem; width: 100%; background-image: url('img/queen2.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
            </div>
            <div class="carousel-item">
              <div class="" style="height: 36rem; width: 100%; background-image: url('img/queen3.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;"></div>
            </div>
          </div>
        </div>


      </div>
    </div>

    <!-- Formulario -->
    <div class="container-fluid fade-in" style="width: 100%; margin-bottom: 2rem;">
      <div class="container-fluid p-0" style="max-width: 1200px;">
        <h3 class="display-6 text-center p-3" style="font-weight: 500;"><strong>Consulta por una Habitación</strong></h3>
        <hr class="mb-4" style="color: #000000; width: 18%; height: 0.2em; border-radius: 0.1em; margin: auto;">
        <form action="https://formsubmit.co/walterarzapalo23@gmail.com" method="POST" class="row g-3 needs-validation" style="margin: 0 !important;" novalidate>
          <div class="form-floating col-sm-12 col-md-6 px-4">
            <input type="text" name="Nombres" class="form-control reserva" id="ValidationNombre" placeholder="Nombres y Apellidos" required>
            <label class="px-4" for="ValidationNombre" >Nombres y Apellidos</label>
            <div class="invalid-feedback">
              Ingrese su Nombre(s) y Apellido(s).
            </div>
          </div>
          <div class="form-floating col-sm-12 col-md-6 select px-4">
            <select name="Habitación" class="form-select reserva" id="ValidationRoom" style="cursor: pointer;" required>
              <option selected disabled value=""></option>
              <option value="1">Accesible Individual</option>
              <option value="2">Accesible Doble</option>
              <option value="3">Tradicional Familiar</option>
              <option value="4">Tradicional Matrimonial</option>
              <option value="5">Superior Queen</option>
            </select>
            <label class="px-4" for="ValidationRoom">Seleccione una habitación a consultar</label>
            <div class="fa-solid fa-angle-down flecha px-4"></div>
            <div class="invalid-feedback">
              Por favor seleccione una habitación.
            </div>
          </div>
          <div class="form-floating col-sm-12 col-md-6 px-4">
            <input type="email" name="Correo" class="form-control reserva" id="ValidationEmail" placeholder="Correo electrónico" required>
            <label class="px-4" for="ValidationEmail">Correo electrónico</label>
            <div class="invalid-feedback">
              Por favor ingrese un correo valido.
            </div>
          </div>
          <div class="form-floating col-sm-12 col-md-6 px-4">
            <input type="text" name="Telefono" class="form-control reserva" minlength="9" maxlength="9" id="ValidationCell" onkeypress="return onlyNumbers(event)" placeholder="Número de teléfono" required>
            <label class="px-4" for="ValidationCell">Número de teléfono</label>
            <div class="invalid-feedback">
              Por favor ingrese un teléfono valido.
            </div>
          </div>
          <div class="form-floating col-sm-12 col-md-6 px-4">
            <input type="text" name="Fecha" id="ValidationDate" class="form-control reserva" min="" onfocus="minDate(), (this.type='date')" onfocusout="validateDate()" placeholder="Fecha de alojamiento" required>
            <label class="px-4" for="ValidationDate">Fecha de alojamiento</label>
            <div class="invalid-feedback">
              Por favor ingrese una fecha.
            </div>
          </div>
          <div class="form-floating col-sm-12 col-md-6 px-4">
            <textarea class="form-control reserva" name="Mensaje" id="ValidationTextArea" placeholder="Mensaje (Opcional)"></textarea>
            <label class="px-4" for="ValidationTextArea">Mensaje (Opcional)</label>
          </div>
          <div class="col-sm-12 col-md-6 px-4" style="margin-top: 2rem;">
            <div class="mb-2"><a class="legal" data-bs-toggle="modal" data-bs-target="#exampleModal" style="cursor: pointer;">Acepto los términos y condiciones señaladas para las siguientes fines:</a></div>
            <div class="form-check">
              <div class="mb-1">
                <input class="form-check-input" type="checkbox" value="" id="ValidationPublicidad" required>
                <label class="form-check-label" for="ValidationPublicidad">
                  Envío de publicidad sobre los productos, servicios y/o promociones.
                </label>
              </div>
              <div class="mt-1">
                <input class="form-check-input" type="checkbox" value="" id="ValidationNoticias" required>
                <label class="form-check-label" for="ValidationNoticias">
                  Envío de noticias y/o actividades comerciales.
                </label>
              </div>
              <div class="invalid-feedback">
                Debe aceptar los términos y condiciones antes de continuar.
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6" style="margin-top: 2rem;">
            <div class="form-group">
              <div class="g-recaptcha" data-sitekey="6Lcui54gAAAAAOxwfPqYES2kp8wHDdrjQaNwJ9ir" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
              <input class="form-control d-none" data-recaptcha="true" data-error="Por favor complete el Captcha">
              <div class="help-block with-errors"></div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 m-0 px-4 mt-3">
            <button class="btn btn-amarillo" type="submit" style="width: 100%;" onclick="ValidarForm()">ENVIAR</button>
          </div>
          
          <?php 
            foreach ($_POST as $key => $value) {
              echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
            }
          ?>

          <input type="hidden" name="_next" value="https://walterarzrey.github.io/hotel_del_valle/habitaciones.html">
          <input type="hidden" name="_captcha" value="false">
          <input type="hidden" name="_subject" value="Nueva Consulta Habitación!">
        </form>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" style="max-width: 80% !important;">
        <div class="modal-content">
          <div class="modal-header d-block">
            <button type="button" class="btn-close d-flex" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body" style="text-align: justify;">
              Los datos personales proporcionados serán incluidos en la base de datos de titularidad de DEL VALLE HOTEL S.A. (“DEL VALLE HOTEL”) ubicado en Av. Av. Francisca de la Calle N° 221, El Tambo, Huancayo por tiempo indeterminado. DEL VALLE HOTEL podrá tratar y transferir los datos personales proporcionados a fin de (i) enviar noticias, publicidad sobre productos, servicios, promociones comerciales, actividades comerciales y/o actividades de marketing vinculadas con DEL VALLE HOTEL y/o (ii) realizar encuestas sobre los productos o servicios que ofrece DEL VALLE HOTEL, así como analizar las encuestas y comentarios de los clientes. A efectos de realizar el tratamiento de datos personales descrito, DEL VALLE HOTEL contratará los servicios de las siguientes empresas, las cuales tendrán acceso a sus datos para gestionarlos y procesarlos en su condición de terceros encargados: (i) PIXELAND S.A.C., empresa encargada de brindar el servicio de gestión de instalaciones informáticas; (ii) GoDaddy Operating Company, LLC, empresa encargada de brindar el servicio de alojamiento en nube. Ubicación: Seattle; Washington, Estados Unidos (iii) Newhotel, sofware encargada de brindar el servicio de almacenamiento y envío de datos personales a las empresas MyHotel (San Francisco, California, Estados Unidos) y Revinate (Vitacura, Los Laureles 1035, Santiago, Chile) a efectos de realizar encuestas en relación a la calidad del servicio brindado por DEL VALLE HOTEL.; (iv) Gobal Obi SI, empresa encargada de brindar el servicio de motor de reservas. Ubicación: Calle Porto Pi, 8 Edificio Reina Constanza, Bajos 07015 Palma de Mallorca Baleares, España); y, (v) Pagos Online Perú S.A.C., empresa encargada de proveer el servicio de pagos en línea. Ubicación: Cl. 99 #14 49, Bogotá, Colombia. Como usted podrá advertir, algunos de los servicios antes indicados son prestados por proveedores de servicios ubicados fuera del país, siendo que dicho tratamiento de datos personales se efectúa conforme a la normativa sobre protección de datos personales. DEL VALLE HOTEL no revelará sus datos personales a ningún otro tercero con excepción a los antes indicados. Los datos suministrados por usted son esenciales para las finalidades antes indicadas. Usted podrá revocar su consentimiento o ejercer los derechos de acceso, rectificación, oposición o cancelación remitiendo una comunicación a la siguiente dirección: reservas@delvalle-hotel.com o ingresando al siguiente enlace web https://www.delvalle-hotel.com/ Si usted no está de acuerdo con los términos de nuestra Política de Protección de Datos no nos proporcione información personal y abandone este sitio Web. Para cualquier aclaración o duda, puede ponerse en contacto con nosotros mediante correo electrónico en la dirección reservas@delvalle-hotel.com.
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="container-completo">
      <footer class="d-block">
        <div class="footer-top">
          <div class="container-fluid d-flex flex-wrap col-xsm-11 col-sm-11 col-md-10 col-lg-7 col-uxl-7">
            <div class="col-6 mt-2">
              <img class="img-footer" src="img/logo_largo_v2_blanco.png" alt="logo.jpg" style="vertical-align: middle; border-style: none; height: 4rem; width: auto;">
            </div>
            <div class="d-flex justify-content-end col-6">
              <div class="d-inline-flex justify-content-end align-items-center flex-wrap">
                <h6 class="title-pagos mb-md-0" style="color: #fbfbfb; margin-right: 0.5rem;">MEDIOS DE PAGO</h6>
                <div class="d-flex flex-wrap justify-content-end align-items-center">
                  <img alt="" class="img-pagos m-1" src="img/visa.png">
                  <img alt="" class="img-pagos m-1" src="img/mastercard.png">
                  <img alt="" class="img-pagos m-1" src="img/americanexpress.png">
                  <img alt="" class="img-pagos m-1" src="img/dinersclub.png">
                  <img alt="" class="img-pagos m-1" src="img/yape.png">
                  <img alt="" class="img-pagos m-1" src="img/plin.png">
                </div>
              </div>
            </div>
            <hr style="width: 100%; color: #fbfbfb; opacity: .4; height: 0.1em;">
          </div>
          <div class="container-fluid d-flex flex-wrap col-xsm-11 col-sm-11 col-md-10 col-lg-7 col-uxl-7">
            <div class="col-xsm-12 col-sm-12 col-md-12 col-lg-5 col-uxl-6 mb-md-0 p-3 ps-0 no-spaces">
              <div class="block-23 mb-3">
                <h6 class="footer-heading d-flex titulo-footer mb-4" style="color: #fbfbfb;">DEL VALLE HOTEL</h6>
                <p style="color: #bebebe; text-align: justify;">Vive una experiencia inolvidable! Ubicados a solo 8 minutos del centro de Huancayo, contamos con la mejor infraestructura y el personal adecuado, con un estilo moderno complementado con una decoración elegante y natural. Todo para brindarte un lugar acogedor y confortable en tu visita a esta hermosa ciudad.</p>
              </div>
              <br>
              <div class="d-flex align-items-center footer-top-space">
                <div class="m-1 ms-0" style="color: #bebebe; font-weight: 500;">Síguenos en:</div>
                <div class="m-1" style="color: #bebebe; font-weight: 500;"><a href="#" class="social-icons"><i class="fa-brands fa-facebook"></i></a></div>
                <div class="m-1" style="color: #bebebe; font-weight: 500;"><a href="#" class="social-icons"><i class="fa-brands fa-instagram"></i></a></div>
                <div class="m-1" style="color: #bebebe; font-weight: 500;"><a href="https://wa.me/51975810499?text=Quisiera%20información%20sobre%20el%20hotel." target="_blank" class="social-icons"><i class="fa-brands fa-whatsapp"></i></a> </span></div>
              </div>
            </div>
            <div class="col-xsm-5 col-sm-5 col-md-5 col-lg-3 col-uxl-2 mb-md-0 p-3 no-spaces footer-bottom-space footer-bottom-space-1">
              <div class="block-23 mb-3">
                <h6 class="footer-heading d-flex titulo-footer mb-4" style="color: #fbfbfb;">ENLACES ÚTILES</h6>
                <ul class="p-0" style="list-style: none; color: #fbfbfb;">
                  <li class="icon-text-bx mb-1"><a class="d-flex text-bx" href="#" style="align-items: center;"><i class="fa-solid fa-angle-right"></i><span class="text">Inicio</span></a></li>
                  <li class="icon-text-bx mb-1"><a class="d-flex text-bx" href="sobrenosotros.html" style="align-items: center;"><i class="fa-solid fa-angle-right"></i><span class="text">Sobre Nosotros</span></a></li>
                  <li class="icon-text-bx mb-1"><a class="d-flex text-bx" href="habitaciones.html" style="align-items: center;"><i class="fa-solid fa-angle-right"></i><span class="text">Habitaciones</span></a></li>
                  <li class="icon-text-bx mb-1"><a class="d-flex text-bx" href="encuentranos.html" style="align-items: center;"><i class="fa-solid fa-angle-right"></i><span class="text">Encuéntranos</span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-xsm-7 col-sm-7 col-md-7 col-lg-4 col-uxl-4 mb-md-0 p-3 pe-0 no-spaces footer-bottom-space">
              <div class="block-23 mb-3">
                <h6 class="footer-heading d-flex titulo-footer mb-4" style="color: #fbfbfb;">CONTÁCTANOS</h6>
                <ul class="p-0" style="list-style: none; color: #fbfbfb;">
                  <li class="icon-text-bx mb-2"><a class="d-flex text-bx" href="https://www.google.com/maps?ll=-12.046407,-75.201528&z=18&t=m&hl=es-419&gl=PE&mapclient=embed&cid=13825044518372166333" target="_blank" style="align-items: flex-start;"><i class="fa-solid fa-location-dot" style="padding-top: 0.4em;"></i><span class="text" style="margin-left: 0.7em !important;">Av. Francisca de la Calle N° 221, El Tambo, Huancayo, Perú</span></a></li>
                  <li class="icon-text-bx mb-2"><a class="d-flex text-bx" href="tel:+51969000488"><i class="fa-solid fa-phone"></i><span class="text">+51 969 000 488</span></a></li>
                  <li class="icon-text-bx mb-2"><a class="d-flex text-bx" target="_blank" href="https://wa.me/51975810499?text=Quisiera%20información%20sobre%20el%20hotel."><i class="fa-brands fa-whatsapp"></i><span class="text">+51 975 810 499</span></a></li>
                  <li class="icon-text-bx mb-2"><a class="d-flex text-bx" href="mailto:reservas@delvalle-hotel.com"><i class="fa-solid fa-envelope"></i><span class="text">reservas@delvalle-hotel.com</span></a></li>
                </ul>
              </div>
              <form action="https://formsubmit.co/walterarzapalo23@gmail.com" method="POST" class="subscribe-form">
                <div class="form-group d-flex">
                <input type="email" name="email" class="form-control rounded-left" placeholder="Ingrese su correo electrónico" required>
                <button type="submit" class="form-control submit rounded-right"><span class="sr-only">Submit</span><i class="ion-ios-send"></i></button>
                </div>

                <input type="hidden" name="_next" value="https://walterarzrey.github.io/hotel_del_valle/index.html">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_subject" value="Nuevo Suscriptor!">
              </form>
            </div>
          </div>
          </div>
        <div class="footer-bottom" style="margin-top: -1px;">
          <div class="container-fluid d-flex flex-wrap col-md-7 col-lg-7">
            <hr style="width: 100%; color: #fbfbfb; opacity: .4; height: 0.1em;">
            <p class="m-0" style="text-align: center; width: 100%; color: #bebebe; font-size: 0.7em; font-weight: 600;">Todos los derechos reservados - ©2022 Del Valle Hotel</p>
            <hr style="width: 100%; color: #fbfbfb; opacity: .4; height: 0.1em;">
          </div>
        </div>
      </footer>
    </div>

  </div>

  <div id="myDiv" style="z-index: 99;"></div>

<script src="js/bootstrap.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="js/observers.js"></script>
</body>
<script type="text/javascript">
  $(function () {
    $('#myDiv').floatingWhatsApp({
      phone: '51975810499',
      popupMessage: 'Hola, ¿Cómo puedo ayudarte? 😊',
      showPopup: true,
      headerTitle: 'Del Valle Hotel Chat',
      backgroundColor: '#d69c4f',
      headerColor: '#d69c4f'
    });
  });
</script>
</html>