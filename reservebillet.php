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
            <li class="nav-item"><a href="hotels.php" class="nav-link">Hotels</a></li>
            <li class="nav-item active"><a href="billett.php" class="nav-link">Billets</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item "><a href="compte.php" class="nav-link">Compte</a></li>
         
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
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil</a></span> <span>Compte</span></p>
              <h1 class="mb-3">Reservation des billets</h1>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          </div>
        </div>
        <section class="ftco-section">
        <form method="POST" action="insertbillet.php"  name="vform"  >
      <div class="container">
        <div class="row">
        <div class="col-lg-6 sidebar">
        <h2 style="font-size:25px;"><b> Information de voyage :</b></h2> 
            <div class="sidebar-box ftco-animate">
            <div class="row">
            <?php 
$link = mysqli_connect('localhost','root','','voyage');
$reqt = "SELECT * FROM billet WHERE idb='".($_GET['idb'])."'";
$rest= mysqli_query($link,$reqt);
$raw =mysqli_fetch_array($rest,MYSQLI_NUM);
?>
<div class="col-12">
 <div id="login_div">
 <div class="col-12">
  <label for="nom"><b >Classe et Bagage :</b> </label><div class="ml-5" id="name_error"></div>
  <div class="col-12">
<div class="form-check">
  <input class="form-check-input" type="radio" value="Classe Economie et sans bagage Prix :  <?php echo $raw[2];?> DT" name="exampleRadios" id="exampleRadios1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Classe Economie et sans bagage     Prix : <b style="color:red;"> <?php echo $raw[2];?> DT</b>  
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="Classe Economie et avec bagage(+30 Kg)   Prix : <?php echo $raw[2]+70;?> DT ">
  <label class="form-check-label" for="exampleRadios2">
  Classe Economie et avec bagage(+30 Kg)   Prix  <b style="color:red;"> <?php echo $raw[2]+70;?> DT</b>  
  </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="Classe Affaire et sans bagage  Prix : <?php echo $raw[2]+($raw[2]*0.5);?> DT">
  <label class="form-check-label" for="exampleRadios3">
  Classe Affaire et sans bagage  Prix : <b style="color:red;"> <?php echo $raw[2]+($raw[2]*0.5);?> DT</b>  

  </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="  Classe Affaire et avec bagage (+30 Kg) Prix : <?php echo $raw[2]+($raw[2]*0.4)+70;?> DT 
">
  <label class="form-check-label" for="exampleRadios2">
  Classe Affaire et avec bagage (+30 Kg) Prix : <b style="color:red;"> <?php echo $raw[2]+($raw[2]*0.4)+70;?> DT</b>  
  </label>
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="Classe Primere  Prix : <?php echo $raw[2]+($raw[2]*0.6);?> DT 
">
  <label class="form-check-label" for="exampleRadios3">
  Classe Primere  Prix : <b style="color:red;"> <?php echo $raw[2]+($raw[2]*0.6);?> DT</b>  
  </label>
  </div>
</div>
<div class="col-12">
  <label for="nom"><b>Temps de vol:</b> <b style="color:red;"> *</b></label><div class="ml-5" id="name_error"></div>
   <select name="daterb"  class="form-control" >
    <option value="depart 08H arrivee 11H">depart 08H arrivee 11H </option>
    <option value="depart 13H arrivee 16H">depart 13H arrivee 16H</option>
    <option value="depart 00H arrivee 03H">depart 00H arrivee 03H</option>     
  </select> 
  </div>
  <div class="col-12">
    <label for="prenom"><b>Jours de vol :</b> <b style="color:red;"> *</b></label><div class="ml-5" id="prenom_error"></div>
    <div id="col-12">  
    <input type="text" name="jourrb" id="checkin_date" class="form-control" placeholder="Date arrivée">
   <br>
    <input type="text" value="<?php echo $_GET['idb'];?>" name="idb" class="form-control" readonly>

</div>
</div>
<br>
</div>
 </div>
 </div>
 </div>
 </div>
 </div>
          <div class="col-lg-6">
            <div class="row">
            </br>
            <h3>Information Personnel :</h3> 
              <div class="col-md-12 col-lg-12 mb-4 ">
              <div class="row">
<div class="col-6">
    <div id="name_div">
  <label for="nom"><b>Nom</b> <b style="color:red;"> *</b></label><div class="ml-5" id="name_error"></div>
    <input type="text" placeholder="nom" class="form-control" name="nomrb"  required> 
</div>
</div>
<div class="col-6">
<div id="prenom_div">
    <label for="prenom"><b>Prénom</b> <b style="color:red;"> *</b></label><div class="ml-5" id="prenom_error"></div>
    <input type="text" placeholder="Prénom" class="form-control" name="prenomrb" required>
  </div>
</div>
<div class="col-6">
 <div id="login_div">
    <label for="Pseudo"><b>Date de naissance</b> <b style="color:red;"> *</b></label><div class="ml-5" id="login_error"></div>
    <input type="text" name="datenrb" id="checkin_date" class="form-control" placeholder="Date de naissance ..">
 </div>
</div>
<div class="col-6">
<div id="password_div">
    <label for="password"><b>Adresse</b><b style="color:red;"> *</b></label><div class="ml-5" id="password_error"></div>
    <input type="text" placeholder="Adresse .." class="form-control" name="adresserb" required>
    
      </div>
    </div>
<br>
<div class="col-12">
 <div id="login_div">
    <label><b>numero de Telephone</b> <b style="color:red;"> *</b></label><div class="ml-5" id="login_error"></div>
    <input type="number" placeholder="numero de telephone" name="telrb" class="form-control" required>
 </div>
</div>
<br>
<div class="col-12">
<div id="emailc_div">
    <label for="mail"><b>Email</b> <b style="color:red;"> *</b></label><div class="ml-5" id="emailc_error"></div>
    <input  type="email" placeholder="E-mail" class="form-control" name="emailrb" required>
      </div>
  </div>
<br>
<br>

<div class="col-12">
<br>
<br>
    <input type="submit" class="btn  btn-dark " name="reservation" value="Reservation" onclick=" return Validate(); ">
  </div>
</div>
</div>

            </div>
          </div>
        </div>
      </div>
      </form>

    </section>
       
 

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