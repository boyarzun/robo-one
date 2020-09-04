<!-- jQuery -->
<script src="assets/js/jquery.min.js"></script>

<!-- Slick -->
<script src="assets/js/slick.js"></script>

<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- User JS -->
<script src="assets/js/scripts.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js" id="_mainJS" data-plugins="load"></script>

<!-- Axios -->
<script src="assets/js/axios.min.js"></script>

<!--
<script type="text/javascript">
  $(document).ready(function() {
      $(".loader").fadeOut("slow");
  });
</script>
-->
<script>
  $(document).ready(function(){
    $('.partners').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1000,
      arrows: true,
      dots: false,
        pauseOnHover: false,
        responsive: [{
        breakpoint: 768,
        settings: {
          slidesToShow: 3
        }
      }, {
        breakpoint: 520,
        settings: {
          slidesToShow: 2
        }
      }]
    });
  });
</script>