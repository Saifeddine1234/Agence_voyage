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
            <li class="nav-item"><a href="billett.php" class="nav-link">Billets</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item active"><a href="compte.php" class="nav-link">Compte</a></li>
         
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
              <h1 class="mb-3">Login</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Login</h2>
          </div>
        </div>
        <form method="POST" action="registre.php" >
 <div classe="mt-50 ml-50 mr-50 justify-content-center">
  <div class="row">
<div class="col-12">
    <label for="Pseudo"><b>Email</b></label><br>
    <input type="email" class="form-control" placeholder="Entrer votre email" name="login" required>
    
 <br>
</div>
<div class="col-12">
    <label for="psw"><b>Mot de passe</b></label><br>

    <input type="password" class="form-control" placeholder="Entrer Le Mot De Passe" name="mdp" required>
  
<br>
</div>

    <br/>
<div class="col-12"> 
    <a href="signup.php"> <input type="submit" class="btn  dorne-btn " name="connexion" value="Connexion" ></a>
</div>
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
  <script type="text/javascript">

// SELECTING ALL TEXT ELEMENTS
var firstname = document.forms['vform']['nomc'];
var lastname = document.forms['vform']['prenomc'];
var login = document.forms['vform']['login'];
var password = document.forms['vform']['mdp'];
var emailc = document.forms['vform']['num2'];
var tel = document.forms['vform']['num1'];
var emailc = document.forms['vform']['emailc'];
var tel = document.forms['vform']['telc'];

// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var prenom_error = document.getElementById('prenom_error');
var login_error = document.getElementById('login_error');
var password_error = document.getElementById('password_error');
var emailc_error = document.getElementById('emailc_error');
var tel_error = document.getElementById('tel_error');
var num1_error = document.getElementById('num1_error');
var num2_error = document.getElementById('num2_error');
// SETTING ALL EVENT LISTENERS
firstname.addEventListener('blur', nameVerify, true);
lastname.addEventListener('blur', prenomVerify, true);
login.addEventListener('blur', loginVerify, true);
tel.addEventListener('blur', telVerify, true);
emailc.addEventListener('blur', emailcVerify, true);
password.addEventListener('blur', passwordVerify, true);
num1.addEventListener('blur', num1Verify, true);
num2.addEventListener('blur', num2Verify, true);
// validation function



function Validate() {
 


  // validate username
  if (firstname.value==""){
    firstname.style.border = "1px solid red";
    document.getElementById('name_div').style.color = "red";
    name_error.textContent = " remplir le champ Nom";
    firstname.focus();
    return false;
  }
  // validate lastname
   if (lastname.value=="") {
    lastname.style.border = "1px solid red";
    document.getElementById('prenom_div').style.color = "red";
    prenom_error.textContent = " remplir le champ Prénom";
    lastname.focus();
    return false;
  }
 // validate num1
 if (num1.value==""){
    num1.style.border = "1px solid red";
    document.getElementById('num1_div').style.color = "red";
    num1_error.textContent = " remplir le champ numero";
    num1.focus();
    return false;
  }
  // validate num1
 if (num2.value==""){
    num2.style.border = "1px solid red";
    document.getElementById('num2_div').style.color = "red";
    num2_error.textContent = " remplir le champ numero";
    num2.focus();
    return false;
  }

  // validate pseudo
   if (login.value =="") {
    login.style.border = "1px solid red";
    document.getElementById('login_div').style.color = "red";
    login_error.textContent = " remplir le champ Pseudo";
    pseudo.focus();
    return false;
  }
  // validate password
     if (password.value =="" ) {
    password.style.border = "1px solid red";
    document.getElementById('password_div').style.color = "red";
    password_error.textContent = " remplir le champ de mot de passe";
    return false;
  }

   // validate email
 if(vform.emailc.value=="")
{
  vform.emailc.style.border = "1px solid red";
    document.getElementById('emailc_div').style.color = "red";
  emailc_error.textContent = " remplir le champ Email";
  vform.emailc.focus();  
  return false;
} 

var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

if (reg.test(vform.emailc.value) == false) 
{
  vform.emailc.style.border = "1px solid red";
    document.getElementById('emailc_div').style.color = "red";
  emailc_error.textContent = "forme incorrect";
  vform.emailc.focus();  
  return false;
}

}

function nameVerify() {
  if (firstname.value !=="") {
   firstname.style.border = "1px solid #5e6e66";
   document.getElementById('name_div').style.color = "#5e6e66";
   name_error.innerHTML = "";
   return true;
  }
}
function prenomVerify() {
  if (lastname.value !=="") {
   lastname.style.border = "1px solid #5e6e66";
   document.getElementById('prenom_div').style.color = "#5e6e66";
   prenom_error.innerHTML = "";
   return true;
  }
}
function loginVerify() {
  if (login.value !=="") {
   login.style.border = "1px solid #5e6e66";
   document.getElementById('login_div').style.color = "#5e6e66";
   login_error.innerHTML = "";
   return true;
  }
}

function passwordVerify() {
 if (password.value !=="" ) {
    password.style.border = "1px solid #5e6e66";
    document.getElementById('password_div').style.color = "#5e6e66";
    password_error.innerHTML ="";
    return true;
  }
}
function num1Verify() {
 if (num1.value !=="" ) {
    num1.style.border = "1px solid #5e6e66";
    document.getElementById('num1_div').style.color = "#5e6e66";
    num1_error.innerHTML ="";
    return true;
  }
}
function num2Verify() {
 if (num2.value !=="" ) {
    num2.style.border = "1px solid #5e6e66";
    document.getElementById('num2_div').style.color = "#5e6e66";
    num2_error.innerHTML ="";
    return true;
  }
}
function emailcVerify() {
  if (reg.test(vform.emailc.value) == true) 
{
   vform.emailc.style.border = "1px solid #5e6e66";
    document.getElementById('emailc_div').style.color = "#5e6e66";
    emailc_error.innerHTML = "";
    return true;
  }
}
</script>

  </body>
</html>