<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Escalada Voyage</title>
    <!-- Core Stylesheet -->
    <link href="site/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
</head>
<body>
<div class="container">
<form name="forme" Method="POST" action="traitementmodifhotel.php">

<?php
include_once("connexion.inc.php");
$req="select * FROM hotel WHERE idh=".$_GET['idh'];
$res=Mysqli_query($conn,$req) or die (mysqli_error($conn)); 
$raw=Mysqli_fetch_array($res,MYSQLI_NUM);
$nomh=$raw[7];
$prixh=$raw[3];
$urlh=$raw[4];
$adresseh=$raw[2];
$etoileh=$raw[5];
$desch=$raw[6];
$idh=$raw[0];

?>
<div class="container" style="align:'center';padding:10px;margin:10px;width:70%;">

<h1 class="p-3 mb-2 bg-success text-white">modifier Hotel</h1>
<h5>id Hotel</h5><input type="text" name="idh" class="form-control" value="<?php echo $idh ;?>" readonly>
<h5>nom Hotel</h5><input type="text" name="nomh" class="form-control" value="<?php echo $nomh ;?>">
<h5>prix hotel </h5><input type="number" name="prixh" class="form-control" value="<?php echo $prixh ;?>">
<h5>image </h5><input type="text" name="urlh" class="form-control" value="<?php echo $urlh ;?>">
<h5>Adresse Hotel </h5><input type="text" name="adresseh" class="form-control" value="<?php echo $adresseh ;?>">
<h5>etoile </h5><input type="number" name="etoileh" class="form-control" value="<?php echo $etoileh ;?>">
<h5>description </h5><textarea type="text" name="desch"  class="form-control" ><?php echo $desch ;?></textarea>
<input style="margin:30px;"class="btn btn-success" type="submit" value="modifier">
<a href='afficheproduit.php'><input  class="btn btn-secondary" type=button value=retour></a>



</div>
</form>
</div>

</body>
</html>