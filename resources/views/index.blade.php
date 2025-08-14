<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PragmaTIC Consulting</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
  

  <!-- =======================================================
  * Template Name: HeroBiz
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
  .borde-verde {
  border: 10px solid #2c8c7f;
}
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

{{--       <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename" style="color: #2c8c7f;"><strong> PragmaTIC Consulting </strong></h1>
        <span></span>
      </a>
 --}}
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('home')}}#inicio" class="active">Inicio<br></a></li>
          <li><a href="{{route('home')}}#services">Servicios</a></li>
          <li><a href="{{route('home')}}#contact">Contacto</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <section id="inicio" class="hero section">
      <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
        <img src="{{ asset('assets/img/LogoPragmatic.png') }}" class="img-fluid animated" alt="">
        <h1>Bienvenidos a <bold><span style="color: #2c8c7f;"><strong>PragmaTIC Consulting</strong></span></bold></h1>
        <p style="color:#021f44;">Haz clic en Podcast para tener una explicación general de nuestros servicios.</p>
        <div class="d-flex">
          <a href="https://youtu.be/O_mnb2PVXXo" class="glightbox btn-watch-video d-flex align-items-center"><!-- <i class="bi bi-play-circle"></i> -->
            <img src="/assets/img/img_podcast.jpeg" width="120 %"><span style="color: white;">_</span><span>  Podcast</span></a>
        </div>
      </div>
    </section>

    <section id="services"  class="about section">
      <div class="container" data-aos="fade-up">
        <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
          <img src="{{ asset('assets/img/odoocommunity.jpeg') }}" class="text-center img-fluid" width="60%" alt="">
        </div>
      </div>
    </section>

<section>
  <div class="borde-verde container section-title">
    <strong>¿Preparado para que tu operación genere resultados alineados a tus metas?</strong>
    <br/>
    <br/>
    <p>
      Olvídate de licencias costosas y complejidades. Nosotros te ofrecemos un robusto ERP <strong style="color:purple">Odoo Community</strong> de vanguardia, instalado en un servidor en la nube blindado con su seguridad informática, más el acompañamiento experto y soporte total de <strong style="color:#2c8c7f">PragmaTIC Consulting</strong>, para integrar, sistematizar y automatizar tus procesos clave.
    </p>
    <br/>
    <p>
      <strong>¿Lo mejor y más sorprendente?</strong>
      <br/>
      <br/>
      Una inversión predecible: ¡Absolutamente TODO por una renta mensual!
      <br/>
      ¡Es hora de actuar!
    </p>
  </div>
