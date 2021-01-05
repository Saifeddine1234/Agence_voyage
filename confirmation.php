
<?php 
require 'db.class.php';
$DB = new DB();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
     <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" type="text/css" href="style1.css">
 
       <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.js"></script>
    <title>Escalada Voyage</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
<section  class="dorne-about-area section-padding-0-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div  class="about-content ">
                    <br>
                        <h2  style="color:red;"> </h2>
                        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2>Réponse des demandes de logement</h2>
          </div>
        </div>
                        <?php 
$link = mysqli_connect('localhost','root','','voyage');
$reqt = "SELECT * FROM reservefamille WHERE emailc='".($_GET['email'])."'";
$rest= mysqli_query($link,$reqt);
while(($raw =mysqli_fetch_array($rest,MYSQLI_NUM))!=null){
    
?>

                        <?php 
 $menu = $DB->query("SELECT * FROM famille WHERE idf=".$raw[1].""); ?>
                        <?php foreach ($menu as $product): 
                            ?>
               
                           <h5><b style="color:#cc6600;">Nom : </b><span> <?php echo $product->nomf; ?> <?php echo $product->prenomf; ?></span></h5>   
                           <h5><b style="color:#cc6600;">Lieu : </b><span> <?php echo $product->adressef; ?> <?php echo $product->lieuf; ?></span></h5>   
                           <h5><b style="color:#cc6600;">Travail : </b><span> <?php echo $product->travailf; ?> </span></h5>   
                           <h5><b style="color:#cc6600;">Periode : </b><span> <?php echo $product->periodef; ?> Jours</span></h5>   
                            <?php 
                            if($raw[12] == '0'){
                                echo "<h4 style='color:#ff6600;' >En attende</h4> <br>" ;
                            } if($raw[12] == '1'){
                                echo "<h4 style='color:#00e600;' >Accepter</h4> <br>" ;
                            }if($raw[12] == '2'){
                                echo "<h4 style='color:#ff0000;' >Refuser</h4> <br>" ;
                            }?>
                                                  <?php endforeach; ?>
                        <?php } ?>

                                                  <br>
                                                  <br>
                     <a href="index.php"><button style="heigth:30px;width:100px;" class="btn btn-dark" value=""> return  </button></a>  
                 </div>
                </div>
            </div>
        </div>
    </section>
</body>