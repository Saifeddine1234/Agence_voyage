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
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" height="40" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" style="color:#582900;" href="index.php"><img height="80" weight="130" src="images/logo.png">Escalada Voyage</a>       
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <h6 style="color:#582900;"><img height="20" weight="20" src="images/menu.png"> Menu</h6> 
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Accueil</a></li>
            <li class="nav-item"><a href="famille.php" class="nav-link">Familles</a></li>
            <li class="nav-item"><a href="hotels.php" class="nav-link">Hotels</a></li>
            <li class="nav-item"><a href="billett.php" class="nav-link">Billets</a></li>
            <li class="nav-item "><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="compte.php" class="nav-link">Compte</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg.jpg');">
        <div class="overlay"></div>
        <div class="container">
        </br>
</br>
          <div class="row slider-text align-items-center">
            <div class="col-md-12 col-sm-12 ftco-animate">
            <div class="ftco-section-search">
      <div  class="">
        <div class="row">
          <div class="col-md-12 tabulation-search">
            <div class="element-animate">
              <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link p-3 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><span></span> Hotel</a>
              </div>
            </div>
            
            <div style="background: #aa7025;padding:20px; " class="tab-content py-5" id="">
              <div   class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div  class="block-17">
                  <form action="recherche.php" method="post" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">
                    <div class="textfield-search one-third"><h5 style="color:#fff;">Rechercher des hotels :</h5>
                    </div>

                      <div style="color:#000;"class="textfield-search one-third">
                      <select name="lieu" id="" class="form-control">
                          <option style="color:#000;"value="Italie">Italie</option>
                          <option style="color:#000;" value="France">France</option>
                          <option style="color:#000;" value="Turkey">Turkey</option>
                          <option style="color:#000;" value="Espagne">Espagne</option>
                          <option style="color:#000;" value="Tunisie">Tunisie</option>
                          <option style="color:#000;" value="Grece">Grece</option>
                        </select></div>
                      <div class="check-in one-third"><input type="text" id="checkin_date" name="datee" class="form-control" placeholder="Date entrée"></div>
                      <div class="check-out one-third"><input type="text" id="checkout_date" name="dates"  class="form-control" placeholder="Date sortie"></div>
                    </div>
                  <input type="submit"style="color:#aa7025;" class="btn btn_secondaire" name="Rechercher" value="Rechercher">
                  </form>
                </div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>

            </div>
          </div>
        </div>
      </div> 
    </section>
    <section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
 
          <div class="img col-sm-6 col-lg-6"style="background-image: url('images/logo2.png');  padding: 35px;">
         
          
            <a href="images/fb.png" class="button popup-vimeo"><span class="ion-ios-play"></span> </a>

          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
              
              <h3>Bienvenue chez Escalada Voyage depuis 2020</h3>
              <p>Escalada Voyage est au service de ses clients pour toutes leurs reservation ou réclamation. Réservez votre place sur Escalada Voyage 
 contacter des familles étrangères pour obtenir de soutiens dans tous les autres pays. </p> </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section" style="background-color: #d38a3838;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(images/aide.jpg);"></a>
            <div class="text text-center">
              <h2>Contacter familles</h2>
              <a href="famille.php" class="read btn btn-dark">Commencer</a>
            </div>
          </div>
          <div class="col-lg-4 promo ftco-animate">
            <a href="" class="promo-img mb-4" style="background-image: url(images/hotel-3.jpg);"></a>
            <div class="text text-center">
              <h2>Réserver Hotels</h2>
              <a href="hotels.php" class="read btn btn-dark">Commencer</a>
            </div>
          </div>
          <div class="col-lg-4 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(images/billet.jpg);"></a>
            <div class="text text-center">
              <h2>Billet d'avion</h2>
              <a href="" class="read btn btn-dark">Commencer</a>
            </div>
          </div>
  
          </div>
        </div>
      </div>
    </section>

    <section class="home-slider owl-carousel">
    <?php $menu = $DB->query('SELECT * FROM pub'); ?>
<?php foreach ($menu as $product): ?>
      <div class="slider-item" style="background-image: url('images/<?php echo $product->lien; ?>');">
        <div class="overlay"></div>
        <div class="container">
        </div>
       </div>   
       </div>  
       <?php endforeach ?> 
            
             
            </div>
          
    </section>
    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Nos services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <img height="80" src="images/familleicon.png">  
            <div class="media-body p-2">
                <h3 class="heading">Familles</h3>
               <p>Chez escalada voyage vous pouvez contacter une famille pour rester chez vous dans la periode proposez</p> </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <img height="80" src="images/hotelicon.png">  
            <div class="media-body p-2">
                <h3 class="heading">Hotels</h3>
               <p>Chez escalada voyage tu peux réserver des hotels à bas prix , On a des offres special pour nos clients</p>   </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <img height="80" src="images/billeticon.png">  
            <div class="media-body p-2">
                <h3 class="heading">Billets</h3>
               <p>Chez escalada voyage tu peux réserver des billets d'avion à bas prix , On a des offres special pour nos clients</p>        </div>
            </div>      
          </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center mb-5 pb-5 ftco-animate">
          <div class="col-md-7 text-center heading-section">
            <h2>Nos Destinations</h2>
          </div>
        </div>
        <div class="row no-gutters">
        <div class="col-md-6 col-lg-4 ftco-animate">
            <a href="hotels.php" class="block-5" style="background-image: url('images/tunisie.png');">
              <div class="text">
                <h1 class="heading">Tunisie</h1>
                <div class="post-meta">
                </div>
                  </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <a href="hotels.php" class="block-5" style="background-image: url('images/france.jpg');">
              <div class="text">
                <h3 class="heading">France</h3>
                <div class="post-meta">
                </div>
                  </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <a href="hotels.php" class="block-5" style="background-image: url('images/italie.jpg');">
              <div class="text">
                <h3 class="heading">Italie</h3>
                <div class="post-meta">
                </div>
                  </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <a href="hotels.php" class="block-5" style="background-image: url('images/espagne.jpg');">
              <div class="text">
                <h3 class="heading">Espagne</h3>
                <div class="post-meta">
                </div>
                  </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <a href="hotels.php" class="block-5" style="background-image: url('images/turkey.jpg');">
              <div class="text">
                <h3 class="heading">Turkey</h3>
                <div class="post-meta">
                </div>
                  </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <a href="hotels.php" class="block-5" style="background-image: url('images/grece.jpg');">
              <div class="text">
                <h3 class="heading">Gréce</h3>
                <div class="post-meta">
                </div>
                  </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <?php include('footer.php'); ?>
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