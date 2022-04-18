<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto Hotel Del Valle</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://kit.fontawesome.com/bd0bb73cdd.js" crossorigin="anonymous"></script>
    <script src="js/functions.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<body class="">
    
    <!-- Barra de Navegación -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" style="background-color: #f5f5f5 !important;">
        <div class="container-fluid desplegable" style="width: auto;">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand desplegable-img" href="#">
            <img id="myLogo" class="image-fluid logo-normal" src="img/logo_general.png" alt="LogoHotel_del_Valle.jpg">
          </a>  
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item mx-2">
                <a class="nav-link active letra-grande" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link letra-grande" href="#">Sobre Nosotros</a>
              </li>
              <li class="nav-item mx-2 dropdown">
                <a class="nav-link dropdown-toggle letra-grande" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Habitaciones
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item letra-grande" href="#">Accesibles</a></li>
                  <li><a class="dropdown-item letra-grande" href="#">Matrimoniales</a></li>
                  <li><a class="dropdown-item letra-grande" href="#">Suites</a></li>
                  <li><a class="dropdown-item letra-grande" href="#">Familiares</a></li>
                </ul>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link letra-grande" href="#">Ofertas</a>
              </li>
              <li class="nav-item mx-2">
                <a class="nav-link letra-grande" href="encuentranos.php">Encuéntranos</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- Carrusel de imagenes principal -->
      <div id="carruselprincipal" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carruselprincipal" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carruselprincipal" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carruselprincipal" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" style="height: 36em;display: flex;">
            <div class="parallax" style="background-image: url('img/frontis_dia.jpg');"></div>
          </div>
          <div class="carousel-item" style="height: 36em;display: flex;">
            <div class="parallax" style="background-image: url('img/30048ddade75cd75.webp');"></div>
          </div>
          <div class="carousel-item" style="height: 36em;display: flex;">
            <div class="parallax" style="background-image: url('img/cuarto3.jpg');"></div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carruselprincipal" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carruselprincipal" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Resumen y mapa -->
      <div class="container-fluid texture pb-3">
        <h3 class="display-6 text-center p-3" style="font-weight: 500;"><strong>Tu estancia más agradable</strong></h3>
        <hr class="mb-4" style="color: #000000; width: 12%; height: 0.2em; border-radius: 0.1em; margin: auto;">
        <div class="container-fluid col-xsm-11 col-sm-11 col-md-10">
          <div class="row justify-content-center align-items-center">
            <div class="col-md-7">
              <p class="g-fs-14 g-fs-md-18" style="text-align: justify;">
                Del Valle Hotel, tiene una excelente ubicación a 8 minutos del centro de Huancayo, en una de las principales avenidas de la ciudad. Cuenta con una impresionante vista tanto diurna como nocturna, con un estilo moderno complementado con una decoración elegante y natural. 
                Tenemos la infraestructura y el personal adecuado para hacer que tu estadía sea una experiencia inolvidable. 
                Ven y disfruta del Valle del Mantaro, nosotros nos aseguraremos de brindarte un lugar acogedor y confortable.
              </p>
              <div class="container-fluid d-flex justify-content-center">
                <span class="btn btn-amarillo pb-2 pt-2 px-4 mb-4" href="#" style="font-weight: 500;">Leer más</span>
              </div>
            </div>
            <div class="col-md-1 text-center py-1">
              <i class="fa-solid fa-angle-right hide show" style="color: #d69c4f!important; font-size: 3em;"></i>
            </div>
            <div class="col-md-4">
              <div class="map-responsive marco">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d487.7449911354007!2d-75.20165729084933!3d-12.046278084659983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e9775d8a93e7b%3A0xbfdc6cbdc188cabd!2sHotel%20Del%20Valle!5e0!3m2!1ses-419!2spe!4v1649734593470!5m2!1ses-419!2spe" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <a id="link" href="encuentranos.php">
                  <div class="overlay">
                    <div>
                      <i class="fa-solid fa-location-dot" style="color: #fff!important;"></i><b> Ubicación</b>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <br>
      </div>
      
      <!-- Tarjeta de Servicio -->>
      <div class="container-fluid pb-3">
        <h3 class="display-6 text-center p-3" style="font-weight: 500;"><strong>Nuestros Servicios</strong></h3>
        <hr class="mb-4" style="color: #000000; width: 12%; height: 0.2em; border-radius: 0.1em; margin: auto;">
        <ul class="d-flex flex-wrap my-0 mx-auto col-xsm-12 col-sm-10 col-md-10 col-lg-6" style="padding-right: 2rem; padding-left: 2rem;">
          <li class="p-4 card justify-content-center align-items-center col-xsm-6 col-sm-6 col-md-3 col-lg-3   item-serv" data-testid="grid-item-1" aria-label="Free parking">
            <span class="" aria-hidden="true">
              <span>
                <i class="fa-solid fa-car" style="font-size: 3em; color: rgb(146, 146, 146);"></i>
              </span>
            </span>
            <p data-testid="grid-item-label-1" class="p-1" style="color: gray; font-size:0.8em; text-align: center;"><b>Cochera 24/7</b></p>
          </li>
          <li class="p-4 card justify-content-center align-items-center col-xsm-6 col-sm-6 col-md-3 col-lg-3   item-serv" data-testid="grid-item-2" aria-label="Free parking">
            <span class="" aria-hidden="true">
              <span>
                <i class="fa-solid fa-wifi" style="font-size: 3em; color: rgb(146, 146, 146);"></i>
              </span>
            </span>
            <p data-testid="grid-item-label-2" class="p-1" style="color: gray; font-size:0.8em; text-align: center;"><b>WiFi gratis</b></p>
          </li>
          <li class="p-4 card justify-content-center align-items-center col-xsm-6 col-sm-6 col-md-3 col-lg-3   item-serv" data-testid="grid-item-3" aria-label="Free parking">
            <span class="" aria-hidden="true">
              <span>
                <i class="fa-solid fa-bell-concierge" style="font-size: 3em; color: rgb(146, 146, 146);"></i>
              </span>
            </span>
            <p data-testid="grid-item-label-3" class="p-1" style="color: gray; font-size:0.8em; text-align: center;"><b>Servicio a la habitación</b></p>
          </li>
          <li class="p-4 card justify-content-center align-items-center col-xsm-6 col-sm-6 col-md-3 col-lg-3   item-serv" data-testid="grid-item-4" aria-label="Free parking">
            <span class="" aria-hidden="true">
              <span>
                <i class="fa-solid fa-utensils" style="font-size: 3em; color: rgb(146, 146, 146);"></i>
              </span>
            </span>
            <p data-testid="grid-item-label-4" class="p-1" style="color: gray; font-size:0.8em; text-align: center;"><b>Servicio de comida</b></p>
          </li>
          <li class="p-4 card justify-content-center align-items-center col-xsm-6 col-sm-6 col-md-3 col-lg-3   item-serv" data-testid="grid-item-5" aria-label="Free parking">
            <span class="" aria-hidden="true">
              <span>
                <i class="fa-solid fa-shower" style="font-size: 3em; color: rgb(146, 146, 146);"></i>
              </span>
            </span>
            <p data-testid="grid-item-label-5" class="p-1" style="color: gray; font-size:0.8em; text-align: center;"><b>Agua caliente</b></p>
          </li>
          <li class="p-4 card justify-content-center align-items-center col-xsm-6 col-sm-6 col-md-3 col-lg-3   item-serv" data-testid="grid-item-6" aria-label="Free parking">
            <span class="" aria-hidden="true">
              <span>
                <i class="fa-solid fa-tv" style="font-size: 3em; color: rgb(146, 146, 146);"></i>
              </span>
            </span>
            <p data-testid="grid-item-label-6" class="p-1" style="color: gray; font-size:0.8em; text-align: center;"><b>TV cable</b></p>
          </li>
          <li class="p-4 card justify-content-center align-items-center col-xsm-6 col-sm-6 col-md-3 col-lg-3   item-serv" data-testid="grid-item-9" aria-label="Free parking">
            <span class="" aria-hidden="true">
              <span>
                <i class="fa-solid fa-map-location-dot" style="font-size: 3em; color: rgb(146, 146, 146);"></i>
              </span>
            </span>
            <p data-testid="grid-item-label-9" class="p-1" style="color: gray; font-size:0.8em; text-align: center;"><b>Céntrico</b></p>
          </li>
          <li class="p-4 card justify-content-center align-items-center col-xsm-6 col-sm-6 col-md-3 col-lg-3   item-serv" data-testid="grid-item-9" aria-label="Free parking">
            <span class="" aria-hidden="true">
              <span>
                <i class="fa-solid fa-ban-smoking" style="font-size: 3em; color: rgb(146, 146, 146);"></i>
              </span>
            </span>
            <p data-testid="grid-item-label-10" class="p-1" style="color: gray; font-size:0.8em; text-align: center;"><b>Prohibido fumar</b></p>
          </li>

        </ul>
        <br>
      </div>

      <!-- Habitaciones y Suites -->
      <div class="container-fluid texture pb-3">
        <h3 class="display-6 text-center p-3" style="font-weight: 500;"><strong>Habitaciones y Suites</strong></h3>
        <hr class="mb-4" style="color: #000000; width: 12%; height: 0.2em; border-radius: 0.1em; margin: auto;">
        <div class="container-fluid" style="width: 100%;">
          <div class="d-flex flex-wrap my-0 mx-auto col-xsm-12 col-sm-12 col-md-12 col-lg-10" style="padding-right: 2rem; padding-left: 2rem;">
            <a class="col-xsm-12 col-sm-6 col-md-6 col-lg-3" href="#">
              <div class="card text-white card-room">
                <div class="card-img" style="background-image: url('img/cuarto6.jpg');"></div>
                <div class="card-overlay">
                </div>
                <div class="card-img-overlay">
                  <h5 class="room-bg"></h5>
                  <div class="room-title">ACCESIBLES</div>
                </div>
              </div>
            </a>
            <a class="col-xsm-12 col-sm-6 col-md-6 col-lg-3" href="#">
              <div class="card text-white card-room">
                <div class="card-img" style="background-image: url('img/cuarto4.jpg');"></div>
                <div class="card-overlay">
                </div>
                <div class="card-img-overlay">
                  <h5 class="room-bg"></h5>
                  <div class="room-title">MATRIMONIALES</div>
                </div>
              </div>
            </a>
            <a class="col-xsm-12 col-sm-6 col-md-6 col-lg-3" href="#">
              <div class="card text-white card-room">
                <div class="card-img" style="background-image: url('img/cuarto5.jpg');"></div>
                <div class="card-overlay">
                </div>
                <div class="card-img-overlay">
                  <h5 class="room-bg"></h5>
                  <div class="room-title">SUITES</div>
                </div>
              </div>
            </a>
            <a class="col-xsm-12 col-sm-6 col-md-6 col-lg-3" href="#">
              <div class="card text-white card-room">
                <div class="card-img" style="background-image: url('img/cuarto1.jpg');"></div>
                <div class="card-overlay">
                </div>
                <div class="card-img-overlay">
                  <h5 class="room-bg"></h5>
                  <div class="room-title">FAMILIARES</div>
                </div>
              </div>
            </a>
          </div>
          <div class="container-fluid d-flex justify-content-center">
            <span class="btn btn-amarillo mt-4 pb-3 pt-3"><b style="font-size: 1.2em;">Todos los Cuartos</b></span>
          </div>
        </div>
        <br>
      </div>

      <!-- Lugares Turísticos -->
      <div class="container-fluid pb-3 carousel col-md-12 col-lg-12 col-xl-9 d-block">
        <h3 class="display-6 text-center p-3" style="font-weight: 500;"><strong>Lugares Turísticos Cercanos</strong></h3>
        <hr class="mb-4" style="color: #000000; width: 12%; height: 0.2em; border-radius: 0.1em; margin: auto;">
        <div class="d-block mb-4 mt-4">
          <ul class="d-flex flex-wrap lista_tours p-3" style="list-style: none;">
            <li class="punto d-flex flex-wrap justify-content-center position-relative col-md-4 col-lg-3">
              <a class="link_tours active_link" id="parqueidentidad_link" href="javascript:void(0);" onclick="LinkTours(this.id);">Parque de la Identidad Wanka</a>
            </li>
            <li class="punto d-flex flex-wrap justify-content-center position-relative col-md-4 col-lg-3">
              <a class="link_tours" id="plazadearmas_link" href="javascript:void(0);" onclick="LinkTours(this.id);">Plaza de Armas Huancayo</a>
            </li>
            <li class="d-flex flex-wrap justify-content-center position-relative col-md-4 col-lg-3">
              <a class="link_tours" id="cerritodelalibertad_link" href="javascript:void(0);" onclick="LinkTours(this.id);">Cerrito de la Libertad</a>
            </li>
          </ul>
        </div>
        <div class="container-fluid d-block carousel col-md-11 col-lg-10">
          <div class="container-fluid p-0 offset-4 col-md-8 col-lg-8 img_tours">
            <div class="carousel-inner p-0 d-block card shadow">
              <img id="parqueidentidad_img" class="img_tours img-fluid d-block" src="img/parque_identidad.jpg" alt="hall.jpg" style="height: 32em; width: 100%;">
              <img id="plazadearmas_img" class="img_tours img-fluid d-none" src="img/plaza_huancayo.jpg" alt="hall.jpg" style="height: 32em; width: 100%;">
              <img id="cerritodelalibertad_img" class="img_tours img-fluid d-none" src="img/cerrito_libertad.jpg" alt="hall.jpg" style="height: 32em; width: 100%;">
            </div>
          </div>  
          <div class="col-md-6 col-lg-5 text_tours" style="clear: none;">
            <div class="p-4 texto_card" style="background-color: #f4f4f4;">
              <h2 id="parqueidentidad_titulo" class="m-0" style="text-transform: uppercase; font-weight: 330; text-align: center;">Parque de la Identidad Wanka</h2>
              <div id="parqueidentidad_texto" class="mt-3 d-block" style="text-align: justify;">
                Reconocido por nuestros incomparables bufets de desayuno, almuerzo y merienda, La Vista Restasurant ofrece una maravillosa vista al océano Pacífico, servicio personalizado y cocina moderna de nuestro equipo de creativos chefs peruanos.
              </div>
              <h2 id="plazadearmas_titulo" class="m-0 d-none" style="text-transform: uppercase; font-weight: 330; text-align: center;">Plaza Constitución</h2>
              <div id="plazadearmas_texto" class="mt-3 d-none" style="text-align: justify;">
                Huancayo capital de Junín, la hermosa Ciudad Incontrastable, nos da la bienvenida con su gran plaza de armas, la Plaza Constitución. Ubicada a solo 10 minutos del Hotel Del Valle,
              </div>
              <h2 id="cerritodelalibertad_titulo" class="m-0 d-none" style="text-transform: uppercase; font-weight: 330; text-align: center;">Cerrito de la Libertad</h2>
              <div id="cerritodelalibertad_texto" class="mt-3 d-none" style="text-align: justify;">
                Reconocido por nuestros incomparables bufets de desayuno, almuerzo y merienda, La Vista Restasurant ofrece una maravillosa vista al océano Pacífico, servicio personalizado y cocina moderna de nuestro equipo de creativos chefs peruanos.
              </div>
              <span class="btn btn-amarillo mt-4 pb-2 pt-2" href="#" style="font-weight: 500;">Más información</span>
            </div>
          </div>
        </div>
      <br>
      </div>


      

      <!-- Img Footer -->
      <div class="parallax-container pb-3">
        <div class="parallax-container" style="position: relative;">
          <div class="parallax-img"></div>
          <div class="parallax-overlay">
            <div class="container-fluid position-absolute" style="top: 45%;">
              <h3 class="text-center" style="font-weight: 350; color: #fff; font-size: 3em;">DESCUBRE HUANCAYO</h3>
              <hr class="mb-4" style="color: #fff; width: 20%; height: 0.2em; border-radius: 0.1em; margin: auto; opacity: 1 !important;">
              <br>
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
                <img src="img/logo_largo_v2_blanco.png" alt="logo.jpg" style="vertical-align: middle; border-style: none; height: 4em; width: auto;">
              </div>
              <div class="d-flex justify-content-end col-6">
                <div class="d-inline-flex justify-content-end align-items-center flex-wrap">
                  <h6 class="me-2 mb-md-0" style="color: #fbfbfb;">MEDIOS DE PAGO</h6>
                  <div class="d-flex flex-wrap align-items-center">
                    <img alt="" class="m-1" src="https://s3.us-east-1.amazonaws.com/multimediaqa.casa-andina.com/icons/32X32_visa32x32.png">
                    <img alt="" class="m-1" src="https://s3.us-east-1.amazonaws.com/multimediaqa.casa-andina.com/icons/32X32_mastercard32x32.png">
                    <img alt="" class="m-1" src="https://s3.us-east-1.amazonaws.com/multimediaqa.casa-andina.com/icons/32X32_americanexpress32x32.png">
                    <img alt="" class="m-1" src="https://s3.us-east-1.amazonaws.com/multimediaqa.casa-andina.com/icons/32X32_dinersclub32x32.png">
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
                  <div class="m-1" style="color: #bebebe; font-weight: 500;"><a href="#" class="social-icons"><i class="fa-brands fa-whatsapp"></i></a> </span></div>
                </div>
              </div>
              <div class="col-xsm-5 col-sm-5 col-md-5 col-lg-3 col-uxl-2 mb-md-0 p-3 no-spaces footer-bottom-space footer-bottom-space-1">
                <div class="block-23 mb-3">
                  <h6 class="footer-heading d-flex titulo-footer mb-4" style="color: #fbfbfb;">ENLACES ÚTILES</h6>
                  <ul class="p-0" style="list-style: none; color: #fbfbfb;">
                    <li class="icon-text-bx mb-1"><a class="d-flex text-bx" href="#" style="align-items: center;"><i class="fa-solid fa-angle-right"></i><span class="text">Inicio</span></a></li>
                    <li class="icon-text-bx mb-1"><a class="d-flex text-bx" href="#" style="align-items: center;"><i class="fa-solid fa-angle-right"></i><span class="text">Sobre Nosotros</span></a></li>
                    <li class="icon-text-bx mb-1"><a class="d-flex text-bx" href="#" style="align-items: center;"><i class="fa-solid fa-angle-right"></i><span class="text">Habitaciones</span></a></li>
                    <li class="icon-text-bx mb-1"><a class="d-flex text-bx" href="#" style="align-items: center;"><i class="fa-solid fa-angle-right"></i><span class="text">Ofertas</span></a></li>
                    <li class="icon-text-bx mb-1"><a class="d-flex text-bx" href="#" style="align-items: center;"><i class="fa-solid fa-angle-right"></i><span class="text">Encuéntranos</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xsm-7 col-sm-7 col-md-7 col-lg-4 col-uxl-4 mb-md-0 p-3 pe-0 no-spaces footer-bottom-space">
                <div class="block-23 mb-3">
                  <h6 class="footer-heading d-flex titulo-footer mb-4" style="color: #fbfbfb;">CONTÁCTANOS</h6>
                  <ul class="p-0" style="list-style: none; color: #fbfbfb;">
                    <li class="icon-text-bx mb-2"><a class="d-flex text-bx" href="https://www.google.com/maps?ll=-12.046407,-75.201528&z=18&t=m&hl=es-419&gl=PE&mapclient=embed&cid=13825044518372166333" target="_blank" style="align-items: flex-start;"><i class="fa-solid fa-location-dot" style="padding-top: 0.4em;"></i><span class="text" style="margin-left: 0.7em !important;">Av. Francisca de la Calle N° 221, El Tambo, Huancayo, Perú</span></a></li>
                    <li class="icon-text-bx mb-2"><a class="d-flex text-bx" href="tel:+51964807723"><i class="fa-solid fa-phone"></i><span class="text">+51 964 807 723</span></a></li>
                    <li class="icon-text-bx mb-2"><a class="d-flex text-bx" target="_blank" href="https://wa.me/51964807723?text=Quisiera%20información%20sobre%20el%20hotel"><i class="fa-brands fa-whatsapp"></i><span class="text">+51 964 807 723</span></a></li>
                    <li class="icon-text-bx mb-2"><a class="d-flex text-bx" href="mailto:walterarzapalo23@gmail.com"><i class="fa-solid fa-envelope"></i><span class="text">info@delvallehotel.com</span></a></li>
                  </ul>
                </div>
                <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                <input type="text" class="form-control rounded-left" placeholder="Ingrese su correo electrónico">
                <button type="submit" class="form-control submit rounded-right"><span class="sr-only">Submit</span><i class="ion-ios-send"></i></button>
                </div>
                </form>
              </div>
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


<script src="js/bootstrap.js"></script>
</body>
</html>