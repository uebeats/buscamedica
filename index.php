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




      <a href="index.html" class="logo mr-auto"><img src="assets/img/logo-web.png" alt="" class="img-fluid"></a>



      <nav class="nav-menu d-none d-lg-block">

        <ul>

          <li class="active"><a href="#">Home</a></li>

          <li><a href="#reserva">Reserva tu Hora</a></li>

          <li><a href="#prestaciones">Prestaciones Médicas</a></li>

          <li><a href="#videos">Videos</a></li>

          <li><a href="#">Foros</a></li>

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

                    <h4>Descarga nuestra app en Play Store</h4>

                    <p>Reserva tu hora médica, desde cualquier dispositivo móvil o computador.</p>

                  </div>

                </div>

                <div class="col-xl-4 d-flex align-items-stretch">

                  <div class="icon-box mt-4 mt-xl-0">

                    <i class='bx bxs-map'></i>

                    <h4>Completa tus datos para iniciar la búsqueda</h4>

                    <p>Nos encargaremos de buscarte la mejor cita médica para que puedas acudir de forma rápida y segura.</p>

                  </div>

                </div>

                <div class="col-xl-4 d-flex align-items-stretch">

                  <div class="icon-box mt-4 mt-xl-0">

                    <i class='bx bx-mail-send'></i>

                    <h4>Notificación de confirmación</h4>

                    <p>Una vez solicitada la hora médica y el médico haya aceptado. Te enviaremos una notificación a tu email.</p>

                  </div>

                </div>

              </div>

            </div><!-- End .content-->

          </div>

        </div>



      </div>

    </section><!-- End Why Us Section -->


    <!-- ======= New Services ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Reserva tu hora 2.0</h2>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <div class="icon"><i class="icofont-medical-sign"></i></div>
              <h4><a href="#" id="atypeHora" data-toggle="modal" data-target="#consulta">Consulta</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-beaker"></i></div>
              <h4><a href="#" data-toggle="modal" data-target="#examen">Exámen</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-video-cam"></i></div>
              <h4><a href="#" data-toggle="modal" data-target="#videoconsulta">Video Consulta</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="icofont-heartbeat"></i></div>
              <h4><a href="#" data-toggle="modal" data-target="#higienizacion">Higienización Rayos UV-C</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

        </div>

      </div>

      <!-- Modal -->
      <div class="modal fade" id="consulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="horaConsulta">Reserva de hora para Consulta</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="stepwizard">
                <div class="stepwizard-row setup-panel">
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                        <p><small>Buscar hora médica</small></p>
                    </div>
                    <div class="stepwizard-step col-xs-3">
                        <a href="#step-2" type="button" class="btn btn-secondary btn-circle" disabled="disabled">2</a>
                        <p><small>Solicitar hora médica</small></p>
                    </div>
                </div>
              </div>
              <form name="formConsulta" id="formConsulta" method="POST">
                <div class="panel panel-primary setup-content" id="step-1">
                  <div class="panel-body">
                    <input name="idTipoC" id="idTipoC" type="hidden" value="1">
                    <div class="form-row">
                      <div class="col-md-12 form-group">
                        <label for="prevSaludC" class="label-reserva">Seleccione su previsión <span class="text-danger ml-auto">*</span></label>
                        <select name="prevSaludC" id="prevSaludC" class="form-control" required="required">
                          <?php
                          /**
                           * Consulta SQL para listar las previsiones
                           */
                          $v_tipo = filter_var('1', FILTER_SANITIZE_NUMBER_INT);
                          /*
                          1 = Consulta, 
                          2 = Examen, 
                          3 = Video Consulta, 
                          4 = Higienización 
                          */

                          $stmt_prev = $con->prepare("
                          SELECT prevision.nombreprevision, prevision.idprevision FROM prevision, medicoprevision 
                          WHERE prevision.idprevision = medicoprevision.idprevision 
                          AND SUBSTRING(medicoprevision.tipo, " . $v_tipo . ", 1) <> '0' 
                          AND medicoprevision.tipo <> '' 
                          GROUP BY prevision.nombreprevision, prevision.idprevision"
                          );

                          $stmt_prev->execute();
                          $previsiones = $stmt_prev->fetchAll();

                          foreach ($previsiones as $prevision) { ?>
                            <option></option>
                            <option value="<?php echo $prevision['idprevision']; ?>"><?php echo $prevision['nombreprevision']; ?></option>
                          <?php } ?>
                        </select>
                      </div>

                      <div class="col-md-12 form-group">
                        <label for="espeMedicaC" class="label-reserva">Seleccione la especialidad <span class="text-danger ml-auto">*</span></label>
                        <select name="espeMedicaC" id="espeMedicaC" class="form-control" required="required">
                        <select>
                      </div>

                      <div class="col-md-12 form-group">
                        <label for="comunasC" class="label-reserva">Seleccione la comuna <span class="text-danger ml-auto">*</span></label>
                        <select name="comunasC" id="comunasC" class="form-control" required="required">
                          <option></option>
                        <select>
                      </div>

                      <div class="col-md-12 form-group">
                        <label for="centroMedicoC" class="label-reserva">Seleccione el centro médico <span class="text-danger ml-auto">*</span></label>
                        <select name="centroMedicoC" id="centroMedicoC" class="form-control" required="required">
                          <option></option>
                        <select>
                      </div>

                      <div class="col-md-12 form-group">
                        <label for="medicoC" class="label-reserva">Seleccione el médico <span class="text-danger ml-auto">*</span></label>
                        <select name="medicoC" id="medicoC" class="form-control" required="required">
                          <option></option>
                        <select>
                      </div>

                      <button type="button" class="mr-auto btn mb-2 btn-secondary" data-dismiss="modal">Cerrar</button>
                      <button class="btn btn-primary nextBtn ml-auto mb-2" type="button">Siguiente</button>

                    </div>
                  </div>
                </div>
                <div class="panel panel-primary setup-content" id="step-2">
                  <div class="panel-body">
                    <div class="form-row">
                        <div class="col-md-12 form-group">
                            <label for="nameUser" class="label-reserva">Nombre Completo <span class="text-danger ml-auto">*</span></label>
                            <input name="nameUser" id="nameUser" class="form-control" placeholder="Ingrese su nombre completo" required="required">
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="rutUser" class="label-reserva">R.U.T. <span class="text-danger ml-auto">*</span></label>
                            <input name="rutUser" id="rutUser" class="form-control" placeholder="Ingrese R.U.T." required="required">
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="phoneUser" class="label-reserva">Teléfono <span class="text-danger ml-auto">*</span></label>
                            <input name="phoneUser" id="phoneUser" class="form-control" placeholder="Ingrese su Teléfono" required="required">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 form-group">
                            <label for="emailUser" class="label-reserva">Correo Electrónico <span class="text-danger ml-auto">*</span></label>
                            <input name="emailUser" id="emailUser" class="form-control" placeholder="Ingrese su correo electrónico" required="required">
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="dateAtencion" class="label-reserva">Fecha Atención <span class="text-danger ml-auto">*</span></label>
                            <input type="datetime" name="dateAtencion" class="form-control datepicker" id="dateAtencion" placeholder="DD/MM/AA" required="required">
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="hourAtencion" class="label-reserva">Hora Atención <span class="text-danger ml-auto">*</span></label>
                            <input type="time" name="hourAtencion" class="form-control timepicker" id="hourAtencion" required="required">
                        </div>
                        <button type="button" class="mr-auto btn mb-2 btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button id="btnReserva" class="ml-auto btn mb-2 btn-primary" type="submit">Solicitar hora médica</button>

                    </div>
                  </div>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /Modals -->
      <!-- Modal -->
      <div class="modal fade" id="examen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Reserva Exámen</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>

              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /Modals -->
      <!-- Modal -->
      <div class="modal fade" id="videoconsulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Reserva Video Consulta</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /Modals -->
      <!-- Modal -->
      <div class="modal fade" id="higienizacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Reserva Higienización Rayos UV-C</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /Modals -->
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
                  <p>
                    Rama de la medicina que se especializa en el diagnóstico y tratamiento de
                    enfermedades del corazón, los vasos sanguíneos y el sistema circulatorio.
                    Estas enfermedades incluyen enfermedad de la arteria coronaria, problemas
                    del ritmo del corazón e insuficiencia cardíaca.</p>
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
                  <p>
                    La Dermatología es una especialidad médico-quirúrgica que se ocupa del conocimiento
                    de la piel humana y de las enfermedades que primitiva o secundariamente la afectan,
                    así como de los métodos para la prevención de las mismas y para la preservación o
                    la recuperación de la normalidad cutánea.</p>
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
                  <p>
                    La Venereología es una subespecialidad de la especialidad de Dermatología
                    que se encarga del diagnóstico y tratamiento de las enfermedades de transmisión sexual (ETS).</p>
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
                  <p>
                    La endocrinología es una disciplina de la medicina que estudia el sistema endocrino y
                    las enfermedades provocadas por un funcionamiento inadecuado del mismo. Algunas de las
                    enfermedades de las que se ocupa la endocrinología son la diabetes mellitus provocada
                    por deficiencia de insulina o resistencia a su acción, el hipotiroidismo por déficit
                    en la producción de hormonas tiroideas, el hipertiroidismo por excesiva producción de
                    hormonas tiroideas y la enfermedad de Cushing debida generalmente a excesiva producción
                    de cortisol por las glándulas suprarrenales.</p>
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
                  <p>
                    La diabetes es una enfermedad en la que los niveles de glucosa (azúcar) de la sangre están
                    muy altos. La glucosa proviene de los alimentos que consume. La insulina es una hormona que
                    ayuda a que la glucosa entre a las células para suministrarles energía. En la diabetes tipo
                    1, el cuerpo no produce insulina.</p>
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
                  <p>
                    Las enfermedades respiratorias afectan a las vías nasales, los bronquios y los pulmones, principalmente.</p>
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
                  <p>
                    La medicina física y rehabilitación, también llamada fisiatría, es una especialidad médica que
                    se ocupa del diagnóstico de los pacientes con una enfermedad, un trastorno o una lesión que
                    deterioran las funciones normales.</p>
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
                  <p>
                    La gastroenterología es la subespecialidad derivada de la medicina interna, dedicada al diagnóstico
                    y tratamiento de enfermedades que afectan al tubo digestivo, es decir, esófago, estómago, intestino
                    delgado (duodeno, yeyuno e íleon), colon y recto, y a sus glándulas anexas (hígado, vías biliares
                    y páncreas).</p>
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
                  <p>
                    La geriatría es una especialidad médica dedicada al estudio de la prevención, el diagnóstico, el tratamiento y la rehabilitación de las enfermedades en las personas de la tercera edad.</p>
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
                  <img src="assets/img/especialidad/obste_espe.png" alt="">
                </div>
                <div class="content">
                  <div class="title">
                    Especialidad</div>
                  <div class="sub-title">
                    Obstetricia</div>
                  <p>
                    La obstetricia o tocología es la especialidad médica que se ocupa del embarazo, el parto y el puerperio, incluyendo las situaciones de riesgo que requieran de una intervención quirúrgica. Como especialidad médica la obstetricia es combinada con la ginecología bajo la disciplina conocida como obstetricia y ginecología.</p>
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
                  <p>
                    La hematología es la especialidad médica que se ocupa del estudio, diagnóstico, tratamiento y prevención de las enfermedades de la sangre y los órganos que participan en su producción, como son la médula ósea, el bazo o los ganglios, entre otros.</p>
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
                  <p>La oncología es la rama de la medicina que estudia y trata las neoplasias, con especial atención a los tumores malignos o cáncer. Como especialidad médica, derivada del tronco de la medicina interna, se dedica al diagnóstico y tratamiento del cáncer, centrada en la atención del enfermo de cáncer y su tratamiento, entre otros por medio de la quimioterapia, terapia hormonal y otros medicamentos. Mientras que como especialidad quirúrgica se encarga de la extirpación del tumor y de los tejidos circundantes. La oncología radioterápica aprovecha la radioterapia para tratar el cáncer.</p>
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
                  <p>
                    La imagenología pertenece al área de la salud y tiene por objetivo revisar y examinar enfermedades o bien, estudiar la anatomía del cuerpo humano, por medio de imágenes. La radiología, la termografía médica, la endoscopia, la microscopía y la fotografía médica forman parte de estas técnicas.</p>
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
                  <p>
                    La Infectología es una especialidad de la Medicina Interna que tiene por objeto el estudio, diagnóstico y tratamiento de las enfermedades por agentes infecciosos (virus, bacterias, parásitos, hongos, etc.)</p>
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
                  <p>
                    La kinesiología o quinesilogía es el estudio científico del movimiento del cuerpo. La kinesiología aborda los principios y mecanismos de movimiento fisiológicos, biomecánicos y psicodinámicos.</p>
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
                  <p>
                    La Medicina general es el primer nivel de atención médica cuyo objetivo es prevenir, detectar y tratar enfermedades comunes, así como también derivar con el especialista indicado, en caso de ser necesario.</p>
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
                  <p>
                    La Medicina Interna es la especialidad médica que brinda atención integral a pacientes mayores de 15 años, con foco en el diagnóstico y tratamiento no quirúrgico de enfermedades que afectan a distintos sistemas del cuerpo.</p>
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
                  <p>
                    La nefrología es la especialidad médica rama de la medicina interna que se ocupa del estudio de la estructura y la función renal, tanto en la salud como en la enfermedad, incluyendo la prevención y tratamiento de las enfermedades renales.</p>
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
                  <p>
                    La Oftalmología es la especialidad médica que estudia las enfermedades de ojo y su tratamiento, incluyendo el globo ocular, su musculatura, el sistema lagrimal y los párpados.</p>
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
                  <p>
                    La Otorrinolaringología es una especialidad médico-quirúrgica que previene, diagnostica y trata las afecciones y enfermedades que afectan a la boca, garganta, oídos, nariz o cuello.</p>
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
                  <p>
                    La pediatría es la especialidad médica que estudia al niño y sus enfermedades. Su contenido es mucho mayor que la curación de las enfermedades de los niños, ya que la pediatría estudia tanto al niño sano como al enfermo.</p>
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
                  <p>
                    La psicología es, a la vez, una profesión, una disciplina académica y una ciencia que trata el estudio y el análisis de la conducta y los procesos mentales de los individuos y de grupos humanos.</p>
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
                  <p>
                    La psiquiatría es la especialidad de la medicina que trabaja en el estudio, prevención, diagnóstico y tratamiento de los trastornos mentales, basándose en conocimientos biológicos, psicológicos y sociales.</p>
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
                  <p>
                    La radiología es la especialidad médica, que se ocupa de generar imágenes del interior del cuerpo mediante diferentes agentes físicos y de utilizar estas imágenes para el diagnóstico y, en menor medida, para el pronóstico y el tratamiento de las enfermedades.</p>
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
                  <p>
                    La reumatología es una especialidad médica dedicada a los trastornos médicos del aparato locomotor y del tejido conectivo, que abarca un gran número de entidades clínicas conocidas en conjunto como enfermedades reumáticas, a las que se suman un gran grupo de enfermedades de afectación sistémica: las conectivopatías.</p>
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
                  <p>
                    La Traumatología es una especialidad médico-quirúrgica que se encarga de la prevención, diagnóstico y tratamiento de las enfermedades y lesiones que afectan al sistema músculo esquelético, es decir, a huesos, músculos y tendones.</p>
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
                  <p>
                    La urología es la especialidad médico-quirúrgica que se ocupa del estudio, diagnóstico y tratamiento de las patologías que afectan al aparato urinario, glándulas suprarrenales y retroperitoneal de ambos sexos, así como el aparato reproductor masculino.</p>
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



            <form action="forms/contact.php" method="post" role="form" class="php-email-form">

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

              <div class="mb-3">

                <div class="loading">Cargando...</div>

                <div class="error-message"></div>

                <div class="sent-message">Your message has been sent. Thank you!</div>

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

              <li><i class="bx bx-chevron-right"></i> <a href="#">Reserva tu Hora</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#">Prestacion Médica</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#">Videos</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#">Foro</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#">Contacto</a></li>

            </ul>

          </div>



          <div class="col-lg-3 col-md-6 footer-links">

            <h4>Foro Buscamédica</h4>

            <ul>

              <li><i class="bx bx-chevron-right"></i> <a href="#">Atención Médica</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#">Formas de Uso</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#">Preguntas Frecuentes</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#">Unete a Buscamedica</a></li>

              <li><i class="bx bx-chevron-right"></i> <a href="#">Lorem ipsum dolor sit.</a></li>

            </ul>

          </div>



          <div class="col-lg-4 col-md-6 footer-newsletter">

            <h4>Únete a nuestro boletín</h4>

            <p>Se parte de la familia BuscaMédica y enterate de noticias e información relevante</p>

            <form action="" method="post">

              <input type="email" name="email"><input type="submit" value="Subscribirme">

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

  <script src="assets/vendor/jquery.rut/jquery.rut.js"></script>

  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script src="assets/vendor/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

  <!-- Template Main JS File -->

  <script src="assets/js/main.js"></script>
  <script>
  </script>
</body>
</html>