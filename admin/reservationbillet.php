<?php
include_once("connexion.inc.php");
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
<?php include('head.php'); ?>  <body>
    <!-- END slider -->
    <section class="ftco-section contact-section">
      <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Les reservations des billets</h2>
          </div>
        </div>
        <div class="row block-9 mb-4">

<?php
$req="Select * from reservebillet ";
$res= mysqli_query($conn,$req);
?>
           <?php

              while(($raw=mysqli_fetch_array($res,MYSQLI_NUM))!=null){;
                $re="Select * from billet where idb='".$raw[1]."'";
$rest= mysqli_query($conn,$re);
$r=mysqli_fetch_array($rest,MYSQLI_NUM);

?>

                <div class="col-md-6 pr-md-5 flex-column">
              
     <div class="row d-block flex-row">
  
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                  <p class="mb-0"><a style="color:#856404;font-size:20px;">Nom : </a><span><?php echo $raw[4];?> <?php echo $raw[5];?></span> </p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                <p class="mb-0"><a style="color:#856404;font-size:20px;">date de naissance : </a><span><?php echo $raw[6];?></span> </p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                <p class="mb-0"><a style="color:#856404;font-size:20px;">Email : </a>
                <span><?php echo $raw[7];?></span> </p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                <p class="mb-0"><a style="color:#856404;font-size:20px;">Telephone : </a><span><?php echo $raw[8];?></span> </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 pr-md-5 flex-column">
            <div class="row d-block flex-row">              
            <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
     
                  <p class="mb-0"><a style="color:#856404;font-size:20px;">Destination : </a><span><?php echo $r[1];?></span> </p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                <p class="mb-0"><a style="color:#856404;font-size:20px;">Détail : </a><span><?php echo $raw[2];?></span> </p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                <p class="mb-0"><a style="color:#856404;font-size:20px;">Date : </a><span><?php echo $raw[10];?></span> </p>
                </div>
              </div>
              <div class="col mb-3 d-flex py-4 border" style="background: white;">
                <div class="align-self-center">
                <p class="mb-0"><a style="color:#856404;font-size:20px;">Temps de vol : </a><span><?php echo $raw[2];?>  </span> </p>
                </div>
              </div>
              </div>
              </div>  
              <div class="col-md-6 pr-md-5 flex-column">
              <a href="dropbillet.php?idrh=<?php echo $raw[0];?>" ><div style="background-color:#856404;" class="btn btn-dark">Supprimer </div></a>


</div> 
               <div class="col-md-6 pr-md-5 flex-column">
              
</div>
<br>
    <br>
    <br>
    <br>
    
              <?php }?>
         
              </div>
        </div>
       <center><a href="aceuill.php" ><div style="background-color:#856404;" class="btn btn-dark">Retour </div></a>
</center> 
      </div>

    </section>
 
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