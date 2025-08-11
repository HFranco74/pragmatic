<!DOCTYPE html>
<html lang="en">

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
</head>

<body class="service-details-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">PragmaTIC Consulting</h1>
        <span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}">Inicio<br></a></li>
          <!-- <li><a href="#about">About</a></li> -->
          <li><a href="{{ route('home') }}#services">Servicios</a></li>
          <li><a href="{{ route('home') }}#contact">Contacto</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Transformación Digital</h1>
        <!-- <nav class="breadcrumbs">
          <ol>
            <li><a href="https://pragmaticconsultingmx.com.mx/index.html">Inicio</a></li>
            <li class="current">Service Details</li>
          </ol>
        </nav> -->
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list">
              <a href="{{ route('serv1') }}">Sistematización</a>
              <a href="{{ route('serv2') }}">Automatización</a>
              <a href="{{ route('serv3') }}">Gestión del Cambio</a>
              <a href="{{ route('serv4') }}" class="active">Transformación Digital</a>
              <a href="{{ route('serv5') }}">Fábrica de Software</a>
              <a href="{{ route('serv6') }}">Diagnóstico</a>
            </div>

            <!-- <h4>Enim qui eos rerum in delectus</h4>
            <p>Nam voluptatem quasi numquam quas fugiat ex temporibus quo est. Quia aut quam quod facere ut non occaecati ut aut. Nesciunt mollitia illum tempore corrupti sed eum reiciendis. Maxime modi rerum.</p>
           --></div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/transformacion_digital.png" width="400" alt="" class="img-fluid services-img">
            <h3>Transformación Digital</h3>
                <p>
                  <strong>"Poner al CLIENTE en el centro de tu organización."</strong>
                </p>
                  <br/>
                <p>
                  Las estadísticas de proyectos de transformación digital cuando son basadas solo en tecnología los fracasos son abrumadores,
                </p>
                  <br/>
                  <p>
                  • 53% Iniciativas de Gestión por Procesos han fallado
                  </p>

                <p>
                  • 70% Alineación inexistente de la tecnología al negocio
                </p>

                <p>
                  • 75% Fracasos de transformación digital
                </p>
                <br/>
                <p>
                  La causa principal es que el "CLIENTE" no es integrado en las soluciones o no es entendido lo que significa.
                </p>
                <br/>
                <p>
                  En <strong>PragmaTIC</strong> Consulting, apoyamos a estructurar a su organización como sistema para poner al <strong>CLIENTE</strong> en el centro de su organización.
                </p>
                <br/>
                <p>
                  <strong>• C – Comunicación</strong>. El objetivo de negocio para la transformación es entendido y aceptado por los tomadores de decisión
                </p>

                <p>
                  <strong>• L – Liderazgo</strong>. Alineación del liderazgo con la estrategia de transformación digital
                </p>
                  
                <p>
                  <strong>• I – Innovación</strong>. Nuevos métodos, partiendo de los conocimientos que le anteceden, a fin de mejorar algo que ya existe, dar solución a un problema o facilitar una actividad.
                </p>

                <p>
                  <strong>• E – Entendimiento</strong>. Las expectativas están claras sobre cómo los líderes deben liderar y apoyar la transformación
                </p>
                
                <p>
                  <strong>• N – Negociación</strong>. Los integrantes del equipo de trabajo saben que actividades van a realizar y el impacto que su esfuerzo va a lograr y beneficiar en forma personal, al equipo de trabajo y a la organización
                </p>
                <p>
                  <strong>• T – Tecnología</strong>. La aplicación de tecnología  genera mejoras en la productividad y la competitividad de las empresas.
                </p>

                <p>
                  <strong>• E – ESTRATEGIA</strong>. Planeación por parte de una empresa de cara a la consecución de objetivos previamente establecidos.
                </p>
                <br/>
                <p>
                  El entorno empresarial actual es muy complejo, hipercompetitivo y volátil, y para que las empresas sobrevivan y prosperen en ese entorno, necesitan más de sus empleados que nunca. Con PragmaTIC Consulting trabajamos para generar:
                </p>
                <p>
                  ✅ Valor al cliente y ventaja competitiva sostenible en el mercado
                </p>
                <p>
                  ✅ Productividad en la operación
                </p>
                <p>
                  ✅ Satisfacción de los equipos de trabajo
                </p>
          </div>

        </div>

      </div>

    </section><!-- /Service Details Section -->

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
              <p><strong>Correo electrónico:</strong> <span><a href="mailto:contacto@pragmaticconsultingmx.com.mex">contacto@pragmaticconsultingmx.com.mex</a></p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Enláces Útiles</h4>
            <ul>
              <li><a href="{{ route('home') }}">Inicio</a></li>
              <li><a href="https://pragmaticconsultingmx.com.mx#services">Servicios</a></li>
              <li><a href="https://pragmaticconsultingmx.com.mx#contact">Contacto</a></li>
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
  
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
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