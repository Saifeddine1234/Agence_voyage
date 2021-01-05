
<?php
require 'db.class.php';
$DB = new DB();
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
            <li class="nav-item active"><a href="hotels.php" class="nav-link">Hotels</a></li>
            <li class="nav-item"><a href="billett.php" class="nav-link">Billets</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="compte.php" class="nav-link">Compte</a></li>
         
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    <section class="home-slider owl-carousel" height="40">
  <div class="slider-item" style="background-image: url('images/bg.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil</a></span> <span>Hotels</span></p>
              <h1 class="mb-3">Réservation des Hotels</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
        <div class="col-lg-4 sidebar">
            <div class="sidebar-box ftco-animate">
              <div class="search-tours bg-light p-4">
                <h3>Recherche </h3>
                <form action="recherche.php" method="post">
                  <div class="fields">
                    <div class="row flex-column">
                    <div class="select-wrap col-sm-12 group mb-4">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="lieu" id="" class="form-control">
                          <option value="Tunisie">Tunisie</option>
                          <option value="Italie">Italie</option>
                          <option value="France">France</option>
                          <option value="Espagne">Espagne</option>
                          <option value="Turkey">Turkey</option>
                          <option value="Grece">Grece</option>
                        </select>
                      </div>
                      <div class="check-in col-sm-12 group mb-4"><input type="text" name="datee" id="checkin_date" class="form-control" placeholder="Date entrée"></div>

                      <div class="check-out col-sm-12 group mb-4"><input type="text" name="dates"id="checkout_date" class="form-control" placeholder="Date sortie"></div>
                     
                      <div class="col-sm-12 group mb-3">
                        <input type="submit" class="search-submit btn btn-dark" name="Rechercher" value="Rechercher">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <?php
            if(isset($_GET['lieu'])){ ?>
            <?php $men = $DB->query("SELECT * FROM hotel WHERE lieuh='".$_GET['lieu']."'"); ?>
  <?php foreach ($men as $product): ?>
              <div class="col-md-6 col-lg-12 mb-4">
                <a href="detailhotel.php?idh=<?php echo $product->idh; ?>" class="block-5" style="background-image: url('images/<?php echo $product->imageh; ?>');">
                  <div  class = "text">
                  <div class="container">
                   <div class="row">
                   <div class="col-lg-8 ">
    <h3 class="heading"><?php echo $product->nomh; ?></h3>
                    <span class="price"><?php echo $product->prixh; ?>DT/nuit</span>
                    <div class="post-meta">
                      <span><?php echo $product->adresseh; ?></span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span><?php echo $product->etoile; ?> etoiles</span></p>
                  </div> 
                  <div class="col-lg-4 align-bottom" >
             <h2 style="background-color:#E67300;text-align:center;height:40px;" class="heading align-buttoms active">
                 Détail
             </h2>
                  </div>     
                 </div>
                </div>
               </div>
             </a>
              </div>
  <?php endforeach; ?> 
 <?php }else{ ?>
            <?php $menu = $DB->query("SELECT * FROM hotel"); ?>
  <?php foreach ($menu as $product): ?>
              <div class="col-md-6 col-lg-12 mb-4">
                <a href="detailhotel.php?idh=<?php echo $product->idh; ?>" class="block-5" style="background-image: url('images/<?php echo $product->imageh; ?>');">
                  <div  class = "text">
                  <div class="container">
                   <div class="row">
                   <div class="col-lg-8 ">
    <h3 class="heading"><?php echo $product->nomh; ?></h3>
                    <span class="price">A partir de <?php echo $product->prixh; ?> DT/nuit</span>
                    <div class="post-meta">
                      <span><?php echo $product->adresseh; ?></span>
                    </div>
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span> <span><?php echo $product->etoile; ?> etoiles</span></p>
                  </div> 
                  <div class="col-lg-4 align-bottom" >
             <h2 style="background-color:#E67300;text-align:center;height:40px;" class="heading align-buttoms active">
                 Détail
             </h2>
                  </div>     
                 </div>
                </div>
               </div>
             </a>
              </div>
  <?php endforeach; 
 } ?> 
 

            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
    <?php include("footer.php");?>
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