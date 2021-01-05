<?php
require 'db.class.php';
$DB = new DB();
?>
<!DOCTYPE html>
<html lang="en">
  <head> 
    <?php include("head.php"); ?>
  </head>
  <body>
    
     
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/billetbg.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container" style="padding-top:100px;">
        <center> <h1 style="color:#FF7B07;" class="">Bienvenue à ESCALADA Voyage</h1><br>
<h2 class="">Demande de contacter une famille passer avec success</h2>
<br>
<br>
<a href="famille.php"><h2 style="background-color:#393430;" class=" col-3 text-white">Retour</h2></a>

</center> 

        
        </div>
      </div>
    </section>
    <!-- END slider -->
   
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>