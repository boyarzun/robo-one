<!DOCTYPE html>
<html lang="es">

<head>
  <title>Robo One | ROBO-ONE Latinoamérica</title>
  <?php require('structure/head.php') ?>
  <link href="assets/css/gallery/view.css" rel="stylesheet">
  <script src="assets/js/utils.js"></script>
</head>

<body class="page-body">

  <?php require('structure/nav_bar.php'); ?>

  <!-- Start Main Content -->
  <main class="main-content">

    <div class="overlay overflow-hidden pe-n"><img src="assets/img/bg/bg_shape.png" alt="Background shape"></div>

    <!-- Start Content Area -->
    <div class="content-section text-light pt-8" style="padding-bottom: 25px;">
      <div class="container">
        <div class="row gutters-y">
          <div class="col-12 mt-9">
            <header>
              <h3 class="product_name mb-4" id="new-title"></h3>
            </header>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-12">
                <div class="product-body">
                  <!--Carousel Wrapper-->
                  <div id="new-image">
                    <img src="assets/img/content/award/02.jpg" alt="Robo One">
                  </div>
                  <div class="alert alert-no-border alert-share d-flex mb-6" role="alert">
                    <span class="mr-2" id="new-author"><i class="fas fa-user-alt mr-1"></i> </span>
                    <span class="mr-2" id="new-date"><i class="fas fa-calendar-alt mr-1"></i> </span>
                  </div>
                  <!--/.Carousel Wrapper-->
                  <div id="about" class="about mb-5">
                    <hr class="border-secondary my-2">
                    <div>
                      <div id="new-content">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bg-dark_A-20 p-4 mb-4">
              <img src="assets/img/content/cont/belt.png" alt="Robo One" class="mb-3">
              <p>Inscríbete junto a tu equipo en Robo One Chile 2019, compite para ser el campeón y clasifica a Robo One
                Japón 2020 ¡Incluye pasaje y estadía en Japón para el Robot ganador!</p>
              <div>
                <a href="https://docs.google.com/forms/d/1UfHcaDh6Mchan0FH7g1oT1oJ4CJrB1C6-kHsw1evslU/edit"
                  target="_blank" class="btn btn-block btn-warning"> Inscripción</a>
              </div>
            </div>
            <div class="archive border border-secondary rounded mb-4">
              <div class="bg-secondary px-4 py-1"><span class="fw-600 ls-1 text-uppercase small">Torneos</span></div>
              <div class="py-6 py-xl-5 px-4">
                <div class="row gutters-y" id="last-competitions-items">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Content Area -->

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
  <script>
    let categories = "categories=3"
    let fetchUrl = 'https://dash.robo-one.la/wp-json/wp/v2/posts?' + categories;
    let lastCompetitions = document.getElementById('last-competitions-items');

    axios.get(fetchUrl)
    .then(function(response) {
        
        // Getting the last element
        var lastElement = response.data[0]
        var date = new Date(lastElement.date)
        date = date.getDate().toString() + "-" + (date.getMonth() + 1).toString() + "-" + date.getFullYear().toString()
        document.getElementById('new-title').innerHTML =lastElement.title.rendered
        document.getElementById('new-author').innerHTML += 'Robo One'
        document.getElementById('new-date').innerHTML += date;
        document.getElementById('new-content').innerHTML = lastElement.content.rendered
        document.getElementById('new-image').innerHTML = '<img src="' + lastElement.jetpack_featured_media_url + '" width="100%" alt="Robo One">';
        
        // Getting the rest of the elements
        Object.values(response.data)
            .filter(function (element) { return element.id != lastElement.id })
            .map(function(element) { 
                lastCompetitions.innerHTML += `<div class="col-md-6 col-lg-12">
                    <!-- news-item -->
                    <div class="news-item">
                      <div class="row no-gutters">
                        <div class="col-lg-5 mb-5 mb-lg-0">
                          <div class="rounded overflow-h">
                            <div>
                              <img src="${element.jetpack_featured_media_url}" alt="Robo One">
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <div class="text-gray pl-lg-3">
                            <div class="lh-1"><a href="faq.php" class="badge badge-secondary mb-2">Robo One</a></div>
                            <h6 class="text-uppercase mb-0 small-2 fw-400"><a href="#">${element.title.rendered}</a></h6>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.news-item -->
                  </div>`
             })
    });
  </script>
</body>

</html>