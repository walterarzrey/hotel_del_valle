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
<body>

    <!-- Barra de Navegación -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" style="background-color: #f5f5f5 !important;">
        <div class="container-fluid desplegable" style="width: auto;">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand desplegable-img" href="index.php">
            <img id="myLogo" class="image-fluid logo-normal" src="img/logo_general.png" alt="LogoHotel_del_Valle.jpg">
          </a>  
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item mx-2">
                <a class="nav-link active letra-grande" aria-current="page" href="index.php">Inicio</a>
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
                <a class="nav-link letra-grande" href="#">Encuéntranos</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <!-- Resumen y mapa -->
    <div class="container-fluid texture pb-5" style="width: 100%;">
        <h3 class="display-6 text-center p-3" style="font-weight: 500;"><strong>Donde encontrarnos</strong></h3>
        <hr class="mb-4" style="color: #000000; width: 12%; height: 0.2em; border-radius: 0.1em; margin: auto;">
        <div class="container-fluid" style="max-width: 1400px;">
            <div class="container-fluid col-sm-11 col-md-11">
                <p class="g-fs-14 g-fs-md-18" style="text-align: center;">
                    El hotel cuenta con una excelente ubicación en el exclusivo distrito de El Tambo, cerca de avenidas principales y lugares de interés como el Parque de la Identidad Wanka y la Plaza Constitución. El hotel está a 15 minutos en automóvil del Terminal Terrestre de Huancayo, a 60 minutos del Aeropuerto de Jauja y a 10 minutos del centro de la bella ciudad de Huancayo.
                </p>
            </div>
            <div class="container-fluid col-sm-11 col-md-11">
              <div class="map-responsive-large marco">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3901.9544595579105!2d-75.2016640932541!3d-12.04665442998335!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbfdc6cbdc188cabd!2sHotel%20Del%20Valle!5e0!3m2!1ses-419!2spe!4v1650247102320!5m2!1ses-419!2spe" width="1240" height="510" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Resumen y mapa -->
    <div class="container-fluid pb-3 col-8">
        <h3 class="display-6 text-center p-3" style="font-weight: 500;"><strong>Indicaciones a lugares cercanos</strong></h3>
        <hr class="mb-4" style="color: #000000; width: 20%; height: 0.2em; border-radius: 0.1em; margin: auto;">
        <div class="container-fluid col-sm-11 col-md-11">
            <p class="g-fs-14 g-fs-md-18" style="text-align: center;">
                Estos lugares se encuentran cerca a Del Valle Hotel, además se menciona unos cuantos lejanos a los cuales se pueden llegar con auto desde la avenida principal en donde está ubicado el hotel. Hacer click en el lugar que desea visitar para visualizar las indicaciones en el mapa.
            </p>
        </div>
        <div class="d-flex flex-wrap">
            <a class="col-6 d-flex text-box-nearby" href="https://goo.gl/maps/ovrHSy5uKYfmCB937" target="_blank">
                <div class="col-7 d-flex text-nearby" style="text-align: left;">Parque de la identidad Wanka</div>
                <div class="col-1 d-flex text-nearby" style="text-align: center;"></div>
                <div class="col-4 d-flex text-nearby" style="text-align: left;">550 metros</div>
            </a>

            <a class="col-6 d-flex text-box-nearby" href="https://goo.gl/maps/qYNKsxYxAqLDuDRRA" target="_blank">
                <div class="col-7 d-flex text-nearby" style="text-align: left;">Parque Tupac Amaru</div>
                <div class="col-1 d-flex text-nearby" style="text-align: center;"></div>
                <div class="col-4 d-flex text-nearby" style="text-align: left;">1.9 kilometros</div>
            </a>

            <a class="col-6 d-flex text-box-nearby" href="https://goo.gl/maps/SoskCjZhaSVqKv7k8" target="_blank">
                <div class="col-7 d-flex text-nearby" style="text-align: left;">Plaza Constitución</div>
                <div class="col-1 d-flex text-nearby" style="text-align: center;"></div>
                <div class="col-4 d-flex text-nearby" style="text-align: left;">3.2 kilometros</div>
            </a>

            <a class="col-6 d-flex text-box-nearby" href="https://goo.gl/maps/AEzQFbwcTnGFGDSf9" target="_blank">
                <div class="col-7 d-flex text-nearby" style="text-align: left;">Cerrito de la Libertad</div>
                <div class="col-1 d-flex text-nearby" style="text-align: center;"></div>
                <div class="col-4 d-flex text-nearby" style="text-align: left;">2.7 kilometros</div>
            </a>

            <a class="col-6 d-flex text-box-nearby" href="https://goo.gl/maps/iNSaThe986USxWNi7" target="_blank">
                <div class="col-7 d-flex text-nearby" style="text-align: left;">Complejo Arqueológico Torre Torre</div>
                <div class="col-1 d-flex text-nearby" style="text-align: center;"></div>
                <div class="col-4 d-flex text-nearby" style="text-align: left;">2.9 kilometros</div>
            </a>

            <a class="col-6 d-flex text-box-nearby" href="https://goo.gl/maps/Cs1tx6MkQbDerGZM7" target="_blank">
                <div class="col-7 d-flex text-nearby" style="text-align: left;">Museo de Wariwilka</div>
                <div class="col-1 d-flex text-nearby" style="text-align: center;"></div>
                <div class="col-4 d-flex text-nearby" style="text-align: left;">8.9 kilometros</div>
            </a>
        </div>
    </div>
    <br>

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