
<?php
require 'db.class.php';
$DB = new DB();
if(isset($_GET['idh'])){
  $product = $DB->query('SELECT idh FROM produit WHERE idp=:idp', array('idp' => $_GET['idp']));
  $panier->add($product[0]->idp);
} 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
 <?php include("head.php")?>
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
            <li class="nav-item active"><a href="famille.php" class="nav-link">Familles</a></li>
            <li class="nav-item"><a href="hotels.php" class="nav-link">Hotels</a></li>
            <li class="nav-item"><a href="billett.php" class="nav-link">Billets</a></li>
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
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil</a></span> <span>Familles</span></p>
              <h1 class="mb-3">Contacter des familles</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row">
        <?php $menu = $DB->query('SELECT * FROM famille'); ?>
<?php foreach ($menu as $product): ?>
  <div class="col-md-6 col-lg-1 ftco-animate  height-4">
  </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="blog-entry  height-4">
              <a href="" class="block-20 height-4" style="background-image: url('images/<?php echo $product->imagef; ?>');">
              </a>
              <div class="text p-4">
                <div class="meta">
                <h3 class="heading"><a href="#"><?php echo $product->nomf; ?> <?php echo $product->prenomf; ?> </a></h3>
                <h5><?php echo $product->agef; ?> ans</h5>
                  <div ><h6 href="#"><?php echo $product->adressef; ?></h6></div>
                  <div><h6 href="#">, <?php echo $product->lieuf; ?></h6></div>
                </div>
                <p class="clearfix">
                  <a href="detailfamille.php?idf=<?php echo $product->idf; ?>" class="float-left">Affiche plus ..</a>
                  </p>
              </div>
            </div> 
          </div>
          <?php endforeach ?>
       </div>
    </section>
    <footer class="ftco-footer ftco-bg-dark ftco-section">
     <?php include("footer.php")?>
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