<?php
require 'db.class.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include("head.php");?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" style="color:#582900;" href="index.php"><img height="80" weight="130" src="images/logo.png">Escalada Voyage</a>       
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Accueil</a></li>
            <li class="nav-item"><a href="famille.php" class="nav-link">Familles</a></li>
            <li class="nav-item"><a href="hotels.php" class="nav-link">Hotels</a></li>
            <li class="nav-item"><a href="billett.php" class="nav-link">Billets</a></li>
            <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="compte.php" class="nav-link">Compte</a></li>
         
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil</a></span> <span>Contact</span></p>
              <h1 class="mb-3">Contact</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9 mb-4">
          <div class="col-md-6 pr-md-5 flex-column">
            <div class="row d-block flex-row">
              <h2 class="h4 mb-4">Information de contact</h2>
              
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><span>Telephone:</span> <a href="tel://1234567920">+216 28 843 031</a></p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><span>Email:</span> <a href="mailto:info@yoursite.com">escaladavoyage@gmail.com</a></p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><span>site Web</span> <a href="#">www.escaladavoyage.com</a></p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><span>Adresse:</span> Hammem Sousse , Sousse</p>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-6">
        
          <?php
                               echo"<form action='contactadmin.php' method='POST'>";
                            ?>

              <div class="form-group">
                <input type="text"  name="nomcontact" class="form-control" placeholder="Saisir Nom ">
              </div>
              <div class="form-group">
                <input type="text" name="emailcontact" class="form-control" placeholder="Saisir Email">
              </div>
              <div class="form-group">
                <textarea cols="30" rows="7" name="msgcontact" class="form-control" placeholder="Ton Message ..."></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Envoyer Message" class="btn btn-dark py-3 px-5">
              </div>
              <?php
  if(@$_GET['contact']==true)
                            echo"<h6 class='row mr-50 mt-40 ml-50 text-success '>".$_GET['contact']."</h6>";
  if(@$_GET['error']==true)
                            echo"<h6 class='row mr-50 mt-40 ml-50 text-danger '>".$_GET['error']."</h6>";

                            ?>
            </form>
          </div>
        </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d51717.21776070095!2d10.622821393533478!3d35.890027953841695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd8bd329077df9%3A0x97960f09c97e2346!2z2K3Zhdin2YUg2LPZiNiz2Kk!5e0!3m2!1sar!2stn!4v1594253228411!5m2!1sar!2stn" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>        </div>
  
    </section>
  <?php include('footer.php'); ?>
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
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