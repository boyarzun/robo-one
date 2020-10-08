<!DOCTYPE html>
<html lang="es">

<head>
  <title>Aprende más | ROBO-ONE Latinoamérica</title>
  <?php require('structure/head.php'); ?>

</head>

<body class="page-body">

  <?php require('structure/nav_bar.php'); ?>

  <!-- header -->
  <header class="news-header p-relative">
    <div class="overlay br-n bs-c bp-r pe-n" data-parallax="scroll" data-z-index="1"
      data-image-src="assets/img/content/img_01-lg.jpg"></div>
    <div class="position-relative zi-1 d-flex align-items-end h-100">
      <div class="release-subheader">
        <div class="release-container">
          <div class="text-light pl-xl-2 py-7 w-100">
            <div class="d-flex align-items-center">
              <div class="p-relative mr-6 d-none d-md-block">
                <div class="badges badges-left badges-bottom text-white">
                  <div class="XL-rating_circle-wrapper">
                    <span class="XL-rating_circle-foreground">
                      <span class="rating_circle-number"><i class="fab fa-leanpub"></i></span>
                    </span>
                    <span class="XL-rating_circle" data-rating-total="10"></span>
                  </div>
                </div>
              </div>
              <div class="flex-1">
                <h3 class="mb-0">Aprende más</h3>
                <nav aria-label="breadcrumb">
                  <ol
                    class="breadcrumb-product breadcrumb breadcrumb-nowrap breadcrumb-angle bg-transparent pl-0 pb-0 pr-0 mb-0">
                    <li class="breadcrumb-item">¡Prepárate y adquiere el conocimiento para competir en Robo One!</li>
                  </ol>
                </nav>
              </div>
              <div class="release-soc-container pl-4">
                <div class="">
                  <a href="https://www.facebook.com/roboonelatinoamerica" target="_blank"
                    class="release-soc bg-warning text-secondary">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- /.header -->

  <!-- Start Main Content -->
  <main class="main-content position-relative">

    <!-- Overlay -->
    <div class="overlay pe-n br-n bp-c bs-c o-30" style="background-image: url(assets/img/bg/bg_shape.png);"></div>
    <!-- /.Overlay -->

    <!-- content area -->
    <div class="mt-10 mb-7 text-light">
      <div class="container">
        <div class="position-relative">
          <div class="row">
            <div class="col-lg-12 mb-9 mb-lg-0">

              <!-- post content -->
              <div class="entry-content border border-secondary px-4 py-4">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 learn-more"><a href="http://robo-one.com/videos/" target="_blank"><i
                          class="fab fa-youtube"></i> <span>Videos de la competencia Robo-One Japón</span></a></div>
                    <div class="col-md-6 learn-more"><a
                        href="https://kondo-robot.com/faq/khr-3hv-5-servos-conversion-set-assembly-manual-ver-1-4-english"
                        target="_blank"><i class="fas fa-robot"></i> <span>Robot Kondo KHR-3HV Conversión 5
                          servos</span></a></div>
                    <div class="col-md-6 learn-more"><a href="http://robo-one.com/rankings/" target="_blank"><i
                          class="fas fa-trophy"></i> <span>Robo-One Ranking mundial</span></a></div>
                    <div class="col-md-6 learn-more"><a
                        href="https://kondo-robot.com/faq/khr-3hv-ver-2-assemble-manual-v3-english" target="_blank"><i
                          class="fas fa-robot"></i> <span>Robot Kondo KHR-3HV Manual de Armado</span></a></div>
                    <div class="col-md-6 learn-more"><a href="https://kondo-robot.com/faq/khr-3hv_downloadset_v2"
                        target="_blank"><i class="fas fa-book"></i> <span>Robot Kondo KHR-3HV Download set ( Manual de
                          instrucciones/ Software) V6</span></a></div>
                    <div class="col-md-6 learn-more"><a
                        href="https://kondo-robot.com/faq/hearttoheart4hth4-operation-manual-en" target="_blank"><i
                          class="fas fa-heart"></i> <span>Robot Kondo KHR-3HV Software de programación HearToHeart 4
                          (HTH4) Manuel de operación Ver 7 en Inglés.</span></a></div>
                    <div class="col-md-6 learn-more"><a href="http://robo-one.com/authrobots/" target="_blank"><i
                          class="fas fa-check-circle"></i> <span>Robot certificados para la competencia</span></a></div>
                    <div class="col-md-6 learn-more"><a href="https://kondo-robot.com/faq/ics35mag_soft1100"
                        target="_blank"><i class="fas fa-toolbox"></i> <span>ICS3.5/3.6 Manager Software
                          R1.1.0.0</span></a></div>
                  </div>
                </div>
              </div>
              <!-- /.post content -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content area -->
    <?php  require('structure/partners.php'); ?>
  </main>

  <?php require('structure/footer.php'); ?>

  <!-- Contact -->
  <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="userLoginTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content bg-dark text-light">
        <div class="modal-header border-secondary">
          <h5 class="modal-title" id="userLoginTitle">Contacto</h5>
          <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="contactForm" class="modal-body">
          <form method="POST" onsubmit="sendContactForm(event)" class="input-transparent">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input class="form-control form-control-lg" id="contactName" type="text" name="name"
                  placeholder="Nombre" required>
              </div>
              <div class="form-group col-md-6">
                <input class="form-control form-control-lg" id="contactEmail" type="email" name="email"
                  placeholder="E-mail" required>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control border-secondary" id="contactSubject" name="subject"
                placeholder="Asunto" required>
            </div>
            <div class="form-group">
              <textarea class="form-control form-control-lg" id="contactMessage" rows="4" placeholder="Mensaje..."
                name="message" required></textarea>
            </div>
            <div class="form-group mt-6">
              <button class="btn btn-block btn-warning" type="submit">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /.contact -->

  <?php require('structure/scripts.php'); ?>
</body>

</html>