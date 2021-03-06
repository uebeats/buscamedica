<?php
require('php/conexion.php');
?>
<!DOCTYPE html>

<html lang="es">



<head>

  <meta charset="utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">



  <title>BuscaMédica</title>

  <meta content="" name="description">

  <meta content="" name="keywords">



  <!-- Favicons -->

  <link rel="icon" href="assets/img/favicon.ico">

  <link rel="apple-touch-icon" href="assets/img/favicon.ico">



  <!-- Fuentes de Google -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.rawgit.com/mfd/09b70eb47474836f25a21660282ce0fd/raw/e06a670afcb2b861ed2ac4a1ef752d062ef6b46b/Gilroy.css">



  <!-- Vendor Archivos CSS -->

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">

  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.theme.default.min.css" rel="stylesheet">

  <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <link href="assets/vendor/select2/select2-bootstrap.min.css" rel="stylesheet">



  <!-- Css maestro -->

  <link href="assets/css/style.css" rel="stylesheet">
</head>



<body>



  <!-- ======= Top Bar ======= -->

  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">

    <div class="container d-flex">

      <div class="contact-info mr-auto">

        <i class="icofont-envelope"></i> <a href="mailto:info@buscamedica.cl">info@buscamedica.cl</a>

        <i class="icofont-phone"></i>+569 5746 6616

        <i class="icofont-google-map"></i>Manquehue Sur 520 Oficina 305 Las Condes, Chile.

      </div>


    </div>

  </div>



  <!-- ======= Header ======= -->

  <header id="header" class="fixed-top">

    <div class="container d-flex align-items-center">




      <a href="index.php" class="logo mr-auto"><img src="assets/img/logo-web.png" alt="" class="img-fluid"></a>



      <nav class="nav-menu d-none d-lg-block">

        <ul>

          <li class="active"><a href="#">Home</a></li>

          <li><a href="#reserva">Reserva tu Hora</a></li>

          <li><a href="#prestaciones">Prestaciones Médicas</a></li>

          <li><a href="#videos">Videos</a></li>

          <li><a href="https://foro.buscamedica.cl/" target="_blank" rel="noopener">Foros</a></li>

          <li><a href="#contacto">Contacto</a></li>



        </ul>

      </nav><!-- .nav-menu -->



      <a href="https://play.google.com/store/apps/details?id=com.embarcadero.BuscaMedica" class="appointment-btn scrollto" target="_blank" rel='noopener'>

        Descarga la App

        <img src="assets/img/icon-store-white.png">

      </a>



    </div>

  </header><!-- End Header -->



  <!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex align-items-center">

    <div class="container">

      <h1>Fácil y rápido reserva tu hora médica.</h1>

      <h2>Todos los médicos especialistas los encuentras aquí</h2>

      <a href="#reserva" class="ml-0 mt-4 px-4 py-2 appointment-btn scrollto">

        Reservar tu Hora Médica

        <img src="assets/img/calendar-icon.png">

      </a>

    </div>

  </section><!-- End Hero -->



  <main id="main">



    <!-- ======= Why Us Section ======= -->

    <section id="why-us" class="why-us">

      <div class="container">



        <div class="row">

          <div class="col-lg-4 d-flex align-items-stretch">

            <div class="content">

              <h3>¿Qué es BuscaMédica?</h3>

              <p>
                <b>BuscaMédica</b> es un buscador de horas médicas disponibles según tus requerimientos,
                puedes buscar horas médicas por día, hora, especialidad, previsión y comuna.
                Con <b>BuscaMédica</b> podrás buscar y reservar horas de atención médica y exámenes,
                encontrar centros médicos con convenios de pago, conocer referencias de médicos y
                recibir orientación sobre cual especialista consultar.
              </p>

              <div class="text-center">

                <!-- <a href="#" class="more-btn">Conocer más <i class="bx bx-chevron-right"></i></a> -->

              </div>

            </div>

          </div>

          <div class="col-lg-8 d-flex align-items-stretch">

            <div class="icon-boxes d-flex flex-column justify-content-center">

              <div class="row">

                <div class="col-xl-4 d-flex align-items-stretch">

                  <div class="icon-box mt-4 mt-xl-0">

                    <i class='bx bxl-play-store'></i>

                    <h4>Descarga nuestra app desde Play Store</h4>

                    <p>Reserva tu hora médica, desde cualquier dispositivo móvil o computador.</p>

                  </div>

                </div>

                <div class="col-xl-4 d-flex align-items-stretch">

                  <div class="icon-box mt-4 mt-xl-0">

                    <i class='bx bxs-map'></i>

                    <h4>Ingresa tus datos para iniciar la búsqueda</h4>

                    <p>Nos encargaremos de buscarte la mejor cita médica para que puedas acudir de forma rápida y segura.</p>

                  </div>

                </div>

                <div class="col-xl-4 d-flex align-items-stretch">

                  <div class="icon-box mt-4 mt-xl-0">

                    <i class='bx bx-mail-send'></i>

                    <h4>Confirmación de hora reservada</h4>

                    <p>Una vez el doctor haya confirmado, TODO LISTO!.. Enviaremos una notificación a tu email.</p>

                  </div>

                </div>

              </div>

            </div><!-- End .content-->

          </div>

        </div>



      </div>

    </section><!-- End Why Us Section -->


    <!-- ======= New Reserva ======= -->
    <section id="reserva" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Reserva tu hora</h2>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <a href="#" data-toggle="modal" data-target="#consulta">
                <div class="icon"><i class="icofont-medical-sign"></i></div>
              </a>
              <h4><a href="#" data-toggle="modal" data-target="#consulta">Consulta</a></h4>
              <p>Formulario para reservar hora</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <a href="#" data-toggle="modal" data-target="#examen">
                <div class="icon"><i class="icofont-beaker"></i></div>
              </a>
              <h4><a href="#" data-toggle="modal" data-target="#examen">Exámen</a></h4>
              <p>Formulario para reservar hora</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <a href="#" data-toggle="modal" data-target="#videoconsulta">
                <div class="icon"><i class="icofont-video-cam"></i></div>
              </a>
              <h4><a href="#" data-toggle="modal" data-target="#videoconsulta">Video Consulta</a></h4>
              <p>Formulario para reservar hora</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <a href="#" data-toggle="modal" data-target="#higienizacion">
                <div class="icon"><i class="icofont-heartbeat"></i></div>
              </a>
              <h4><a href="#" data-toggle="modal" data-target="#higienizacion">Higienización Rayos UV-C</a></h4>
              <p>Formulario para reservar hora</p>
            </div>
          </div>

        </div>

      </div>

      <!--  /modals.php -->
      <?php include('modals/modalConsulta.php'); ?>

      <!--  /modals.php -->
      <?php include('modals/modalExamen.php'); ?>

      <!--  /modals.php -->
      <?php include('modals/modalVideo.php'); ?>

      <!--  /modals.php -->
      <?php include('modals/modalHigienizacion.php'); ?>

    </section>

    <!-- ======= Departments Section ======= -->

    <section id="prestaciones" class="departments">

      <div class="container">



        <div class="section-title">

          <h2>Prestaciones Médicas</h2>

          <p>Aquí encontrarás toda la gama de especialidades médicas disponibles.
            Trabajamos día a día para incorporar nuevos Médicos y Especialidades
            para que puedas tener mas alternativas de selección. Siempre más cerca de ti.</p>
        </div>

        <div class="row">
          <div class="col-12 col-lg-12">
            <div class="slider owl-carousel owl-theme">

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/cardio_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Cardiología</div>
                  <p>Rama de la medicina que se especializa en el diagnóstico y tratamiento de enfermedades del corazón,
                  los vasos sanguíneos y el sistema circulatorio.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/derma_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Dermatología</div>
                  <p>La Dermatología es una especialidad médico-quirúrgica que se ocupa del conocimiento
                    de la piel humana y de las enfermedades que primitiva o secundariamente la afectan.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/diabe_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Diabetes</div>
                  <p>La diabetes es una enfermedad en la que los niveles de glucosa (azúcar) de la sangre están
                    muy altos. La glucosa proviene de los alimentos que consume.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/endo_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Endocrinología</div>
                  <p>Algunas de las enfermedades de las que se ocupa la endocrinología son la diabetes, el hipotiroidismo, el hipertiroidismo y 
                  la enfermedad de Cushing debida generalmente a excesiva producción de cortisol.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/enfe_resp_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Enfermedades Respiratorias</div>
                  <p>Las enfermedades respiratorias afectan a las vías nasales, los bronquios y los pulmones, principalmente.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/fisia_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Fisiatría</div>
                  <p>Es una especialidad médica que se ocupa del diagnóstico de los pacientes con una enfermedad, un trastorno o una lesión que deterioran las funciones normales.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/gastro_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Gastroenterología</div>
                  <p>Subespecialidad dedicada al diagnóstico y tratamiento de enfermedades que afectan al tubo digestivo, es decir, esófago, estómago, intestino delgado, colon y recto.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/geria_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Geriatría</div>
                  <p>La geriatría es una especialidad médica dedicada al estudio de la prevención, el diagnóstico, el tratamiento y la rehabilitación de las enfermedades en las personas de la tercera edad.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/gine_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Ginecología</div>
                  <p>Ginecología que significa literalmente ciencia de la mujer y en medicina hace referencia a la especialidad médica y quirúrgica que estudia el sistema reproductor femenino.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/herma_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Hematología</div>
                  <p>Especialidad médica que se ocupa del estudio, diagnóstico, tratamiento y prevención de las enfermedades de la sangre y los órganos que participan en su producción como son la médula ósea.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/image_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Imagenología</div>
                  <p>Estudiar la anatomía del cuerpo humano por medio de imágenes. La radiología, la termografía médica, la endoscopia, la microscopía y la fotografía médica forman parte de estas técnicas.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/infect_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Infectología</div>
                  <p>La Infectología es una especialidad de la Medicina Interna que tiene por objeto el estudio, diagnóstico y tratamiento de las enfermedades por agentes infecciosos.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/kine_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Kinesiología</div>
                  <p>La kinesiología o quinesilogía​​ es el estudio científico del movimiento del cuerpo. La kinesiología aborda los principios y mecanismos de movimiento fisiológicos, biomecánicos y psicodinámicos.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/medi_general.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Medicina General</div>
                  <p>La Medicina general es el primer nivel de atención médica cuyo objetivo es prevenir, detectar y tratar enfermedades comunes, así como también derivar con el especialista indicado.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/medi_interna.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Medicina Interna</div>
                  <p>La Medicina Interna es la especialidad médica que brinda atención integral a pacientes mayores de 15 años, con foco en el diagnóstico y tratamiento no quirúrgico de enfermedades.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/nefro_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Nefrología</div>
                  <p>La Medicina Interna es la especialidad médica que brinda atención integral a pacientes mayores de 15 años, con foco en el diagnóstico y tratamiento no quirúrgico de enfermedades.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/obste_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Obstetricia</div>
                  <p>La obstetricia es la especialidad médica que se ocupa del embarazo, el parto y el puerperio, incluyendo las situaciones de riesgo que requieran de una intervención quirúrgica.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/oftal_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Oftalmología</div>
                  <p>La Oftalmología es la especialidad médica que estudia las enfermedades de ojo y su tratamiento, incluyendo el globo ocular, su musculatura, el sistema lagrimal y los párpados.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/onco_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Oncología</div>
                  <p>Estudia y trata las neoplasias, los tumores malignos o cáncer. Centra la atención en el enfermo de cáncer y su tratamiento, entre otros por medio de la quimioterapia, y otros medicamentos.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/otorrino_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Otorrinolaringología</div>
                  <p>La Otorrinolaringología es una especialidad médico-quirúrgica que previene, diagnostica y trata las afecciones y enfermedades que afectan a la boca, garganta, oídos, nariz o cuello.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/pediatria_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Pediatría</div>
                  <p>Estudia al niño y sus enfermedades. Su contenido es mucho mayor que la curación de las enfermedades de los niños, ya que la pediatría estudia tanto al niño sano como al enfermo</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/psico_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Psicología</div>
                  <p>La psicología​ ​ es, a la vez, una profesión, una disciplina académica​ y una ciencia que trata el estudio y el análisis de la conducta y los procesos mentales de los individuos y de grupos humanos.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/psiqui_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Psiquiatría</div>
                  <p>Especialidad de la medicina que trabaja en el estudio, prevención, diagnóstico y tratamiento de los trastornos mentales, basándose en conocimientos biológicos, psicológicos y sociales.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/radio_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Radiología</div>
                  <p>Se ocupa de generar imágenes del interior del cuerpo mediante diferentes agentes físicos y de utilizar estas imágenes para el diagnóstico y para pronóstico y tratamiento de enfermedades.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/rauma_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Reumatología</div>
                  <p>Especialidad médica dedicada a los trastornos médicos del aparato locomotor y del tejido conectivo, que abarca un gran número de enfermedades reumáticas.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/trauma_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Traumatología</div>
                  <p>Especialidad que se encarga de la prevención, diagnóstico y tratamiento de las enfermedades y lesiones que afectan al sistema músculo esquelético, es decir, a huesos, músculos y tendones.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/uro_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Urología</div>
                  <p>Se ocupa del estudio, diagnóstico y tratamiento de las patologías que afectan al aparato urinario, glándulas suprarrenales de ambos sexos, y del aparato reproductor masculino.</p>
                </div>
              </div>

              <div class="card">
                <div class="img">
                  <img src="assets/img/especialidad/vene_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Venereología</div>
                  <p>La Venereología es una subespecialidad de la especialidad de Dermatología que se encarga del diagnóstico y tratamiento de las enfermedades de transmisión sexual (ETS).</p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

    </section><!-- End Departments Section -->

    <!-- ======= Gallery Section ======= -->

    <section id="videos" class="gallery section-bg">

      <div class="container">



        <div class="section-title">

          <h2>Videos</h2>

        </div>

      </div>



      <div class="container-fluid">

        <div class="row no-gutters">



          <div class="col-lg-3 col-md-4">

            <div class="gallery-item">

              <a href="assets/img/gallery/gallery-1.jpg" class="venobox" data-gall="gallery-item">

                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">

              </a>

            </div>

          </div>



          <div class="col-lg-3 col-md-4">

            <div class="gallery-item">

              <a href="assets/img/gallery/gallery-2.jpg" class="venobox" data-gall="gallery-item">

                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">

              </a>

            </div>

          </div>



          <div class="col-lg-3 col-md-4">

            <div class="gallery-item">

              <a href="assets/img/gallery/gallery-3.jpg" class="venobox" data-gall="gallery-item">

                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">

              </a>

            </div>

          </div>



          <div class="col-lg-3 col-md-4">

            <div class="gallery-item">

              <a href="assets/img/gallery/gallery-4.jpg" class="venobox" data-gall="gallery-item">

                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">

              </a>

            </div>

          </div>



          <div class="col-lg-3 col-md-4">

            <div class="gallery-item">

              <a href="assets/img/gallery/gallery-5.jpg" class="venobox" data-gall="gallery-item">

                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">

              </a>

            </div>

          </div>



          <div class="col-lg-3 col-md-4">

            <div class="gallery-item">

              <a href="assets/img/gallery/gallery-6.jpg" class="venobox" data-gall="gallery-item">

                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">

              </a>

            </div>

          </div>



          <div class="col-lg-3 col-md-4">

            <div class="gallery-item">

              <a href="assets/img/gallery/gallery-7.jpg" class="venobox" data-gall="gallery-item">

                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">

              </a>

            </div>

          </div>



          <div class="col-lg-3 col-md-4">

            <div class="gallery-item">

              <a href="assets/img/gallery/gallery-8.jpg" class="venobox" data-gall="gallery-item">

                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">

              </a>

            </div>

          </div>



        </div>



      </div>

    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->

    <section id="contacto" class="contact">

      <div class="container">



        <div class="section-title">

          <h2>Contacto</h2>


        </div>

      </div>



      <!-- <div>

        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>

      </div> -->



      <div class="container">

        <div class="row mt-5">



          <div class="col-lg-4">

            <div class="info">

              <div class="address">

                <i class="icofont-google-map"></i>

                <h4>Dirección Comercial:</h4>

                <p>Manquehue Sur 520 Oficina 305 Las Condes, Chile.</p>

              </div>



              <div class="email">

                <i class="icofont-envelope"></i>

                <h4>Correo Electrónico:</h4>

                <p>info@buscamedica.cl</p>

              </div>



              <div class="phone">

                <i class="icofont-phone"></i>

                <h4>Mesa de Atención:</h4>

                <p>+569 5746 6616</p>

              </div>



            </div>



          </div>



          <div class="col-lg-8 mt-5 mt-lg-0">



            <form method="post" role="form" class="php-email-form" id="formContacto">

              <div class="form-row">

                <div class="col-md-6 form-group">

                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre Completo" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />

                  <div class="validate"></div>

                </div>

                <div class="col-md-6 form-group">

                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico" data-rule="email" data-msg="Please enter a valid email" />

                  <div class="validate"></div>

                </div>

              </div>

              <div class="form-group">

                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />

                <div class="validate"></div>

              </div>

              <div class="form-group">

                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Escribir mensaje..."></textarea>

                <div class="validate"></div>

              </div>


              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>

            </form>



          </div>



        </div>



      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->



  <!-- ======= Footer ======= -->

  <footer id="footer">



    <div class="footer-top">

      <div class="container">

        <div class="row">



          <div class="col-lg-3 col-md-6 footer-contact">

            <h3><img src="assets/img/logo-web.png" alt="" width="160"></h3>

            <p>

              Manquehue Sur 520 <br>

              Oficina 305, Las Condes,<br>

              Chile.<br><br>

              <strong>Mesa de Atención:</strong> +569 5746 6616<br>

              <strong>Correo Electrónico:</strong> info@buscamedica.cl<br>

            </p>

          </div>



          <div class="col-lg-2 col-md-6 footer-links">

            <h4>Accesos Rápidos</h4>

            <ul>

              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#reserva">Reserva tu Hora</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#prestaciones">Prestacion Médica</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#videos">Videos</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="https://foro.buscamedica.cl/" target="_blank" rel="noopener">Foro</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#contacto">Contacto</a></li>

            </ul>

          </div>



          <div class="col-lg-3 col-md-6 footer-links">

            <h4>Foro Buscamédica</h4>

            <ul>

              <li><i class="bx bx-chevron-right"></i> <a href="#">Atención Médica</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#">Formas de Uso</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#">Preguntas Frecuentes</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#">Unete a Buscamedica</a></li>

            </ul>

          </div>



          <div class="col-lg-4 col-md-6 footer-newsletter">

            <h4>Únete a nuestro boletín</h4>

            <p>Se parte de la familia BuscaMédica y enterate de noticias e información relevante</p>

            <form method="post" id="formSuscripcion">

              <input type="email" name="mailsuscriptor"><input type="submit" value="Subscribirme">

            </form>

          </div>



        </div>

      </div>

    </div>



    <div class="container d-md-flex py-4">



      <div class="mr-md-auto text-center text-md-left">

        <div class="copyright" style="font-family: 'Gilroy', sans-serif;">

          &copy; <strong><span>buscamédica</span></strong>. Algunos derechos reservados

        </div>

        <div class="credits">

          Hecho con <i class='bx bxs-heart text-danger'></i> por <a href="https://www.soccias.cl/" target="_blank" rel="noopener">Agencia Soccias</a> & <a href="https://madein.codes" target="_blank" rel="noopener">madein.codes</a>

        </div>

      </div>

      <!--<div class="social-links text-center text-md-right pt-3 pt-md-0">-->

      <!--  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>-->

      <!--  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>-->

      <!--  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>-->

      <!--  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>-->

      <!--  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>-->

      <!--</div>-->

    </div>

  </footer><!-- End Footer -->



  <div id="preloader"></div>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



  <a href="#reserva" class="float-two scrollto">

    <i class='bx bx-calendar my-float'></i>

    <div class="wa__btn_popup_txt_r">Reservar hora</div>

  </a>





  <a href="https://api.whatsapp.com/send?phone=56957466616 &text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Buscamedica%20." class="float d-none d-sm-block" target="_blank">

    <i class='bx bxl-whatsapp my-float'></i>

    <div class="wa__btn_popup_txt_w">Chat en línea</div>

  </a>



  <!-- Vendor JS Files -->

  <script src="assets/vendor/jquery/jquery.min.js"></script>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="assets/vendor/jquery-step/jquery.steps.min.js"></script>

  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <script src="assets/vendor/jquery.rut/jquery.rut.js"></script>

  <!-- Template Main JS File -->

  <script src="assets/js/main.js"></script>
  <script>
    // Initialize wizard
    $("#consulta-step").show().steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      enableFinishButton: false,
      enablePagination: true,
      enableAllSteps: false,
      titleTemplate: "#title#",
    });

    // Initialize wizard
    $("#examen-step").show().steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      enableFinishButton: false,
      enablePagination: true,
      enableAllSteps: false,
      titleTemplate: "#title#",
    });

    // Initialize wizard
    $("#videoconsulta-step").show().steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      enableFinishButton: false,
      enablePagination: true,
      enableAllSteps: false,
      titleTemplate: "#title#",
    });

    // Initialize wizard
    $("#higienizacion-step").show().steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      enableFinishButton: false,
      enablePagination: false,
      enableAllSteps: false,
      titleTemplate: "#title#",
    });

  </script>
</body>

</html>