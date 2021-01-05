<?php
require 'db.class.php';
?>
<?php
        include_once("connexion.inc.php");
$req="Select * from famille where 
idf=".$_GET['idf'];
$res= mysqli_query($conn,$req);
$raw =mysqli_fetch_array($res,MYSQLI_NUM);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
   <?php include("head.php");?>
   <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto&family=Yellowtail&display=swap" rel="stylesheet">  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" style="color:#582900;" href="index.php"><img height="80" weight="130" src="images/logo.png">Escalada Voyage</a>       
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Acceuil</a></li>
            <li class="nav-item active"><a href="famille.php" class="nav-link">Familles</a></li>
            <li class="nav-item "><a href="hotels.php" class="nav-link">Hotels</a></li>
            <li class="nav-item"><a href="billett.php" class="nav-link">Billets</a></li>
            <li class="nav-item "><a href="contact.php" class="nav-link">Contact</a></li>
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
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="about-author d-flex pt-8">
              <div class="bio align-self-md-center mr-4">
                <img style="height:500px;width:500px;" src="images/<?php echo $raw[6] ; ?>" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc align-self-md-center">
<section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9 mb-4">
          <div class="col-md-6 pr-md-5 flex-column">
            <div class="row d-block flex-row">
              <h2 class="h4 mb-4" style="font-family: 'Yellowtail', cursive;font-size:40px;" ><?php echo $raw[1] ; ?>  <?php echo $raw[2] ; ?></h2>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><a style="color:#856404;font-size:20px;">Age : </a><span><?php echo $raw[3];?> Ans</span> </p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                <p class="mb-0"><a style="color:#856404;font-size:20px;">Adresse : </a><span><?php echo $raw[5];?> , <?php echo $raw[4];?></span> </p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                <p class="mb-0"><a style="color:#856404;font-size:20px;">Description : </a><span><?php echo $raw[10];?></span> </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 pr-md-5 flex-column">
            <div class="row d-block flex-row">              
              <div class="col mb-3 d-flex py-4" style="background: white;">
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                <p class="mb-0"><a style="color:#856404;font-size:20px;">Travail demandé : </a><span><?php echo $raw[8];?></span> </p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                <p class="mb-0"><a style="color:#856404;font-size:20px;">Nombre des jours : </a><span><?php echo $raw[7];?> Jours</span> </p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                <p class="mb-0"><a style="color:#856404;font-size:20px;">Nombre d'heures par jour: </a><span><?php echo $raw[9];?> Heures</span> </p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 " style="background: white;">
                <div class="align-self-center">
                <div class="container">
        <div class="row block-9 mb-4">
          <div class="col-md-6 pr-md-5 flex-column">
          <a href="hotelpage1.php?idf=<?php echo $raw[0];?>" ><div style="background-color:#856404;"class="btn btn-dark">Contacter</div>
</div>
<div class="col-md-6 pr-md-5 flex-column">
<a href="famille.php" ><div style="background-color:#856404;" class="btn btn-dark">Retour </div></a>

</div>

                </div>
              </div>
        </div>
      </div>
    </section>        
     </div>
            </div>

    
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