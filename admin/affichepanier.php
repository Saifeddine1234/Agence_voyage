<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Click Market</title>
<!-- Core Stylesheet -->
<link href="site/style.css" rel="stylesheet">
<!-- Responsive CSS -->
<link href="css/responsive/responsive.css" rel="stylesheet">
</head>
<center><?php
include_once("connexion.inc.php");
$req="Select * from paniier order by idpan";
$res= mysqli_query($conn,$req);
echo"<table style='width:80%;margin-top: 50px;'class='table table-striped' align='center' border=2><tr><th>nom produit</th><th>prix produit </th><th>pseudo</th><th>total</th>";
while(($raw =mysqli_fetch_array($res,MYSQLI_NUM))!=null)
                                 
	{ echo "<tr><td>".$raw[2]."</td><td>".$raw[3]."</td><td>".$raw[5]."</td><td>".$raw[6]."</td></tr>";
	}
  ?>
  <div><a href="aceuill.php"><input  class="btn btn-secondary" type="submit" name="retour" value="Retour"></a>
<a href=suppanier.php><input type="submit" class="btn btn-dark" name="supppanier" value="supprimer panier"></a>
  </div>
  </center>

		