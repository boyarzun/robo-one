<!DOCTYPE html>
<html lang="es">

<head>
  <title>Calendario | ROBO-ONE Latinoamérica</title>
  <?php require('structure/head.php'); ?>

  <script src="assets/js/utils.js"></script>
</head>

<body class="page-body">

  <?php require('structure/nav_bar.php'); ?>

  <!-- Start Main Content -->
  <main class="main-content" style="padding-top: 50px;">

    <div class="overlay overflow-hidden pe-n"><img src="assets/img/bg/bg_shape.png" alt="Background shape"></div>

    <!-- Start Content Area -->
    <div class="content-section text-light pt-8">
      <section class="section section-l section-roadmap bg-theme tc-light" id="roadmap">
        <div class="container">
          <div class="section-head text-center wide-auto">
            <h6 class="title title-xs title-light animated" data-animate="fadeInUp" data-delay=".1">¡Descubre nuestras
              fechas importantes!</h6>
            <h2 class="title title-lg title-dark animated" data-animate="fadeInUp" data-delay=".2">Calendario Robo One
            </h2>
            <p class="animated" data-animate="fadeInUp" data-delay=".1">Mantente al tanto de los acontecimientos de Robo
              One. Revisa nuestra linea de tiempo y no te pierdas ninguna fecha importante.</p>
          </div>
          <div class="nk-block nk-block-roadmap">
            <div class="row justify-content-center">
              <div class="col-xl-10">
                <div class="roadmap-wrap">
                  <div class="roadmap-line"></div>
                  <div class="roadmap animated" data-animate="fadeInUp" data-delay=".2">
                    <div class="roadmap-year">2019</div>
                  </div>

                  <div class="roadmap roadmap-right roadmap-finished animated" data-animate="fadeInUp" data-delay=".3">
                    <div class="roadmap-step">
                      <div class="roadmap-head">
                        <span class="roadmap-title">Junio</span>
                      </div>
                      <ul class="list list-dot roadmap-step-list" style="padding-left: 20px !important;">
                        <li>Lanzamiento de Robo-One Chile</li>
                        <li>Taller abierto de inducción en Santiago</li>
                      </ul>
                    </div>
                  </div>

                  <div class="roadmap roadmap-left roadmap-finished animated" data-animate="fadeInUp" data-delay=".4">
                    <div class="roadmap-step">
                      <div class="roadmap-head">
                        <span class="roadmap-title">Julio</span>
                      </div>
                      <ul class="list list-dot roadmap-step-list" style="padding-left: 20px !important;">
                        <li>Taller abierto en regiones Concepción - Iquique - Santiago</li>
                      </ul>
                    </div>
                  </div>

                  <div class="roadmap roadmap-right roadmap-finished animated" data-animate="fadeInUp" data-delay=".5">
                    <div class="roadmap-step">
                      <div class="roadmap-head">
                        <span class="roadmap-title">Agosto</span>
                      </div>
                      <ul class="list list-dot roadmap-step-list" style="padding-left: 20px !important;">
                        <li>Taller abierto en regiones Concepción - Iquique - Santiago</li>
                      </ul>
                    </div>
                  </div>

                  <div class="roadmap roadmap-left roadmap-finished animated" data-animate="fadeInUp" data-delay=".7">
                    <div class="roadmap-step">
                      <div class="roadmap-head">
                        <span class="roadmap-title">Octubre</span>
                      </div>
                      <ul class="list list-dot roadmap-step-list" style="padding-left: 20px !important;">
                        <li>Taller abierto en regiones</li>
                        <li>Videos talleres 1, 2 y 3</li>
                      </ul>
                    </div>
                  </div>

                  <div class="roadmap roadmap-right roadmap-finished animated" data-animate="fadeInUp" data-delay=".8">
                    <div class="roadmap-step">
                      <div class="roadmap-head">
                        <span class="roadmap-title">Noviembre</span>
                      </div>
                      <ul class="list list-dot roadmap-step-list" style="padding-left: 20px !important;">
                        <li>Taller abierto en regiones</li>
                        <li>15 de Noviembre preparación</li>
                        <li><del>16 de Noviembre competencia Robo One Latinoamérica</del></li>
                      </ul>
                    </div>
                  </div>

                  <div class="roadmap roadmap-left roadmap-finished animated" data-animate="fadeInUp" data-delay=".7">
                    <div class="roadmap-step">
                      <div class="roadmap-head">
                        <span class="roadmap-title">Diciembre</span>
                      </div>
                      <ul class="list list-dot roadmap-step-list" style="padding-left: 20px !important;">
                        <li>21 de Diciembre competencia Robo One Latinoamérica en <a
                            href="https://goo.gl/maps/D1Ad9CL2UqS7ADfcA" target="_blank" rel="noopener noreferrer">Duoc
                            UC San Carlos de Apoquindo.</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="roadmap animated" data-animate="fadeInUp" data-delay=".9">
                    <div class="roadmap-year">2020</div>
                  </div>

                  <div class="roadmap roadmap-right animated" data-animate="fadeInUp" data-delay=".9">
                    <div class="roadmap-step">
                      <div class="roadmap-head">
                        <span class="roadmap-title">Febrero</span>
                      </div>
                      <ul class="list list-dot roadmap-step-list" style="padding-left: 20px !important;">
                        <li>Viaje ganadores a Japón</li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- End Content Area -->
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