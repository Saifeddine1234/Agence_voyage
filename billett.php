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
    
     
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" style="color:#582900;" href="index.php"><img height="80" weight="130" src="images/logo.png">Escalada Voyage</a>       
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Accueil</a></li>
            <li class="nav-item "><a href="famille.php" class="nav-link">Familles</a></li>
            <li class="nav-item"><a href="hotels.php" class="nav-link">Hotels</a></li>
            <li class="nav-item active"><a href="billett.php" class="nav-link">Billets</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
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
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil</a></span> <span>Billets</span></p>
              <h1 class="mb-3">Réservation des billets d'avion</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->
    <section class="ftco-section">
      <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Nos Destinations</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
            <?php $menu = $DB->query('SELECT * FROM billet'); ?>
<?php foreach ($menu as $product): ?>
  <div class="col-md-6 col-lg-1 mb-4 ftco-animate ">
  </div>
              <div class="col-md-6 col-lg-10 mb-4 ftco-animate border ">
                <a class="block-5 " style="background-image: url('images/<?php echo $product->imageb; ?>');"></a>
                  <div  class = "text">
                  <div class="container">
                   <div class="row">
                   <div class="col-lg-8 ">
    <h3 class="heading">Vol de Tunisie vers <?php echo $product->nomb; ?></h3>
                    <span class="price">A partir de <?php echo $product->prixb; ?> DT</span>
                  </div> 
                  <div class="col-lg-4 align-bottom" >
</br>
                    <h3 style="background-color:#ff9900;text-align:center;height:40px;" class="heading align-buttoms active">
                   <a style="color:#fff;" href="reservebillet.php?idb=<?php echo $product->idb; ?>">Réserver</a> 
                    </h3>
                  </div>     
                 </div>
                </div>
               </div>
              </div>
              <div class="col-md-6 col-lg-1 mb-4 ftco-animate">
  </div>
              <?php endforeach ?>
            </div>

                  </div>
                </form>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
    <?php include("footer.php"); ?>
    </footer>
    
  

  <!-- loader -->
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