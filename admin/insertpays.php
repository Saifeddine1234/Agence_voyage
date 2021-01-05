<?php
include_once ("connexion.inc.php");
$reqt= "INSERT INTO pays values (NULL,'".$_POST['nompays']."','".$_POST['urlpays']."')";
$res=mysqli_query($conn,$reqt);
$id=Mysqli_Insert_id($conn);
if ($res==1){
	header("Location: affichepays.php");
}
else echo ("erreur");
?>