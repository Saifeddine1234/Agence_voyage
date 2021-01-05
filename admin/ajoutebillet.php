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
<form method="POST" action="insertbillet.php" >
    <div class="container" style="align:'center';width:70%;">
    <h1 style="background-color: chocolate;"  class="p-3 mb-2 text-white">Inserer une distination</h1>
    <br/>
<label for="nom"><b>Nom de distination :</b></label>
    <input class="form-control" type="text" placeholder="nom de destination" name="nomb" required>
<br>
<label for="nom"><b>Prix de destination :</b></label>
    <input class="form-control" type="text" onkeypress="isInputNumber(event)" placeholder="prix en DT" name="prixb" required>
<br>
<label for="nom"><b>image de destination :</b></label>
    <input class="form-control" type="text" placeholder="lien d'image ici.." name="imageb" required>
  <br/>
<br>
<br>
 
    <input style="background-color: chocolate;"  type="submit" class="btn text-white" value="Ajouter" >
  <a href='affichebillet.php'><input  class="btn btn-secondary" type=button value=retour></a>
</form>


</body>
<?php include('number.php') ?>
</html>