</section>

    <section class="services section">
      <div class="container section-title" data-aos="fade-up">
        <h2 style="color:#021f44;"><strong>Nuestros Servicios</strong></h2>
        <p style="color:#021f44;" class="parrafo-borde">
          Somos <strong style="color:#2c8c7f">PragmaTIC Consulting</strong>, su socio estratégico para convertir la visión de su organización en una realidad. A través de un enfoque pragmático y orientado a resultados, nos integramos con sus líderes y diseñamos e implementamos soluciones que no solo resuelven problemas, sino que también impulsan el crecimiento y la eficiencia de su organización.
        </p>
        <br/>
        <br/>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">

          <!-- SISTEMATIZACIÓN -->
          <div class="col-xl-6 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="details position-relative">
                <a href="{{ route('serv1') }}" class="stretched-link">
              <div class="img">
                <img src="{{ asset('assets/img/salud_organizacional.png') }}" class="img-fluid" width="400px" alt="">
              </div>
                  <h3>Sistematización</h3>
                </a>
                <p>
                  Las necesidades de organizaciones de todo tipo y tamaño, genera actividades día a día y se organizan internamente para mejorar la toma de decisiones para lograr mayor en la eficiencia de la operación, mejorar la satisfacción del cliente, fomentar la innovación, se puede decir en términos generales en tener una salud de su organización.
                </p>
                <p>
                  <a href="{{ route('serv1') }}" class="readmore stretched-link"><span>Leer más</span> <i class="bi bi-arrow-right"></i></a>
                </p>
                
              </div>
            </div>
          </div>

          <!-- AUTOMATIZACIÓN -->
          <div class="col-xl-6 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
                <div class="details position-relative">
                <a href="{{ route('serv2') }}" class="stretched-link">
                  <div class="img">
                    <img src="{{ asset('assets/img/odoo_erp.png') }}" class="img-fluid" alt="" width="300px">
                  </div>
                  <h3>Automatización</h3>
                </a>
                <p>
                  La automatización mediante sistemas computacionales permite transformar procesos empresariales tradicionales en flujos digitales eficientes, escalables y completamente integrados. <strong>Odoo Community</strong>, como ERP modular, ofrece herramientas para automatizar desde operaciones administrativas hasta procesos logísticos y comerciales.
                </p>
                <p>
                  <a href="{{ route('serv2') }}" class="readmore stretched-link"><span>Leer más</span> <i class="bi bi-arrow-right"></i></a>
                </p>
              </div>
            </div>
          </div>

          <!-- GESTIÓN DEL CAMBIO -->
          <div class="col-xl-6 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="service-item">
              <div class="details position-relative">
                <a href="{{ route('serv3') }}" class="stretched-link">
              <div class="img">
                <img src="{{ asset('assets/img/img_pragmatic_01.png') }}" class="img-fluid" alt="">
              </div>
                  <h3>Gestión del Cambio</h3>
                </a>
                <p>
                  El <strong>75% DE LOS PROYECTOS NO LOGRAN LOS RESULTADOS</strong> entre las causas principales tenemos: Falta de integración interna, Falta de planeación, silos funcionales. Con nuestra metodología de gestión basada en RESULTADOS, apoyamos sus decisiones para que la operación en su organización sean ejecutadas para lograr las metas a corto y largo plazo.
                </p>
                <p>
                  <a href="{{ route('serv3') }}" class="readmore stretched-link"><span>Leer más</span> <i class="bi bi-arrow-right"></i></a>
                </p>
              </div>
            </div>
          </div>
          
          <!-- TRANSFORMACIÓN DIGITAL -->
          <div class="col-xl-6 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="service-item">
              <div class="details position-relative">
                <a href="{{ route('serv4') }}" class="stretched-link">
              <div class="img">
                <img src="{{ asset('assets/img/transformacion_digital.jpg') }}" class="img-fluid" alt="">
              </div>
                  <h3>Transformación Digital</h3>
                </a>
                <p>
                En <strong>PragmaTIC Consulting</strong>, apoyamos a estructurar a su organización como sistema para poner al CLIENTE en el centro de su organización.
                </p>
                <p>
                  <a href="{{ route('serv4') }}" class="readmore stretched-link"><span>Leer más</span> <i class="bi bi-arrow-right"></i></a>
                </p>
              </div>
            </div>
          </div>

          <!-- FÁBRICA DE SOFTWARE -->
          <div class="col-xl-6 col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="service-item">
              <div class="details position-relative">

                <a href="{{ route('serv5') }}" class="stretched-link">
              <div class="img">
                <img src="{{ asset('assets/img/softfact_odoo.png') }}" class="img-fluid" alt="">
              </div>
                  <h3>Fábrica de Software</h3>
                </a>
                <p>
                  Nuestra Fábrica de Software es tu laboratorio de innovación: creamos y damos mantenimiento a soluciones únicas, diseñadas para ti, hechas a medida e <strong>integradas a la lógica base</strong> de Odoo Community para extender sus funcionalidades.
                </p>
                <p>
                  <a href="{{ route('serv5') }}" class="readmore stretched-link"><span>Leer más</span> <i class="bi bi-arrow-right"></i></a>
                </p>
              </div>
            </div>
          </div>     

          <!-- DIAGNÓSTICO -->
          <div class="col-xl-6 col-md-6" data-aos="zoom-in" data-aos-delay="500">
            <div class="service-item">
              <div class="details position-relative">
                <a href="{{ route('serv6') }}" class="stretched-link">
                 <div class="img">
                  <img src="{{ asset('assets/img/diagnostico.jpg') }}" class="img-fluid" alt="">
                 </div>
                 <h3>Diagnóstico</h3>
                </a>
                <p>
                  Quieres entender el nivel de integración que tiene tu organización para; ¿Generar valor a clientes internos y externos?, ¿Acelerar los resultados para lograr las metas a corto y largo plazo?, ¿Cómo mejorar la productividad de la operación interna?
                </p>
                <br/>
                <p>
                  Quieres un diagnóstico de organización como sistema sin costo y compromiso?
                </p>
              </div>
            </div>
          </div>  
        </div>
      </div>
    </section>

    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Contacto</h2>
      </div>
    
      <div class="container" data-aos="fade">
        <div class="row gy-5 gx-lg-5">
          <div class="col-lg-5">
            <div class="info">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Domicilios:</h4>
                  <h6 style="color: #2c8c7f;">Ventas</h6>
                  <p>Mónaco No. 286-404, Colonia Zacahuitzco <br/>
                  03550, Alcaldía Benito Juárez <br/> Ciudad de México</p>
                  <br/>
                  <h6 style="color: #2c8c7f;">Fábrica de Software</h6>
                  <p>Crisóstomo Bonilla S/N<br/>
                  73530, Puebla de Zaragoza</p>
                </div>
              </div>

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Correo electrónico:</h4>
                  <p><a href="mailto:contacto@pragmaticonsulting.com.mx">contacto@pragmaticonsulting.com.mx</a></p>
                </div>
              </div>

              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Llama:</h4>
                  <p>56 5529 1478 (Teléfono / Whatsapp)</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="{{ route('enviar-correo') }}" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" placeholder="Mensaje" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Tu mensaje se ha enviado, gracias.</div>
              </div>
              <div class="text-center"><button type="submit">Enviar mensaje</button></div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="{{route('home')}}" class="logo d-flex align-items-center">
              <span class="sitename">PragmaTIC Consulting</span>
             {{-- <div>
                <img src="assets/img/LogoPCnbg.png" width="200%" alt="">
              </div> --}} 
            </a>
            <div class="footer-contact pt-3">
              <p>Crisóstomo Bonilla S/N</p>
              <p>Puebla de Zaragoza, México 73530</p>
              <p class="mt-3"><strong>Teléfono:</strong> <span>56 5529 1478 (Llamadas / Whatsapp)</span></p>
              <p><strong>Correo electrónico:</strong> <span><a href="mailto:contacto@pragmaticonsulting.com.mx">contacto@pragmaticonsulting.com.mx</a></p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Enláces Útiles</h4>
            <ul>
              <li><a href="{{ route('home') }}">Inicio</a></li>
              <li><a href="{{ route('home') }}#services">Servicios</a></li>
              <li><a href="{{ route('home') }}#contact">Contacto</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div>
            © Copyright <strong><span>PragmaTIC Consulting</span></strong>.
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <!-- <a href=""><i class="bi bi-twitter-x"></i></a> -->
          <a href="https://www.facebook.com/share/1Ae3yF2e49/?mibextid=wwXIfr" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/pragmaticconsultingmx?igsh=MWptcGNubmFreXMyNw%3D%3D&utm_source=qr" target="_blank"><i class="bi bi-instagram"></i></a>
          <!-- <a href=""><i class="bi bi-linkedin"></i></a> -->
        </div>
      </div>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>