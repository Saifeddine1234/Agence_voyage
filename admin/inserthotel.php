<?php
include_once ("connexion.inc.php");
$reqt= "INSERT INTO hotel values (NULL,'".$_POST['lieuh']."','".$_POST['adresseh']."','".$_POST['prixh']."','".$_POST['imageh']."','".$_POST['etoileh']."','".$_POST['desch']."','".$_POST['nomh']."')";
$res=mysqli_query($conn,$reqt);
if ($res==1){
	header("Location: affichehotel.php");
}
else echo ("erreur");
?>



