<html>

<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <title>Click Market</title>
<!-- Core Stylesheet -->
<link href="site/style.css" rel="stylesheet">
<!-- Responsive CSS -->
<link href="css/responsive/responsive.css" rel="stylesheet">
</head>
<body>
	  <div class="container">
<form method="POST" action="insertpub.php" >

    <h1 style="background-color: chocolate;"class="p-3 mb-2 text-white">Ajouter une publicité </h1>
    <hr>

     <label for="categorie"><b>Nom publicité :</b></label>
    <input class="form-control" type="text" placeholder="nom de publicité " name="nompub" required>
       <br>
 
<input style="background-color: chocolate;" class="btn text-white" type="submit"  value="Ajouter " >
</form>  
<a href="affichepub.php"><button name="retour" class="btn btn-dark" value="Retour">Retour</button></a>
 </div>
</body>
</html>