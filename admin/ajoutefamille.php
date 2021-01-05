<html>
<head>
   <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Escalada voyage</title>
    <!-- Core Stylesheet -->
    <link href="site/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">
</head>
<body >
<form method="POST" action="insertfamille.php" >
    <div class="container" style="align:'center';width:70%;">
    <h1 style="background-color: chocolate;" class="p-3 mb-2 text-white">Inserer une personne</h1>
    <br/>
<label for="nom"><b>Nom:</b></label>
    <input class="form-control" type="text" placeholder="nom " name="nomf" required>
<br>
<label for="nom"><b>Prénom:</b></label>
    <input class="form-control" type="text" placeholder="prénom " name="prenomf" required>
<br>
<label for="nom"><b>Age:</b></label>
    <input class="form-control" type="text" onkeypress="isInputNumber(event)" placeholder="age" name="agef" required>
<br>
<label for="nom"><b>Lieu :</b></label>
<br>
<?php
include_once("connexion.inc.php");
$req="Select * from pays";
$res= mysqli_query($conn,$req);
echo"<select class='form-control'  name='lieuf'>";
while(($raw =mysqli_fetch_array($res,MYSQLI_NUM))!=null)    
  { echo "<option>".$raw[1]."</option>";} 
?> 
</select> 
<label for="desc"><b>Adresse :</b></label>
    <input class="form-control" placeholder="Adresse.."  name="adressef"/>
<br>
<label for="nom"><b>Image:</b></br></label>
    <input class="form-control" type="text" placeholder="lien d'image ici.." name="imagef" required>
  <br>
    <label for="nom"><b>Période par jours:</b></br></label>
    <input class="form-control" type="text" onkeypress="isInputNumber(event)" placeholder="Periode de travail" name="periodef" required>
  <br/>
  <label for="nom"><b>Travail:</b></br></label>
    <input class="form-control" type="text" placeholder="travail demander .." name="travailf" required>
 <br>
  <label for="nom"><b>Nombre d'heurs par jours :</b></label>
    <input class="form-control" type="text"  onkeypress="isInputNumber(event)" placeholder="nombre d'heurs.." name="horairef" required>
  <br>
  <label for="nom"><b>Description:</b></label>
    <input class="form-control" type="text" placeholder="description .. " name="descf" required>
<br>

 
    <br> 

<br/>
<br>
<br>
 
    <input style="background-color: chocolate;" type="submit" class="btn text-white" value="Ajouter" >
  <a href='affichefamille.php'><input  class="btn btn-secondary" type=button value=retour></a>
</form>


</body>
<?php include('number.php') ?>
</html>