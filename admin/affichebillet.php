<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Escalada Voyage</title>
<!-- Core Stylesheet -->
<link href="site/style.css" rel="stylesheet">
<!-- Responsive CSS -->
<link href="css/responsive/responsive.css" rel="stylesheet">
</head>
<div >
<center><?php
include_once("connexion.inc.php");
$req="Select * from billet";
$res= mysqli_query($conn,$req);
echo"<table style='width:80%;margin-top: 50px;'class='table table-striped' align='center' border=2><tr><th>id Billet </th><th>Destination de vol</th><th>Prix de billet</th><th>Supprimer</th>";
while(($raw =mysqli_fetch_array($res,MYSQLI_NUM))!=null)
	{ echo "<tr><td>".$raw[0]."</td><td>".$raw[1]."</td><td>".$raw[2]."</td><td><a href=supprimerbillet.php?idb=".$raw[0].">supprimer</a></td></tr>";
	}
	echo"<br><a href='aceuill.php'><input  class='btn btn-secondary' type='button' value='retour'></a>";

  ?></center>
  	<a href='ajoutebillet.php'><input type=button class="btn btn-dark" value="Ajouter une billet"></a>

  
</div>

