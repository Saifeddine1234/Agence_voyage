<?php
include_once ("connexion.inc.php");
$reqt= "INSERT INTO billet values (NULL,'".$_POST['nomb']."','".$_POST['prixb']."','".$_POST['imageb']."')";
$res=mysqli_query($conn,$reqt);
if ($res==1){
	header("Location: affichebillet.php");
}
else echo ("erreur");
?>



